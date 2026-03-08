<?php

namespace HaligiWP;

class Setup {

    public function __construct() {
        add_action('after_setup_theme', [$this, 'hawp_theme_setup']);
    }

    public function hawp_theme_setup() {

        add_theme_support('title-tag');

        add_theme_support('post-thumbnails');

        add_theme_support('html5', [
            'search-form',
            'gallery',
            'caption',
            'style',
            'script'
        ]);

        register_nav_menus([
            'primary' => __('Primary Menu', 'hawp'),
            'footer' => __('Footer Menu', 'hawp')
        ]);

    }

}