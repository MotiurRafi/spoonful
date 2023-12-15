<?php

function wporg_add_multiple_thumbnail()
{
    $screens = ['post', 'blogs', 'about_info', 'product'];
    foreach ($screens as $screen) {
        add_meta_box(
            'Thumbnails',              // Unique ID
            'Thumbnails',     // Box title
            'wporg_thumbnails_html',     // Content callback, must be of type callable
            $screen                      // Post type
        );
    }
}
add_action('add_meta_boxes', 'wporg_add_multiple_thumbnail');

function wporg_thumbnails_html($post)
{
    // Retrieve the current values for thumbnails
    $secondary_thumbnail = get_post_meta($post->ID, '_secondary_thumbnail', true);
    $tertiary_thumbnail = get_post_meta($post->ID, '_tertiary_thumbnail', true);
    $quaternary_thumbnail = get_post_meta($post->ID, '_quaternary_thumbnail', true);

    // Output the fields
?>
    <label for="_secondary_thumbnail">Secondary Thumbnail:</label>
    <div class="custom-image-upload">
        <input type="hidden" name="_secondary_thumbnail" id="secondary_thumbnail" value="<?php echo esc_attr($secondary_thumbnail); ?>">
        <button class="upload-image-button" data-target="#secondary_thumbnail">Select Image</button>
        <div class="image-preview">
            <?php if ($secondary_thumbnail) : ?>
                <img src="<?php echo esc_url($secondary_thumbnail); ?>" alt="Secondary Thumbnail">
            <?php endif; ?>
        </div>
    </div>

    <label for="_tertiary_thumbnail">Tertiary Thumbnail:</label>
    <div class="custom-image-upload">
        <input type="hidden" name="_tertiary_thumbnail" id="tertiary_thumbnail" value="<?php echo esc_attr($tertiary_thumbnail); ?>">
        <button class="upload-image-button" data-target="#tertiary_thumbnail">Select Image</button>
        <div class="image-preview">
            <?php if ($tertiary_thumbnail) : ?>
                <img src="<?php echo esc_url($tertiary_thumbnail); ?>" alt="Tertiary Thumbnail">
            <?php endif; ?>
        </div>
    </div>

    <label for="_quaternary_thumbnail">Quaternary Thumbnail:</label>
    <div class="custom-image-upload">
        <input type="hidden" name="_quaternary_thumbnail" id="quaternary_thumbnail" value="<?php echo esc_attr($quaternary_thumbnail); ?>">
        <button class="upload-image-button" data-target="#quaternary_thumbnail">Select Image</button>
        <div class="image-preview">
            <?php if ($quaternary_thumbnail) : ?>
                <img src="<?php echo esc_url($quaternary_thumbnail); ?>" alt="Quaternary Thumbnail">
            <?php endif; ?>
        </div>
    </div>

    <style>
        .image-preview img {
            width: 50%;
            margin: 1rem 0;
        }
    </style>


<?php
    // Add a nonce field to check for verification when saving
    wp_nonce_field('wporg_custom_box_nonce', 'wporg_custom_box_nonce');
}

// Save the custom metabox data when the post is saved
function wporg_save_thumbnails_data($post_id)
{
    // Check if nonce is set
    if (!isset($_POST['wporg_custom_box_nonce'])) {
        return;
    }

    // Verify that the nonce is valid
    if (!wp_verify_nonce($_POST['wporg_custom_box_nonce'], 'wporg_custom_box_nonce')) {
        return;
    }

    // Check if this is an autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Check the user's permissions
    if ('page' === $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id)) {
            return;
        }
    } else {
        if (!current_user_can('edit_post', $post_id)) {
            return;
        }
    }

    // Save the additional thumbnails
    if (isset($_POST['_secondary_thumbnail'])) {
        update_post_meta($post_id, '_secondary_thumbnail', esc_url_raw($_POST['_secondary_thumbnail']));
    }

    if (isset($_POST['_tertiary_thumbnail'])) {
        update_post_meta($post_id, '_tertiary_thumbnail', esc_url_raw($_POST['_tertiary_thumbnail']));
    }

    if (isset($_POST['_quaternary_thumbnail'])) {
        update_post_meta($post_id, '_quaternary_thumbnail', esc_url_raw($_POST['_quaternary_thumbnail']));
    }
}
add_action('save_post', 'wporg_save_thumbnails_data');

function custom_media_upload_script()
{
?>
    <script>
        jQuery(document).ready(function($) {
            $('.custom-image-upload .upload-image-button').click(function(e) {
                e.preventDefault();
                var button = $(this);
                var targetInput = $(button.data('target'));

                // Create a new media frame
                var mediaUploader = wp.media.frames.file_frame = wp.media({
                    title: 'Choose Image',
                    button: {
                        text: 'Choose Image'
                    },
                    multiple: false
                });

                // When an image is selected in the media frame...
                mediaUploader.on('select', function() {
                    var attachment = mediaUploader.state().get('selection').first().toJSON();
                    targetInput.val(attachment.url);
                    targetInput.siblings('.image-preview').html('<img src="' + attachment.url + '" alt="Image Preview">');
                });

                // Open the media frame
                mediaUploader.open();
            });
        });
    </script>
<?php
}
add_action('admin_footer', 'custom_media_upload_script');
