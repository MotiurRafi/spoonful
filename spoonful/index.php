<?php get_template_part('template-parts/header'); ?>
<?php get_template_part('template-parts/extension1'); ?>
<?php get_template_part('template-parts/sign-page'); ?>


<section class=cd-full-width data-scroll-index=0>
	<div data-elementor-type=wp-page data-elementor-id=22 class="elementor elementor-22">

		<!-- cpt done  -->
		<section class="elementor-section elementor-top-section elementor-element elementor-element-37a5478 elementor-section-full_width elementor-section-height-full elementor-section-height-default elementor-section-items-middle" data-id=37a5478 data-element_type=section>
			<div class="elementor-container elementor-column-gap-no">
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ce4a4d0" data-id=ce4a4d0 data-element_type=column>
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-a3703f3 elementor-widget elementor-widget-candore-banner-slider" data-id=a3703f3 data-element_type=widget data-widget_type=candore-banner-slider.default>
							<div class=elementor-widget-container>
								<header class="header slider-fade  cd-intro-type-slider">


									<div class="owl-carousel owl-theme owl-carousel-1" data-carousel-autoplay=true data-carousel-speed=1000 data-carousel-timeout=5000 data-carousel-nav=false data-carousel-dots=true data-carousel-dots-mobile=true>

										<?php
										// Assuming you have a WP_Query loop for your Hero Slide custom post type
										$hero_slide_query = new WP_Query(array('post_type' => 'hero_slide', 'posts_per_page' => -1));

										while ($hero_slide_query->have_posts()) : $hero_slide_query->the_post();

											// Retrieve the values from custom fields
											$established = get_post_meta(get_the_ID(), '_since', true);
											$title = get_post_meta(get_the_ID(), '_heading', true);
											$subtitle = get_post_meta(get_the_ID(), '_subheading', true);
											$address = get_post_meta(get_the_ID(), '_location', true);
											$button_title = get_post_meta(get_the_ID(), '_button_title', true);
											$button_link = get_post_meta(get_the_ID(), '_button_link', true);
											$background_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
										?>

											<div class="text-center item bg-img bg-img-c" data-overlay-dark=6 style="background: url(<?php echo esc_url($background_image); ?>);">
												<div class="v-middle caption">
													<div class="container">
														<div class="row">
															<div class="col-md-12 text-center">
																<h6>Est. <?php echo esc_html($established); ?></h6>
																<h1><?php echo esc_html($title); ?> <span><?php echo esc_html($subtitle); ?></span></h1>
																<h4><?php echo esc_html($address); ?></h4>
																<a href="<?php echo esc_url($button_link); ?>" target="_self" class="button-1 mt-30 check_menu"><?php echo esc_html($button_title); ?><span></span></a>
															</div>
														</div>
													</div>
												</div>
											</div>

										<?php endwhile;

										// Reset Post Data
										wp_reset_postdata();
										?>
									</div>
									<div class=reservation>
										<a href="#">
											<div class="icon d-flex justify-content-center align-items-center">
												<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/tray-icon-white.png'); ?>" alt="">
											</div>
											<div class="call">
												<?php
												$contact_no_id = 69;
												setup_postdata(get_post($contact_no_id));
												$contact_no_with_tags = get_the_content();
												$contact_number = wp_strip_all_tags($contact_no_with_tags);
												?>
												<span><?php echo esc_html($contact_number); ?></span>
												<?php
												// Reset Post Data
												wp_reset_postdata();
												?>
												<br>Reservation
											</div>
										</a>
									</div>
								</header>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- cpt done  -->
		<section class="elementor-section elementor-top-section elementor-element elementor-element-36273649 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=36273649 data-element_type=section id=test>
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-55614183" data-id=55614183 data-element_type=column>
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-section elementor-inner-section elementor-element elementor-element-352a9fd elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id=352a9fd data-element_type=section>
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5f0987bb" data-id=5f0987bb data-element_type=column>
									<div class="elementor-widget-wrap elementor-element-populated">
										<?php
										$about_info_id = 106;
										$about_title = get_the_title($about_info_id);
										setup_postdata(get_post($about_info_id));
										$about_desc_with_tags = get_the_content();
										$about_desc = wp_strip_all_tags($about_desc_with_tags);
										wp_reset_postdata();
										$about_thumbnail = get_the_post_thumbnail_url($about_info_id, 'full');
										$about_info_secondary_thumbnail = get_post_meta($about_info_id, '_secondary_thumbnail', true);
										?>
										<div class="elementor-element elementor-element-4021ae3 elementor-widget elementor-widget-candore-sec-title" data-id=4021ae3 data-element_type=widget data-widget_type=candore-sec-title.default>
											<div class=elementor-widget-container>
												<div class="section-head mb-0 text-left ">
													<div class=section-subtitle>
														<?php
														$web_title_id = 140;
														setup_postdata(get_post($web_title_id));
														$web_title_with_tags = get_the_content();
														$web_title = wp_strip_all_tags($web_title_with_tags);
														echo esc_html($web_title . ' Resturant');
														// Reset Post Data
														wp_reset_postdata();
														?>
													</div>
													<div class=section-title><?php echo $about_title; ?></div>
												</div>
											</div>
										</div>
										<div class="elementor-element elementor-element-6d9936f7 elementor-widget elementor-widget-candore-text-block" data-id=6d9936f7 data-element_type=widget data-widget_type=candore-text-block.default>
											<div class=elementor-widget-container>
												<div class=" text-left  candore-text-block">
													<p><?php echo $about_desc; ?></p>
												</div>
											</div>
										</div>
										<div class="elementor-element elementor-element-5a6c8194 elementor-widget elementor-widget-candore-contact" data-id=5a6c8194 data-element_type=widget data-widget_type=candore-contact.default>
											<div class=elementor-widget-container>
												<div class="reservations cd-reservations">
													<div class=icon>
														<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/tray-icon-golden.png'); ?>" alt="">
													</div>
													<div class=text>
														<p>Reservation</p>
														<?php
														$contact_no_id = 69;
														setup_postdata(get_post($contact_no_id));
														$contact_no_with_tags = get_the_content();
														$contact_number = wp_strip_all_tags($contact_no_with_tags);
														?>
														<a href="tel:<?php echo esc_html($contact_number); ?>"><?php echo esc_html($contact_number); ?></a>
														<?php
														// Reset Post Data
														wp_reset_postdata();
														?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-37ea737c" data-id=37ea737c data-element_type=column>
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-721a3159 elementor-widget elementor-widget-image" data-id=721a3159 data-element_type=widget data-widget_type=image.default>
											<div class=elementor-widget-container>
												<img width=700 height=1040 src="<?php echo $about_thumbnail ?>" class="attachment-full size-full wp-image-51" sizes="(max-width: 700px) 100vw, 700px">
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-256f95a1" data-id=256f95a1 data-element_type=column>
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-5f1c670f elementor-widget elementor-widget-image" data-id=5f1c670f data-element_type=widget data-widget_type=image.default>
											<div class=elementor-widget-container>
												<img decoding=async width=700 height=1040 src="<?php echo $about_info_secondary_thumbnail ?>" class="attachment-full size-full wp-image-52" sizes="(max-width: 700px) 100vw, 700px">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<!-- cpt done  -->
		<section class="elementor-section elementor-top-section elementor-element elementor-element-5734b10a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=5734b10a data-element_type=section data-settings={&quot;background_background&quot;:&quot;classic&quot;}>
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-126d1193" data-id=126d1193 data-element_type=column>
					<div class="elementor-widget-wrap elementor-element-populated">
						<?php
						$chef_post_id = 97;
						$chef_name = get_the_title($chef_post_id);
						setup_postdata(get_post($chef_post_id));
						$chef_desc_with_tags = get_the_content();
						$chef_desc = wp_strip_all_tags($chef_desc_with_tags);
						wp_reset_postdata();
						$chef_position = get_post_meta($chef_post_id, '_chef_position', true);
						$chef_experience = get_post_meta($chef_post_id, '_chef_experience', true);
						$chef_image_url = get_the_post_thumbnail_url($chef_post_id, 'full');
						?>
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-23db2184 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="23db2184" data-element_type="section">
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-454d8a99" data-id="454d8a99" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-5eab748e elementor-widget elementor-widget-image" data-id="5eab748e" data-element_type="widget" data-widget_type="image.default">
											<div class="elementor-widget-container">
												<img width="800" height="1049" src="<?php echo esc_url($chef_image_url); ?>" class="attachment-full size-full wp-image-70" sizes="(max-width: 800px) 100vw, 800px">
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2746599d" data-id="2746599d" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-47471bf0 elementor-widget elementor-widget-candore-sec-title" data-id="47471bf0" data-element_type="widget" data-widget_type="candore-sec-title.default">
											<div class="elementor-widget-container">
												<div class="section-head mb-0 text-left ">
													<div class="section-subtitle"><?php echo esc_html($chef_experience); ?> Years of Experience</div>
													<div class="section-title"><?php echo esc_html($chef_name); ?>'s Menu</div>
												</div>
											</div>
										</div>
										<div class="elementor-element elementor-element-2c2b2a9c elementor-widget elementor-widget-candore-text-block" data-id="2c2b2a9c" data-element_type="widget" data-widget_type="candore-text-block.default">
											<div class="elementor-widget-container">
												<div class="text-left candore-text-block">
													<p><?php echo esc_html($chef_desc); ?></p>
												</div>
											</div>
										</div>
										<div class="elementor-element elementor-element-7601071b elementor-widget elementor-widget-candore-signature" data-id="7601071b" data-element_type="widget" data-widget_type="candore-signature.default">
											<div class="elementor-widget-container">
												<div class="about-bottom cd-about-signature mt-0 mb-0">
													<img decoding="async" src="<?php echo get_the_post_thumbnail_url(94, 'full'); ?>" alt="" class="image about-signature">
													<div class="about-name-wrapper">
														<div class="about-name"><?php echo esc_html($chef_name); ?></div>
														<div class="about-rol"><?php echo esc_html($chef_position); ?></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>


					</div>
				</div>
			</div>
		</section>

		<!-- cpt done  -->
		<section class="elementor-section elementor-top-section elementor-element elementor-element-521ff78 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=521ff78 data-element_type=section data-settings={&quot;background_background&quot;:&quot;classic&quot;}>
			<div class="elementor-container elementor-column-gap-no">
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d508b22" data-id=d508b22 data-element_type=column>
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-b064fec elementor-widget elementor-widget-candore-sec-title" data-id=b064fec data-element_type=widget data-widget_type=candore-sec-title.default>
							<div class=elementor-widget-container>
								<div class="section-head mb-0 text-center ">
									<div class=section-subtitle>Should to Try</div>
									<div class=section-title>Chef Recommends</div>
									<div class=section-backtitle>Menu</div>
									<span class=icon><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-chef-hat.png'); ?>" alt=""></span>
								</div>
							</div>
						</div>

						<div class="elementor-section elementor-inner-section elementor-element elementor-element-1f68923 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id=1f68923 data-element_type=section>
							<div class="elementor-container elementor-column-gap-default">
								<?php
								$recommend_dishes_id = array(116, 119, 122);

								$icon_urls = array(
									'Food' => esc_url(get_template_directory_uri() . '/assets/images/icon-burger-white.png'),
									'Salad' => esc_url(get_template_directory_uri() . '/assets/images/icon-salad-white.png'),
									'Drinks' => esc_url(get_template_directory_uri() . '/assets/images/icon-whiskey-white.png')
								);

								foreach ($recommend_dishes_id as $dish_id) {
									$dish_post = get_post($dish_id);

									if ($dish_post) {
										$image_url = get_the_post_thumbnail_url($dish_id, 'full');
										$category = get_the_category($dish_id);
										$category_name = !empty($category) ? esc_html($category[0]->name) : '';
										$icon_url = isset($icon_urls[$category_name]) ? $icon_urls[$category_name] : ''; // Get icon URL based on category
										$title = get_the_title($dish_id);
										$permalink = get_permalink($dish_id);
										$description = get_the_excerpt($dish_id);
								?>

										<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2243748">
											<div class="elementor-widget-wrap elementor-element-populated">
												<div class="elementor-element elementor-element-de0e491 elementor-widget elementor-widget-candore-hover-box">
													<div class="elementor-widget-container">
														<div class="chef-recommends">
															<div class="item">
																<div class="position-re o-hidden">
																	<img src="<?php echo esc_url($image_url); ?>">
																</div>
																<span class="category"><?php echo esc_html($category_name); ?></span>
																<div class="con">
																	<div class="icon cd-hover-box-icon">
																		<img src="<?php echo esc_url($icon_url); ?>">
																	</div>
																	<h6>
																		<a href="<?php echo esc_url($permalink); ?>" target="_self">
																			<?php echo esc_html($category_name); ?>
																		</a>
																	</h6>
																	<h5>
																		<a href="<?php echo esc_url($permalink); ?>" target="_self">
																			<?php echo esc_html($title); ?>
																		</a>
																	</h5>
																	<div class="line"></div>
																	<div class="row">
																		<div class="col-md-12 text-center">
																			<div class="permalink"><?php echo esc_html($description); ?></div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
								<?php
									}
								}
								?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section class="elementor-section elementor-top-section elementor-element elementor-element-68feb8d4 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=68feb8d4 data-element_type=section data-settings={&quot;background_background&quot;:&quot;classic&quot;}>
			<div class=elementor-background-overlay></div>
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2483e2d" data-id=2483e2d data-element_type=column>
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-section elementor-inner-section elementor-element elementor-element-155b4aec elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id=155b4aec data-element_type=section>
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7de869f2" data-id=7de869f2 data-element_type=column>
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-7ca86788 elementor-widget elementor-widget-candore-testimonials" data-id=7ca86788 data-element_type=widget data-widget_type=candore-testimonials.default>
											<div class=elementor-widget-container>
												<div class=testimonials>
													<div class="testimonials-box mb-0">
														<div class="owl-carousel owl-theme owl-carousel-2" data-carousel-autoplay=true data-carousel-speed=1000 data-carousel-timeout=9000 data-carousel-dots=false data-carousel-dots-mobile=false>
															<div class=item>
																<span>
																	<i class=star-rating-el></i>
																	<i class=star-rating-el></i>
																	<i class=star-rating-el></i>
																	<i class=star-rating-el></i>
																	<i class=star-rating-el></i>
																</span>
																<p>
																<p>Restaurant dapibus asue metus the nec feusiate eraten miss hendreri net ve ante the lemon sanleo nectan
																	feugiat erat hendrerit necuis ve ante otel inilla duiman at finibus viverra neca the sene on satien.</p>
																</p>
																<div class=info>
																	<div class=author-img> <img decoding=async src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/customerimg1.jpg'); ?>" alt></div>
																	<div class=cont>
																		<h6>Emily Brown</h6>
																		<span>Customer review</span>
																	</div>
																</div>
															</div>
															<div class=item>
																<span>
																	<i class=star-rating-el></i>
																	<i class=star-rating-el></i>
																	<i class=star-rating-el></i>
																	<i class=star-rating-el></i>
																	<i class=star-rating-el></i>
																</span>
																<p>
																<p>Restaurant dapibus asue metus the nec feusiate eraten miss hendreri net ve ante the lemon sanleo nectan
																	feugiat erat hendrerit necuis ve ante otel inilla duiman at finibus viverra neca the sene on satien.</p>
																</p>
																<div class=info>
																	<div class=author-img> <img decoding=async src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/customerimg2.jpg'); ?>" alt></div>
																	<div class=cont>
																		<h6>Nolan White</h6>
																		<span>Customer review</span>
																	</div>
																</div>
															</div>
															<div class=item>
																<span>
																	<i class=star-rating-el></i>
																	<i class=star-rating-el></i>
																	<i class=star-rating-el></i>
																	<i class=star-rating-el></i>
																	<i class=star-rating-el></i>
																</span>
																<p>
																<p>Restaurant dapibus asue metus the nec feusiate eraten miss hendreri net ve ante the lemon sanleo nectan
																	feugiat erat hendrerit necuis ve ante otel inilla duiman at finibus viverra neca the sene on satien.</p>
																</p>
																<div class=info>
																	<div class=author-img> <img decoding=async src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/customerimg3.jpg'); ?>" alt></div>
																	<div class=cont>
																		<h6>Olivia Martin</h6>
																		<span>Customer review</span>
																	</div>
																</div>
															</div>
														</div>

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5e22aaf0" data-id=5e22aaf0 data-element_type=column>
									<div class=elementor-widget-wrap></div>
								</div>
								<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3d39fd2a" data-id=3d39fd2a data-element_type=column>
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-54104183 elementor-widget elementor-widget-candore-worktime" data-id=54104183 data-element_type=widget data-widget_type=candore-worktime.default>
											<div class=elementor-widget-container>
												<div class="opening-hours-box mb-0">
													<div class=head-box>
														<h4>Opening Hours</h4>
													</div>
													<div class=content-box>
														<div class=item>
															<div class=info>
																<div class="row">
																	<?php
																	// Assuming you have a custom post type named 'opening_time'
																	$opening_times = new WP_Query(array('post_type' => 'opening_time', 'posts_per_page' => -1));
																	if ($opening_times->have_posts()) :
																		$loopkey = 0;
																		while ($opening_times->have_posts()) : $opening_times->the_post();
																			// Get the post title (day)
																			$day = get_the_title();

																			// Get the opening and closing hours using get_post_meta
																			$opening_hour = get_post_meta(get_the_ID(), 'opening_time', true);
																			$closing_hour = get_post_meta(get_the_ID(), 'closing_time', true);
																			$loopkey = $loopkey + 1;
																	?>
																			<div class="col col-md-5">
																				<div class="cont">
																					<h6 class="day"><?php echo esc_html($day); ?></h6>
																					<span class="time"><?php echo esc_html($opening_hour); ?></span><br>
																					<span class="time"><?php echo esc_html($closing_hour); ?></span>
																				</div>
																			</div>

																			<?php
																			// Check if it's the first iteration and display the <div class="col col-md-2">
																			if ($loopkey < 2) :
																			?>
																				<div class="col col-md-2">
																					<div class="vl"></div>
																				</div>
																			<?php
																			endif;
																			?>
																	<?php
																		endwhile;
																		wp_reset_postdata();
																	endif;
																	?>
																</div>
															</div>
														</div>
													</div>
													<a href="./contact.html" target=_self class="button-1 mt-15">Make A Reservation</a>
													<div class=clear></div>
													<p>
														<small>You can also call:
															<?php
															$contact_no_id = 69;
															setup_postdata(get_post($contact_no_id));
															$contact_no_with_tags = get_the_content();
															$contact_number = wp_strip_all_tags($contact_no_with_tags);
															?>
															<a href=""><?php echo esc_html($contact_number); ?></a>
															<?php
															// Reset Post Data
															wp_reset_postdata();
															?>
															to make a reservation.
														</small>
													</p>
													<p class=mt-0>
														<a href=#0>
															<i class='bx bx-current-location'></i>
														</a>
														<small>
															<?php
															$address_id = 154;
															setup_postdata(get_post($address_id));
															$address_with_tags = get_the_content();
															$address = wp_strip_all_tags($address_with_tags);
															echo esc_html($address);
															wp_reset_postdata();
															?>
														</small>
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- no cpt ...... static section  -->
		<section class="elementor-section elementor-top-section elementor-element elementor-element-5a6a57b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=5a6a57b data-element_type=section>
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-711baa5" data-id=711baa5 data-element_type=column>
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-a2f2443 elementor-widget elementor-widget-candore-services" data-id=a2f2443 data-element_type=widget data-widget_type=candore-services.default>
							<div class=elementor-widget-container>
								<div class=services-box>
									<div class=item>
										<span class="icon">
											<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-cooking-golden.png'); ?>" alt="">
										</span>
										<div class=cont>
											<h5><a href="menu.html" target=_self>Breakfast</a></h5>
											<p>Breakfast ut nisl quam nestibulum drana odio elementum sceisue the
												can golden varius the dis monte.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-6320c0d" data-id=6320c0d data-element_type=column>
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-36de42f elementor-widget elementor-widget-candore-services" data-id=36de42f data-element_type=widget data-widget_type=candore-services.default>
							<div class=elementor-widget-container>
								<div class=services-box>
									<div class=item>
										<span class="icon">
											<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-tray-golden.png'); ?>" alt="">
										</span>
										<div class=cont>
											<h5><a href="menu.html" target=_self>Lunch</a></h5>
											<p>
											<p>The Lunch ut nisl quam nestibulum drana odio elementum sceisue the
												can golden varius the dis monte.</p>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-dc95e6c" data-id=dc95e6c data-element_type=column>
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-2dc58b8 elementor-widget elementor-widget-candore-services" data-id=2dc58b8 data-element_type=widget data-widget_type=candore-services.default>
							<div class=elementor-widget-container>
								<div class=services-box>
									<div class=item>
										<span class="icon">
											<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-chef-golden.png'); ?>" alt="">
										</span>
										<div class=cont>
											<h5><a href="menu.html" target=_self>Dinner</a></h5>
											<p>
											<p>The Dinner ut nisl quam nestibulum drana odio elementum sceisue the
												can golden varius the dis monte.</p>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<!-- cpt done  -->
		<section class="elementor-section elementor-top-section elementor-element elementor-element-6137d59e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=6137d59e data-element_type=section data-settings={&quot;background_background&quot;:&quot;gradient&quot;}>
			<div class=elementor-background-overlay></div>
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3473fac6" data-id=3473fac6 data-element_type=column>
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-262d373b elementor-widget elementor-widget-candore-sec-title" data-id=262d373b data-element_type=widget data-widget_type=candore-sec-title.default>
							<div class=elementor-widget-container>
								<div class="section-head mb-0 text-center ">
									<div class=section-subtitle>First-Class</div>
									<div class=section-title>Our Features</div>
									<div class=section-backtitle>Services</div>
									<span class=icon><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-food-tray-golden.png'); ?>" alt=""></span>
								</div>
							</div>
						</div>
						<div class="elementor-section elementor-inner-section elementor-element elementor-element-40ed99d3 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id=40ed99d3 data-element_type=section>
							<div class="elementor-container elementor-column-gap-default">
								<?php
								// Custom query to retrieve features card posts
								$args = array(
									'post_type' => 'features_card',
									'posts_per_page' => 3, // Adjust the number of posts to display
								);

								$features_query = new WP_Query($args);

								// Loop through features card posts
								if ($features_query->have_posts()) :
									while ($features_query->have_posts()) : $features_query->the_post();

										// Get post meta values
										$feature_image = get_post_meta(get_the_ID(), 'features_card_icon', true);
										$background_image = get_the_post_thumbnail_url(get_the_ID(), 'full'); // Assuming you want to use the featured image as background
										$heading = get_the_title();
										$subheading = get_post_meta(get_the_ID(), 'features_card_subheading', true);
										$description = wp_strip_all_tags(get_the_content()); // Strip HTML tags from the description
								?>
										<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-<?php echo esc_attr(get_the_ID()); ?>" data-id="<?php echo esc_attr(get_the_ID()); ?>" data-element_type="column">
											<div class="elementor-widget-wrap elementor-element-populated">
												<div class="elementor-element elementor-element-<?php echo esc_attr(get_the_ID()); ?> elementor-widget elementor-widget-candore-flip-box" data-id="<?php echo esc_attr(get_the_ID()); ?>" data-element_type="widget" data-widget_type="candore-flip-box.default">
													<div class="elementor-widget-container">
														<div class="first-class-services cd-flip-services">
															<div class="square-flip">
																<div class="square bg-imgd bg-img-flip" style="background-image: url('<?php echo esc_url($background_image); ?>');">
																	<div class="square-container d-flex align-items-end justify-content-end">
																		<div class="box-title">
																			<div class="icon">
																				<img src="<?php echo esc_url($feature_image); ?>" alt="">
																			</div>
																			<h6><?php echo esc_html($subheading); ?></h6>
																			<h4><?php echo esc_html($heading); ?></h4>
																		</div>
																	</div>
																	<div class="flip-overlay"></div>
																</div>
																<div class="square2">
																	<div class="square-container2">
																		<h6><?php echo esc_html($subheading); ?></h6>
																		<h4><?php echo esc_html($heading); ?></h4>
																		<p><?php echo esc_html($description); ?></p>
																		<a href="<?php echo esc_url(home_url('/menu/')); ?>" class="button-4 mt-15" target="_self">View Menu<span></span></a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
								<?php
									endwhile;
									wp_reset_postdata();
								endif;
								?>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>


		<section class="elementor-section elementor-top-section elementor-element elementor-element-f7d6b1e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=f7d6b1e data-element_type=section data-settings={&quot;background_background&quot;:&quot;classic&quot;}>
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-bb07b0d" data-id=bb07b0d data-element_type=column>
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-88e3458 elementor-widget elementor-widget-candore-sec-title" data-id=88e3458 data-element_type=widget data-widget_type=candore-sec-title.default>
							<div class=elementor-widget-container>
								<div class="section-head mb-0 text-center ">
									<div class=section-subtitle>Food &amp; Drink</div>
									<div class=section-title>Menu Book</div>
									<div class=section-backtitle>Menu</div>
									<span class=icon><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-chef-hat.png'); ?>" alt=""></span>
								</div>
							</div>
						</div>
						<div class="elementor-element elementor-element-25af48f elementor-widget elementor-widget-candore-food-menu-tab" data-id=25af48f data-element_type=widget data-widget_type=candore-food-menu-tab.default>
							<div class=elementor-widget-container>
								<div class="menu-book tabs tabs-df">
									<div class="row">
										<?php
										$args = array(
											'post_type'      => 'product',
											'posts_per_page' => 10,
										);
										$query = new WP_Query($args);

										if ($query->have_posts()) :
											while ($query->have_posts()) : $query->the_post();
												$product = wc_get_product(get_the_ID());

												// Skip products that are out of stock
												if (!$product->is_in_stock()) {
													continue;
												}

												$regular_price = $product->get_regular_price();
												$sale_price = $product->get_sale_price();

												if ($sale_price) {
													$price_html = wc_price($sale_price);
												} else {
													$price_html = wc_price($regular_price);
												}
										?>
												<div class="col-md-6">
													<div class="menu-list mb-30">
														<div class="item">
															<div class="img">
																<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
																	<?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?>
																</a>
															</div>
															<div class="flex">
																<div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
																<div class="dots hmi-dec"></div>
																<div class="price">
																	<span class="amount"><?php echo $price_html; ?></span>
																</div>
															</div>
															<p><?php echo custom_trim_description(get_the_excerpt(), 100); ?></p>
														</div>
													</div>
												</div>
										<?php
											endwhile;
											wp_reset_postdata();
										else :
											echo 'No products found.';
										endif;
										?>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section class="elementor-section elementor-top-section elementor-element elementor-element-1666bae elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=1666bae data-element_type=section data-settings={&quot;background_background&quot;:&quot;classic&quot;}>
			<div class=elementor-background-overlay></div>
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-30b50cc" data-id=30b50cc data-element_type=column>
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-79de48b elementor-widget elementor-widget-candore-sec-title" data-id=79de48b data-element_type=widget data-widget_type=candore-sec-title.default>
							<div class=elementor-widget-container>
								<div class="section-head mb-0 text-center ">
									<div class=section-subtitle>Amazing Experience</div>
									<div class=section-title>Watch Our Video</div>
								</div>
							</div>
						</div>
						<div class="elementor-element elementor-element-2549b53 elementor-widget elementor-widget-Candore-video">
							<div class=elementor-widget-container>
								<div class="video-wrapper text-center">
									<a class=vid href=https://vimeo.com/762423057>
										<div class=vid-butn>
											<span class=icon>
												<i class='bx bx-play'></i>
											</span>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section class="elementor-section elementor-top-section elementor-element elementor-element-1b4258c4 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=1b4258c4 data-element_type=section data-settings={&quot;background_background&quot;:&quot;gradient&quot;}>
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5ae2e5bb" data-id=5ae2e5bb data-element_type=column>
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-795831dd elementor-widget elementor-widget-candore-sec-title">
							<div class=elementor-widget-container>
								<div class="section-head mb-0 text-center ">
									<div class=section-subtitle>Our Experts</div>
									<div class=section-title>Meet Our Chefs</div>
									<div class=section-backtitle>Chefs</div>
									<span class=icon><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-chef-hat.png'); ?>" alt=""></span>
								</div>
							</div>
						</div>
						<div class="elementor-section elementor-inner-section elementor-element elementor-element-733d8322 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id=733d8322 data-element_type=section>
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-68e88013" data-id=68e88013 data-element_type=column>
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-235a2573 elementor-widget elementor-widget-candore-team-carousel" data-id=235a2573 data-element_type=widget data-widget_type=candore-team-carousel.default>
											<div class=elementor-widget-container>
												<div class=team>
													<div class="owl-carousel owl-theme owl-carousel-3" data-carousel-autoplay=true data-carousel-speed=1000 data-carousel-timeout=5000 data-carousel-nav=false data-carousel-dots=false data-carousel-dots-mobile=false data-carousel-columns=3>
														<?php
														$specific_chef_ids = array(88, 92, 93);

														$args = array(
															'post_type'      => 'chefs',
															'posts_per_page' => -1,
															'post__in'       => $specific_chef_ids,
															'orderby'        => 'post__in', // Maintain the order of IDs specified
														);
														$chef_query = new WP_Query($args);
														// Check if there are chefs
														if ($chef_query->have_posts()) :
															// Start the loop
															while ($chef_query->have_posts()) : $chef_query->the_post();

																// Get chef information
																$chef_name = get_the_title();
																$chef_position = get_post_meta(get_the_ID(), '_chef_position', true);
																$chef_description = get_the_content();
																$chef_facebook = esc_url(get_post_meta(get_the_ID(), '_facebook_link', true));
																$chef_twitter = esc_url(get_post_meta(get_the_ID(), '_twitter_link', true));
																$chef_linkedin = esc_url(get_post_meta(get_the_ID(), '_linkedin_link', true));
																$chef_instagram = esc_url(get_post_meta(get_the_ID(), '_instagram_link', true));
																// Output HTML for each chef
														?>
																<div class="team-card mb-30">
																	<div class="team-img"><img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" class="w-100"></div>
																	<div class="team-content">
																		<h3 class="team-title"><?php echo $chef_name; ?> <span><?php echo $chef_position; ?></span></h3>
																		<p class="team-text"><?php echo $chef_description; ?></p>
																		<div class="social">
																			<div class="full-width">
																				<a href="<?php echo $chef_linkedin; ?>" target="_blank"><i class='bx bxl-linkedin'></i></a>
																				<a href="<?php echo $chef_facebook; ?>" target="_blank"><i class='bx bxl-facebook'></i></a>
																				<a href="<?php echo $chef_twitter; ?>" target="_blank"><i class='bx bxl-twitter'></i></a>
																				<a href="<?php echo $chef_instagram; ?>" target="_blank"><i class='bx bxl-instagram'></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="title-box">
																		<h3 class="mb-0"><?php echo $chef_name; ?> <span><?php echo $chef_position; ?></span></h3>
																	</div>
																</div>
														<?php
															endwhile;
															// Reset post data
															wp_reset_postdata();
														else :
															echo 'No specific chefs found.';
														endif;
														?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="elementor-section elementor-top-section elementor-element elementor-element-b05e233 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=b05e233 data-element_type=section data-settings={&quot;background_background&quot;:&quot;classic&quot;}>
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-58a0725" data-id=58a0725 data-element_type=column>
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-df8b355 elementor-widget elementor-widget-candore-sec-title" data-id=df8b355 data-element_type=widget data-widget_type=candore-sec-title.default>
							<div class=elementor-widget-container>
								<div class="section-head mb-0 text-center ">
									<div class=section-subtitle>Our Services</div>
									<div class=section-title>Food Category</div>
									<div class=section-backtitle>Services</div>
									<span class=icon><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-hot-food-golden.png'); ?>" alt=""></span>
								</div>
							</div>
						</div>
						<div class="elementor-section elementor-inner-section elementor-element elementor-element-3b7de3c elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id=3b7de3c data-element_type=section>
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6e2a88a" data-id=6e2a88a data-element_type=column>
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-9e667f3 elementor-widget elementor-widget-candore-services" data-id=9e667f3 data-element_type=widget data-widget_type=candore-services.default>
											<div class=elementor-widget-container>
												<div class=services-1>
													<div class=item>
														<span class="icon"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-burger-golden.png'); ?>" alt=""></span>
														<div class=cont>
															<h5><a href="http://wp-resturant-project.test/menu/" target=_self>Cheeseburger</a></h5>
															<p>
															<p>Restaurant vulputate massa ons amet ravida haretra
																nuam the drana miss uctus enec accumsan aliquam sit
																sapien.</p>
															</p>
															<div class=shape>
																<span class="icon"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-burger-golder.png'); ?>" alt=""></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="elementor-element elementor-element-5e3212f elementor-widget elementor-widget-candore-services" data-id=5e3212f data-element_type=widget data-widget_type=candore-services.default>
											<div class=elementor-widget-container>
												<div class=services-1>
													<div class=item>
														<span class="icon"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-fried-chicken-golden.png'); ?>" alt=""></span>
														<div class=cont>
															<h5><a href="http://wp-resturant-project.test/menu/" target=_self>Chicken-Leg</a></h5>
															<p>
															<p>Restaurant vulputate massa ons amet ravida haretra
																nuam the drana miss uctus enec accumsan aliquam sit
																sapien.</p>
															</p>
															<div class=shape>
																<span class="icon"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-fried-chicken-golden.png'); ?>" alt=""></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-9b0bb89" data-id=9b0bb89 data-element_type=column>
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-7ae47cb elementor-widget elementor-widget-candore-services" data-id=7ae47cb data-element_type=widget data-widget_type=candore-services.default>
											<div class=elementor-widget-container>
												<div class=services-1>
													<div class=item>
														<span class="icon"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-pizza-golden.png'); ?>" alt=""></span>
														<div class=cont>
															<h5><a href="http://wp-resturant-project.test/menu/" target=_self>Pizza Slice</a></h5>
															<p>
															<p>Restaurant vulputate massa ons amet ravida haretra
																nuam the drana miss uctus enec accumsan aliquam sit
																sapien.</p>
															</p>
															<div class=shape>
																<span class="icon"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-pizza-golden.png'); ?>" alt=""></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="elementor-element elementor-element-6963428 elementor-widget elementor-widget-candore-services" data-id=6963428 data-element_type=widget data-widget_type=candore-services.default>
											<div class=elementor-widget-container>
												<div class=services-1>
													<div class=item>
														<span class="icon"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-fish-golden.png'); ?>" alt=""></span>
														<div class=cont>
															<h5><a href="http://wp-resturant-project.test/menu/" target=_self>Fish</a></h5>
															<p>
															<p>Restaurant vulputate massa ons amet ravida haretra
																nuam the drana miss uctus enec accumsan aliquam sit
																sapien.</p>
															</p>
															<div class=shape>
																<span class="icon"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-fish-golden.png'); ?>" alt=""></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7523190" data-id=7523190 data-element_type=column>
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-31b2181 elementor-widget elementor-widget-candore-services" data-id=31b2181 data-element_type=widget data-widget_type=candore-services.default>
											<div class=elementor-widget-container>
												<div class=services-1>
													<div class=item>
														<span class="icon"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-coffee-cup-golden.png'); ?>" alt=""></span>
														<div class=cont>
															<h5><a href="http://wp-resturant-project.test/menu/" target=_self>Coffee-Cup</a></h5>
															<p>
															<p>Restaurant vulputate massa ons amet ravida haretra
																nuam the drana miss uctus enec accumsan aliquam sit
																sapien.</p>
															</p>
															<div class=shape>
																<span class="icon"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-coffee-cup-golden.png'); ?>" alt=""></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="elementor-element elementor-element-3505aed elementor-widget elementor-widget-candore-services" data-id=3505aed data-element_type=widget data-widget_type=candore-services.default>
											<div class=elementor-widget-container>
												<div class=services-1>
													<div class=item>
														<span class="icon"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-cake-golden.png'); ?>" alt=""></span>
														<div class=cont>
															<h5><a href="http://wp-resturant-project.test/menu/" target=_self>Wedding Cake</a></h5>
															<p>
															<p>Restaurant vulputate massa ons amet ravida haretra
																nuam the drana miss uctus enec accumsan aliquam sit
																sapien.</p>
															</p>
															<div class=shape>
																<span class="icon"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-cake-golden.png'); ?>" alt=""></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section class="elementor-section elementor-top-section elementor-element elementor-element-28f3a13 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id=28f3a13 data-element_type=section>
			<div class="elementor-container elementor-column-gap-no">
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d634b29" data-id=d634b29 data-element_type=column>
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-a2464d1 elementor-widget elementor-widget-candore-image-slider" data-id=a2464d1 data-element_type=widget data-widget_type=candore-image-slider.default>
							<div class=elementor-widget-container>
								<div class="parallax-header parallax-slider-fade">
									<div class="owl-carousel owl-theme owl-carousel-4" data-carousel-autoplay=false data-carousel-speed=100 data-carousel-timeout=4000 data-carousel-nav=false data-carousel-dots=true data-carousel-dots-mobile=true>
										<div class="text-left item bg-img-s" data-overlay-dark=5 style="background: url(<?php echo esc_url(get_template_directory_uri() . '/assets/images/1-2.jpg'); ?>);">
											<div class="v-middle caption">
												<div class=container>
													<div class=row>
														<div class="col-md-12 text-center"> <span class=sale>50%</span></div>
													</div>
													<div class=row>
														<div class="col-md-12 text-center">
															<div class=o-hidden>
																<a href="http://wp-resturant-project.test/menu/" target=_self>
																	<h6>Daily Main Course</h6>
																	<h2>New York Steak</h2>
																	<p>Steak, salt, pepper, olive oil, butter and
																		garlic.</p>
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="text-left item bg-img-s" data-overlay-dark=4 style="background: url(<?php echo esc_url(get_template_directory_uri() . '/assets/images/2-2.jpg'); ?>);">
											<div class="v-middle caption">
												<div class=container>
													<div class=row>
														<div class="col-md-12 text-center"> <span class=sale>30%</span></div>
													</div>
													<div class=row>
														<div class="col-md-12 text-center">
															<div class=o-hidden>
																<a href="http://wp-resturant-project.test/menu/" target=_self>
																	<h6>Daily Menu Salad</h6>
																	<h2>New Ceaser Salad</h2>
																	<p>Romaine lettuce, croutons, parmigiano</p>
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="text-left item bg-img-s" data-overlay-dark=5 style="background: url(<?php echo esc_url(get_template_directory_uri() . '/assets/images/3-2.jpg'); ?>);">
											<div class="v-middle caption">
												<div class=container>
													<div class=row>
														<div class="col-md-12 text-center"> <span class=sale>30%</span></div>
													</div>
													<div class=row>
														<div class="col-md-12 text-center">
															<div class=o-hidden>
																<a href="http://wp-resturant-project.test/menu/" target=_self>
																	<h6>Daily Menu Dessert</h6>
																	<h2>New York Cheesecake</h2>
																	<p>Cheesecake, strawberry &amp; lime salad</p>
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section class="elementor-section elementor-top-section elementor-element elementor-element-18015697 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=18015697 data-element_type=section data-settings={&quot;background_background&quot;:&quot;gradient&quot;}>
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-da468f6" data-id=da468f6 data-element_type=column>
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-3a0d22f3 elementor-widget elementor-widget-candore-sec-title" data-id=3a0d22f3 data-element_type=widget data-widget_type=candore-sec-title.default>
							<div class=elementor-widget-container>
								<div class="section-head mb-0 text-center ">
									<div class=section-subtitle>Latest news</div>
									<div class=section-title>News & Events</div>
									<div class=section-backtitle>Blog</div>
									<span class=icon><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-star2-golden.png'); ?>" alt=""></span>
								</div>
							</div>
						</div>
						<div class="elementor-element elementor-element-5fc1393 elementor-widget elementor-widget-candore-blog-carousel" data-id=5fc1393 data-element_type=widget data-widget_type=candore-blog-carousel.default>
							<div class=elementor-widget-container>
								<div class=news>
									<div class=row>
										<div class=col-md-12>
											<div class="owl-carousel owl-theme owl-carousel-3" data-carousel-autoplay=true data-carousel-speed=1000 data-carousel-timeout=5000 data-carousel-nav=false data-carousel-dots=true data-carousel-dots-mobile=true data-carousel-columns=3>
												<?php
												// Define the query parameters to get the latest three blog posts
												$args = array(
													'post_type'      => 'blogs',
													'posts_per_page' => 3,
													'orderby'        => 'date',
													'order'          => 'DESC',
												);

												$query = new WP_Query($args);

												// Loop through the query results
												while ($query->have_posts()) :
													$query->the_post();

													// Retrieve post data
													$post_id           = get_the_ID();
													$post_title        = get_the_title();
													$post_date         = get_the_date('M j');
													$post_link         = get_permalink();
													$post_category     = get_the_category();
													$post_category_name = !empty($post_category) && is_array($post_category) ? esc_html($post_category[0]->name) : '';
													$post_tags         = get_the_tags();
													$post_thumbnail    = get_the_post_thumbnail($post_id, 'large');

													// Output the HTML structure for each post
												?>
													<div class="item">
														<div class="position-re o-hidden position-re-order">
															<div class="cd-pt-ab">
																<?php echo $post_thumbnail; ?>
															</div>
															<div class="date">
																<a href="<?php echo esc_url($post_link); ?>">
																	<span><?php echo esc_html($post_date); ?></span>
																</a>
															</div>
														</div>
														<div class="con">
															<span class="category">
																<?php if (!empty($post_category)) : ?>
																	<a href="<?php echo esc_url(get_category_link($post_category[0]->term_id)); ?>">
																		<?php echo esc_html($post_category_name); ?>
																	</a>
																<?php endif; ?>
															</span>
															<h5><a href="<?php echo esc_url($post_link); ?>"><?php echo esc_html($post_title); ?></a></h5>
														</div>
													</div>
												<?php
												endwhile;

												// Restore original post data
												wp_reset_postdata();
												?>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section class="elementor-section elementor-top-section elementor-element elementor-element-287a9c70 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=287a9c70 data-element_type=section data-settings={&quot;background_background&quot;:&quot;classic&quot;}>
			<div class=elementor-background-overlay></div>
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-78a0014f" data-id=78a0014f data-element_type=column>
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-section elementor-inner-section elementor-element elementor-element-c2d46c9 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id=c2d46c9 data-element_type=section>
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3e57e42d" data-id=3e57e42d data-element_type=column>
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-60e083da elementor-widget elementor-widget-candore-single-testimonial" data-id=60e083da data-element_type=widget data-widget_type=candore-single-testimonial.default>
											<div class=elementor-widget-container>
												<div class=testimonials>
													<p class=mb-0><i class=star-rating-el></i>
														<i class=star-rating-el></i><i class=star-rating-el></i>
														<i class=star-rating-el></i><i class=star-rating-el></i>
													</p>
													<h5>A modern restaurant with a menu that will make your mouth
														water.</h5>
												</div>
											</div>
										</div>
										<div class="elementor-element elementor-element-e1e62d5 elementor-widget elementor-widget-candore-contact" data-id=e1e62d5 data-element_type=widget data-widget_type=candore-contact.default>
											<div class=elementor-widget-container>
												<div class="reservations cd-reservations">
													<div class=icon><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/tray-icon-golden.png'); ?>" alt=""></div>
													<div class=text>
														<p>Reservation</p>
														<?php
														$contact_no_id = 69;
														setup_postdata(get_post($contact_no_id));
														$contact_no_with_tags = get_the_content();
														$contact_number = wp_strip_all_tags($contact_no_with_tags);
														?>
														<a href=""><?php echo esc_html($contact_number); ?></a>
														<?php
														// Reset Post Data
														wp_reset_postdata();
														?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-55adb912" data-id=55adb912 data-element_type=column>
									<div class=elementor-widget-wrap></div>
								</div>
								<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-33819319" data-id=33819319 data-element_type=column>
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-077e5f0 elementor-widget elementor-widget-candore-form" data-id=077e5f0 data-element_type=widget data-widget_type=candore-form.default>
											<div class=elementor-widget-container>
												<div class=booking-box>
													<div class="head-box text-center">
														<h4>Make A Reservation</h4>
													</div>
													<div class="booking-inner clearfix">
														<div class="form1 clearfix contact__form vc_template">
															<div class="wpcf7 no-js" id=wpcf7-f7-p22-o1 lang=en-US dir=ltr>
																<div class=screen-reader-response>
																	<p role=status aria-live=polite aria-atomic=true></p>
																	<ul></ul>
																</div>
																<form action="" method=post class="wpcf7-form init" aria-label="Contact form" novalidate=novalidate data-status=init>
																	<div style="display: none;">
																		<input type=hidden name=_wpcf7 value=7>
																		<input type=hidden name=_wpcf7_version value=5.8.1>
																		<input type=hidden name=_wpcf7_locale value=en_US>
																		<input type=hidden name=_wpcf7_unit_tag value=wpcf7-f7-p22-o1>
																		<input type=hidden name=_wpcf7_container_post value=22>
																		<input type=hidden name=_wpcf7_posted_data_hash value>
																	</div>
																	<div class=row>
																		<div class=col-md-6>
																			<p><span class=wpcf7-form-control-wrap data-name=your-name><input size=40 class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" autocomplete=name aria-required=true aria-invalid=false placeholder="Your Name" value type=text name=your-name></span></p>
																		</div>
																		<div class=col-md-6>
																			<p><span class=wpcf7-form-control-wrap data-name=tel-787><input size=40 class="wpcf7-form-control wpcf7-tel wpcf7-text wpcf7-validates-as-tel" aria-invalid=false placeholder=Phone value type=tel name=tel-787></span></p>
																		</div>
																		<div class=col-md-6>
																			<p><span class=wpcf7-form-control-wrap data-name=your-email><input size=40 class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email" autocomplete=email aria-required=true aria-invalid=false placeholder="Email Address" value type=email name=your-email></span></p>
																		</div>
																		<div class=col-md-6>
																			<p><span class=wpcf7-form-control-wrap data-name=date-510><input class="wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid=false placeholder=Date value type=date name=date-510></span></p>
																		</div>
																		<div class=col-md-6>
																			<p><span class=wpcf7-form-control-wrap data-name=menu-706><select class="wpcf7-form-control wpcf7-select" aria-invalid=false name=menu-706>
																						<option value=Persons>
																							Persons</option>
																						<option value="1 Person">1
																							Person</option>
																						<option value="2 Persons">2
																							Persons</option>
																						<option value="3 Persons">3
																							Persons</option>
																						<option value="4 Persons">4
																							Persons</option>
																						<option value="5 Persons">5
																							Persons</option>
																					</select></span></p>
																		</div>
																		<div class=col-md-6>
																			<p><span class=wpcf7-form-control-wrap data-name=menu-340><select class="wpcf7-form-control wpcf7-select" aria-invalid=false name=menu-340>
																						<option value=Time>Time
																						</option>
																						<option value="10:00 am">
																							10:00 am</option>
																						<option value="11:00 am">
																							11:00 am</option>
																						<option value="12:00 pm">
																							12:00 pm</option>
																						<option value="14:00 pm">
																							14:00 pm</option>
																						<option value="16:00 pm">
																							16:00 pm</option>
																					</select></span></p>
																		</div>
																	</div>
																	<p>
																	<div class="wpcf7-form-control has-spinner wpcf7-submit">
																		<button class="btn-form1-submit mt-15">Check
																			Availability</button>
																	</div>
																	</p>
																	<div class=wpcf7-response-output aria-hidden=true></div>
																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section class="elementor-section elementor-top-section elementor-element elementor-element-cbe95e3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=cbe95e3 data-element_type=section data-settings={&quot;background_background&quot;:&quot;classic&quot;}>
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3b0d5d2" data-id=3b0d5d2 data-element_type=column>
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-a9b2e11 elementor-widget elementor-widget-candore-clients" data-id=a9b2e11 data-element_type=widget data-widget_type=candore-clients.default>
							<div class=elementor-widget-container>
								<div class="awards clients">
									<div class="owl-carousel owl-theme owl-carousel-5" data-carousel-autoplay=true data-carousel-speed=500 data-carousel-timeout=2000 data-carousel-columns=5 data-carousel-gap=30>

										<?php
										// Query to retrieve awards
										$args = array(
											'post_type'      => 'awards',
											'posts_per_page' => -1, // Retrieve all awards
										);
										$awards_query = new WP_Query($args);

										// Check if there are awards
										if ($awards_query->have_posts()) :
											// Start the loop
											while ($awards_query->have_posts()) : $awards_query->the_post();

												// Get award thumbnail
												$thumbnail = get_the_post_thumbnail(get_the_ID(), 'thumbnail');

												// Output HTML for each award thumbnail
										?>
												<div class="clients-logo awards-logo">
													<a href="#" target="_self">
														<?php echo $thumbnail; ?>
													</a>
												</div>
										<?php
											endwhile;
											// Reset post data
											wp_reset_postdata();
										endif;
										?>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-8c81c58" data-id=8c81c58 data-element_type=column>
					<div class=elementor-widget-wrap></div>
				</div>
			</div>
		</section>


	</div>
</section>
<?php get_template_part('template-parts/footer'); ?>