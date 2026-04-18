function getCart() {
    return JSON.parse(localStorage.getItem("cart")) || [];
}

function saveCart(cart) {
    localStorage.setItem("cart", JSON.stringify(cart));
}

function updateCartCount() {
    const cart = getCart();
    const total = cart.reduce((sum, item) => sum + item.quantity, 0);

    const cartCount = document.getElementById("cart-count");
    if (cartCount) {
        cartCount.textContent = total;
    }
}

/* 🔥 تشغيل تلقائي بكل الصفحات */
document.addEventListener("DOMContentLoaded", function () {
    updateCartCount();
});

/* 🔥 تحديث بين الصفحات */
window.addEventListener("storage", updateCartCount);

window.addEventListener('load', () => {
    // إذا كان الرابط يحتوي على # (أي سكشن معين)
    if (window.location.hash) {
        const target = document.querySelector(window.location.hash);
        if (target) {
            // ننتظر قليلاً حتى تكتمل الصور والتحميل ثم ننزل للسكشن
            setTimeout(() => {
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }, 500);
        }
    }
});
