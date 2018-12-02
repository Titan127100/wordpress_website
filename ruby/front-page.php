<?php

get_header(); ?>

<!-- this div is for the our story section -->
<div class="carousel">
    <?php

    $ourStoryPost = new WP_Query('cat=6');

    if ($ourStoryPost->have_posts()):
        while ($ourStoryPost->have_posts()):$ourStoryPost->the_post() ?>
            <p><?php the_content(); ?></p>
        <?php endwhile;
        else:
            echo '<p>No content found</p>';
        endif; ?>
</div>

<div class="our-story">
    <?php

    $ourStoryPost = new WP_Query('cat=5');

    if ($ourStoryPost->have_posts()):
        while ($ourStoryPost->have_posts()):$ourStoryPost->the_post() ?>
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
        <?php endwhile;
        else:
            echo '<p>No content found</p>';
        endif; ?>
</div>

<!-- this div is for the tickets-->
<div class="carousel2">
    <?php

    $ourStoryPost = new WP_Query('cat=15');

    if ($ourStoryPost->have_posts()):
        while ($ourStoryPost->have_posts()):$ourStoryPost->the_post() ?>
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
        <?php endwhile;
        else:
            echo '<p>No content found</p>';
        endif; ?>
</div>

<div class="Sponsors">
    <h1>Sponsors</h1>
    <img src="<?php echo get_template_directory_uri(); ?>/images/sponsor.png" alt="Sponsor 1">
</div>

<?php get_footer();
?>