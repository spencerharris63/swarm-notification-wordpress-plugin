<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

if (isset($_POST['submit_swarm_form'])) {
    $name = sanitize_text_field($_POST['name']);
    $street = sanitize_text_field($_POST['street']);
    $phone = sanitize_text_field($_POST['phone']);
    $location = sanitize_text_field($_POST['location']);
    $details = sanitize_textarea_field($_POST['details']);

    $message = "New Swarm Report:\n\n";
    $message .= "Name: $name\n";
    $message .= "Street: $street\n";
    $message .= "Phone: $phone\n";
    $message .= "Location of the swarm: $location\n";
    $message .= "Details: $details";

    send_whatsapp_message($message);
}

function send_whatsapp_message($message) {
    $apiURL = 'https://api.whatsapp.com/send';
    $apiKey = get_option('swarm_notification_whatsapp_api');
    $phoneNumber = get_option('swarm_notification_whatsapp_group');

    if (empty($apiKey) || empty($phoneNumber)) {
        return; // Exit if no API key or phone number is set
    }

    $data = [
        'phone' => $phoneNumber,
        'body' => $message,
    ];

    $options = [
        'http' => [
            'header'  => "Content-type: application/json\r\n",
            'method'  => 'POST',
            'content' => json_encode($data),
        ],
    ];

    $context  = stream_context_create($options);
    $result = file_get_contents($apiURL, false, $context);

    if ($result === FALSE) {
        // Handle error
    }
}
?>
