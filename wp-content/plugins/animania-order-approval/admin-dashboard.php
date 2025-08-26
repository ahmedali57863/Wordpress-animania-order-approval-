<?php
// Add Admin Menu
function animania_add_admin_menu() {
    add_menu_page(
        'Order Approvals',
        'Order Approvals',
        'manage_options',
        'animania-orders',
        'animania_orders_dashboard',
        'dashicons-cart',
        6
    );
}

add_action('admin_menu', 'animania_add_admin_menu');

// Admin Dashboard Page
function animania_orders_dashboard() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'animania_orders';
    $orders = $wpdb->get_results("SELECT * FROM $table_name");

    echo '<div class="wrap"><h2>Order Approvals</h2>';
    echo '<table class="widefat fixed" cellspacing="0">
            <thead>
                <tr>
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Product</th>
                    <th>Total</th>
                    <th>Paid</th>
                    <th>Remaining</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>';

    foreach ($orders as $order) {
        echo "<tr>
                <td>{$order->customer_name}</td>
                <td>{$order->customer_email}</td>
                <td>{$order->customer_phone}</td>
                <td>{$order->product_name}</td>
                <td>{$order->total_amount}</td>
                <td>{$order->paid_amount}</td>
                <td>{$order->remaining_amount}</td>
                <td>{$order->status}</td>
                <td>
                    <form method='post' action='" . admin_url('admin-post.php') . "'>
                        <input type='hidden' name='action' value='animania_handle_order'>
                        <input type='hidden' name='order_id' value='{$order->id}'>
                        <input type='hidden' name='customer_email' value='{$order->customer_email}'>
                        <button name='status' value='Approved' " . ($order->status != 'Pending' ? 'disabled' : '') . ">Approve</button>
                        <button name='status' value='Rejected' " . ($order->status != 'Pending' ? 'disabled' : '') . ">Reject</button>
                    </form>
                </td>
            </tr>";
    }

    echo '</tbody></table></div>';
}
?>