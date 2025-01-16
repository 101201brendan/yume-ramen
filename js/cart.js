// Initialize cart from localStorage or empty array
let cart = JSON.parse(localStorage.getItem('cart')) || [];

// Toggle cart dropdown visibility
function toggleCart() {
  const cartDropdown = document.getElementById('cart-dropdown');
  cartDropdown.style.display = cartDropdown.style.display === 'block' ? 'none' : 'block';
}

// Add item to cart
function addToCart(name, price) {
  const existingItem = cart.find(item => item.name === name);
  if (existingItem) {
    existingItem.quantity += 1;
  } else {
    cart.push({ name, price, quantity: 1 });
  }
  updateCart();
  saveCart();
}

// Save cart to localStorage
function saveCart() {
  localStorage.setItem('cart', JSON.stringify(cart));
}

// Update cart UI and badge
function updateCart() {
  const cartItemsContainer = document.getElementById('cart-items');
  const cartBadge = document.getElementById('cart-badge');

  if (!cartItemsContainer || !cartBadge) return; // Ensure elements exist

  cartItemsContainer.innerHTML = '';

  if (cart.length === 0) {
    cartItemsContainer.innerHTML = '<p class="text-center text-muted">Your cart is empty</p>';
    cartBadge.innerText = 0;
    return;
  }

  let totalQuantity = 0;

  cart.forEach((item, index) => {
    totalQuantity += item.quantity;

    const cartItem = document.createElement('div');
    cartItem.classList.add('cart-item');
    cartItem.innerHTML = `
      <span>${item.name} (x${item.quantity})</span>
      <span>$${(item.price * item.quantity).toFixed(2)}</span>
      <button class="edit-btn" onclick="editItem(${index}, 'increase')">+</button>
      <button class="edit-btn" onclick="editItem(${index}, 'decrease')">-</button>
      <button class="remove-btn" onclick="removeItem(${index})">Remove</button>
    `;
    cartItemsContainer.appendChild(cartItem);
  });

  cartBadge.innerText = totalQuantity;
}

// Edit item quantity
function editItem(index, action) {
  if (action === 'increase') {
    cart[index].quantity += 1;
  } else if (action === 'decrease') {
    cart[index].quantity -= 1;
    if (cart[index].quantity <= 0) {
      cart.splice(index, 1); // Remove item if quantity is 0
    }
  }
  updateCart();
  saveCart();
}

// Remove item from cart
function removeItem(index) {
  cart.splice(index, 1); // Remove item by index
  updateCart();
  saveCart();
}

// Checkout function
function checkout() {
  alert('Proceeding to checkout...');
  // Add actual checkout logic here
}

// Load cart on page load
document.addEventListener('DOMContentLoaded', updateCart);
