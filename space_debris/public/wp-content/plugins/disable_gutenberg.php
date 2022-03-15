<?php
/**
 * @package Disable Gutenberg
 * @version 0.0.1
 */
/*
Plugin Name: Disable Gutenberg
Description: Disable Gutenberg because it sucks.  In fact, it may be the worst thing Wordpress has ever done to itself.  What were they thinking?
Author: Steve George
Author URI: https://uwpace.ca/
Plugin URI: https://uwpace.ca/plugins
Version: 0.0.1
 */

add_filter('use_block_editor_for_post', '__return_false', 10);

add_filter('use_block_editor_for_post_type', '__return_false', 10);
