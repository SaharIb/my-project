@extends('layouts.app')

@section('content')

<div class="container cart-page">
    <h2 class="cart-title">Your Cart</h2>

    <div id="cartContainer"></div>

    <div class="cart-footer">
        <h4>Total: $<span id="cartTotal">0</span></h4>
    </div>
</div>

<style>
.cart-page {
    padding: 50px 0;
}

.cart-title {
    font-size: 2rem;
    margin-bottom: 30px;
    font-weight: 600;
}

/* ===== Cart Item ===== */
.cart-item {
    display: flex;
    align-items: center;
    gap: 20px;
    padding: 20px 0;
    border-bottom: 1px solid #eee;
}

.cart-img {
    width: 90px;
    height: 90px;
    object-fit: cover;
    border-radius: 10px;
}

.cart-info {
    flex: 1;
}

.cart-info h5 {
    margin: 0;
    font-size: 18px;
    font-weight: 500;
}

.cart-info p {
    color: #777;
    margin: 5px 0 10px;
}

/* ===== Quantity ===== */
.qty-box {
    display: flex;
    align-items: center;
    gap: 10px;
}

.qty-box button {
    border: 1px solid #ddd;
    background: #fff;
    padding: 5px 12px;
    cursor: pointer;
    border-radius: 6px;
    transition: 0.2s;
}

.qty-box button:hover {
    background: #000;
    color: #fff;
}

.qty-box span {
    min-width: 20px;
    text-align: center;
}

/* ===== Actions ===== */
.cart-actions {
    text-align: right;
}

.item-total {
    display: block;
    font-weight: bold;
    margin-bottom: 10px;
}

.remove-btn {
    background: none;
    border: none;
    color: #999;
    font-size: 18px;
    cursor: pointer;
}

.remove-btn:hover {
    color: red;
}

/* ===== Footer ===== */
.cart-footer {
    margin-top: 30px;
    text-align: right;
}

.empty-cart {
    color: #888;
    font-size: 18px;
}
</style>

<script>
document.addEventListener("DOMContentLoaded", function () {
    loadCart();
});

/* ===== Helpers ===== */
function getCart() {
    return JSON.parse(localStorage.getItem("cart")) || [];
}

function saveCart(cart) {
    localStorage.setItem("cart", JSON.stringify(cart));
    loadCart();

    if (typeof updateCartCount === "function") {
        updateCartCount();
    }
}

/* ===== Load Cart ===== */
function loadCart() {
    let cart = getCart();
    const container = document.getElementById("cartContainer");
    const totalEl = document.getElementById("cartTotal");

    container.innerHTML = "";
    let total = 0;

    if (cart.length === 0) {
        container.innerHTML = `<p class="empty-cart">Your cart is empty 🛒</p>`;
        totalEl.textContent = "0";
        return;
    }

    cart.forEach((item, index) => {
        total += item.price * item.quantity;

        container.innerHTML += `
        <div class="cart-item">

            <img src="${item.image}" class="cart-img">

            <div class="cart-info">
                <h5>${item.name}</h5>
                <p>$${item.price}</p>

                <div class="qty-box">
                    <button onclick="decrease(${index})">−</button>
                    <span>${item.quantity}</span>
                    <button onclick="increase(${index})">+</button>
                </div>
            </div>

            <div class="cart-actions">
                <span class="item-total">$${(item.price * item.quantity).toFixed(2)}</span>

                <button onclick="removeItem(${index})" class="remove-btn">
                    ✕
                </button>
            </div>

        </div>
        `;
    });

    totalEl.textContent = total.toFixed(2);
}

/* ===== Increase ===== */

window.increase = function(index) {
    let cart = getCart();

    cart[index].quantity++;

    localStorage.setItem("cart", JSON.stringify(cart));

    // تحديث مباشر بدون reload
    updateRow(index);
    updateTotal();
    updateCartCount();
}
/* ===== Decrease ===== */
window.decrease = function(index) {
    let cart = getCart();

    if (cart[index].quantity > 1) {
        cart[index].quantity--;
    } else {
        cart.splice(index, 1);
        localStorage.setItem("cart", JSON.stringify(cart));
        loadCart(); // بس هون نعيد الرسم لأنه انحذف
        return;
    }

    localStorage.setItem("cart", JSON.stringify(cart));

    updateRow(index);
    updateTotal();
    updateCartCount();
}
/* ===== Remove ===== */
window.removeItem = function(index) {
    let cart = getCart();
    cart.splice(index, 1);
    saveCart(cart);
}
/* ===== update ===== */

function updateRow(index) {
    let cart = getCart();
    const item = cart[index];

    const row = document.querySelectorAll(".cart-item")[index];

    if (!row) return;

    row.querySelector(".qty-box span").textContent = item.quantity;

    row.querySelector(".item-total").textContent =
        "$" + (item.price * item.quantity).toFixed(2);
}
/* ===== Total ===== */

function updateTotal() {
    let cart = getCart();
    let total = 0;

    cart.forEach(item => {
        total += item.price * item.quantity;
    });

    document.getElementById("cartTotal").textContent = total.toFixed(2);
}
</script>

@endsection
