$(function () {
	var login = localStorage.getItem("login");
	var role = localStorage.getItem("role");
	if (role == "user") {
		window.location.href = "../../../pages/home/";
	}
	if (login !== "login") {
		$("#modal_login").modal("show");
	}

	set_profile();
	let formData = [];
	$("#form_register_admin").on("submit", function (e) {
		e.preventDefault();
		$("#form_register_admin")
			.find(".input-value-reg-admin")
			.each(function (i, element) {
				let inputObj = {};
				$(element)
					.find("input")
					.each(function (index, data) {
						$.extend(inputObj, { [data.name]: data.value });
					});
				formData.push(inputObj);
			});
		$.ajax({
			type: "POST",
			url: "../../api/auth/register.php",
			data: {data: JSON.stringify(formData)},
		})
			.done((resp) => {
				$("#modal_register").modal("hide");
				localStorage.setItem("id_user", resp.data.id_user);
				localStorage.setItem("username", resp.data.username);
				localStorage.setItem("role", resp.data.role);
				localStorage.setItem("photo", resp.data.photo);
				localStorage.setItem("login", "login");
				set_profile();
			})
			.fail((resp) => {
				$("#alert_register").show();
				$("#alert_register").text(resp.responseJSON.message);
			});
	});

	$("#form_login_admin").on("submit", function (e) {
		e.preventDefault();
		let formData = [];
		$("#form_login_admin")
			.find(".input-value-admin")
			.each(function (i, element) {
				let inputObj = {};
				$(element)
					.find("input")
					.each(function (index, data) {
						$.extend(inputObj, { [data.name]: data.value });
					});
				formData.push(inputObj);
			});
		$.ajax({
			type: "POST",
			url: "../../api/auth/login.php",
			data: { data: JSON.stringify(formData) }
		})
			.done((resp) => {
				$("#modal_login").modal("hide");
				localStorage.setItem("id_user", resp.data.id_user);
				localStorage.setItem("username", resp.data.username);
				localStorage.setItem("role", resp.data.role);
				localStorage.setItem("photo", resp.data.photo);
				localStorage.setItem("login", "login");
				set_profile();
				console.log(typeof resp);
				if (resp.data.role === "user") {
					window.location.href = "../../../pages/home/";
				}
			})
			.fail((resp) => {
				$("#alert_login").show();
				$("#alert_login").text(resp.responseJSON.message);
			});
	});

	$("#btn-logout").on("click", function (e) {
		e.preventDefault();
		localStorage.removeItem("login");
		localStorage.removeItem("username");
		localStorage.removeItem("photo");
		localStorage.removeItem("id_user");
		localStorage.removeItem("role");
		$("#nav_username").text("");
		$("#nav_photo").attr("src", "../../assets/image/default.png");
		$("#modal_login").modal("show");
	});
	$("#nav-logout").on("click", function (e) {
		e.preventDefault();
		localStorage.removeItem("login");
		localStorage.removeItem("username");
		localStorage.removeItem("photo");
		localStorage.removeItem("id_user");
		localStorage.removeItem("role");
		$("#nav_username").text("");
		$("#nav_photo").attr("src", "../../assets/image/default.png");
		$("#modal_login").modal("show");
	});
});
