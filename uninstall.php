<?php
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    exit; // Exit if accessed directly.
}

// Optionally, remove options or custom tables created by the plugin
delete_option('swarm_notification_settings');
?>
