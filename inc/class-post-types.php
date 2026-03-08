<?php

namespace HaligiWP;

class PostTypes {

    public function __construct() {

        add_action('init', [$this, 'hawp_register_post_types']);

    }

    public function hawp_register_post_types() {

        register_post_type('service', [
            'label' => __('Services', 'hawp'),
            'public' => true,
            'has_archive' => true,
            'rewrite' => ['slug' => 'services'],
            'supports' => ['title','editor','thumbnail','excerpt']
        ]);

        register_post_type('project', [
            'label' => __('Projects', 'hawp'),
            'public' => true,
            'has_archive' => true,
            'rewrite' => ['slug' => 'projects'],
            'supports' => ['title','editor','thumbnail','excerpt']
        ]);

        register_post_type('case-study', [
            'label' => __('Case Studies', 'hawp'),
            'public' => true,
            'has_archive' => true,
            'rewrite' => ['slug' => 'case-studies'],
            'supports' => ['title','editor','thumbnail','excerpt']
        ]);

    }

}