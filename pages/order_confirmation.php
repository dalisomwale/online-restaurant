<?php
include '../includes/header.php';

// Get the order ID from the URL
$order_id = $_GET['order_id'];
?>

<section class="order-confirmation">
    <h1>Thank You for Your Order!</h1>
    <p>Your order has been placed successfully. Here are your order details:</p>

    <div class="order-details">
        <p><strong>Order ID:</strong> <?php echo htmlspecialchars($order_id); ?></p>
        <p>We'll deliver your order shortly.</p>
    </div>

    <a href="menu.php" class="cta-button">Back to Menu</a>
</section>

<?php include '../includes/footer.php'; ?>