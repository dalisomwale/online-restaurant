<?php include '../includes/header.php'; ?>

<section class="order-confirmation-page">
    <h1>Thank You for Your Order!</h1>

    <div class="order-details">
        <p>Your order ID is: <?php echo $order_id; ?></p>
        <p>We'll deliver your food as soon as possible.</p>
    </div>

    <button class="continue-shopping-button" onclick="window.location.href='menu.php'">Continue Shopping</button>
</section>
