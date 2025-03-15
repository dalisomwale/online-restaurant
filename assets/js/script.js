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