<?php
/*
Template Name: About Page
*/
?>
<?php get_template_part('template-parts/header'); ?>
<?php get_template_part('template-parts/extension1'); ?>
<?php get_template_part('template-parts/sign-page'); ?>


<section class=cd-full-width data-scroll-index=0>
    <div data-elementor-type=wp-page data-elementor-id=237 class="elementor elementor-237">


        <section class="elementor-section elementor-top-section elementor-element elementor-element-67a741b elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id=67a741b data-element_type=section>
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b648f94" data-id=b648f94 data-element_type=column>
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-b1b7f80 elementor-widget elementor-widget-candore-banner-simple" data-id=b1b7f80 data-element_type=widget data-widget_type=candore-banner-simple.default>
                            <div class=elementor-widget-container>
                                <div class="banner-header valign bg-img bg-img-d-s bg-fixed" data-overlay-dark=6 style="background-image: url(<?php echo esc_url(get_template_directory_uri() . '/assets/images/aboutpagebanner.jpg'); ?>);">
                                    <div class=container>
                                        <div class=row>
                                            <div class="col-md-12 text-center caption mt-60">
                                                <h5>Who are we</h5>
                                                <h1>
                                                    About Us <span>Our History</span></h1>
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


        <section class="elementor-section elementor-top-section elementor-element elementor-element-4bba73fc elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=4bba73fc data-element_type=section id=test>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5b8a7a97" data-id=5b8a7a97 data-element_type=column>
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-section elementor-inner-section elementor-element elementor-element-eb8a4f6 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id=eb8a4f6 data-element_type=section>
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2bd81d82" data-id=2bd81d82 data-element_type=column>

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
                                        <div class="elementor-element elementor-element-67f1e365 elementor-widget elementor-widget-candore-sec-title" data-id=67f1e365 data-element_type=widget data-widget_type=candore-sec-title.default>
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
                                        <div class="elementor-element elementor-element-5966cf35 elementor-widget elementor-widget-candore-text-block" data-id=5966cf35 data-element_type=widget data-widget_type=candore-text-block.default>
                                            <div class=elementor-widget-container>
                                                <div class=" text-left  candore-text-block">
                                                    <p><?php echo $about_desc; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-2f45f7ad elementor-widget elementor-widget-candore-contact" data-id=2f45f7ad data-element_type=widget data-widget_type=candore-contact.default>
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
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-66837db2" data-id=66837db2 data-element_type=column>
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-66eef4d2 elementor-widget elementor-widget-image" data-id=66eef4d2 data-element_type=widget data-widget_type=image.default>
                                            <div class=elementor-widget-container>
                                                <img decoding=async fetchpriority=high width=700 height=1040 src="<?php echo $about_thumbnail ?>" class="attachment-full size-full wp-image-51" sizes="(max-width: 700px) 100vw, 700px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1865cd5f" data-id=1865cd5f data-element_type=column>
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-58488ffa elementor-widget elementor-widget-image" data-id=58488ffa data-element_type=widget data-widget_type=image.default>
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


        <section class="elementor-section elementor-top-section elementor-element elementor-element-3e33ffd4 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=3e33ffd4 data-element_type=section data-settings={&quot;background_background&quot;:&quot;classic&quot;}>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-475eada9" data-id=475eada9 data-element_type=column>
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-738f909 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=738f909 data-element_type=section>
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-6ce6ca0" data-id=6ce6ca0 data-element_type=column>
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
                                        <div class="elementor-element elementor-element-3bffd935 elementor-widget elementor-widget-image" data-id=3bffd935 data-element_type=widget data-widget_type=image.default>
                                            <div class=elementor-widget-container>
                                                <img decoding=async width=800 height=1049 src="<?php echo esc_url($chef_image_url); ?>" class="attachment-full size-full wp-image-70" sizes="(max-width: 800px) 100vw, 800px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-10ef5308" data-id=10ef5308 data-element_type=column>
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-322f3d9e elementor-widget elementor-widget-candore-sec-title" data-id=322f3d9e data-element_type=widget data-widget_type=candore-sec-title.default>
                                            <div class=elementor-widget-container>
                                                <div class="section-head mb-0 text-left ">
                                                    <div class=section-subtitle><?php echo esc_html($chef_experience); ?> Year of Experience</div>
                                                    <div class=section-title><?php echo esc_html($chef_name); ?>'s Menu</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-51d1efbd elementor-widget elementor-widget-candore-text-block" data-id=51d1efbd data-element_type=widget data-widget_type=candore-text-block.default>
                                            <div class=elementor-widget-container>
                                                <div class=" text-left  candore-text-block">
                                                    <p><?php echo esc_html($chef_desc); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-7dbbf9a5 elementor-widget elementor-widget-candore-signature" data-id=7dbbf9a5 data-element_type=widget data-widget_type=candore-signature.default>
                                            <div class=elementor-widget-container>
                                                <div class="about-bottom cd-about-signature mt-0 mb-0">
                                                    <img decoding=async src="<?php echo get_the_post_thumbnail_url(94, 'full'); ?>" alt class="image about-signature">
                                                    <div class=about-name-wrapper>
                                                        <div class=about-name><?php echo esc_html($chef_name); ?></div>
                                                        <div class=about-rol><?php echo esc_html($chef_position); ?></div>
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


        <section class="elementor-section elementor-top-section elementor-element elementor-element-19ea7a2b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=19ea7a2b data-element_type=section data-settings={&quot;background_background&quot;:&quot;classic&quot;}>
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-157815f3" data-id=157815f3 data-element_type=column>
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-36039ebb elementor-widget elementor-widget-candore-sec-title" data-id=36039ebb data-element_type=widget data-widget_type=candore-sec-title.default>
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


        <section class="elementor-section elementor-top-section elementor-element elementor-element-e549241 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=e549241 data-element_type=section data-settings={&quot;background_background&quot;:&quot;gradient&quot;}>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5a95b56f" data-id=5a95b56f data-element_type=column>
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-5e5be09e elementor-widget elementor-widget-candore-sec-title" data-id=5e5be09e data-element_type=widget data-widget_type=candore-sec-title.default>
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


        <section class="elementor-section elementor-top-section elementor-element elementor-element-80832da elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=80832da data-element_type=section data-settings={&quot;background_background&quot;:&quot;classic&quot;}>
            <div class=elementor-background-overlay></div>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1908ca62" data-id=1908ca62 data-element_type=column>
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-section elementor-inner-section elementor-element elementor-element-61c13eee elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id=61c13eee data-element_type=section>
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-f6df5a4" data-id=f6df5a4 data-element_type=column>
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-63a6e33e elementor-widget elementor-widget-candore-single-testimonial" data-id=63a6e33e data-element_type=widget data-widget_type=candore-single-testimonial.default>
                                            <div class=elementor-widget-container>
                                                <div class=testimonials>
                                                    <p class=mb-0><i class=star-rating-el></i><i class=star-rating-el></i><i class=star-rating-el></i><i class=star-rating-el></i><i class=star-rating-el></i>
                                                    </p>
                                                    <h5>A modern restaurant with a menu that will make your mouth
                                                        water.</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-64c02f66 elementor-widget elementor-widget-candore-contact" data-id=64c02f66 data-element_type=widget data-widget_type=candore-contact.default>
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
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-578084e3" data-id=578084e3 data-element_type=column>
                                    <div class=elementor-widget-wrap></div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-371f6d67" data-id=371f6d67 data-element_type=column>
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-4877d528 elementor-widget elementor-widget-candore-form" data-id=4877d528 data-element_type=widget data-widget_type=candore-form.default>
                                            <div class=elementor-widget-container>
                                                <div class=booking-box>
                                                    <div class="head-box text-center">
                                                        <h4>Make A Reservation</h4>
                                                    </div>
                                                    <div class="booking-inner clearfix">
                                                        <div class="form1 clearfix contact__form vc_template">
                                                            <div class="wpcf7 no-js" id=wpcf7-f7-p237-o1 lang=en-US dir=ltr>
                                                                <div class=screen-reader-response>
                                                                    <p role=status aria-live=polite aria-atomic=true></p>
                                                                    <ul></ul>
                                                                </div>
                                                                <form action=/demo/wp/candore/about/#wpcf7-f7-p237-o1 method=post class="wpcf7-form init" aria-label="Contact form" novalidate=novalidate data-status=init>
                                                                    <div style="display: none;">
                                                                        <input type=hidden name=_wpcf7 value=7>
                                                                        <input type=hidden name=_wpcf7_version value=5.8.1>
                                                                        <input type=hidden name=_wpcf7_locale value=en_US>
                                                                        <input type=hidden name=_wpcf7_unit_tag value=wpcf7-f7-p237-o1>
                                                                        <input type=hidden name=_wpcf7_container_post value=237>
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


        <section class="elementor-section elementor-top-section elementor-element elementor-element-6659875c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=6659875c data-element_type=section data-settings={&quot;background_background&quot;:&quot;classic&quot;}>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-758102fe" data-id=758102fe data-element_type=column>
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-8a63158 elementor-widget elementor-widget-candore-clients" data-id=8a63158 data-element_type=widget data-widget_type=candore-clients.default>
                            <div class=elementor-widget-container>
                                <div class="clients awards">
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
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5d404863" data-id=5d404863 data-element_type=column>
                    <div class=elementor-widget-wrap></div>
                </div>
            </div>
        </section>
    </div>
</section>
<?php get_template_part('template-parts/footer'); ?>