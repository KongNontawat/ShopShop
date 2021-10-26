$(function () {
	var login = localStorage.getItem("login");
	var role = localStorage.getItem("role");
	if (role == "user" || login != 'login') {
		window.location.href = "../../../pages/home/";
	}

	$("#btn-logout").on("click", function () {
		localStorage.removeItem("login");
		localStorage.removeItem("role");
	});
	$("#nav-logout").on("click", function () {
		localStorage.removeItem("login");
		localStorage.removeItem("role");
	});
});
