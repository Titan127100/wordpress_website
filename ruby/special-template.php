<?php

/*
Template Name: Special Layout
*/

get_header();

if (have_posts()):
    while (have_posts()):the_post() ?>
    <article class="post">
        <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>

        <div class="info-box">
            <h4>Disclaimer Title</h4>
            <p>lorem</p>
        </div>

        <?php the_content(); ?>
    </article>

    <?php endwhile;
    else:
        echo '<p>No content found</p>';
    endif;

get_footer();
?>