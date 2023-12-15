<style>
	.navbar {
		position: sticky;
	}

	a {
		color: inherit !important;
		text-decoration: inherit !important;
	}

	.footer-about-social-list a {
		color: white !important;
	}

	.footer-about-social-list a:hover {
		color: #C19D60 !important;
	}

	.team-card .social a {
		color: white !important;
	}

	.team-card .social a:hover {
		color: #C19D60 !important;
	}

	.first-class-services .square-container2 a {
		color: white !important;
	}

	.first-class-services .square-container2 a:hover {
		color: inherit !important;
	}

	.opening-hours-box a {
		color: white !important;
	}

	.check_menu {
		color: white !important;
	}

	.navbar .navbar-nav .nav-link {
		font-family: 'Noah', sans-serif;
		font-size: 13px;
		font-weight: 400;
		color: #fff !important;
		text-transform: uppercase;
		letter-spacing: 0.5px;
		margin: 3px;
		-webkit-transition: all .4s;
		transition: all .4s;
	}

	.navbar .navbar-nav .nav-link.nav-color {
		color: #1b1b1b !important;
	}

	.navbar .navbar-nav .nav-link:hover {
		color: #C19D60 !important;
	}

	.navbar .navbar-nav .active {
		color: #C19D60 !important;
	}

	.elementor-22 .elementor-element.elementor-element-e1e62d5 .reservations .text a {
		color: #fff !important;
	}

	.menu-home-container {}

	.navbar-nav {
		gap: 1rem;
		margin: 0 1rem .3rem 0;
	}

	.navbar-nav li {}

	.navbar-nav li a {
		color: #fff !important;
		transition: .3s ease;

	}

	.navbar-nav li a:hover {
		color: #C19D60 !important;
	}

	.elementor-237 .elementor-element.elementor-element-64c02f66 .reservations .text a,
	.elementor-104 .elementor-element.elementor-element-1587ca26 .reservations .text a,
	.elementor-318 .elementor-element.elementor-element-26b10cd3 .reservations .text a,
	.elementor-701 .elementor-element.elementor-element-6d6fb63a .reservations .text a,
	.elementor-576 .elementor-element.elementor-element-1b03a36d .reservations .text a {
		color: #fff !important;
	}

	.cd-full-width {
		margin: -90px 0 0 0;
	}
</style>
<script>
	jQuery(document).ready(function($) {
		$(".owl-carousel-1").owlCarousel({
			items: 1,
			loop: true,
			autoplay: true,
			autoplayTimeout: 5000, // Set the timeout in milliseconds
			autoplaySpeed: 1000, // Set the speed in milliseconds
			// Add other options as needed
		});
		$(".owl-carousel-2").owlCarousel({
			items: 1,
			loop: true,
			autoplay: true,
			autoplayTimeout: 6000, // Set the timeout in milliseconds
			autoplaySpeed: 1000, // Set the speed in milliseconds
			// Add other options as needed
		});
		$(".owl-carousel-3").owlCarousel({
			items: 3,
			loop: true,
			autoplay: true,
			margin: 25,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			nav: false, // Navigation arrows
			dots: false,
		});
		$(".owl-carousel-4").owlCarousel({
			items: 1,
			loop: true,
			autoplay: true,
			nav: true,
			dots: false,
			navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
			autoplayTimeout: 5000, // Set the timeout in milliseconds
			autoplaySpeed: 1000, // Set the speed in milliseconds
			// Add other options as needed
		});
		$(".owl-carousel-5").owlCarousel({
			items: 5,
			loop: true,
			autoplay: true,
			margin: 25,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			nav: false, // Navigation arrows
			dots: false,
		});
		$(".owl-carousel-6").owlCarousel({
			items: 1,
			loop: true,
			nav: true,
			dots: false,
			navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
		});
	});


	// nav toggling 
	var navbar = document.getElementById('navbar');

	// Function to be called on scroll events
	function handleScroll() {
		var scrollY = window.scrollY || window.pageYOffset; // Scroll position from top

		// Check if scrolling down
		if (scrollY > lastScrollTop) {
			console.log('Scrolling Down');
			navbar.classList.remove('initialClass');

		}
		// Check if scrolling up
		else if (scrollY < lastScrollTop) {
			console.log('Scrolling Up');
			navbar.classList.add('newClass');

		}

		// Check if at the top of the page
		if (scrollY === 0) {
			console.log('At the Top of the Page');
			navbar.classList.add('newClass');
		}

		// Check if at the bottom of the page
		if (scrollY + window.innerHeight === document.documentElement.scrollHeight) {
			console.log('At the Bottom of the Page');
			navbar.classList.add('newClass');

		}

		// Update the last scroll position
		lastScrollTop = scrollY;
	}
	// Initialize the last scroll position variable
	var lastScrollTop = 0;

	window.onload = function() {
		handleScroll();
	};
	window.addEventListener('scroll', handleScroll);
</script>


<?php 
function custom_trim_description($text, $limit)
{
	if (strlen($text) > $limit) {
		$text = substr($text, 0, $limit) .
			'...';
	}
	return $text;
} ?>