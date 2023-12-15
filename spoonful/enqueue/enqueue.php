<?php
function enqueue_theme_assets()
{
    // Enqueue CSS files
    wp_enqueue_style('elementor-icons', get_template_directory_uri() . '/assets/css/elementor-icons.min.css');
    wp_enqueue_style('extendify-utilities', get_template_directory_uri() . '/assets/css/extendify-utilities.css');
    wp_enqueue_style('flaticon', get_template_directory_uri() . '/assets/css/flaticon.css');
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/fontawesome.min.css');
    wp_enqueue_style('fontgoogleapis2', get_template_directory_uri() . '/assets/css/fontgoogleapis2.css');
    wp_enqueue_style('frontend-lite', get_template_directory_uri() . '/assets/css/frontend-lite.min.css');
    wp_enqueue_style('global', get_template_directory_uri() . '/assets/css/global.css');
    wp_enqueue_style('layout', get_template_directory_uri() . '/assets/css/layout.css');
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css');
    wp_enqueue_style('main-style1', get_template_directory_uri() . '/assets/css/main-style1.css');
    wp_enqueue_style('main-style2', get_template_directory_uri() . '/assets/css/main-style2.css');
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
    wp_enqueue_style('owl-theme-default', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');
    wp_enqueue_style('post-6', get_template_directory_uri() . '/assets/css/post-6.css');
    wp_enqueue_style('post-11', get_template_directory_uri() . '/assets/css/post-11.css');
    wp_enqueue_style('post-22', get_template_directory_uri() . '/assets/css/post-22.css');
    wp_enqueue_style('post-104', get_template_directory_uri() . '/assets/css/post-104.css');
    wp_enqueue_style('post-237', get_template_directory_uri() . '/assets/css/post-237.css');
    wp_enqueue_style('post-318', get_template_directory_uri() . '/assets/css/post-318.css');
    wp_enqueue_style('post-500', get_template_directory_uri() . '/assets/css/post-500.css');
    wp_enqueue_style('post-576', get_template_directory_uri() . '/assets/css/post-576.css');
    wp_enqueue_style('post-701', get_template_directory_uri() . '/assets/css/post-701.css');
    wp_enqueue_style('select2', get_template_directory_uri() . '/assets/css/select2.css');
    wp_enqueue_style('smallscreen', get_template_directory_uri() . '/assets/css/smallscreen.css');
    wp_enqueue_style('style-min', get_template_directory_uri() . '/assets/css/style.min.css');
    wp_enqueue_style('styles1', get_template_directory_uri() . '/assets/css/styles1.css');
    wp_enqueue_style('styles2', get_template_directory_uri() . '/assets/css/styles2.css');
    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper.min.css');
    wp_enqueue_style('themify-icons', get_template_directory_uri() . '/assets/css/themify-icons.css');
    wp_enqueue_style('youtubepopup', get_template_directory_uri() . '/assets/css/youtubepopup.css');
    wp_enqueue_style('animate-min', get_template_directory_uri() . '/assets/css/animate.min.css');
    wp_enqueue_style('animations-min', get_template_directory_uri() . '/assets/css/animations.min.css');
    wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('commerce', get_template_directory_uri() . '/assets/css/commerce.css');
    wp_enqueue_style('contact-styles', get_template_directory_uri() . '/assets/css/contact-styles.css');
    wp_enqueue_style('font-awesome-5', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&display=swap&ver=6.3.2');
    wp_enqueue_script('boxicons', 'https://unpkg.com/boxicons@2.1.4/dist/boxicons.js');
    wp_enqueue_style('boxicons', 'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css');
    wp_enqueue_style('font-awesome-6', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', array('jquery'), '6.4.2', 'all');

    // Enqueue JavaScript files
    wp_enqueue_script('jquery');
    wp_enqueue_script('elementor-frontend');

    wp_enqueue_script('minify4d5dd', get_template_directory_uri() . '/assets/js/minify4d5dd.js', array('jquery', 'elementor-frontend'), '1.0', true);
    wp_enqueue_script('minify4df6a', get_template_directory_uri() . '/assets/js/minify4df6a.js', array('jquery', 'elementor-frontend'), '1.0', true);
    wp_enqueue_script('minify9a7ba', get_template_directory_uri() . '/assets/js/minify9a7ba.js', array('jquery'), '1.0', true);
    wp_enqueue_script('minify9ac3e', get_template_directory_uri() . '/assets/js/minify9ac3e.js', array('jquery', 'elementor-frontend'), '1.0', true);
    wp_enqueue_script('minify78fa9', get_template_directory_uri() . '/assets/js/minify78fa9.js', array('jquery'), '1.0', true);
    wp_enqueue_script('minify349b8', get_template_directory_uri() . '/assets/js/minify349b8.js', array('jquery'), '1.0', true);
    wp_enqueue_script('minify981ad', get_template_directory_uri() . '/assets/js/minify981ad.js', array('jquery'), '1.0', true);
    wp_enqueue_script('minify12791', get_template_directory_uri() . '/assets/js/minify12791.js', array('jquery'), '1.0', true);
    wp_enqueue_script('minifya81cd', get_template_directory_uri() . '/assets/js/minifya81cd.js', array('jquery'), '1.0', true);
    wp_enqueue_script('minifybb431', get_template_directory_uri() . '/assets/js/minifybb431.js', array('jquery'), '1.0', true);
    wp_enqueue_script('minifyf0d0c', get_template_directory_uri() . '/assets/js/minifyf0d0c.js', array('jquery'), '1.0', true);
    wp_enqueue_script('def05', get_template_directory_uri() . '/assets/js/def05.js', array('jquery'), '1.0', false);
    wp_enqueue_script('js-linkup', get_template_directory_uri() . '/assets/js/js-linkup.js', array('jquery'), '1.0', true);
    wp_enqueue_script('minify0fcd7', get_template_directory_uri() . '/assets/js/minify0fcd7.js', array('jquery'), '1.0', true);
    wp_enqueue_script('minify3ccba', get_template_directory_uri() . '/assets/js/minify3ccba.js', array('jquery'), '1.0', true);
}