$(function () {
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


