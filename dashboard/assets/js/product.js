var selectedFile;
function onFileSelected(input) {
	selectedFile = input.files[0];
	if (selectedFile) {
		let reader = new FileReader();
		document
			.querySelector("#imgControl")
			.classList.replace("d-none", "d-block");
		reader.onload = function (e) {
			let element = document.querySelector("#imgUpload");
			element.setAttribute("src", e.target.result);
		};
		reader.readAsDataURL(selectedFile);
	}
}

$(function () {
	$("#sidebar_product").addClass("active");
	$("#loading").show();
	getAll();
	$(document).on("click", "a#btn-edit", function (e) {
		e.preventDefault();
		var id = $(this).data("id");

		$.ajax({
			url: "../../api/product/getEdit.php",
			type: "GET",
			data: { id: id, action: "getEdit" },
		})
			.done((resp) => {
				$("#input-id-product").val(resp.data.id_product);
				$("#input-title").val(resp.data.title);
				$("#input-category").val(resp.data.id_category);
				$("#input-price").val(resp.data.price);
				$("#input-stock").val(resp.data.stock);
				$("#input-detail").val(resp.data.detail);
				$("#input-detail2").val(resp.data.detail2);
				$("#input-photo").val('');
				selectedFile = '';
				$('#photo_old').val(resp.data.photo);
				$("#imgUpload").attr(
					"src",
					"../../../assets/image/uploads/" + resp.data.photo
				);
				$("#imgControl").addClass("d-block").removeClass("d-none");
				getCategory("", resp.data.id_category);
				if (resp.data.status == 1) {
					$("#input-status").prop("checked", true);
					$("#label-status").css("color", "#198754");
					$("#label-status").text("เปิดใช้งาน");
				} else {
					$("#input-status").prop("checked", false);
					$("#label-status").css("color", "#dc3545");
					$("#label-status").text("ปิดใช้งาน");
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
					url: "../../api/product/delete.php",
					type: "DELETE",
					data: JSON.stringify({ id_product: id }),
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

	$("#form-add-product").submit((e) => {
		e.preventDefault();
		let endPoint = 'save_form.php';
		let formData = new FormData();
		let serialize = $("#form-add-product").serializeArray();
		serialize.forEach(function (item, index) {
			formData.append(item.name, item.value);
		});
		formData.append("photo", selectedFile);
		if($("#input-id-product").val()) {
			endPoint = 'update.php';
		}
		$.ajax({
			url: `../../api/product/${endPoint}`,
			type: "POST",
			data: formData,
			processData: false,
			contentType: false,
		})
			.done((resp, textStatus, jqXHR) => {
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
		getAll();
		$this.parent().siblings().removeClass("active");
		$this.parent().addClass("active");
	});

	$("#btn-show-modal-product").click((e) => {
		e.preventDefault();
		getCategory("selected");
		let form = $("#form-add-product");
		form[0].reset();
		setTimeout(function () {
			$("#input-title").focus();
		}, 500);
		$("#input-status").attr("checked", true);
		$("#imgUpload").attr("src", '');
		$("#imgControl").addClass("d-none").removeClass("d-block");
		$("#label-status").css("color", "#198754");
		$("#label-status").text("เปิดใช้งาน");
	});

	$(document).on("keyup", "input#search_product", function (e) {
		e.preventDefault();
		var data = $(this).val();
		$.ajax({
			url: "../../api/product/search.php",
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
              <td><img src="../../../assets/image/${value.photo}" alt=""></td>
              <td>${value.title}</td>
              <td>${value.category}</td>
              <td>${value.price}</td>
              <td>${value.stock}</td>
              <td><span class="badge bg-success">เปิดใช้งาน</span></td>
              <td>
                <a href="#!" id="btn-edit" data-id="${
									value.id_product
								}" data-bs-toggle="modal" data-bs-target="#modal_save_product" class="text-secondary me-2"><i class="fas fa-edit"></i></a>
                <a href="#!" id="btn-delete" data-id="${
									value.id_product
								}" class="text-secondary"><i class="fas fa-trash"></i></a>
              </td>
            </tr>
						`;
					});
					$("tbody").html(html);
					$("#loading").fadeOut();
				} else {
					getAll();
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

	$("#input-status").click(function () {
		if ($(this).prop("checked") == true) {
			$("#label-status").css("color", "#198754");
			$("#label-status").text("เปิดใช้งาน");
		} else if ($(this).prop("checked") == false) {
			$("#label-status").css("color", "#dc3545");
			$("#label-status").text("ปิดใช้งาน");
		}
	});
});

function getAll() {
	var pageno = $("#currentpage").val();
	$.ajax({
		url: "../../api/product/getAll.php",
		type: "GET",
		data: { action: "getAll", page: pageno },
	})
		.done((resp) => {
			if (resp.data) {
				let html = ``;
				$.each(resp.data, function (index, value) {
					let status =
						value.status == 1
							? '<span class="badge bg-success" id="status-badge">เปิดใช้งาน</span>'
							: '<span class="badge bg-danger" id="status-badge">ปิดใช้งาน</span>';
					html += `
						<tr>
              <th class="text-center">${index + 1}</th>
              <td><img src="../../../assets/image/uploads/${
								value.photo
							}" alt=""></td>
              <td>${value.title}</td>
              <td>${value.category}</td>
              <td>${value.price}</td>
              <td>${value.stock}</td>
              <td>${status}</td>
              <td>
                <a href="#!" id="btn-edit" data-id="${
									value.id_product
								}" data-bs-toggle="modal" data-bs-target="#modal_save_product" class="text-secondary me-2"><i class="fas fa-edit"></i></a>
                <a href="#!" id="btn-delete" data-id="${
									value.id_product
								}" class="text-secondary"><i class="fas fa-trash"></i></a>
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
				$("#modal_save_product").modal("hide");
			}
		})
		.fail((resp) => {
			console.log("error" + resp);
		});
}

function getCategory(selected = "", val_category = "") {
	$.ajax({
		url: "../../api/product/getCategory.php",
		type: "GET",
		data: { action: "getCategory" },
	})
		.done((resp) => {
			if (resp.data) {
				let html = ``;
				html += `<option ${selected} disabled="disabled"">เลือกประเภท</option>`;
				$.each(resp.data, function (index, value) {
					let selected =
						val_category == value.id_category ? 'selected="true"' : "";
					html += `
						<option ${selected} value="${value.id_category}">${value.title}</option>
						
						`;
				});
				$("#input-category").html(html);
				$("#loading").fadeOut();
			}
		})
		.fail((resp) => {
			console.log("error" + resp);
		});
}
