<?php include '../includes/header.php'; ?>

<section class="menu-page">
    <h1>Our Menu</h1>

    <!-- Search Bar -->
    <div class="search-bar">
        <input type="text" id="search-input" placeholder="Search for dishes..." onkeyup="filterMenu()">
    </div>

    <!-- Category Filter -->
    <div class="category-filter">
        <button onclick="filterCategory('all')">All</button>
        <?php foreach ($categories as $category): ?>
            <button onclick="filterCategory('<?php echo strtolower($category); ?>')"><?php echo $category; ?></button>
        <?php endforeach; ?>
    </div>

    <!-- Menu Items -->
    <div class="menu-items" id="menu-items">
        <?php foreach ($menuItems as $item): ?>
            <div class="menu-item" data-category="<?php echo strtolower($item['category']); ?>">
                <img src="../assets/images/<?php echo $item['image']; ?>" alt="<?php echo $item['name']; ?>">
                <h3><?php echo $item['name']; ?></h3>
                <p><?php echo $item['description']; ?></p>
                <p>K<?php echo $item['price']; ?></p>
                <button onclick="addToCart(<?php echo $item['id']; ?>, '<?php echo $item['name']; ?>', <?php echo $item['price']; ?>)">Add to Cart</button>
            </div>
        <?php endforeach; ?>
    </div>
</section>