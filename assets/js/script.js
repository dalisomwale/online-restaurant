let cart = [];

// Add item to cart
function addToCart(id, name, price) {
    const item = { id, name, price, quantity: 1 };
    const existingItem = cart.find(i => i.id === id);
    if (existingItem) {
        existingItem.quantity++;
    } else {
        cart.push(item);
    }
    alert(`${name} added to cart!`);
    updateCart();
}

// Update cart in localStorage
function updateCart() {
    localStorage.setItem('cart', JSON.stringify(cart));
}

// Load cart from localStorage
function loadCart() {
    const savedCart = localStorage.getItem('cart');
    if (savedCart) {
        cart = JSON.parse(savedCart);
    }
}

// Load cart when the page loads
window.onload = loadCart;

// Update cart in localStorage
function updateCart() {
    localStorage.setItem('cart', JSON.stringify(cart));
}

// Load cart from localStorage
function loadCart() {
    const savedCart = localStorage.getItem('cart');
    if (savedCart) {
        cart = JSON.parse(savedCart);
    }
}

// Load cart when the page loads
window.onload = loadCart;

// Image Slider
let currentSlide = 0;
const slides = document.querySelectorAll('.slider img');

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.style.transform = `translateX(${100 * (i - index)}%)`;
    });
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
}

setInterval(nextSlide, 3000); // Change slide every 3 seconds

// Filter menu items by category
function filterCategory(category) {
    const menuItems = document.querySelectorAll('.menu-item');
    menuItems.forEach(item => {
        if (category === 'all' || item.getAttribute('data-category') === category) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
}

// Filter menu items by search input
function filterMenu() {
    const input = document.getElementById('search-input').value.toLowerCase();
    const menuItems = document.querySelectorAll('.menu-item');
    menuItems.forEach(item => {
        const name = item.querySelector('h3').innerText.toLowerCase();
        if (name.includes(input)) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
}

// Filter menu items by category
function filterCategory(category) {
    const menuItems = document.querySelectorAll('.menu-item');
    menuItems.forEach(item => {
        if (category === 'all' || item.getAttribute('data-category') === category) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });

    // Update the heading based on the selected category
    const heading = document.querySelector('.featured-menu h2');
    if (category === 'all') {
        heading.textContent = "Today's Picks";
    } else {
        heading.textContent = category.charAt(0).toUpperCase() + category.slice(1);
    }
}

function placeOrder(itemId, itemName, itemPrice) {
    // Confirm the order with the user
    if (confirm(`Are you sure you want to order ${itemName} for K${itemPrice}?`)) {
        // Send the order details to the server using AJAX
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "../includes/place_order.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onload = function () {
            if (xhr.status === 200) {
                alert("Order placed successfully!");
                // Optionally, redirect to the order confirmation page
                window.location.href = "order_confirmation.php";
            } else {
                alert("Failed to place the order. Please try again.");
            }
        };

        // Send the item details as POST data
        const data = `item_id=${itemId}&item_name=${itemName}&item_price=${itemPrice}`;
        xhr.send(data);
    }
}