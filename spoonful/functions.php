<?php








if (!function_exists('myfirsttheme_setup')) :


    include_once(get_template_directory() . '/enqueue/enqueue.php');
    include_once(get_template_directory() . '/admin/cpt1.php');
    include_once(get_template_directory() . '/admin/metabox1.php');
    include_once(get_template_directory() . '/admin/metabox2.php');
    include_once(get_template_directory() . '/admin/metabox3.php');
    include_once(get_template_directory() . '/admin/metabox4.php');
    include_once(get_template_directory() . '/admin/metabox5.php');
    include_once(get_template_directory() . '/admin/metabox6.php');
    include_once(get_template_directory() . '/admin/metabox7.php');
    include_once(get_template_directory() . '/admin/metabox8.php');
    include_once(get_template_directory() . '/admin/metabox9.php');
    function myfirsttheme_setup()
    {
        // Hook into wp_enqueue_scripts action
        add_action('wp_enqueue_scripts', 'enqueue_theme_assets');

        load_theme_textdomain('myfirsttheme', get_template_directory() . '/languages');
        load_theme_textdomain('my_theme', get_template_directory() . '/languages');
        add_theme_support('automatic-feed-links');
        add_theme_support('post-thumbnails');
        add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));
        add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
        register_nav_menus(array(
            'primary'   => esc_html__('Primary Menu', 'spoonful'),
            'secondary' => esc_html__('Secondary Menu', 'spoonful'),
        ));
        add_theme_support('title-tag');
        add_theme_support('customize-selective-refresh-widgets');
        add_theme_support('woocommerce');
    }
endif;
add_action('after_setup_theme', 'myfirsttheme_setup');