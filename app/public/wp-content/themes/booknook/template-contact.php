<?php
/* Template Name: Contact Page */
get_header(); ?>
<main>
    <h1>Contact Us</h1>
    <?php echo do_shortcode('[contact-form-7 id="contact-form" title="Contact form"]'); ?>
</main>
<?php get_footer(); ?>