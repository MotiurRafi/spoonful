<?php 



function wporg_add_custom_box() {
    $screens = [ 'post', 'hero_slide' ]; // Replace 'hero_slide' with your actual custom post type name
    foreach ( $screens as $screen ) {
        add_meta_box(
            'wporg_box_id',              // Unique ID
            'Slider Info\'s',     // Box title
            'wporg_custom_box_html',     // Content callback, must be of type callable
            $screen                      // Post type
        );
    }
}
add_action( 'add_meta_boxes', 'wporg_add_custom_box' );

function wporg_custom_box_html( $post ) {
    // Retrieve the current values for existing and new fields
    $since     = get_post_meta( $post->ID, '_since', true );
    $heading   = get_post_meta( $post->ID, '_heading', true );
    $subheading    = get_post_meta( $post->ID, '_subheading', true );
    $location       = get_post_meta( $post->ID, '_location', true );
    $button_title   = get_post_meta( $post->ID, '_button_title', true );
    $button_link    = get_post_meta( $post->ID, '_button_link', true );

    // Output the fields
    ?>
    

    <label style="display:block"for="since">Since:</label>
    <input style="width:100%" type="text" id="since" name="since" value="<?php echo esc_attr( $since ); ?>">

    <br>

    <label style="display:block"for="heading">Heading:</label>
    <input style="width:100%" type="text" id="heading" name="heading" value="<?php echo esc_attr( $heading ); ?>">

    <br>

    <label style="display:block"for="subheading">Sub Heading:</label>
    <input style="width:100%" type="text" id="subheading" name="subheading" value="<?php echo esc_attr( $subheading ); ?>">

    <br>

    <label style="display:block"for="location">Location:</label>
    <input style="width:100%" type="text" id="location" name="location" value="<?php echo esc_attr( $location ); ?>">
    
    <br>

    <label style="display:block"for="button_title">Button Title:</label>
    <input style="width:100%" type="text" id="button_title" name="button_title" value="<?php echo esc_attr( $button_title ); ?>">

    <br>

    <label style="display:block"for="button_link">Button Link:</label>
    <input style="width:100%" type="text" id="button_link" name="button_link" value="<?php echo esc_attr( $button_link ); ?>">

    <?php
    // Add a nonce field to check for verification when saving
    wp_nonce_field( 'wporg_custom_box_nonce', 'wporg_custom_box_nonce' );
}


// Save the custom metabox data when the post is saved
function wporg_save_custom_box_data( $post_id ) {
    // Check if nonce is set
    if ( ! isset( $_POST['wporg_custom_box_nonce'] ) ) {
        return;
    }

    // Verify that the nonce is valid
    if ( ! wp_verify_nonce( $_POST['wporg_custom_box_nonce'], 'wporg_custom_box_nonce' ) ) {
        return;
    }

    // Check if this is an autosave
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    // Check the user's permissions
    if ( 'page' === $_POST['post_type'] ) {
        if ( ! current_user_can( 'edit_page', $post_id ) ) {
            return;
        }
    } else {
        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }
    }

    // Save the fields value 

    if ( isset( $_POST['since'] ) ) {
        update_post_meta( $post_id, '_since', sanitize_text_field( $_POST['since'] ) );
    } else {
        delete_post_meta( $post_id, '_since' );
    }

    if ( isset( $_POST['heading'] ) ) {
        update_post_meta( $post_id, '_heading', sanitize_text_field( $_POST['heading'] ) );
    } else {
        delete_post_meta( $post_id, '_heading' );
    }

    if ( isset( $_POST['subheading'] ) ) {
        update_post_meta( $post_id, '_subheading', sanitize_textarea_field( $_POST['subheading'] ) );
    } else {
        delete_post_meta( $post_id, '_subheading' );
    }

    if ( isset( $_POST['location'] ) ) {
        update_post_meta( $post_id, '_location', sanitize_text_field( $_POST['location'] ) );
    } else {
        delete_post_meta( $post_id, '_location' );
    }

    if ( isset( $_POST['button_title'] ) ) {
        update_post_meta( $post_id, '_button_title', sanitize_text_field( $_POST['button_title'] ) );
    } else {
        // If the field is empty, delete the meta key
        delete_post_meta( $post_id, '_button_title' );
    }

    if ( isset( $_POST['button_link'] ) ) {
        update_post_meta( $post_id, '_button_link', esc_url_raw( $_POST['button_link'] ) );
    } else {
        // If the field is empty, delete the meta key
        delete_post_meta( $post_id, '_button_link' );
    }
}
add_action( 'save_post', 'wporg_save_custom_box_data' );
?>

