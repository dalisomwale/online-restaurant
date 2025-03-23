<?php
session_start();
include 'db.php'; // Include the database connection

// Get the item details from the POST request
$item_id = $_POST['item_id'];
$item_name = $_POST['item_name'];
$item_price = $_POST['item_price'];

// Simulate customer details (replace with actual user data from session or form)
$customer_name = "Guest"; // Example: Replace with $_SESSION['username'] if logged in
$customer_email = "guest@example.com"; // Example: Replace with $_SESSION['email'] if logged in

// Insert the order into the database
try {
    // Insert into the orders table
    $stmt = $conn->prepare("INSERT INTO orders (customer_name, customer_email, total_amount) VALUES (?, ?, ?)");
    $stmt->execute([$customer_name, $customer_email, $item_price]);
    $order_id = $conn->lastInsertId();

    // Insert into the order_items table
    $stmt = $conn->prepare("INSERT INTO order_items (order_id, menu_item_id, quantity, price) VALUES (?, ?, ?, ?)");
    $stmt->execute([$order_id, $item_id, 1, $item_price]);

    // Redirect to the order confirmation page
    header("Location: ../order_confirmation.php?order_id=$order_id");
    exit();
} catch (PDOException $e) {
    error_log("Error placing order: " . $e->getMessage());
    echo "Failed to place the order.";
}
?>