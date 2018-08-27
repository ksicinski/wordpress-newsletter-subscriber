<?php
/**
 * Plugin Name: Newsletter Subscriber
 * Description: A for to subscriber to a newsletter
 * Version: 1.0
 * Author: Krzysztof Siciński
 * Author URI: https://www.fradnet.com
 **/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

define('WNS_PLUGIN_NAME_FOLDER', 'wordpress-newsletter-subscriber');
define('WNS_PLUGIN_DIR_PATH', plugin_dir_path(__FILE__));
define('WNS_PLUGIN_DIR_URL', plugins_url() . '/' . WNS_PLUGIN_NAME_FOLDER . '/');

// Load Scripts
require_once 'includes/wordpress-subscriber-scripts.php';

//Load Widgets
require_once 'includes/wordpress-subscriber-class.php';

// Register Widgets
function wns_register_newsletter_subscriber()
{
    register_widget('Wordpress_Newsletter_Subscriber_Widget');
}

add_action('widgets_init', 'wns_register_newsletter_subscriber');