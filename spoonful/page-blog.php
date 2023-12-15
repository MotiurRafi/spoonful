<?php
/*
Template Name: Blog Page
*/
?>
<?php get_template_part('template-parts/header'); ?>
<?php get_template_part('template-parts/extension1'); ?>
<?php get_template_part('template-parts/sign-page'); ?>


<section class=cd-full-width data-scroll-index=0>
    <div data-elementor-type=wp-page data-elementor-id=576 class="elementor elementor-576">
        <section class="elementor-section elementor-top-section elementor-element elementor-element-90763f5 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id=90763f5 data-element_type=section>
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-328e4482" data-id=328e4482 data-element_type=column>
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-a612f2d elementor-widget elementor-widget-candore-banner-simple" data-id=a612f2d data-element_type=widget data-widget_type=candore-banner-simple.default>
                            <div class=elementor-widget-container>
                                <div class="banner-header valign bg-img bg-img-d-s bg-fixed" data-overlay-dark=4 style="background-image: url(<?php echo esc_url(get_template_directory_uri() . '/assets/images/blogpagebanner.jpg'); ?>);">
                                    <div class=container>
                                        <div class=row>
                                            <div class="col-md-12 text-center caption mt-60">
                                                <h5>Latest News</h5>
                                                <h1>
                                                    <?php
                                                    $web_title_id = 140;
                                                    setup_postdata(get_post($web_title_id));
                                                    $web_title_with_tags = get_the_content();
                                                    $web_title = wp_strip_all_tags($web_title_with_tags);
                                                    echo esc_html($web_title . ' Resturant');
                                                    // Reset Post Data
                                                    wp_reset_postdata();
                                                    ?>
                                                    Blog <span>Our History</span>
                                                </h1>
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
        <section class="elementor-section elementor-top-section elementor-element elementor-element-9df72f6 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=9df72f6 data-element_type=section data-settings={&quot;background_background&quot;:&quot;classic&quot;}>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0f376d1" data-id=0f376d1 data-element_type=column>
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-e79ba28 elementor-widget elementor-widget-candore-blog-list" data-id=e79ba28 data-element_type=widget data-widget_type=candore-blog-list.default>
                            <div class=elementor-widget-container>
                                <div class=news>
                                    <div class=row>
                                        <div class="col-md-12">
                                            <?php
                                            // Query to retrieve three latest blog posts
                                            $args = array(
                                                'post_type'      => 'blogs',
                                                'posts_per_page' => 3,
                                                'orderby'        => 'date',
                                                'order'          => 'DESC',
                                            );
                                            $blogs_query = new WP_Query($args);

                                            // Check if there are blog posts
                                            if ($blogs_query->have_posts()) :
                                                // Start the loop
                                                while ($blogs_query->have_posts()) : $blogs_query->the_post();

                                                    // Get blog information
                                                    $thumbnail = get_the_post_thumbnail(get_the_ID(), 'large');
                                                    $category = get_the_category()[0]->name;
                                                    $title = get_the_title();
                                                    $date = get_the_date('F j, Y');

                                                    // Output HTML for each blog post
                                            ?>
                                                    <div class="chef-recommends-2 mb-90 animate-box if-child-blog" data-animate-effect="fadeInUp">
                                                        <figure class="if-child-image">
                                                            <?php echo $thumbnail; ?>
                                                        </figure>
                                                        <div class="caption if-child-items">
                                                            <h3>
                                                                <a href="<?php echo get_category_link(get_cat_ID($category)); ?>"><?php echo $category; ?></a>
                                                            </h3>
                                                            <h4><a href="<?php the_permalink(); ?>"><?php echo $title; ?></a></h4>
                                                            <p><?php echo custom_trim_description(get_the_excerpt(), 250); ?></p>
                                                            <hr class="border-2">
                                                            <div class="info-wrapper">
                                                                <div class="more">
                                                                    <a href="<?php the_permalink(); ?>" class="link-btn blck" tabindex="0">Read More <i class='bx bx-right-arrow-alt'></i></a>
                                                                </div>
                                                                <div class="icon calendar"> <i class='bx bx-calendar'></i> <?php echo $date; ?></div>
                                                            </div>
                                                        </div>
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
                </div>
            </div>
        </section>
        <section class="elementor-section elementor-top-section elementor-element elementor-element-4997fb95 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=4997fb95 data-element_type=section data-settings={&quot;background_background&quot;:&quot;classic&quot;}>
            <div class=elementor-background-overlay></div>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-250f293d" data-id=250f293d data-element_type=column>
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-section elementor-inner-section elementor-element elementor-element-290a46d5 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id=290a46d5 data-element_type=section>
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6d1a67da" data-id=6d1a67da data-element_type=column>
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-249c8307 elementor-widget elementor-widget-candore-single-testimonial" data-id=249c8307 data-element_type=widget data-widget_type=candore-single-testimonial.default>
                                            <div class=elementor-widget-container>
                                                <div class=testimonials>
                                                    <p class=mb-0><i class=star-rating-el></i><i class=star-rating-el></i><i class=star-rating-el></i><i class=star-rating-el></i><i class=star-rating-el></i>
                                                    </p>
                                                    <h5>A modern restaurant with a menu that will make your mouth
                                                        water.</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-1b03a36d elementor-widget elementor-widget-candore-contact" data-id=1b03a36d data-element_type=widget data-widget_type=candore-contact.default>
                                            <div class=elementor-widget-container>
                                                <div class="reservations cd-reservations">
                                                    <div class=icon>
                                                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/tray-icon-golden.png'); ?>" alt="">
                                                    </div>
                                                    <div class=text>
                                                        <p>Reservation</p><?php
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
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1563abc1" data-id=1563abc1 data-element_type=column>
                                    <div class=elementor-widget-wrap></div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3f36006a" data-id=3f36006a data-element_type=column>
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-7f588238 elementor-widget elementor-widget-candore-form" data-id=7f588238 data-element_type=widget data-widget_type=candore-form.default>
                                            <div class=elementor-widget-container>
                                                <div class=booking-box>
                                                    <div class="head-box text-center">
                                                        <h4>Make A Reservation</h4>
                                                    </div>
                                                    <div class="booking-inner clearfix">
                                                        <div class="form1 clearfix contact__form vc_template">
                                                            <div class="wpcf7 no-js" id=wpcf7-f7-p576-o1 lang=en-US dir=ltr>
                                                                <div class=screen-reader-response>
                                                                    <p role=status aria-live=polite aria-atomic=true></p>
                                                                    <ul></ul>
                                                                </div>
                                                                <form action=/demo/wp/candore/blog-2/#wpcf7-f7-p576-o1 method=post class="wpcf7-form init" aria-label="Contact form" novalidate=novalidate data-status=init>
                                                                    <div style="display: none;">
                                                                        <input type=hidden name=_wpcf7 value=7>
                                                                        <input type=hidden name=_wpcf7_version value=5.8.1>
                                                                        <input type=hidden name=_wpcf7_locale value=en_US>
                                                                        <input type=hidden name=_wpcf7_unit_tag value=wpcf7-f7-p576-o1>
                                                                        <input type=hidden name=_wpcf7_container_post value=576>
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
        <section class="elementor-section elementor-top-section elementor-element elementor-element-28cc8fe1 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=28cc8fe1 data-element_type=section data-settings={&quot;background_background&quot;:&quot;classic&quot;}>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-17bbbec0" data-id=17bbbec0 data-element_type=column>
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-7adf3f2d elementor-widget elementor-widget-candore-clients" data-id=7adf3f2d data-element_type=widget data-widget_type=candore-clients.default>
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
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-20c542e0" data-id=20c542e0 data-element_type=column>
                    <div class=elementor-widget-wrap></div>
                </div>
            </div>
        </section>
    </div>
</section>
<style>
    .if-child-blog .if-child-image img {
        height: 33rem;
    }
</style>

<?php get_template_part('template-parts/footer'); ?>