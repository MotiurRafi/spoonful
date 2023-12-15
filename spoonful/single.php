<?php get_template_part('template-parts/header'); ?>
<?php get_template_part('template-parts/extension1'); ?>
<?php get_template_part('template-parts/sign-page'); ?>
<?php
$blog_title = get_the_title(); 
$blog_author = get_the_author(); 
$publish_date = get_the_date('F j, Y');

// Thumbnails
$thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'large'); 
$thumbnail2_url = get_post_meta(get_the_ID(), '_secondary_thumbnail', true);
$thumbnail3_url = get_post_meta(get_the_ID(), '_tertiary_thumbnail', true);
$thumbnail4_url = get_post_meta(get_the_ID(), '_quaternary_thumbnail', true);

// Blog content
$blog_content = get_the_content();  
?>

<div class="banner-header valign bg-img bg-fixed" data-overlay-dark=4 style="background-image: url(<?php echo esc_url($thumbnail2_url);?>); margin-top:-90px;">
    <div class=container>
        <div class=row>
            <div class="col-md-8 text-left  caption mt-60">
                <h5><a href="http://wp-resturant-project.test/blog/">Blog</a> / <?php echo  custom_trim_description($blog_title, 20);?></h5>
                <h1> <?php echo esc_html($blog_title); ?></h1>
                <div class=post> 
                    <div class=date-comment> <i class='bx bx-calendar'></i> <?php echo esc_html($publish_date); ?></div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="section-padding " data-scroll-index=1>
    <div class=container>
        <div class=row>
            <div class="cd-default-page col-md-12 ">
                <div data-elementor-type=wp-post data-elementor-id=500 class="elementor elementor-500">
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-f74921f elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id=f74921f data-element_type=section>
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0fab592" data-id=0fab592 data-element_type=column>
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-001a0bd elementor-widget elementor-widget-image" data-id=001a0bd data-element_type=widget data-widget_type=image.default>
                                        <div class=elementor-widget-container>
                                            <img fetchpriority=high decoding=async width=1920 height=1080 src="<?php echo esc_url($thumbnail_url); ?>" sizes="(max-width: 1920px) 100vw, 1920px">
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-a6bb1af elementor-widget elementor-widget-candore-text-block" data-id=a6bb1af data-element_type=widget data-widget_type=candore-text-block.default>
                                        <div class=elementor-widget-container>
                                            <div class=" text-left  candore-text-block">
                                                <h2><?php echo esc_html($blog_title); ?></h2>
                                                <p><?php echo esc_html($blog_content); ?></p>
                                                    <cite>author</cite>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-section elementor-inner-section elementor-element elementor-element-66309dd elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id=66309dd data-element_type=section>
                                        <div class="elementor-container elementor-column-gap-narrow">
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-407e44e" data-id=407e44e data-element_type=column>
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-6de6570 elementor-widget elementor-widget-image" data-id=6de6570 data-element_type=widget data-widget_type=image.default>
                                                        <div class=elementor-widget-container>
                                                            <img decoding=async src="<?php echo esc_url($thumbnail3_url); ?>" class="attachment-full size-full wp-image-438 sec-thumb">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-f95bbbf" data-id=f95bbbf data-element_type=column>
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-97b1153 elementor-widget elementor-widget-image" data-id=97b1153 data-element_type=widget data-widget_type=image.default>
                                                        <div class=elementor-widget-container>
                                                            <img loading=lazy decoding=async  src="<?php echo esc_url($thumbnail4_url); ?>" class="attachment-full size-full wp-image-44 sec-thumb" >
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
                </div>
            </div>
        </div>
</section> 

<style>
    .sec-thumb{
        height: 340px !important;
    }
    .elementor-widget-image {
        text-align: center
    }

    .elementor-widget-image a {
        display: inline-block
    }

    .elementor-widget-image a img[src$=".svg"] {
        width: 48px
    }

    .elementor-widget-image img {
        vertical-align: middle;
        display: inline-block
    }
</style>


<?php get_template_part('template-parts/footer'); ?>