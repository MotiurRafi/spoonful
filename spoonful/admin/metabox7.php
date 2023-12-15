<?php
function add_features_card_metabox()
{
    add_meta_box(
        'features_card_metabox',
        'Features Card Metabox',
        'render_features_card_metabox',
        'features_card',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_features_card_metabox');

// Render content for the features card metabox
function render_features_card_metabox($post)
{
    // Retrieve the current subheading and icon values
    $subheading = get_post_meta($post->ID, 'features_card_subheading', true);
    $icon = get_post_meta($post->ID, 'features_card_icon', true);

    // Output the fields
?>
    <label for="features_card_subheading">Subheading:</label>
    <input type="text" id="features_card_subheading" name="features_card_subheading" value="<?php echo esc_attr($subheading); ?>" style="width: 100%;">

    <label for="features_card_icon">Feature Icon:</label>
    <div class="custom-image-upload">
        <input type="hidden" name="features_card_icon" id="features_card_icon" value="<?php echo esc_attr($icon); ?>">
        <button class="upload-image-button" data-target="#features_card_icon">Select Image</button>
        <div class="image-preview">
            <?php if ($icon) : ?>
                <img src="<?php echo esc_url($icon); ?>" alt="Feature Icon">
            <?php endif; ?>
        </div>
    </div>

    <style>
        .image-preview img {
            width: 100%;
            /* Adjust the width as needed */
            height: auto;
            display: block;
            /* Remove any residual spacing below the image */
            margin: 1rem 0;
        }
    </style>

<?php
    // Add nonce field to validate on save
    wp_nonce_field('features_card_metabox_nonce', 'features_card_metabox_nonce');
}

// Save subheading and icon values when the post is saved
function save_features_card_metabox($post_id)
{
    // Check if nonce is set
    if (!isset($_POST['features_card_metabox_nonce'])) {
        return;
    }

    // Verify that the nonce is valid
    if (!wp_verify_nonce($_POST['features_card_metabox_nonce'], 'features_card_metabox_nonce')) {
        return;
    }

    // Check if this is an autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Check the user's permissions
    if ('features_card' !== $_POST['post_type']) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save the subheading value
    if (isset($_POST['features_card_subheading'])) {
        update_post_meta($post_id, 'features_card_subheading', sanitize_text_field($_POST['features_card_subheading']));
    }

    // Save the icon value
    if (isset($_POST['features_card_icon'])) {
        update_post_meta($post_id, 'features_card_icon', esc_url_raw($_POST['features_card_icon']));
    }
}
add_action('save_post', 'save_features_card_metabox');

function feature_icon_upload_script()
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
add_action('admin_footer', 'feature_icon_upload_script');
