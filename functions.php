<?php

namespace HaligiWP;

if (!defined('ABSPATH')) {
    exit;
}

require get_template_directory() . '/inc/class-setup.php';
require get_template_directory() . '/inc/class-assets.php';
require get_template_directory() . '/inc/class-navigation.php';
require get_template_directory() . '/inc/class-post-types.php';

new Setup();
new Assets();
new Navigation();
new PostTypes();