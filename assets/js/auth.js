var login = localStorage.getItem("login");
var role = localStorage.getItem("role");
$(function () {
	if (login !== "login") {
		$("#modal_login").modal("show");
	}
	if (role == "admin") {
		$("#btn-dashboard").show();
	} else {
		$("#btn-dashboard").hide();
	}

	$(document).on("submit", "#form_register", function (e) {
		e.preventDefault();
		let formData = new FormData();
		let serialize = $("#form_register").serializeArray();
		serialize.forEach(function (item, index) {
			formData.append(item.name, item.value);
		});
		$.ajax({
			type: "POST",
			url: "../../api/auth/register.php",
			data: formData,
			processData: false,
			contentType: false,
		})
			.done((resp) => {
				$("#modal_register").modal("hide");
				localStorage.setItem("role", resp.data.role);
				localStorage.setItem("login", "login");
			})
			.fail((jqXHR, textStatus, errorThrown) => {
				$("#alert_register").show();
				$("#alert_register").text(jqXHR.responseJSON.message);
			});
	});

	$(document).on("submit", "#form_login", function (e) {
		e.preventDefault();
		let formData = new FormData();
		let serialize = $("#form_login").serializeArray();
		serialize.forEach(function (item, index) {
			formData.append(item.name, item.value);
		});

		$.ajax({
			type: "POST",
			url: "../../api/auth/login.php",
			data: formData,
			processData: false,
			contentType: false,
		})
			.done((resp) => {
				$("#modal_login").modal("hide");
				localStorage.setItem("role", resp.data.role);
				localStorage.setItem("login", "login");
				if (resp.data.role === "admin") {
					window.location.href = "../../dashboard/pages/home/";
				}
				if (resp.data.role === "user") {
					$("#btn-dashboard").hide();
				} else {
					$("#btn-dashboard").show();
				}
			})
			.fail((jqXHR, textStatus, errorThrown) => {
				$("#alert_login").show();
				$("#alert_login").text(jqXHR.responseJSON.message);
			});
	});

	$("#btn-logout").on("click", function () {
		localStorage.removeItem("login");
		localStorage.removeItem("role");
		$("#modal_login").modal("show");
	});
});
