<?php

namespace HaligiWP;

class Navigation {

    public function __construct() {
        add_filter('nav_menu_css_class', [$this, 'hawp_menu_classes'], 10, 4);
    }

    public function hawp_menu_classes($classes) {
        $classes[] = 'nav-item';
        return $classes;
    }

}