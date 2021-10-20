$(function () {
	$("#sidebar_category").addClass("active");
	getAllCategory();

	$(document).on("click", "a#btn-edit", function () {
    var id = $(this).data("id");
    $.ajax({
      url: "../../api/category/getCategory.php",
      type: "GET",
      data: { id: id, action: "getCategory" },
      beforeSend: function () {
        $("#loading").fadeIn();
      }
		}).done((resp)=> {
			$("#loading").fadeOut();
			$('#input-id').val(resp.data.id_category);
			$('#input-title').val(resp.data.title);
			$('#input-detail').val(resp.data.detail);
		}).fail((resp)=> {
			console.log("error" + resp);
		})
  });

	$(document).on("click", "ul.pagination li a", function (e) {
		e.preventDefault();
		var $this = $(this);
		const pagenum = $this.data("page");
		console.log(pagenum)
		$("#currentpage").val(pagenum);
		getAllCategory();
		$this.parent().siblings().removeClass("active");
		$this.parent().addClass("active");
	});
});

function getAllCategory() {
	var pageno = $('#currentpage').val();
	$.ajax({
		url: "../../api/category/getAllCategory.php",
		type: "GET",
		data: { action: "getAllCategory", page: pageno },
		beforeSend: function () {
			$("#loading").fadeIn();
		},
	})
		.done((resp) => {
			if (resp.data) {
				$.each(resp.data, function (index, value) {
					$("tbody").append(
						`
						<tr>
              <th class="text-center">${index + 1}</th>
              <td>${value.title}</td>
              <td>${value.detail}</td>
              <td>${value.created_at}</td>
              <td>
                <a href="#!" data-id="${
									value.id_category
								}" id="btn-edit" class="text-secondary me-2" data-bs-toggle="modal" data-bs-target="#modal_edit"><i class="fas fa-edit"></i></a>
                <a href="#!" data-id="${
									value.id_category
								}" id="btn-delete" class="text-secondary"><i class="fas fa-trash"></i></a>
              </td>
            </tr>
						`
					);
				});
				let totalRows = resp.count.count;
				let totalpages = Math.ceil(parseInt(totalRows) / 15);
				const currentpage = $("#currentpage").val();
				pagination(totalpages, currentpage);
				$("#loading").fadeOut();
			}
		})
		.fail((resp) => {
			console.log("error" + resp);
		});
}



