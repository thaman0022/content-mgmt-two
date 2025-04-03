<?php
function register_author_profile_cpt() {
    $args = array(
        'labels' => array('name' => 'Author Profiles'),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-admin-users',
    );
    register_post_type('author_profile', $args);
}
add_action('init', 'register_author_profile_cpt');
?>