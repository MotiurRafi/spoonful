<?php

function chefs_metabox()
{
    add_meta_box(
        'chefs_metabox',
        'Chef Information',
        'chefs_metabox_callback',
        'chefs',
        'normal',
        'high'
    );
}

add_action('add_meta_boxes', 'chefs_metabox');

function chefs_metabox_callback($post)
{
    $chef_position = get_post_meta($post->ID, '_chef_position', true);
    $experience = get_post_meta($post->ID, '_chef_experience', true);
    $facebook_link = get_post_meta($post->ID, '_facebook_link', true);
    $twitter_link = get_post_meta($post->ID, '_twitter_link', true);
    $linkedin_link = get_post_meta($post->ID, '_linkedin_link', true);
    $instagram_link = get_post_meta($post->ID, '_instagram_link', true);

    wp_nonce_field('chefs_metabox_nonce', 'chefs_metabox_nonce');
?>

    <label for="chef_position">Chef Position:</label>
    <input type="text" id="chef_position" name="chef_position" value="<?php echo esc_attr($chef_position); ?>">

    <br>

    <label for="chef_experience">Years of Experience:</label>
    <input type="text" id="chef_experience" name="chef_experience" value="<?php echo esc_attr($experience); ?>">
    
    <br>

    <label for="facebook_link">Facebook Link:</label>
    <input type="text" id="facebook_link" name="facebook_link" value="<?php echo esc_url($facebook_link); ?>">

    <br>

    <label for="twitter_link">Twitter Link:</label>
    <input type="text" id="twitter_link" name="twitter_link" value="<?php echo esc_url($twitter_link); ?>">

    <br>

    <label for="linkedin_link">LinkedIn Link:</label>
    <input type="text" id="linkedin_link" name="linkedin_link" value="<?php echo esc_url($linkedin_link); ?>">

    <br>

    <label for="instagram_link">Instagram Link:</label>
    <input type="text" id="instagram_link" name="instagram_link" value="<?php echo esc_url($instagram_link); ?>">
    <style>
        #chefs_metabox input{
            width: 100%;
        }
    </style>
<?php
}

function save_chefs_metabox_data($post_id)
{
    if (!isset($_POST['chefs_metabox_nonce']) || !wp_verify_nonce($_POST['chefs_metabox_nonce'], 'chefs_metabox_nonce')) {
        return;
    }



    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if ('chefs' !== $_POST['post_type']) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    $fields = ['chef_position', 'chef_experience', 'facebook_link', 'twitter_link', 'linkedin_link', 'instagram_link'];

    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, '_' . $field, sanitize_text_field($_POST[$field]));
        } else {
            delete_post_meta($post_id, '_' . $field);
        }
    }
}

add_action('save_post', 'save_chefs_metabox_data');
