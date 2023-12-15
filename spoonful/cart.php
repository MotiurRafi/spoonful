<?php
/*
Template Name: Cart Page
*/
?>
<?php get_template_part('template-parts/header'); ?>
<?php get_template_part('template-parts/extension1'); ?>
<?php get_template_part('template-parts/sign-page'); ?>

<?php

do_action('woocommerce_before_main_content');

while (have_posts()) :
    the_post();
    wc_get_template_part('content', 'cart');
endwhile;

do_action('woocommerce_after_main_content');

?>

<?php get_template_part('template-parts/footer'); ?>