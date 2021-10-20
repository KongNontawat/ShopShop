$(function () {
	set_profile();
	var btn = $("#BackToTop");
	$(window).scroll(function () {
		if ($(window).scrollTop() > 300) {
			btn.addClass("show");
		} else {
			btn.removeClass("show");
		}
	});
	btn.on("click", function (e) {
		e.preventDefault();
		$("html, body").animate({ scrollTop: 0 }, "1000");
	});
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
	let id_user = localStorage.getItem('id_user');
	let username = localStorage.getItem('username');
	let role = localStorage.getItem('role');
	let photo = localStorage.getItem('photo');
	let login = localStorage.getItem('login');
	if(photo == 'null') {
  	photo = 'default.jpg'
	}
	$('#nav_username').text(username);
	$('#nav_photo').attr('src','../../assets/image/' + photo);
}

