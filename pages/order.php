<?php
include '../includes/header.php';

// Get the item details from the URL parameters
$item_id = $_GET['item_id'];
$item_name = $_GET['item_name'];
$item_price = $_GET['item_price'];
?>

<section class="order-details">
    <h1>Order Details</h1>
    <div class="item-info">
        <h2><?php echo htmlspecialchars($item_name); ?></h2>
        <p>Price: K<?php echo htmlspecialchars($item_price); ?></p>
    </div>

    <form action="../includes/place_order.php" method="POST" class="payment-form">
        <h2>Payment Details</h2>

        <!-- Hidden fields to pass item details -->
        <input type="hidden" name="item_id" value="<?php echo $item_id; ?>">
        <input type="hidden" name="item_name" value="<?php echo $item_name; ?>">
        <input type="hidden" name="item_price" value="<?php echo $item_price; ?>">

        <!-- Payment Form Fields -->
        <label for="card_number">Card Number:</label>
        <input type="text" id="card_number" name="card_number" required>

        <label for="expiry_date">Expiry Date:</label>
        <input type="text" id="expiry_date" name="expiry_date" placeholder="MM/YY" required>

        <label for="cvv">CVV:</label>
        <input type="text" id="cvv" name="cvv" required>

        <label for="name_on_card">Name on Card:</label>
        <input type="text" id="name_on_card" name="name_on_card" required>

        <button type="submit" class="cta-button">Place Order</button>
    </form>
</section>

<?php include '../includes/footer.php'; ?>