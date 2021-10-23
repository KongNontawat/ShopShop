$(function () {
	$("#sidebar_category").addClass("active");
	$("#loading").show();
	getAllCategory();
	$(document).on("click", "a#btn-edit", function (e) {
		e.preventDefault();
		var id = $(this).data("id");
		$.ajax({
			url: "../../api/category/getCategory.php",
			type: "GET",
			data: { id: id, action: "getCategory" },
		})
			.done((resp) => {
				$("#input-id_category").val(resp.data.id_category);
				$("#input-title").val(resp.data.title);
				$("#input-detail").val(resp.data.detail);
			})
			.fail((resp) => {
				Swal.fire({
					icon: "error",
					title: "เรียกดูข้อมูลไม่สำเร็จ",
					text: "ผิดพลาด เรียกดูข้อมูลไม่สำเร็จ",
					footer: resp.responseJSON.message,
				});
			});
	});

	$(document).on("click", "a#btn-delete", function (e) {
		e.preventDefault();
		var id = $(this).data("id");
		Swal.fire({
			title: "คุณแน่ใจหรือไม่?",
			text: "ข้อมูลของคุณจะถูกลบอย่างถาวร แน่ใจหรือไม่?",
			icon: "warning",
			showCancelButton: true,
			confirmButtonColor: "#3085d6",
			cancelButtonColor: "#d33",
			confirmButtonText: "ใช่, ลบเลย",
		}).then((result) => {
			if (result.isConfirmed) {
				$.ajax({
					url: "../../api/category/deleteCategory.php",
					type: "DELETE",
					data: JSON.stringify({ id_category: id }),
				})
					.done((resp) => {
						Swal.fire({
							icon: "success",
							title: "ลบสำเร็จ",
							text: "ข้อมูลของคุณถูกลบแล้ว",
							showConfirmButton: false,
							timer: 1600,
						});
						getAllCategory();
					})
					.fail((resp) => {
						Swal.fire({
							icon: "error",
							title: "ลบไม่สำเร็จ",
							text: "ผิดพลาด ลบข้อมูลไม่สำเร็จ",
							footer: resp.responseJSON.message,
						});
					});
			}
		});
	});

	$("#form-add-category").submit((e) => {
		e.preventDefault();
		let form = $("#form-add-category")[0];
		let formData = new FormData(form);
		var object = {};
		formData.forEach(function (value, key) {
			object[key] = value;
		});
		$.ajax({
			url: "../../api/category/save_form.php",
			type: "POST",
			data: { data: JSON.stringify(object) },
		})
			.done((resp) => {
				Swal.fire({
					icon: "success",
					title: "บันทึกข้อมูลสำเร็จ",
					showConfirmButton: false,
					timer: 1600,
				});
				getAllCategory();
			})
			.fail((resp) => {
				Swal.fire({
					icon: "error",
					title: "บันทึกข้อมูลไม่สำเร็จ",
					showConfirmButton: false,
					timer: 1600,
				});
			});
	});

	$(document).on("click", "ul.pagination li a", function (e) {
		e.preventDefault();
		var $this = $(this);
		const pagenum = $this.data("page");
		console.log(pagenum);
		$("#currentpage").val(pagenum);
		getAllCategory();
		$this.parent().siblings().removeClass("active");
		$this.parent().addClass("active");
	});

	$("#btn-show-modal-category").click((e) => {
		e.preventDefault();
		let form = $("#form-add-category");
		form[0].reset();
		setTimeout(function () {
			$("#input-title").focus();
		}, 500);
	});

	$(document).on("keyup", "input#search_category", function (e) {
		e.preventDefault();
		var data = $(this).val();
		$.ajax({
			url: "../../api/category/searchCategory.php",
			type: "GET",
			data: { search: data },
		})
			.done((resp) => {
				if (resp.data) {
					let html = ``;
					$.each(resp.data, function (index, value) {
						html += `
						<tr>
              <th class="text-center">${index + 1}</th>
              <td>${value.title}</td>
              <td>${value.detail}</td>
              <td>${value.created_at}</td>
              <td>
                <a href="#!" data-id="${
									value.id_category
								}" id="btn-edit" class="text-secondary me-2" data-bs-toggle="modal" data-bs-target="#modal_save_category"><i class="fas fa-edit"></i></a>
                <a href="#!" data-id="${
									value.id_category
								}" id="btn-delete" class="text-secondary"><i class="fas fa-trash"></i></a>
              </td>
            </tr>
						`;
					});
					$("tbody").html(html);
					$("#loading").fadeOut();
				} else {
					getAllCategory();
				}
			})
			.fail((resp) => {
				Swal.fire({
					icon: "error",
					title: "เรียกดูข้อมูลไม่สำเร็จ",
					text: "ผิดพลาด เรียกดูข้อมูลไม่สำเร็จ",
					footer: resp.responseJSON.message,
				});
			});
	});
});

function getAllCategory() {
	var pageno = $("#currentpage").val();
	$.ajax({
		url: "../../api/category/getAllCategory.php",
		type: "GET",
		data: { action: "getAllCategory", page: pageno },
	})
		.done((resp) => {
			if (resp.data) {
				let html = ``;
				$.each(resp.data, function (index, value) {
					html += `
						<tr>
              <th class="text-center">${index + 1}</th>
              <td>${value.title}</td>
              <td>${value.detail}</td>
              <td>${value.created_at}</td>
              <td>
                <a href="#!" data-id="${
									value.id_category
								}" id="btn-edit" class="text-secondary me-2" data-bs-toggle="modal" data-bs-target="#modal_save_category"><i class="fas fa-edit"></i></a>
                <a href="#!" data-id="${
									value.id_category
								}" id="btn-delete" class="text-secondary"><i class="fas fa-trash"></i></a>
              </td>
            </tr>
						`;
				});
				$("tbody").html(html);
				let totalRows = resp.count.count;
				let totalpages = Math.ceil(parseInt(totalRows) / 15);
				const currentpage = $("#currentpage").val();
				pagination(totalpages, currentpage);
				$("#loading").fadeOut();
				$("#modal_save_category").modal("hide");
			}
		})
		.fail((resp) => {
			console.log("error" + resp);
		});
}
