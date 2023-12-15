<?php
// Add metabox for rating to the customer_review CPT
function add_rating_metabox()
{
    add_meta_box(
        'rating_metabox',
        'Rating',
        'render_rating_metabox',
        'customer_review',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_rating_metabox');

// Render content for the rating metabox
function render_rating_metabox($post)
{
    // Retrieve the current rating value
    $rating = get_post_meta($post->ID, 'rating', true);

    // Output the HTML for the metabox
?>
    <label for="rating">Rating:</label>
    <select name="rating" id="rating">
        <?php
        for ($i = 1; $i <= 5; $i++) {
            $selected = selected($rating, $i, false);
            echo "<option value='$i' $selected>$i</option>";
        }
        ?>
    </select>
<?php
    // Add nonce field to validate on save
    wp_nonce_field('rating_metabox_nonce', 'rating_metabox_nonce');
}

// Save rating value when the post is saved
function save_rating_metabox($post_id)
{
    // Check if nonce is set
    if (!isset($_POST['rating_metabox_nonce'])) {
        return;
    }

    // Verify that the nonce is valid
    if (!wp_verify_nonce($_POST['rating_metabox_nonce'], 'rating_metabox_nonce')) {
        return;
    }

    // Check if this is an autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Check the user's permissions
    if ('customer_review' !== $_POST['post_type']) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save the rating value
    if (isset($_POST['rating'])) {
        update_post_meta($post_id, 'rating', sanitize_text_field($_POST['rating']));
    }
}
add_action('save_post', 'save_rating_metabox');
