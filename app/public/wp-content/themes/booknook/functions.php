<?php
function booknook_enqueue_styles() {
    wp_enqueue_style('booknook-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'booknook_enqueue_styles');

// Custom Post Type
require get_template_directory() . '/inc/custom-post-type.php';

// Shortcode
function featured_book_shortcode() {
    return '<div class="featured-book">Check out our featured book <a href="/shop">here</a>!</div>';
}
add_shortcode('featured_book', 'featured_book_shortcode');
?>