<?php 
// Add metabox for opening and closing times to the custom post type
function add_opening_times_metabox() {
    add_meta_box(
        'opening_times_metabox',
        'Opening and Closing Times',
        'render_opening_times_metabox',
        'opening_time',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_opening_times_metabox');

// Render content for the opening and closing times metabox
function render_opening_times_metabox($post) {
    // Retrieve the current opening and closing times values
    $opening_time = get_post_meta($post->ID, 'opening_time', true);
    $closing_time = get_post_meta($post->ID, 'closing_time', true);

    // Output the HTML for the metabox
    ?>
    <label for="opening_time">Opening Time:</label>
    <input type="time" id="opening_time" name="opening_time" value="<?php echo esc_attr($opening_time); ?>"><br>

    <label for="closing_time">Closing Time:</label>
    <input type="time" id="closing_time" name="closing_time" value="<?php echo esc_attr($closing_time); ?>">

    <?php
    // Add nonce field to validate on save
    wp_nonce_field('opening_times_metabox_nonce', 'opening_times_metabox_nonce');
}

// Save opening and closing times values when the post is saved
function save_opening_times_metabox($post_id) {
    // Check if nonce is set
    if (!isset($_POST['opening_times_metabox_nonce'])) {
        return;
    }

    // Verify that the nonce is valid
    if (!wp_verify_nonce($_POST['opening_times_metabox_nonce'], 'opening_times_metabox_nonce')) {
        return;
    }

    // Check if this is an autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Check the user's permissions
    if ('opening_time' !== $_POST['post_type']) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save the opening and closing times values
    if (isset($_POST['opening_time'])) {
        update_post_meta($post_id, 'opening_time', sanitize_text_field($_POST['opening_time']));
    }

    if (isset($_POST['closing_time'])) {
        update_post_meta($post_id, 'closing_time', sanitize_text_field($_POST['closing_time']));
    }
}
add_action('save_post', 'save_opening_times_metabox');