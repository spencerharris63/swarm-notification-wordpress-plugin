<?php
/*
Plugin Name: Swarm Notification Plugin
Description: A plugin to send swarm reports to a WhatsApp group.
Version: 1.0
Author: Your Name
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Include necessary files
require_once plugin_dir_path(__FILE__) . 'includes/swarm-form-handler.php';
require_once plugin_dir_path(__FILE__) . 'includes/admin-settings.php';

// Register the form shortcode
add_shortcode('swarm_form', 'display_swarm_form');

function display_swarm_form() {
    ob_start();
    include plugin_dir_path(__FILE__) . 'templates/form-template.php';
    return ob_get_clean();
}

// Register activation hook to add default options
register_activation_hook(__FILE__, 'swarm_notification_activate');
function swarm_notification_activate() {
    add_option('swarm_notification_whatsapp_api', '');
    add_option('swarm_notification_whatsapp_group', '');
}
?>
