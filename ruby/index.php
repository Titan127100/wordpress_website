<?php

get_header();?>

<div class="carousel">
    <?php

    $ourStoryPost = new WP_Query('cat=13');

    if ($ourStoryPost->have_posts()):
        while ($ourStoryPost->have_posts()):$ourStoryPost->the_post() ?>
            <p><?php the_content(); ?></p>
        <?php endwhile;
        else:
            echo '<p>No content found</p>';
        endif; ?>
</div>

<?php get_footer();
?>