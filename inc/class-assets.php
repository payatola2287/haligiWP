<?php

namespace HaligiWP;

class Assets {

    public function __construct() {
        add_action('wp_enqueue_scripts', [$this, 'hawp_enqueue_assets']);
    }

    public function hawp_enqueue_assets() {

        wp_enqueue_style(
            'hawp-main',
            get_template_directory_uri() . '/assets/css/main.css',
            [],
            '1.0'
        );

        wp_enqueue_script(
            'hawp-main',
            get_template_directory_uri() . '/assets/js/main.js',
            [],
            '1.0',
            true
        );

    }

}