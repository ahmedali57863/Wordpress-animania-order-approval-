<?php
function animania_handle_order() {
    if (!current_user_can('manage_options')) {
        return;
    }

    global $wpdb;
    $table_name = $wpdb->prefix . 'animania_orders';

    $order_id = intval($_POST['order_id']);
    $status = sanitize_text_field($_POST['status']);
    $customer_email = sanitize_email($_POST['customer_email']);

    // Update order status
    $wpdb->update($table_name, ['status' => $status], ['id' => $order_id]);

    // Send email notification
    wp_mail($customer_email, "Your Order Status", "Your order has been $status.");

    // Redirect back
    wp_redirect(admin_url('admin.php?page=animania-orders'));
    exit;
}

add_action('admin_post_animania_handle_order', 'animania_handle_order');
?>