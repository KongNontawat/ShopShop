$(function () {
	set_profile();
});

function goBack() {
	window.history.back();
}

function readURL(input) {
	if (input.files[0]) {
		let reader = new FileReader();
		document
			.querySelector("#imgControl")
			.classList.replace("d-none", "d-block");
		reader.onload = function (e) {
			let element = document.querySelector("#imgUpload");
			element.setAttribute("src", e.target.result);
		};
		reader.readAsDataURL(input.files[0]);
	}
}

function set_profile() {
	let id_user = localStorage.getItem("id_user");
	let username = localStorage.getItem("username");
	let role = localStorage.getItem("role");
	let photo = localStorage.getItem("photo");
	let login = localStorage.getItem("login");
	if (photo == "null") {
		photo = "default.png";
	}
	$("#nav_username").text(username);
	$("#nav_photo").attr("src", "../../../assets/image/" + photo);
}

function pagination(totalpages, currentpage) {
	var pagelist = "";
	if (totalpages >= 1) {
		currentpage = parseInt(currentpage);
		pagelist += `<ul class="pagination justify-content-end mt-3">`;
		const prevClass = currentpage == 1 ? " disabled" : "";
		pagelist += `<li class="page-item${prevClass}"><a class="page-link" href="#" data-page="${currentpage - 1}">Previous</a></li>`;
		for (let p = 1; p <= totalpages; p++) {
			const activeClass = currentpage == p ? " active" : "";
			pagelist += `<li class="page-item${activeClass}"><a class="page-link" href="#" data-page="${p}">${p}</a></li>`;
		}
		const nextClass = currentpage == totalpages ? " disabled" : "";
		pagelist += `<li class="page-item${nextClass}"><a class="page-link" href="#" data-page="${currentpage + 1}">Next</a></li>`;
		pagelist += `</ul>`;
	}
	$("#pagination").html(pagelist);
}