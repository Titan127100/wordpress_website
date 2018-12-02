<?php

get_header();?>
<div class="single-post">
<?php if (have_posts()):
    while (have_posts()):the_post() ?>
    <article class="post">
        <?php 
            $ars = array(
                'child_of' => $post ->ID
            )
        ?>
        <?php the_post_thumbnail('image'); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
    </article>

    <?php endwhile;
    else:
        echo '<p>No content found</p>';
    endif;?>


</div>

<?php
get_footer();
?>