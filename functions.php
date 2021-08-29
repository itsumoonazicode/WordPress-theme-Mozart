<?php

function theme_setup() {
	add_theme_support('title-tag');
}
add_action('after_setup_theme', 'theme_setup');

function theme_scripts() {
	wp_enqueue_style('theme-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'theme_scripts');