<?php
/*
Template Name: Search Page
*/
?>
<?php get_template_part('template-parts/header'); ?>
<?php get_template_part('template-parts/extension1'); ?>
<?php get_template_part('template-parts/sign-page'); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php if (have_posts()) : ?>

            <header class="page-header">
                <h1 class="page-title"><?php printf(__('Search results for: %s', 'your-theme-textdomain'), '<span>' . get_search_query() . '</span>'); ?></h1>
            </header>

            <?php
            // Start the loop.
            while (have_posts()) :
                the_post();

                // Include the content template.
                get_template_part('template-parts/content', 'search');

            // End the loop.
            endwhile;

            // Previous/next page navigation.
            the_posts_pagination();

        else :
            // If no content, include the "No posts found" template.
            get_template_part('template-parts/content', 'none');

        endif;
        ?>

    </main>
</div>


<?php get_template_part('template-parts/footer'); ?>