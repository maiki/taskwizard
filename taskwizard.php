<?php
/**
 * Plugin Name: Taskwizard
 * Plugin URI: 
 * Description: Taskwizard is a WordPress-based automation platform for interacting with APIs and formatting data.
 * Version: 0.1.0
 * Author: maiki
 * Author URI: https://maiki.interi.org
 * License: CC0
 * Text Domain: taskwizard
 * Domain Path: 
 * Requires at least: 6.3
 * Tested up to: 6.3
 * Requires PHP: 8.0
 */

/*
Taskwizard is released under the Creative Commons Zero v1.0 Universal (CC0) License. 

This means you can copy, modify, distribute and perform the work, even for commercial purposes, without asking permission. For more information, see https://creativecommons.org/publicdomain/zero/1.0/.
*/

// Prevent direct file access
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Include all PHP files in the 'includes' directory and its subdirectories
foreach (glob(plugin_dir_path(__FILE__) . 'includes/**/*.php', GLOB_BRACE) as $file) {
    require_once $file;
}

