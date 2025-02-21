<?php
include_once 'inc/enqueue.php';


function shumi_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus( [
        'header_menu' => 'Header menu',
        'footer_menu' => 'Footer menu'
    ] );
}
add_action('after_setup_theme', 'shumi_theme_setup');

require_once get_template_directory() . '/inc/wp-bootstrap-navwalker-master/class-wp-bootstrap-navwalker.php';


?>


