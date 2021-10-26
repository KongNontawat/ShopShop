$(function () {
	$("#sidebar_category").addClass("active");
	$("#loading").show();
	getAll();
	$(document).on("click", "a#btn-edit", function (e) {
		e.preventDefault();
		var id = $(this).data("id");
		$.ajax({
			url: "../../api/category/show.php",
			type: "GET",
			data: { id_category: id },
		})
			.done((resp) => {
				$("#input-id-category").val(resp.data.id_category);
				$("#input-title").val(resp.data.title);
				$("#input-detail").val(resp.data.detail);
			})
			.fail((jqXHR, textStatus, errorThrown) => {
				Swal.fire({
					icon: "error",
					title: "เรียกดูข้อมูลไม่สำเร็จ",
					text: "ผิดพลาด เรียกดูข้อมูลไม่สำเร็จ",
					footer: jqXHR.responseJSON.message,
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
					url: "../../api/category/delete.php",
					type: "DELETE",
					data: { id_category: id },
				})
					.done((resp) => {
						Swal.fire({
							icon: "success",
							title: "ลบสำเร็จ",
							text: "ข้อมูลของคุณถูกลบแล้ว",
							showConfirmButton: false,
							timer: 1600,
						});
						getAll();
					})
					.fail((jqXHR, textStatus, errorThrown) => {
						Swal.fire({
							icon: "error",
							title: "ลบไม่สำเร็จ",
							text: "ผิดพลาด ลบข้อมูลไม่สำเร็จ",
							footer: jqXHR.responseJSON.message,
						});
					});
			}
		});
	});

	$(document).on("submit", "#form-add-category", function (e) {
		e.preventDefault();
		let endPoint = "create.php";
		let formData = new FormData();
		let serialize = $("#form-add-category").serializeArray();
		serialize.forEach(function (item, index) {
			formData.append(item.name, item.value);
		});
		if ($("#input-id-category").val()) {
			endPoint = "update.php";
		}
		$.ajax({
			url: `../../api/category/${endPoint}`,
			type: "POST",
			data: formData,
			processData: false,
			contentType: false,
		})
			.done((resp) => {
				Swal.fire({
					icon: "success",
					title: "บันทึกข้อมูลสำเร็จ",
					showConfirmButton: false,
					timer: 1600,
				});
				getAll();
			})
			.fail((jqXHR, textStatus, errorThrown) => {
				Swal.fire({
					icon: "error",
					title: "บันทึกข้อมูลไม่สำเร็จ",
					showConfirmButton: true,
					text: jqXHR.responseJSON.message,
					timer: 1600,
				});
			});
	});

	$(document).on("click", "ul.pagination li a", function (e) {
		e.preventDefault();
		var $this = $(this);
		const pagenum = $this.data("page");
		$("#currentpage").val(pagenum);
		getAll();
		$this.parent().siblings().removeClass("active");
		$this.parent().addClass("active");
	});

	$(document).on("click", "#btn-show-modal-category", function (e) {
		e.preventDefault();
		let form = $("#form-add-category");
		form[0].reset();
		setTimeout(function () {
			$("#input-title").focus();
		}, 500);
		$("#input-id-category").val("");
	});

	$(document).on("keyup", "input#search_category", function (e) {
		e.preventDefault();
		var data = $(this).val();
		if (data.length > 0) {
			$.ajax({
				url: "../../api/category/search.php",
				type: "GET",
				data: { search: data },
			})
				.done((resp) => {
					if (resp.data) {
						let html = ``;
						$.each(resp.data, function (index, value) {
							html += createTable(index, value);
						});
						$("tbody").html(html);
						$("#loading").fadeOut();
						$('#pagination').hide();
					} else {
						getAll();
						$('#pagination').hide();
					}
				})
				.fail((jqXHR, textStatus, errorThrown) => {
					$("tbody").html(
						"<tr><td colspan='5' class='text-center text-danger'>ไม่เจอข้อมูลเลยอ่ะ ทำไงดีน๊าา...</td></tr>"
					);
					console.log('Error' + jqXHR + textStatus + errorThrown);
					$('#pagination').hide();
				});
		} else {
			getAll();
			$('#pagination').show();
		}
	});
});

function getAll() {
	var pageno = $("#currentpage").val();
	$.ajax({
		url: "../../api/category/getAll.php",
		type: "GET",
		data: { page: pageno },
	})
		.done((resp) => {
			if (resp.data) {
				let html = ``;
				$.each(resp.data, function (index, value) {
					html += createTable(index, value);
				});
				$("tbody").html(html);
				let totalRows = resp.count[0].count;
				let totalpages = Math.ceil(parseInt(totalRows) / 15);
				let currentpage = $("#currentpage").val();
				pagination(totalpages, currentpage);
				$("#loading").fadeOut();
				$("#modal_save_category").modal("hide");
			}
		})
		.fail((jqXHR, textStatus, errorThrown) => {
			console.log("error" + jqXHR + textStatus + errorThrown);
		});
}

function createTable(index, value) {
	let html = ``;
	html += `
	<tr>
    <th class="text-center">${index + 1}</th>
    <td>${value.title}</td>
    <td>${value.detail}</td>
    <td>${value.update_at}</td>
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
	return html;
}
