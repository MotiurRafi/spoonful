<!DOCTYPE html>
<html class=no-js lang=en-US>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body id=body class="home page-template-default page page-id-22 wp-embed-responsive theme-candore woocommerce-no-js elementor-default elementor-kit-6 elementor-page elementor-page-22">

	<div class=preloader-bg></div>
	<div id=preloader>
		<div id=preloader-status>
			<div class="preloader-position loader"> <span></span></div>
		</div>
	</div>

	<div class="progress-wrap cursor-pointer">
		<i class='bx bx-chevron-up'></i>
		<svg class="progress-circle svg-content" width=100% height=100% viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
		</svg>
	</div>

	<nav class="navbar navbar-expand-lg" id="navbar">
		<div class=container>
			<div class=logo-wrapper data-sticky-logo="./assets/images/logo.png" data-default-logo="./assets/images/logo.png">
				<a href="index.html" class=logo>
					<?php
					// Query the 'Single Image' post type for the post titled 'logo image'
					$logo_image_query = new WP_Query(array(
						'post_type' => 'single_image',
						'name'      => 'logo-image', // Replace with the actual slug of your post
					));

					// Check if the query has posts
					if ($logo_image_query->have_posts()) {
						$logo_image_query->the_post();
						// Display the featured image of the 'logo image' post
						if (has_post_thumbnail()) {
							the_post_thumbnail('full', array('class' => 'logo-img', 'alt' => 'Logo'));
						}
					} else {
						// Fallback to default logo if no matching post is found
					?>
						<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.png'); ?>" class="logo-img" alt="Logo">
					<?php
					}
					// Restore the global post data
					wp_reset_postdata();
					?>
				</a>
			</div>
			<button class=navbar-toggler type=button data-bs-toggle=collapse data-bs-target=#navbar aria-controls=navbar aria-expanded=false aria-label="Toggle navigation"> <span class=navbar-toggler-icon><i class='bx bx-menu'></i></span> </button>
			<div class="collapse navbar-collapse" id=navbar>

				<?php
				wp_nav_menu(array(
					'theme_location' => 'primary',
					'menu_id'        => 'menu-home',
					'container'      => '',         // Set to an empty string to remove the container
					'container_class' => '',         // Set to an empty string to remove the container class
					'menu_class'     => 'navbar-nav ms-auto',
				))
				?>



				<div class=cart>
					<div class=cart-icon>
						<span class="icon cursor-pointer">
							<i class='bx bxs-cart-alt'></i>
						</span>
						<div class=mad-count>0 items</div>
					</div>
					<div class=cart-side>
						<span class="clos ti-close cursor-pointer"></span>
						<div class=titl>
							<h6>Your Cart</h6>
							<div class=mad-count>0 items</div>
						</div>
						<div class=widget_shopping_cart_content></div>
					</div>
				</div>
				<div class="log-toggle">
					<div class=log-icon>
						<button class="icon cursor-pointer log-toggle-btn" id="log-toggle-btn">
							<i class='bx bx-user'></i>
						</button>
					</div>
				</div>
			</div>
		</div>
	</nav>