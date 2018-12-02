<?php


get_header(); ?>

<div class="container" style="margin-top:50px">
    <div class="row" align="center">
        <div>
            <h1 class="text-center">404 ERROR</h1>
            <h3 class="text-center">We couldn't find that page and we are really sorry 😞</h3>
            <img src="<?php bloginfo('template_url'); ?>/images/404.png"/>
        </div>
    </div>
    <div class= "center">
        <div>
            <a href="javascript:history.go(-1)" class="center" href="<?php the_permalink(); ?>" >Go Back</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>