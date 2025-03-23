<?php include '../includes/header.php'; ?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h2>Welcome to Our Restaurant</h2>
        <p>Order delicious food and beverages at the comfort of your table with ease!</p>
    </div>
</section>

<!-- Category Filters -->
<section class="category-filters">
    <h2>Explore Our Menu</h2>
    <div class="filter-buttons">
        <button onclick="filterCategory('all')">Today's Picks</button>
        <button onclick="filterCategory('shawarma')">Shawarma</button>
        <button onclick="filterCategory('burger')">Burger</button>
        <button onclick="filterCategory('pizza')">Pizza</button>
        <button onclick="filterCategory('ice cream')">Ice Cream</button>
        <button onclick="filterCategory('drinks')">Drinks</button>
    </div>
</section>

<!-- Featured Menu Section -->
<section class="featured-menu">
    <div class="menu-items" id="menu-items">
        <div class="menu-item" data-category="ice-cream">
            <img src="../assets/images/ice-cream.jpeg" alt="Ice Cream">
            <h3>Ice Cream</h3>
            <p>K10.00</p>
            <a href="order.php?item_id=7&item_name=Ice Cream&item_price=10.00" class="order-button">Order</a>
        </div>
        <div class="menu-item" data-category="burger">
            <img src="../assets/images/burger.jpeg" alt="Classic Burger">
            <h3>Classic Burger</h3>
            <p>K30.00</p>
            <a href="order.php?item_image=burger.jpeg&item_id=6&item_name=Classic Burger&item_price=30.00" class="order-button">Order</a>
        </div>
        <div class="menu-item" data-category="pizza">
            <img src="../assets/images/pizza.jpeg" alt="Medium Pizza">
            <h3>Medium Pizza</h3>
            <p>K100.00</p>
            <a href="order.php?item_id=5&item_name=Pizza&item_price=100.00" class="order-button">Order</a>
        </div>
        <div class="menu-item" data-category="shawarma">
            <img src="../assets/images/shawarma.jpeg" alt="Shawarma">
            <h3>Shawarma</h3>
            <p>K30.00</p>
            <a href="order.php?item_id=4&item_name=Shawarma&item_price=30.00" class="order-button">Order</a>
        </div>
        <div class="menu-item" data-category="drinks">
            <img src="../assets/images/2L Coca Cola.jpeg" alt="drinks">
            <h3>2L Coca Cola</h3>
            <p>K25.00</p>
            <a href="order.php?item_id=3&item_name=2L Coca Cola&item_price=25.00" class="order-button">Order</a>
        </div>
    </div>
</section>

<script src="../assets/js/script.js"></script>

<?php include '../includes/footer.php'; ?>