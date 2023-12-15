<?php
/*
Template Name: Tag Page
*/
?>
<?php get_template_part('template-parts/header'); ?>
<?php get_template_part('template-parts/extension1'); ?>


<div class="banner-header valign bg-img bg-fixed" data-overlay-dark=6 style="background-image: url(<?php echo esc_url(get_template_directory_uri() . '/assets/images/banner12-1.jpg'); ?>); margin-top: -90px;">
    <div class=container>
        <div class=row>
            <div class="col-md-12 text-center caption mt-60">
                <h5>
                    Order Now</h5>
                <h1></h1>
            </div>
        </div>
    </div>
</div>


<section class="main-shop section-padding bg-blck">
    <div class=container>
        <div class=row>
            <div class="col-md-8 ">
                <div class="products-shop">
                    <div class="woocommerce-notices-wrapper"></div>
                    <?php
                    // Get the current category
                    $current_category = get_queried_object();
                    $category_name = $current_category->slug;


                    $args = array(
                        'post_type'      => 'product',
                        'posts_per_page' => 8,
                        'paged'          => max(1, get_query_var('paged')),
                        'tax_query'      => array(
                            array(
                                'taxonomy' => 'product_cat',
                                'field'    => 'slug',
                                'terms'    => $category_name,
                            ),
                        ),
                    );
                    $query = new WP_Query($args);
                    ?>
                    <div class="topline">
                        <div class="pagesviews valign">
                            <?php if ($query && $query->have_posts()) : ?>
                                <?php
                                $paged = max(1, get_query_var('paged'));
                                $posts_per_page = $query->get('posts_per_page');
                                $start = ($paged - 1) * $posts_per_page + 1;
                                $end = min($query->found_posts, $paged * $posts_per_page);
                                ?>
                                <p> Showing <span><?php echo esc_html($start); ?>&ndash;<?php echo esc_html($end); ?></span> of <?php echo esc_html($query->found_posts); ?> results</p>
                            <?php else : ?>
                                <p>No products found.</p>
                            <?php endif; ?>
                        </div>
                    </div>

                    <ul class="products shop-wrapper-gallery columns-2">
                        <?php
                        if ($query->have_posts()) :
                            while ($query->have_posts()) : $query->the_post();

                                // Get WooCommerce product object
                                $product = wc_get_product(get_the_ID());

                                // Get product gallery images
                                $gallery_images = $product->get_gallery_image_ids();
                        ?>
                                <li class="isotope-item product type-product">
                                    <div class="item">
                                        <div class="img">
                                            <?php echo $product->get_image('woocommerce_thumbnail'); ?>
                                            <a href="<?php the_permalink(); ?>" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart addcart" data-product_id="<?php the_ID(); ?>" aria-label="<?php the_title_attribute(); ?>" aria-describedby rel="nofollow">Add to cart <i class='bx bxs-cart-alt'></i></a>
                                        </div>
                                        <div class="cont">
                                            <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                                            <div class="info">
                                                <?php echo custom_trim_description(get_the_excerpt(), 150); ?>
                                            </div>
                                            <div class="botm">
                                                <h5 class="price">
                                                    <?php echo $product->get_price_html(); ?>
                                                </h5>
                                                <div class="tags">
                                                    <?php // Additional tags or information 
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                        <?php
                            endwhile;

                            // Reset post data to restore the global post object
                            wp_reset_postdata();
                        else :
                            echo 'No products found.';
                        endif;
                        ?>
                    </ul>

                    <div class="col-md-12 text-center pagination-custom">
                        <?php
                        echo paginate_links(array(
                            'total' => $query->max_num_pages,
                            'prev_text' => '<i class="bx bx-chevron-left"></i>',
                            'next_text' => '<i class="bx bx-chevron-right"></i>',
                        ));
                        ?>
                    </div>
                </div>
            </div>



            <div class="col-md-4  ">
                <div class=shop-sidebar>
                    <div id="woocommerce_product_search-2" class="widget item woocommerce widget_product_search">
                        <div class="form search">
                            <?php get_product_search_form(); ?>
                        </div>
                    </div>

                    <div id=candore-category-2 class="widget item candore_category_widget">
                        <div class=tit>
                            <h4>Categories</h4>
                        </div>
                        <div class="ctg">
                            <ul class="cat-wid-list">
                                <?php
                                $selected_categories = array('main-courses', 'sea-food', 'starter', 'desserts', 'drinks');

                                foreach ($selected_categories as $category_slug) {
                                    $category = get_term_by('slug', $category_slug, 'category');

                                    if ($category) {
                                        $category_link = get_term_link($category);
                                        $category_count = $category->count;
                                ?>
                                        <li>
                                            <a href="<?php echo esc_url($category_link);  ?>"><?php echo esc_html($category->name); ?></a>
                                            <div class="dots"></div>
                                            <span>(<?php echo esc_html($category_count); ?>)</span>
                                        </li>
                                <?php
                                    }
                                }
                                ?>
                            </ul>
                        </div>

                    </div>
                    <div id=woocommerce_products-2 class="widget item woocommerce widget_products">
                        <div class=tit>
                            <h4>Popular Products</h4>
                        </div>
                        <div class="product_list_widget">
                            <ul>
                                <?php
                                $args = array(
                                    'post_type'      => 'product',
                                    'posts_per_page' => 3,
                                    'category_name'  => 'popular',
                                );

                                $query = new WP_Query($args);

                                if ($query->have_posts()) :
                                    while ($query->have_posts()) : $query->the_post();
                                        // Get the product price from the custom metabox
                                        $product_price = get_post_meta(get_the_ID(), '_product_price', true);
                                ?>
                                        <li class="pop-prod">
                                            <div class="product">
                                                <div class="img">
                                                    <a class="sidebar-product-image" href="<?php the_permalink(); ?>">
                                                        <?php the_post_thumbnail('woocommerce_thumbnail', array('loading' => 'lazy')); ?>
                                                    </a>
                                                </div>
                                                <div class="info">
                                                    <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                                                    <span class="price">Price: <span> &#36; <?php echo esc_html($product_price); ?></span></span>
                                                </div>
                                            </div>
                                        </li>
                                <?php
                                    endwhile;
                                    wp_reset_postdata(); // Reset the post data to avoid conflicts with the main loop
                                else :
                                    echo 'No products found.';
                                endif;
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div id="woocommerce_product_tag_cloud-2" class="widget item woocommerce widget_product_tag_cloud">
                        <div class="tit">
                            <h4>Tags</h4>
                        </div>
                        <div class="tagcloud">
                            <?php
                            $tags = get_terms('product_tag', 'orderby=name'); // Use 'product_tag' taxonomy for WooCommerce product tags
                            if ($tags && !is_wp_error($tags)) :
                                foreach ($tags as $tag) :
                            ?>
                                    <a href="<?php echo esc_url(get_term_link($tag)); ?>" class="tag-cloud-link tag-link-<?php echo esc_attr($tag->term_id); ?>" style="font-size: <?php echo esc_attr($tag->count * 2); ?>pt;" aria-label="<?php echo esc_attr($tag->name); ?> (<?php echo esc_attr($tag->count); ?> products)">
                                        <?php echo esc_html($tag->name); ?>
                                    </a>
                            <?php
                                endforeach;
                            endif;
                            ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .tagcloud a:hover {
        color: #fff !important;
    }

    .addcart {
        color: #fff !important;
    }

    .products-shop {}

    .products-shop .item {
        min-height: 470px;
    }

    .products-shop .item .cont {
        height: 220px;
    }

    .products-shop .item .img {
        height: 250px;
    }

    .products-shop .item .img img {
        height: 100%;
    }

    .pagination-custom {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 1rem;
    }

    .pagination-custom a,
    .pagination-custom span {
        background: transparent;
        display: inline-block;
        width: 40px;
        height: 40px;
        line-height: 40px;
        text-align: center;
        color: #C19D40 !important;
        font-weight: 400;
        border: 1px solid rgba(255, 255, 255, 0.1);
        font-family: 'Noah', sans-serif;
        font-size: 15px;
        border-radius: 100%;
        transition: .2s ease;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
    }

    .pagination-custom a:hover,
    .pagination-custom span:hover {
        border-color: #C19D40;
        text-shadow: 0 0 10px #C19D60;
    }

    .products-shop .products {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-template-rows: repeat(1fr);
        gap: 1rem;
        padding: 0;
        height: auto !important;
    }

    .products-shop ul li {
        position: relative !important;
        left: 0 !important;
        right: 0 !important;
        top: 0 !important;
        bottom: 0 !important;
    }

    .products-shop ul li .item {
        margin: 0 0 1rem 0 !important;
    }

    .ctg .cat-wid-list li a {
        color: #777 !important;
        transition: .3s ease;
    }

    .ctg .cat-wid-list li a:hover {
        color: #fff !important;
    }

    .pop-prod {
        margin: 0 0 10px 0;
    }

    .pop-prod .product .img a {
        width: 100%;
    }

    .pop-prod .product .img a img {
        height: 80px;
        width: 100%;
    }

    .posted_in,
    .tagged_as {
        color: #777;
    }

    .posted_in a,
    .tagged_as a {
        color: #C19D40 !important;
        transition: .3s ease;
    }

    .posted_in a:hover,
    .tagged_as a:hover {
        background-color: #C19D60 !important;
        color: #fff !important;
    }

    .woocommerce ul.cart_list li img,
    .woocommerce ul.product_list_widget li img {
        width: auto;
    }
</style>

<?php get_template_part('template-parts/footer'); ?>