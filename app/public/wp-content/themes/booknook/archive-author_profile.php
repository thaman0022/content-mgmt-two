<?php get_header(); ?>
<main class="author-archive">
    <h1>Our Authors</h1>
    <div class="author-list">
        <?php
        $args = array('post_type' => 'author_profile');
        $loop = new WP_Query($args);
        if ($loop->have_posts()) :
            while ($loop->have_posts()) : $loop->the_post(); ?>
                <div class="author-card">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php if (has_post_thumbnail()) : the_post_thumbnail('thumbnail'); endif; ?>
                    <p><?php the_excerpt(); ?></p>
                </div>
            <?php endwhile;
        else :
            echo '<p>No authors found.</p>';
        endif;
        wp_reset_postdata();
        ?>
    </div>
</main>
<?php get_footer(); ?>
