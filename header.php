<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="container header-inner">
            <div class="logo">
                <?php the_custom_logo(); ?>
            </div>
            <nav class="primary-nav">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'menu_class' => 'menu'
            ]);
            ?>
            </nav>

        </div>
    </header>