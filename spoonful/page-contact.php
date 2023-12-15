<?php
/*
Template Name: Contact Page
*/
?>
<?php get_template_part('template-parts/header'); ?>
<?php get_template_part('template-parts/extension1'); ?>
<?php get_template_part('template-parts/sign-page'); ?>


<section class=cd-full-width data-scroll-index=0>
    <div data-elementor-type=wp-page data-elementor-id=104 class="elementor elementor-104">


        <section class="elementor-section elementor-top-section elementor-element elementor-element-5ec790b0 elementor-section-full_width elementor-section-height-full elementor-section-height-default elementor-section-items-middle" data-id=5ec790b0 data-element_type=section>
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-48f40201" data-id=48f40201 data-element_type=column>
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-3304402b elementor-widget elementor-widget-candore-banner-image" data-id=3304402b data-element_type=widget data-widget_type=candore-banner-image.default>
                            <div class=elementor-widget-container>
                                <header class="header ">
                                    <div class="video-fullscreen-wrap full-height valign bg-img-d bg-fixed" data-overlay-dark=7 style="background: url(<?php echo esc_url(get_template_directory_uri() . '/assets/images/banner12.jpg'); ?>);">
                                        <div class="v-middle caption overlay ">
                                            <div class=container>
                                                <div class=row>
                                                    <div class="col-md-12 text-center">
                                                        <h6>Location</h6>
                                                        <h1>
                                                            Contact Us <span>Get In Touch</span></h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="arrow bounce text-center">
                                        <a href=#info class><i class='bx bx-chevron-down'></i></a>
                                    </div>
                                </header>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="elementor-section elementor-top-section elementor-element elementor-element-a8c8ca7 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=a8c8ca7 data-element_type=section id=info>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-41588473" data-id=41588473 data-element_type=column>
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-4ae9b8d0 elementor-widget elementor-widget-candore-contact" data-id=4ae9b8d0 data-element_type=widget data-widget_type=candore-contact.default>
                            <div class=elementor-widget-container>
                                <div class=info-box>
                                    <div class=item>
                                        <span class="icon"><i class='bx bx-current-location'></i></span>
                                        <div class=cont>
                                            <h5>Address</h5>
                                            <h6>
                                                <p>
                                                    <a href=https://www.google.com/maps target=_blank class=cd-con-mail>
                                                        <?php
                                                        $address_id = 154;
                                                        setup_postdata(get_post($address_id));
                                                        $address_with_tags = get_the_content();
                                                        $address = wp_strip_all_tags($address_with_tags);
                                                        echo esc_html($address);
                                                        wp_reset_postdata();
                                                        ?>
                                                    </a>
                                                </p>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-426df4a0" data-id=426df4a0 data-element_type=column>
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-293c012b elementor-widget elementor-widget-candore-contact" data-id=293c012b data-element_type=widget data-widget_type=candore-contact.default>
                            <div class=elementor-widget-container>
                                <div class=info-box>
                                    <div class=item>
                                        <span class="icon"><i class='bx bx-mobile-alt'></i></span>
                                        <div class=cont>
                                            <h5>Phone</h5>
                                            <h6>
                                                <?php
                                                $contact_no_id = 69;
                                                setup_postdata(get_post($contact_no_id));
                                                $contact_no_with_tags = get_the_content();
                                                $contact_number = wp_strip_all_tags($contact_no_with_tags);
                                                ?>
                                                <a href="tel:<?php echo esc_html($contact_number) ?>"><?php echo esc_html($contact_number); ?></a>
                                                <?php
                                                // Reset Post Data
                                                wp_reset_postdata();
                                                ?>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-4024f7b6" data-id=4024f7b6 data-element_type=column>
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-5aec2599 elementor-widget elementor-widget-candore-contact" data-id=5aec2599 data-element_type=widget data-widget_type=candore-contact.default>
                            <div class=elementor-widget-container>
                                <div class=info-box>
                                    <div class=item>
                                        <span class=" icon"><i class='bx bx-mail-send'></i></span>
                                        <div class=cont>
                                            <h5>e-Mail</h5>
                                            <h6>
                                                <p>
                                                    <?php
                                                    $email_id = 155;
                                                    setup_postdata(get_post($email_id));
                                                    $email_with_tags = get_the_content();
                                                    $email = wp_strip_all_tags($email_with_tags);
                                                    ?>
                                                    <a href="mailto:<?php echo esc_html($email); ?>"><?php echo esc_html($email); ?></a>
                                                    <?php
                                                    // Reset Post Data
                                                    wp_reset_postdata();
                                                    ?>
                                                </p>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="elementor-section elementor-top-section elementor-element elementor-element-30f1978e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=30f1978e data-element_type=section>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2cebfd9" data-id=2cebfd9 data-element_type=column>
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-section elementor-inner-section elementor-element elementor-element-7d3b4234 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id=7d3b4234 data-element_type=section>
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-341437ac" data-id=341437ac data-element_type=column>
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-2eb3a117 elementor-widget elementor-widget-candore-sec-title" data-id=2eb3a117 data-element_type=widget data-widget_type=candore-sec-title.default>
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
                                                    <div class=section-title>Get in touch</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-2c107698 elementor-widget elementor-widget-candore-text-block" data-id=2c107698 data-element_type=widget data-widget_type=candore-text-block.default>
                                            <div class=elementor-widget-container>
                                                <div class=" text-left  candore-text-block">
                                                    <p>You have a piece of advice or a suggestion that you would
                                                        like to share with us? Feel free to contact us.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1f2a63dc" data-id=1f2a63dc data-element_type=column>
                                    <div class=elementor-widget-wrap></div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-30c027d8" data-id=30c027d8 data-element_type=column>
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-73e57faf elementor-widget elementor-widget-candore-form" data-id=73e57faf data-element_type=widget data-widget_type=candore-form.default>
                                            <div class=elementor-widget-container>
                                                <div class=booking-box>
                                                    <div class="booking-inner clearfix">
                                                        <div class="form1 clearfix contact__form vc_template">
                                                            <div class="wpcf7 no-js" id=wpcf7-f601-p104-o1 lang=en-US dir=ltr>
                                                                <div class=screen-reader-response>
                                                                    <p role=status aria-live=polite aria-atomic=true></p>
                                                                    <ul></ul>
                                                                </div>
                                                                <form action=/demo/wp/candore/contact/#wpcf7-f601-p104-o1 method=post class="wpcf7-form init" aria-label="Contact form" novalidate=novalidate data-status=init>
                                                                    <div style="display: none;">
                                                                        <input type=hidden name=_wpcf7 value=601>
                                                                        <input type=hidden name=_wpcf7_version value=5.8.1>
                                                                        <input type=hidden name=_wpcf7_locale value=en_US>
                                                                        <input type=hidden name=_wpcf7_unit_tag value=wpcf7-f601-p104-o1>
                                                                        <input type=hidden name=_wpcf7_container_post value=104>
                                                                        <input type=hidden name=_wpcf7_posted_data_hash value>
                                                                    </div>
                                                                    <div class=row>
                                                                        <div class=col-md-6>
                                                                            <p><span class=wpcf7-form-control-wrap data-name=your-name><input size=40 class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" autocomplete=name aria-required=true aria-invalid=false placeholder=Name value type=text name=your-name></span></p>
                                                                        </div>
                                                                        <div class=col-md-6>
                                                                            <p><span class=wpcf7-form-control-wrap data-name=tel-787><input size=40 class="wpcf7-form-control wpcf7-tel wpcf7-text wpcf7-validates-as-tel" aria-invalid=false placeholder=Phone value type=tel name=tel-787></span></p>
                                                                        </div>
                                                                        <div class=col-md-6>
                                                                            <p><span class=wpcf7-form-control-wrap data-name=your-email><input size=40 class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email" autocomplete=email aria-required=true aria-invalid=false placeholder=e-Mail value type=email name=your-email></span></p>
                                                                        </div>
                                                                        <div class=col-md-6>
                                                                            <p><span class=wpcf7-form-control-wrap data-name=text-761><input size=40 class="wpcf7-form-control wpcf7-text" aria-invalid=false placeholder=Subject value type=text name=text-761></span></p>
                                                                        </div>
                                                                        <div class=col-md-12>
                                                                            <p><span class=wpcf7-form-control-wrap data-name=textarea-648><textarea cols=40 rows=10 class="wpcf7-form-control wpcf7-textarea" aria-invalid=false placeholder=Message name=textarea-648></textarea></span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <p>
                                                                    <div class="wpcf7-form-control has-spinner wpcf7-submit">
                                                                        <button class="btn-form1-submit mt-15">Send
                                                                            Message</button>
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


        <section class="elementor-section elementor-top-section elementor-element elementor-element-a713d05 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id=a713d05 data-element_type=section>
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9075ade" data-id=9075ade data-element_type=column>
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-8c37d09 elementor-widget elementor-widget-google_maps" data-id=8c37d09 data-element_type=widget data-widget_type=google_maps.default>
                            <div class=elementor-widget-container>
                                <div class=elementor-custom-embed>
                                    <iframe loading="lazy" src="https://maps.google.com/maps?q=Sylhet,%20Bangladesh&#038;t=m&#038;z=10&#038;output=embed&#038;iwloc=near" title="Sylhet, Bangladesh" aria-label="Sylhet, Bangladesh"></iframe>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="elementor-section elementor-top-section elementor-element elementor-element-39f5e73d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=39f5e73d data-element_type=section data-settings={&quot;background_background&quot;:&quot;classic&quot;}>
            <div class=elementor-background-overlay></div>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7c32308e" data-id=7c32308e data-element_type=column>
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-section elementor-inner-section elementor-element elementor-element-47bd9a0b elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id=47bd9a0b data-element_type=section>
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-8883943" data-id=8883943 data-element_type=column>
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-77ea8558 elementor-widget elementor-widget-candore-single-testimonial" data-id=77ea8558 data-element_type=widget data-widget_type=candore-single-testimonial.default>
                                            <div class=elementor-widget-container>
                                                <div class=testimonials>
                                                    <p class=mb-0><i class=star-rating-el></i><i class=star-rating-el></i><i class=star-rating-el></i><i class=star-rating-el></i><i class=star-rating-el></i>
                                                    </p>
                                                    <h5>A modern restaurant with a menu that will make your mouth
                                                        water.</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-1587ca26 elementor-widget elementor-widget-candore-contact" data-id=1587ca26 data-element_type=widget data-widget_type=candore-contact.default>
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
                                                        <a href="tel:<?php echo esc_html($contact_number) ?>"><?php echo esc_html($contact_number); ?></a>
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
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-4e575a0f" data-id=4e575a0f data-element_type=column>
                                    <div class=elementor-widget-wrap></div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2b274f5a" data-id=2b274f5a data-element_type=column>
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-4926b003 elementor-widget elementor-widget-candore-form" data-id=4926b003 data-element_type=widget data-widget_type=candore-form.default>
                                            <div class=elementor-widget-container>
                                                <div class=booking-box>
                                                    <div class="head-box text-center">
                                                        <h4>Make A Reservation</h4>
                                                    </div>
                                                    <div class="booking-inner clearfix">
                                                        <div class="form1 clearfix contact__form vc_template">
                                                            <div class="wpcf7 no-js" id=wpcf7-f7-p104-o2 lang=en-US dir=ltr>
                                                                <div class=screen-reader-response>
                                                                    <p role=status aria-live=polite aria-atomic=true></p>
                                                                    <ul></ul>
                                                                </div>
                                                                <form action=/demo/wp/candore/contact/#wpcf7-f7-p104-o2 method=post class="wpcf7-form init" aria-label="Contact form" novalidate=novalidate data-status=init>
                                                                    <div style="display: none;">
                                                                        <input type=hidden name=_wpcf7 value=7>
                                                                        <input type=hidden name=_wpcf7_version value=5.8.1>
                                                                        <input type=hidden name=_wpcf7_locale value=en_US>
                                                                        <input type=hidden name=_wpcf7_unit_tag value=wpcf7-f7-p104-o2>
                                                                        <input type=hidden name=_wpcf7_container_post value=104>
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


        <section class="elementor-section elementor-top-section elementor-element elementor-element-35c50040 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=35c50040 data-element_type=section data-settings={&quot;background_background&quot;:&quot;classic&quot;}>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-39743661" data-id=39743661 data-element_type=column>
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-2dcea68e elementor-widget elementor-widget-candore-clients" data-id=2dcea68e data-element_type=widget data-widget_type=candore-clients.default>
                            <div class=elementor-widget-container>
                                <div class=clients>
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
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-17b407a0" data-id=17b407a0 data-element_type=column>
                    <div class=elementor-widget-wrap></div>
                </div>
            </div>
        </section>


    </div>
</section>


<?php get_template_part('template-parts/footer'); ?>