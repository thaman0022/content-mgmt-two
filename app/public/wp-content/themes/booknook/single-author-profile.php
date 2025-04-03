<?php get_header(); ?>
<main class="author-profile">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <h1><?php the_title(); ?></h1>
            <?php if (has_post_thumbnail()) : ?>
                <div class="author-img"><?php the_post_thumbnail('medium'); ?></div>
            <?php endif; ?>
            <div class="author-bio"><?php the_content(); ?></div>

            <?php if (function_exists('the_field')) : ?>
                <p><strong>Genre:</strong> <?php the_field('genre'); ?></p>
                <p><strong>Rating:</strong> <?php the_field('rating'); ?></p>
            <?php endif; ?>
        </article>
    <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
