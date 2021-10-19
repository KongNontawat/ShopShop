$(function () {
	// localStorage.setItem('login', 'login');
	// localStorage.setItem('role', 'user');
	// var login = localStorage.getItem('login');
	// var role = localStorage.getItem('role');
	// if(login !== 'login') {
	$("#modal_login").modal("show");
	// }
	// if(login === 'login' && role === 'admin') {
	//   window.location.href = '../../dashboard/pages/home/';
	// }

	$("#form_register").on("submit", function (e) {
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: "../../api/auth/register.php",
			data: $(this).serialize()
		})
			.done((resp)=> {
				$("#modal_register").modal("hide");
				$("#modal_login").modal("hide");
				console.log("success");
			})
			.fail((resp) => {
				console.log("error");
			});
	});
});
