<?php

// Add Metabox for Secondary, Third, and Fourth Thumbnails, and Social Media Links
function about_info_metabox()
{
    add_meta_box(
        'about_info_metabox',
        'About Info Additional Fields',
        'about_info_metabox_callback',
        'about_info',
        'normal',
        'high'
    );
}

add_action('add_meta_boxes', 'about_info_metabox');

function about_info_metabox_callback($post)
{
    wp_nonce_field(basename(__FILE__), 'about_info_nonce');
    $facebook_link = get_post_meta($post->ID, '_facebook_link', true);
    $instagram_link = get_post_meta($post->ID, '_instagram_link', true);
    $twitter_link = get_post_meta($post->ID, '_twitter_link', true);
    $youtube_link = get_post_meta($post->ID, '_youtube_link', true);
    $pinterest_link = get_post_meta($post->ID, '_pinterest_link', true);

?>
    <label for="facebook_link">Facebook Link:</label>
    <input type="text" id="facebook_link" name="facebook_link" value="<?php echo esc_url($facebook_link); ?>" style="width: 100%;">
    <br>

    <label for="instagram_link">Instagram Link:</label>
    <input type="text" id="instagram_link" name="instagram_link" value="<?php echo esc_url($instagram_link); ?>" style="width: 100%;">
    <br>

    <label for="twitter_link">Twitter Link:</label>
    <input type="text" id="twitter_link" name="twitter_link" value="<?php echo esc_url($twitter_link); ?>" style="width: 100%;">
    <br>

    <label for="youtube_link">YouTube Link:</label>
    <input type="text" id="youtube_link" name="youtube_link" value="<?php echo esc_url($youtube_link); ?>" style="width: 100%;">
    <br>

    <label for="pinterest_link">Pinterest Link:</label>
    <input type="text" id="pinterest_link" name="pinterest_link" value="<?php echo esc_url($pinterest_link); ?>" style="width: 100%;">
<?php
}

function save_about_info_metabox($post_id)
{
    if (!isset($_POST['about_info_nonce']) || !wp_verify_nonce($_POST['about_info_nonce'], basename(__FILE__))) {
        return $post_id;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    }

    if ('page' === $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id)) {
            return $post_id;
        }
    } else {
        if (!current_user_can('edit_post', $post_id)) {
            return $post_id;
        }
    }

    $fields = ['facebook_link', 'instagram_link', 'twitter_link', 'youtube_link', 'pinterest_link'];

    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, '_' . $field, sanitize_text_field($_POST[$field]));
        }
    }
}

add_action('save_post', 'save_about_info_metabox');
