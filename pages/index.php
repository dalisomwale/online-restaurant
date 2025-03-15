<?php include '../includes/header.php'; ?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h1>Welcome to Our Restaurant</h1>
        <p>Order delicious food and enjoy the fastest wifi network!</p>
        <a href="menu.php" class="cta-button">View Menu</a>
    </div>
</section>

<!-- Featured Menu Section -->
<section class="featured-menu">
    <h2>Our customer's favorite food</h2>
    <div class="menu-items">
        <div class="menu-item">
            <img src="../assets/images/burger.jpeg" alt="Classic Burger">
            <h3>Classic Burger</h3>
            <p>K30.00</p>
            <button onclick="addToCart(1, 'Classic Burger', 30.00)">Add to Cart</button>
        </div>
        <div class="menu-item">
            <img src="../assets/images/pizza.jpeg" alt="Margherita Pizza">
            <h3>Medium Pizza</h3>
            <p>K100.00</p>
            <button onclick="addToCart(2, 'Margherita Pizza', 12.00)">Add to Cart</button>
        </div>
        <div class="menu-item">
            <img src="../assets/images/shawarma.jpeg" alt="Caesar Salad">
            <h3>Shawarma</h3>
            <p>K30.00</p>
            <button onclick="addToCart(3, 'Caesar Salad', 8.00)">Add to Cart</button>
        </div>
        <div class="menu-item">
            <img src="../assets/images/ice-cream.jpeg" alt="Caesar Salad">
            <h3>Ice cream</h3>
            <p>K10.00</p>
            <button onclick="addToCart(3, 'Caesar Salad', 8.00)">Add to Cart</button>
        </div>
        <div class="menu-item">
            <img src="../assets/images/pizza.jpeg" alt="Margherita Pizza">
            <h3>Large Pizza</h3>
            <p>K180.00</p>
            <button onclick="addToCart(2, 'Margherita Pizza', 12.00)">Add to Cart</button>
        </div>
        <div class="menu-item">
            <img src="../assets/images/shawarma.jpeg" alt="Caesar Salad">
            <h3>Shawarma</h3>
            <p>K30.00</p>
            <button onclick="addToCart(3, 'Caesar Salad', 8.00)">Add to Cart</button>
        </div>
        <div class="menu-item">
            <img src="../assets/images/ice-cream.jpeg" alt="Caesar Salad">
            <h3>Ice cream</h3>
            <p>K10.00</p>
            <button onclick="addToCart(3, 'Caesar Salad', 8.00)">Add to Cart</button>
        </div>
        <div class="menu-item">
            <img src="../assets/images/burger.jpeg" alt="Classic Burger">
            <h3>Classic Burger</h3>
            <p>K30.00</p>
            <button onclick="addToCart(1, 'Classic Burger', 10.00)">Add to Cart</button>
        </div>
    </div>
</section>

<!-- CTA Banner -->
<section class="cta-banner">
    <h2>Hungry? Order Now!</h2>
    <p>Get your favorite dishes delivered to your table.</p>
    <a href="menu.php" class="cta-button">Order Now</a>
</section>

<!-- Testimonials Section -->
<section class="testimonials">
    <h2>What Our Customers Say</h2>
    <div class="testimonial-items">
        <div class="testimonial">
            <p>"The best burger I've ever had! Highly recommended."</p>
            <p><strong>- Esau Ngoma</strong></p>
        </div>
        <div class="testimonial">
            <p>"Fast delivery and delicious food. Will order again!"</p>
            <p><strong>- Harrison Sakala</strong></p>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>