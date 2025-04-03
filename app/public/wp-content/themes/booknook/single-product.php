<?php
defined('ABSPATH') || exit;
get_header('shop'); ?>

<main class="product-page">
    <?php
    while (have_posts()) :
        the_post();
        wc_get_template_part('content', 'single-product');
    endwhile;
    ?>
</main>

<?php get_footer('shop'); ?>
