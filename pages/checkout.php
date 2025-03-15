<?php include '../includes/header.php'; ?>

<section class="checkout-page">
    <h1>Checkout</h1>

    <form class="checkout-form" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <input type="hidden" name="cart" id="cart-input">
        <button type="submit">Place Order</button>
    </form>
</section>