<?php
/**
 * functions.php - Helper functions for the Restaurant Online Ordering website.
 */

/**
 * Fetch all menu items from the database.
 *
 * @param PDO $conn Database connection object.
 * @return array Array of menu items.
 */
function getMenuItems($conn) {
    try {
        $stmt = $conn->query("SELECT * FROM menu_items");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        error_log("Error fetching menu items: " . $e->getMessage());
        return []; // Return an empty array if the query fails
    }
}

/**
 * Add a new order to the database.
 *
 * @param PDO $conn Database connection object.
 * @param string $customer_name Name of the customer.
 * @param string $customer_email Email of the customer.
 * @param float $total_amount Total amount of the order.
 * @param array $items Array of items in the order.
 * @return int|false Order ID if successful, false otherwise.
 */
function addOrder($conn, $customer_name, $customer_email, $total_amount, $items) {
    $conn->beginTransaction();
    try {
        // Insert order into the orders table
        $stmt = $conn->prepare("INSERT INTO orders (customer_name, customer_email, total_amount) VALUES (?, ?, ?)");
        $stmt->execute([$customer_name, $customer_email, $total_amount]);
        $order_id = $conn->lastInsertId();

        // Insert order items into the order_items table
        $stmt = $conn->prepare("INSERT INTO order_items (order_id, menu_item_id, quantity, price) VALUES (?, ?, ?, ?)");
        foreach ($items as $item) {
            $stmt->execute([$order_id, $item['id'], $item['quantity'], $item['price']]);
        }

        $conn->commit();
        return $order_id;
    } catch (PDOException $e) {
        $conn->rollBack();
        error_log("Error adding order: " . $e->getMessage());
        return false;
    }
}

/**
 * Fetch an order by its ID.
 *
 * @param PDO $conn Database connection object.
 * @param int $order_id ID of the order.
 * @return array|false Order details if found, false otherwise.
 */
function getOrderById($conn, $order_id) {
    try {
        $stmt = $conn->prepare("SELECT * FROM orders WHERE id = ?");
        $stmt->execute([$order_id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        error_log("Error fetching order: " . $e->getMessage());
        return false;
    }
}

/**
 * Fetch all order items for a specific order.
 *
 * @param PDO $conn Database connection object.
 * @param int $order_id ID of the order.
 * @return array Array of order items.
 */
function getOrderItems($conn, $order_id) {
    try {
        $stmt = $conn->prepare("SELECT * FROM order_items WHERE order_id = ?");
        $stmt->execute([$order_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        error_log("Error fetching order items: " . $e->getMessage());
        return [];
    }
}

/**
 * Fetch all orders from the database.
 *
 * @param PDO $conn Database connection object.
 * @return array Array of orders.
 */
function getAllOrders($conn) {
    try {
        $stmt = $conn->query("SELECT * FROM orders");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        error_log("Error fetching all orders: " . $e->getMessage());
        return [];
    }
}

/**
 * Fetch a menu item by its ID.
 *
 * @param PDO $conn Database connection object.
 * @param int $item_id ID of the menu item.
 * @return array|false Menu item details if found, false otherwise.
 */
function getMenuItemById($conn, $item_id) {
    try {
        $stmt = $conn->prepare("SELECT * FROM menu_items WHERE id = ?");
        $stmt->execute([$item_id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        error_log("Error fetching menu item: " . $e->getMessage());
        return false;
    }
}