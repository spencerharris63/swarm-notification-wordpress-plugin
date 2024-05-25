<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

add_action('admin_menu', 'swarm_notification_admin_menu');
function swarm_notification_admin_menu() {
    add_menu_page(
        __('Swarm Notification Settings', 'swarm-notification-plugin'),
        __('Swarm Notification', 'swarm-notification-plugin'),
        'manage_options',
        'swarm-notification-settings',
        'swarm_notification_settings_page'
    );
}

function swarm_notification_settings_page() {
    ?>
    <div class="wrap">
        <h1><?php _e('Swarm Notification Settings', 'swarm-notification-plugin'); ?></h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('swarm_notification_settings_group');
            do_settings_sections('swarm-notification-settings');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

add_action('admin_init', 'swarm_notification_register_settings');
function swarm_notification_register_settings() {
    register_setting('swarm_notification_settings_group', 'swarm_notification_whatsapp_api');
    register_setting('swarm_notification_settings_group', 'swarm_notification_whatsapp_group');

    add_settings_section(
        'swarm_notification_settings_section',
        __('WhatsApp Settings', 'swarm-notification-plugin'),
        null,
        'swarm-notification-settings'
    );

    add_settings_field(
        'swarm_notification_whatsapp_api',
        __('WhatsApp API Key', 'swarm-notification-plugin'),
        'swarm_notification_whatsapp_api_callback',
        'swarm-notification-settings',
        'swarm_notification_settings_section'
    );

    add_settings_field(
        'swarm_notification_whatsapp_group',
        __('WhatsApp Group Phone Number', 'swarm-notification-plugin'),
        'swarm_notification_whatsapp_group_callback',
        'swarm-notification-settings',
        'swarm_notification_settings_section'
    );
}

function swarm_notification_whatsapp_api_callback() {
    $value = get_option('swarm_notification_whatsapp_api', '');
    echo '<input type="text" name="swarm_notification_whatsapp_api" value="' . esc_attr($value) . '" class="regular-text">';
}

function swarm_notification_whatsapp_group_callback() {
    $value = get_option('swarm_notification_whatsapp_group', '');
    echo '<input type="text" name="swarm_notification_whatsapp_group" value="' . esc_attr($value) . '" class="regular-text">';
}
?>
