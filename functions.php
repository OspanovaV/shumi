<?php
function shumi_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array('main-menu' => __('Main Menu')));
}
add_action('after_setup_theme', 'shumi_theme_setup');
?>