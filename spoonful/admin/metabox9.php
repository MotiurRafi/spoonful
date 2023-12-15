<?php
// Add custom user meta fields
function custom_register_user_meta_fields() {
    // Add country field
    register_meta('user', 'country', [
        'type'         => 'string',
        'description'  => 'User country',
        'single'       => true,
        'show_in_rest' => true,
    ]);

    // Add city field
    register_meta('user', 'city', [
        'type'         => 'string',
        'description'  => 'User city',
        'single'       => true,
        'show_in_rest' => true,
    ]);

    // Add region field
    register_meta('user', 'region', [
        'type'         => 'string',
        'description'  => 'User region',
        'single'       => true,
        'show_in_rest' => true,
    ]);

    // Add postal code field
    register_meta('user', 'postal_code', [
        'type'         => 'string',
        'description'  => 'User postal code',
        'single'       => true,
        'show_in_rest' => true,
    ]);
}
add_action('init', 'custom_register_user_meta_fields');
