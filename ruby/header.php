<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>
    <div class="container">
        <!-- site header -->
        <header class="site-header">
            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/hraff-logo.png" width="150" height="150"></a>

            <?php
            $args = array(
                'theme_location' => 'primary'
            )
            ?>

            <nav class="site-nav">
                <input type="image" src="<?php echo get_template_directory_uri(); ?>/images/search.png" alt="Search" width"30" height="30">
                <input type="image" src="<?php echo get_template_directory_uri(); ?>/images/cart.png" alt="Buy" width="30" height="30">
                <?php wp_nav_menu($args); ?>
            </nav>
        </header>