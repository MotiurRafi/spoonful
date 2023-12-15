<?php
/*
Template Name: Menu Page
*/
?>
<?php get_template_part('template-parts/header'); ?>
<?php get_template_part('template-parts/extension1'); ?>
<?php get_template_part('template-parts/sign-page'); ?>

<section class=cd-full-width data-scroll-index=0>
    <div data-elementor-type=wp-page data-elementor-id=701 class="elementor elementor-701">


        <section class="elementor-section elementor-top-section elementor-element elementor-element-2764c619 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id=2764c619 data-element_type=section>
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-56b28153" data-id=56b28153 data-element_type=column>
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-409dd52a elementor-widget elementor-widget-candore-banner-simple" data-id=409dd52a data-element_type=widget data-widget_type=candore-banner-simple.default>
                            <div class=elementor-widget-container>
                                <div class="banner-header valign bg-img bg-img-d-s bg-fixed" data-overlay-dark=6 style="background-image: url(<?php echo esc_url(get_template_directory_uri() . '/assets/images/banner13.jpg'); ?>);">
                                    <div class=container>
                                        <div class=row>
                                            <div class="col-md-12 text-center caption mt-60">
                                                <h5>RESTAURAN</h5>
                                                <h1>
                                                    Menu Book <span>Food &amp; Drink</span></h1>
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


        <section class="elementor-section elementor-top-section elementor-element elementor-element-1eb0f26 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=1eb0f26 data-element_type=section data-settings={&quot;background_background&quot;:&quot;classic&quot;}>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e7b6364" data-id=e7b6364 data-element_type=column>
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-5eebd86 elementor-widget elementor-widget-candore-food-menu-book" data-id=5eebd86 data-element_type=widget data-widget_type=candore-food-menu-book.default>
                            <div class=elementor-widget-container>
                                <div class="menubook-2 menubook-5">


                                    <?php
                                    // Define an array of categories
                                    $categories = array('main-courses', 'sea-food', 'starter', 'desserts');

                                    foreach ($categories as $category_slug) {
                                        $category = get_term_by('slug', $category_slug, 'product_cat');
                                        $category_id = $category->term_id;

                                        // Get category image URL
                                        $category_image_id = get_woocommerce_term_meta($category_id, 'thumbnail_id', true);
                                        $category_image_url = wp_get_attachment_url($category_image_id);

                                        // Output category image and title
                                        if ($category_image_url) { ?>
                                            <div class="row if-child">
                                                <div class="col-md-6 p-0 item item-<?php echo esc_attr($category_slug); ?>">
                                                    <div class="img left if-child-image">
                                                        <a href="<?php echo esc_url(get_term_link($category_slug, 'product_cat')); ?>">
                                                            <img decoding="async" src="<?php echo esc_url($category_image_url); ?>" alt="<?php echo esc_attr($category->name); ?>">
                                                            <div class="centered">
                                                                <h2><?php echo esc_html($category->name); ?></h2>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>

                                                <?php
                                                // Output products
                                                $product_args = array(
                                                    'post_type'      => 'product',
                                                    'posts_per_page' => 4,
                                                    'product_cat'    => $category_slug,
                                                );

                                                $product_query = new WP_Query($product_args);

                                                if ($product_query->have_posts()) { ?>
                                                    <div class="col-md-6 p-0 valign if-child-items">
                                                        <div class="content menu-book">
                                                            <?php
                                                            while ($product_query->have_posts()) : $product_query->the_post();
                                                                $product = wc_get_product(get_the_ID());
                                                                $price = $product->get_price();
                                                                $gallery_images = $product->get_gallery_image_ids();
                                                            ?>
                                                                <div class="menu-list mb-30">
                                                                    <div class="item">
                                                                        <div class="img">
                                                                            <a href="<?php the_permalink(); ?>" class="image-popup-vertical-fit" title="<?php the_title_attribute(); ?>">
                                                                                <?php
                                                                                // Display the main product image
                                                                                echo get_the_post_thumbnail(get_the_ID(), 'medium', array('loading' => 'lazy'));
                                                                                ?>
                                                                            </a>
                                                                        </div>

                                                                        <div class="flex">
                                                                            <div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                                                                            <div class="dots hmi-dec"></div>
                                                                            <div class="price">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <bdi><span class="woocommerce-Price-currencySymbol"></span> &#36;<?php echo esc_html($price); ?></bdi>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <p><?php echo custom_trim_description(get_the_excerpt(), 60); ?></p>
                                                                    </div>
                                                                </div>
                                                            <?php
                                                            endwhile;
                                                            wp_reset_postdata();
                                                            ?>
                                                        </div>
                                                    </div>
                                            </div>
                                <?php
                                                } else {
                                                    echo 'No products found';
                                                }
                                            }
                                        }
                                ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>


        <section class="elementor-section elementor-top-section elementor-element elementor-element-34f54370 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=34f54370 data-element_type=section data-settings={&quot;background_background&quot;:&quot;classic&quot;}>
            <div class=elementor-background-overlay></div>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-53989c8f" data-id=53989c8f data-element_type=column>
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-section elementor-inner-section elementor-element elementor-element-50a2e1f8 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id=50a2e1f8 data-element_type=section>
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2df9a0e9" data-id=2df9a0e9 data-element_type=column>
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-617b7bca elementor-widget elementor-widget-candore-single-testimonial" data-id=617b7bca data-element_type=widget data-widget_type=candore-single-testimonial.default>
                                            <div class=elementor-widget-container>
                                                <div class=testimonials>
                                                    <p class=mb-0><i class=star-rating-el></i><i class=star-rating-el></i><i class=star-rating-el></i><i class=star-rating-el></i><i class=star-rating-el></i>
                                                    </p>
                                                    <h5>A modern restaurant with a menu that will make your mouth
                                                        water.</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-6d6fb63a elementor-widget elementor-widget-candore-contact" data-id=6d6fb63a data-element_type=widget data-widget_type=candore-contact.default>
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
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-45661b3e" data-id=45661b3e data-element_type=column>
                                    <div class=elementor-widget-wrap></div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-61142e2d" data-id=61142e2d data-element_type=column>
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-76634980 elementor-widget elementor-widget-candore-form" data-id=76634980 data-element_type=widget data-widget_type=candore-form.default>
                                            <div class=elementor-widget-container>
                                                <div class=booking-box>
                                                    <div class="head-box text-center">
                                                        <h4>Make A Reservation</h4>
                                                    </div>
                                                    <div class="booking-inner clearfix">
                                                        <div class="form1 clearfix contact__form vc_template">
                                                            <div class="wpcf7 no-js" id=wpcf7-f7-p701-o1 lang=en-US dir=ltr>
                                                                <div class=screen-reader-response>
                                                                    <p role=status aria-live=polite aria-atomic=true></p>
                                                                    <ul></ul>
                                                                </div>
                                                                <form action=/demo/wp/candore/menu-5/#wpcf7-f7-p701-o1 method=post class="wpcf7-form init" aria-label="Contact form" novalidate=novalidate data-status=init>
                                                                    <div style="display: none;">
                                                                        <input type=hidden name=_wpcf7 value=7>
                                                                        <input type=hidden name=_wpcf7_version value=5.8.1>
                                                                        <input type=hidden name=_wpcf7_locale value=en_US>
                                                                        <input type=hidden name=_wpcf7_unit_tag value=wpcf7-f7-p701-o1>
                                                                        <input type=hidden name=_wpcf7_container_post value=701>
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


        <section class="elementor-section elementor-top-section elementor-element elementor-element-113741de elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=113741de data-element_type=section data-settings={&quot;background_background&quot;:&quot;classic&quot;}>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-72307e18" data-id=72307e18 data-element_type=column>
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-3ed1f1b4 elementor-widget elementor-widget-candore-clients" data-id=3ed1f1b4 data-element_type=widget data-widget_type=candore-clients.default>
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
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4e462ea8" data-id=4e462ea8 data-element_type=column>
                    <div class=elementor-widget-wrap></div>
                </div>
            </div>
        </section>
    </div>
</section>


<?php get_template_part('template-parts/footer'); ?>