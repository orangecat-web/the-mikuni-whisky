$(document).ready(function () {

	// 救樹清單
	$("#owl-rescue").owlCarousel({
		nav: true,
		dots: false,
		pagination : false,
		margin: 10,
		autoplay: true,
		autoplayTimeout: 5000,
		autoplayHoverPause: true,
		autoplaySpeed: 2000,
		loop: true,
		responsiveClass: true,
		responsive: {
			0: {
				items: 1,
			},
			567: {
				items: 1,
			},
			768: {
				items: 1,
			},
			992: {
				items: 1,
			},
			1200: {
				items: 1,
			}
		}
	});

	// 客戶招商
	$("#owl-investment").owlCarousel({
		nav: true,
		dots: false,
		pagination : false,
		margin: 10,
		autoplay: true,
		autoplayTimeout: 5000,
		autoplayHoverPause: true,
		autoplaySpeed: 2000,
		loop: false,
		responsiveClass: true,
		responsive: {
			0: {
				items: 2,
			},
			567: {
				items: 2,
			},
			768: {
				items: 2,
			},
			992: {
				items: 2,
			},
			1200: {
				items: 2,
			}
		}
	});

	// 裝潢案例精選
	$("#owl-case").owlCarousel({
		nav: true,
		dots: false,
		pagination : false,
		margin: 10,
		autoplay: true,
		autoplayTimeout: 5000,
		autoplayHoverPause: true,
		autoplaySpeed: 2000,
		loop: true,
		responsiveClass: true,
		responsive: {
			0: {
				items: 1,
			},
			567: {
				items: 1,
			},
			768: {
				items: 1,
			},
			992: {
				items: 1,
			},
			1200: {
				items: 1,
			}
		}
	});

	// 找廠商
	$("#owl-team").owlCarousel({
		nav: true,
		dots: false,
		pagination : false,
		margin: 10,
		autoplay: true,
		autoplayTimeout: 5000,
		autoplayHoverPause: true,
		autoplaySpeed: 2000,
		loop: true,
		responsiveClass: true,
		responsive: {
			0: {
				items: 1,
			},
			567: {
				items: 1,
			},
			768: {
				items: 3,
			},
			992: {
				items: 3,
			},
			1200: {
				items: 3,
			}
		}
	});
});