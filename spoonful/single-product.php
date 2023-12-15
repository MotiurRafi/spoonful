<?php
/*
Template Name: Single Product Page
*/
?>
<?php get_template_part('template-parts/header'); ?>
<?php get_template_part('template-parts/extension1'); ?>
<?php get_template_part('template-parts/sign-page'); ?>

<div class="banner-header valign bg-img bg-fixed" data-overlay-dark=6 style="margin-top: -90px; background-image: url(<?php echo esc_url(get_template_directory_uri() . '/assets/images/herobg2.jpg'); ?>) ;">
	<div class=container>
		<div class=row>
			<div class="col-md-12 text-center caption mt-60">
				<h5>Order Now</h5>
				<h1>
					Our Shop</h1>
			</div>
		</div>
	</div>
</div>
<section class="main-shop product-page section-padding bg-blck">
	<div class=container>
		<div class=row>

			<?php
			while (have_posts()) :
				the_post();

				// Get product object
				$product = wc_get_product(get_the_ID());

				$price = $product->get_price();
				$gallery_images = $product->get_gallery_image_ids();
				$categories = wc_get_product_category_list($product->get_id(), ', ', '<span class="posted_in my-3">Categories: ', '</span>');
				$tags = wc_get_product_tag_list($product->get_id(), ', ', '<span class="tagged_as">', '</span>');

			?>
				<div class="col-md-8">
					<div class="single-product">
						<div id="product-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="woocommerce-notices-wrapper"></div>
							<div class="prod-title">
								<h4><?php the_title(); ?></h4>
								<div class="info">
									<div class="price">
										<h6><span>Price :</span> <strong class="price"> &#36; <?php echo esc_html($price); ?></strong></h6>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 gallery-item fl-wrap with-images images">
									<div class="owl-carousel owl-carousel-6 pro-details-gallery owl-theme text-center">
										<?php
										// Output all gallery images
										foreach ($gallery_images as $image_id) {
											$image_url = wp_get_attachment_url($image_id);
											if (!empty($image_url)) {
										?>
												<div class="item woocommerce-product-gallery__image">
													<div class="gallery-item-inner">
														<a href="<?php echo esc_url($image_url); ?>" title="" class="img-grayscale img-zoom">
															<div class="gallery-box">
																<div class="gallery-img">
																	<img width="800" height="560" src="<?php echo esc_url($image_url); ?>" class="attachment-shop_single size-shop_single wp-post-image img-fluid mx-auto d-block" alt="" decoding="async" fetchpriority="high">
																</div>
															</div>
														</a>
													</div>
												</div>
										<?php
											}
										}
										?>
									</div>
								</div>
							</div>
							<div class="gat cd-product-meta">
								<?php
								if ($categories) {
									echo $categories;
								}

								if ($tags) {
									echo $tags;
								}
								?>
							</div>
							<div class="text-inf mt-20">
								<div class="order-tags valign">
									<form class="order candore-simple-add-to-cart" action="<?php echo esc_url(get_permalink()); ?>" method="post" enctype="multipart/form-data">
										<div class="quantity order-count">
											<input type="number" id="quantity_<?php the_ID(); ?>" class="input-text qty text" name="quantity" value="1" title="Qty" size="4" min="1" step="1" placeholder inputmode="numeric" autocomplete="off">
										</div>
										<button type="submit" name="add-to-cart" value="<?php the_ID(); ?>" class="single_add_to_cart_button button-5">Add to cart</button>
									</form>
								</div>
								<div class="woocommerce-product-details__short-description">
									<?php the_content(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php
			endwhile;
			?>

			<div class="col-md-4  ">
				<div class=shop-sidebar>
					<div id=woocommerce_product_search-2 class="widget item woocommerce widget_product_search">
						<div class="form search">
							<form role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url(home_url('/')); ?>">
								<label class="screen-reader-text" for="woocommerce-product-search-field-0">Search for:</label>
								<input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="Search products..." value="" name="s">
								<button type="submit" value="Search" class="icon"><span class="ti-search"></span></button>
								<input type="hidden" name="post_type" value="product">
							</form>
						</div>
					</div>
					<div id=candore-category-2 class="widget item candore_category_widget">
						<div class=tit>
							<h4>Categories</h4>
						</div>
						<div class="ctg">
							<ul class="cat-wid-list">
								<?php
								$selected_categories = array('main-courses', 'sea-food', 'starter', 'desserts', 'drinks');

								// Get WooCommerce categories
								$woo_categories = get_categories(array('taxonomy' => 'product_cat'));

								foreach ($woo_categories as $category) {
									if (in_array($category->slug, $selected_categories)) {
										$category_link = get_term_link($category);
										$category_count = $category->count;
								?>
										<li>
											<a href="<?php echo esc_url($category_link); ?>"><?php echo esc_html($category->name); ?></a>
											<div class="dots"></div>
											<span>(<?php echo esc_html($category_count); ?>)</span>
										</li>
								<?php
									}
								}
								?>
							</ul>
						</div>
					</div>
					<div id=woocommerce_products-2 class="widget item woocommerce widget_products">
						<div class=tit>
							<h4>Popular Products</h4>
						</div>
						<div class="product_list_widget">
							<ul>
								<?php
								$args = array(
									'post_type'      => 'product',
									'posts_per_page' => -1, // Get all products
								);

								$query = new WP_Query($args);

								if ($query->have_posts()) :
									while ($query->have_posts()) : $query->the_post();
										// Check if the product has the "popular" tag
										$product_tags = wc_get_product_tag_list(get_the_ID());
										if (strpos($product_tags, 'popular') !== false) :
											// Get the product price from WooCommerce
											$product = wc_get_product(get_the_ID());
											$product_price = $product->get_price();
								?>
											<li class="pop-prod">
												<div class="product">
													<div class="img">
														<a class="sidebar-product-image" href="<?php the_permalink(); ?>">
															<?php the_post_thumbnail('woocommerce_thumbnail', array('loading' => 'lazy')); ?>
														</a>
													</div>
													<div class="info">
														<h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
														<span class="price">Price: <span> &#36; <?php echo esc_html($product_price); ?></span></span>
													</div>
												</div>
											</li>
								<?php
										endif;
									endwhile;
									wp_reset_postdata(); // Reset the post data to avoid conflicts with the main loop
								else :
									echo 'No products found.';
								endif;
								?>
							</ul>
						</div>


					</div>
					<div id="woocommerce_product_tag_cloud-2" class="widget item woocommerce widget_product_tag_cloud">
						<div class="tit">
							<h4>Tags</h4>
						</div>
						<div class="tagcloud">
							<?php
							$tags = get_terms('product_tag', 'orderby=name'); // Use 'product_tag' taxonomy for WooCommerce product tags
							if ($tags && !is_wp_error($tags)) :
								foreach ($tags as $tag) :
							?>
									<a href="<?php echo esc_url(get_term_link($tag)); ?>" class="tag-cloud-link tag-link-<?php echo esc_attr($tag->term_id); ?>" style="font-size: <?php echo esc_attr($tag->count * 2); ?>pt;" aria-label="<?php echo esc_attr($tag->name); ?> (<?php echo esc_attr($tag->count); ?> products)">
										<?php echo esc_html($tag->name); ?>
									</a>
							<?php
								endforeach;
							endif;
							?>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>


<style>
	.pop-prod {
		margin: 0 0 10px 0;
	}

	.pop-prod .product .img a {
		width: 100%;
	}

	.pop-prod .product .img a img {
		height: 80px;
		width: 100%;
	}

	.posted_in,
	.tagged_as {
		color: #777;
		margin-right: 0 !important;
	}

	.tagged_as {
		padding: 0 0 0 .5rem;
	}

	.posted_in a,
	.tagged_as a {
		color: #C19D40 !important;
		transition: .3s ease;
	}

	.posted_in a:hover,
	.tagged_as a:hover {
		background-color: #C19D60 !important;
		color: #fff !important;
	}

	.woocommerce ul.cart_list li img,
	.woocommerce ul.product_list_widget li img {
		width: auto;
	}

	.owl-carousel-6 {
		height: 500px;
	}

	.owl-carousel-6 .owl-stage-outer {
		height: 100%;
	}

	.owl-carousel-6 .owl-stage-outer .owl-stage {
		height: 100%;
	}

	.owl-carousel-6 .owl-stage-outer .owl-stage .owl-item {
		height: 100%;
	}

	.owl-carousel-6 .owl-stage-outer .owl-stage .owl-item .woocommerce-product-gallery__image {
		height: 100%;
	}

	.owl-carousel-6 .owl-stage-outer .owl-stage .owl-item .woocommerce-product-gallery__image .gallery-item-inner {
		height: 100%;
	}

	.owl-carousel-6 .owl-stage-outer .owl-stage .owl-item .woocommerce-product-gallery__image .gallery-item-inner a {
		height: 100%;
		width: 100%;
	}

	.owl-carousel-6 .owl-stage-outer .owl-stage .owl-item .woocommerce-product-gallery__image .gallery-item-inner a .gallery-box {
		height: 100%;
	}

	.owl-carousel-6 .owl-stage-outer .owl-stage .owl-item .woocommerce-product-gallery__image .gallery-item-inner a .gallery-box .gallery-img {
		height: 100%;
	}

	.owl-carousel-6 .owl-stage-outer .owl-stage .owl-item .woocommerce-product-gallery__image .gallery-item-inner a .gallery-box .gallery-img img {
		height: 100%;
	}

	.ctg .cat-wid-list li a {
		color: #777 !important;
		transition: .3s ease;
	}

	.ctg .cat-wid-list li a:hover {
		color: #fff !important;
	}
</style>
<?php get_template_part('template-parts/footer'); ?>