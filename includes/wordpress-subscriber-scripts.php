<?php

/**
 * Add scripts
 */
function wns_add_scripts(){
    wp_enqueue_style('wns-main-styles', WNS_PLUGIN_DIR_URL . 'css/styles.css');
    wp_enqueue_script('wns-main-script', WNS_PLUGIN_DIR_URL . 'js/main.js', array('jquery'));
}

add_action('wp_enqueue_scripts', 'wns_add_scripts');