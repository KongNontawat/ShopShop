$(function () {
	var login = localStorage.getItem("login");
	var role = localStorage.getItem("role");
	if (login !== "login") {
		$("#modal_login").modal("show");
	}
	if (role == "admin") {
		$("#btn-dashboard").show();
	} else {
		$('#btn-dashboard').hide();
	}

	$("#form_register").on("submit", function (e) {
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: "../../api/auth/register.php",
			data: $(this).serialize(),
		})
			.done((resp) => {
				$("#modal_register").modal("hide");
				$("#modal_login").modal("hide");
				let response = JSON.parse(resp);
				localStorage.setItem("id_user", response.data.id_user);
				localStorage.setItem("username", response.data.username);
				localStorage.setItem("role", response.data.role);
				localStorage.setItem("photo", response.data.photo);
				localStorage.setItem("login", "login");
				set_profile();
				if (response.data.role === "admin") {
					window.location.href = "../../dashboard/pages/home/";
				}
			})
			.fail((resp) => {
				let response = JSON.parse(resp.responseText);
				$("#alert_register").show();
				$("#alert_register").text(response.message);
				console.log("error" + resp);
			});
	});

	$("#form_login").on("submit", function (e) {
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: "../../api/auth/login.php",
			data: $(this).serialize(),
		})
			.done((resp) => {
				$("#modal_login").modal("hide");
				let response = JSON.parse(resp);
				localStorage.setItem("id_user", response.data.id_user);
				localStorage.setItem("username", response.data.username);
				localStorage.setItem("role", response.data.role);
				localStorage.setItem("photo", response.data.photo);
				localStorage.setItem("login", "login");
				set_profile();
				
				if (response.data.role === "admin") {
					window.location.href = "../../dashboard/pages/home/";
				}
			})
			.fail((resp) => {
				let response = JSON.parse(resp.responseText);
				$("#alert_login").show();
				$("#alert_login").text(response.message);
			});
	});

	$("#btn-logout").on("click", function (e) {
		e.preventDefault();
		localStorage.removeItem("login");
		localStorage.removeItem("username");
		localStorage.removeItem("photo");
		localStorage.removeItem("id_user");
		localStorage.removeItem("role");
		$("#nav_username").text('');
		$("#nav_photo").attr("src", "../../assets/image/default.jpg");
		$("#modal_login").modal("show");
	});
});
