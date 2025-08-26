<?php
/**
 * Plugin Name: Animania Order Approval
 * Plugin URI:  https://yourwebsite.com
 * Description: Custom order approval system for Animania.
 * Version: 1.0
 * Author: Ahmed
 * Author URI: https://yourwebsite.com
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Define plugin path
define('ANIMANIA_PLUGIN_PATH', plugin_dir_path(__FILE__));

// Include other files
include_once ANIMANIA_PLUGIN_PATH . 'admin-dashboard.php';
include_once ANIMANIA_PLUGIN_PATH . 'handle-approval.php';

// Activation Hook - Creates Database Table
function animania_create_orders_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'animania_orders';

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id INT AUTO_INCREMENT PRIMARY KEY,
        customer_name VARCHAR(255) NOT NULL,
        customer_email VARCHAR(255) NOT NULL,
        customer_phone VARCHAR(50) NOT NULL,
        product_name VARCHAR(255) NOT NULL,
        total_amount FLOAT NOT NULL,
        paid_amount FLOAT NOT NULL,
        remaining_amount FLOAT NOT NULL,
        status ENUM('Pending', 'Approved', 'Rejected') DEFAULT 'Pending',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) $charset_collate;";

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta($sql);
}

register_activation_hook(__FILE__, 'animania_create_orders_table');

// Capture WPForms Submission
function animania_capture_wpforms_submission($fields, $entry, $form_data) {
    if ($form_data['id'] == 157) { // Form ID for customer order
        global $wpdb;
        $table_name = $wpdb->prefix . 'animania_orders';

        // Extract form data
        $customer_name = isset($fields[1]['value']) ? sanitize_text_field($fields[1]['value']) : '';
        $customer_email = isset($fields[2]['value']) ? sanitize_email($fields[16]['value']) : '';
        $customer_phone = isset($fields[6]['value']) ? sanitize_text_field($fields[18]['value']) : '';
        $total_amount = isset($fields[9]['value']) ? floatval($fields[12]['value']) : 0;
        $paid_amount = isset($fields[10]['value']) ? floatval($fields[9]['value']) : 0;
        $remaining_amount = isset($fields[10]['value']) ? floatval($fields[10]['value']) : 0;

        // Insert into database
        $wpdb->insert($table_name, [
            'customer_name' => $customer_name,
            'customer_email' => $customer_email,
            'customer_phone' => $customer_phone,
            'total_amount' => $total_amount,
            'paid_amount' => $paid_amount,
            'remaining_amount' => $remaining_amount,
            'status' => 'Pending'
        ]);
    }
}

add_action('wpforms_process_complete', 'animania_capture_wpforms_submission', 10, 3);
?>
