<?php
// Add the metabox
function add_price_metabox() {
    add_meta_box(
        'price_metabox',
        'Product Price',
        'render_price_metabox',
        'product',  // Change 'product' to your custom post type
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'add_price_metabox');

// Render the metabox content
function render_price_metabox($post) {
    // Retrieve the existing price
    $price = get_post_meta($post->ID, '_product_price', true);

    // Output the nonce for verification
    wp_nonce_field('price_metabox_nonce', 'price_metabox_nonce');

    // Output the input field
    ?>
    <label for="product_price">Price:</label>
    <input type="text" id="product_price" name="_product_price" value="<?php echo esc_attr($price); ?>">
    <?php
}

// Save the metabox data
function save_price_metabox($post_id) {
    // Verify nonce
    if (!isset($_POST['price_metabox_nonce']) || !wp_verify_nonce($_POST['price_metabox_nonce'], 'price_metabox_nonce')) {
        return;
    }

    // Check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Check user permissions
    if ('page' === $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id)) {
            return;
        }
    } else {
        if (!current_user_can('edit_post', $post_id)) {
            return;
        }
    }

    // Save the price
    if (isset($_POST['_product_price'])) {
        update_post_meta($post_id, '_product_price', sanitize_text_field($_POST['_product_price']));
    }
}
add_action('save_post', 'save_price_metabox');
