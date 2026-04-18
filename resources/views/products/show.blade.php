<head>
    <title>Infinity Gift Store</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="TemplatesJungle">
    <meta name="keywords" content="ecommerce,fashion,store">
    <meta name="description" content="Bootstrap 5 Fashion Store HTML CSS Template">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/vendor.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/style-product.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Marcellus&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
@extends('layouts.app')
@section('content')
    <section class="product-details">

        <div class="container">

            <div class="product-layout">

                <!-- LEFT SIDE -->
                <div class="product-gallery">

                    <div class="main-image"
                        style="perspective: 1000px; overflow: hidden; background: #f9f9f9; border-radius: 8px;">
                        <img id="mainProductImage" src="{{ $product->image }}" alt="{{ $product->name }}"
                            style="transition: all 0.5s ease; width: 100%; height: auto;">
                    </div>
                </div>


                <!-- RIGHT SIDE -->
                <div class="product-info">

                    <h1>{{ $product->name }}</h1>

                    <div class="rating">
                        ★ ★ ★ ★ ☆
                        <span class="rate-value">4.8</span>
                        <a href="#">120 reviews</a>
                        <span class="in-stock">In Stock</span>
                    </div>

                    <div class="price">
                        <span class="new">$<span id="productPrice">{{ $product->price }}</span></span>
                    </div>

                    <!-- Size -->
                    <div class="option">
                        <div class="quantity-box">
                            <button id="minusQty">−</button>
                            <span id="quantity">1</span>
                            <button id="plusQty">+</button>
                        </div>

                        <div class="total-price" style="font-weight:500; margin-top:10px;">
                            Total: $<span id="totalPrice"
                                style="font-size:18px; font-weight:bold;">{{ $product->price }}</span>
                        </div>
                    </div>

                    <!-- Buttons -->
                    <a href="/wrap/{{ $product->id }}" class="btn primary" style="font-size:1rem;">
                        Personalize & Wrap
                    </a>
                     <a id="addToCart" class="btn outline" data-id="{{ $product->id }}"
                        data-name="{{ $product->name }}" data-price="{{ $product->price }}"
                        data-image="{{ $product->image }}"> Add to Cart </a>

                    <p class="design-note">
                        Design your award with text, logos, or patterns in real-time.
                    </p>
                </div>

            </div>


            <!-- Reviews Section -->
            <div class="reviews-section">
                <div class="reviews-header">
                    <h2>Customer Reviews</h2>
                    <button class="write-review" id="toggleReviewBtn">Write a Review</button>
                </div>

                <div id="reviewFormContainer"
                    style="display: none; background: #f9f9f9; padding: 20px; border-radius: 8px; margin-bottom: 20px; border: 1px solid #eee;">
                    <h3>Share your thoughts</h3>
                    <form id="submitReviewForm">
                        <div style="margin-bottom: 15px;">
                            <label>Rating:</label>
                            <select class="form-control" style="width: 100%; padding: 8px;">
                                <option value="5">★★★★★ (5 Stars)</option>
                                <option value="4">★★★★☆ (4 Stars)</option>
                                <option value="3">★★★☆☆ (3 Stars)</option>
                                <option value="2">★★☆☆☆ (2 Stars)</option>
                                <option value="1">★☆☆☆☆ (1 Star)</option>
                            </select>
                        </div>
                        <div style="margin-bottom: 15px;">
                            <input type="text" placeholder="Review Title (e.g. Amazing quality!)"
                                style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                        </div>
                        <div style="margin-bottom: 15px;">
                            <textarea placeholder="Write your comments here..." rows="4"
                                style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></textarea>
                        </div>
                        <button type="button" id="saveReviewBtn"
                            style="background: #000; color: #fff; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">
                            Post Review
                        </button>
                        <button type="button" id="cancelReviewBtn"
                            style="background: transparent; border: none; text-decoration: underline; margin-left: 10px; cursor: pointer;">
                            Cancel
                        </button>
                    </form>
                </div>

                <div class="review-cards">

                    <div class="review-card">
                        <div class="stars">★★★★★</div>
                        <h4>“Stunning clarity and weight!”</h4>
                        <p>Engraving was crisp and exactly as designed. Highly recommended!</p>
                        <span class="review-author">Sarah M. • Verified Buyer</span>
                    </div>

                    <div class="review-card">
                        <div class="stars">★★★★★</div>
                        <h4>“Better than corporate vendors”</h4>
                        <p>The design lab made it easy to upload our logo. Fast turnaround.</p>
                        <span class="review-author">James R. • Verified Buyer</span>
                    </div>

                    <div class="review-card">
                        <div class="stars">★★★★★</div>
                        <h4>“Beautiful gift box included”</h4>
                        <p>The crystal has no bubbles or imperfections. Very happy.</p>
                        <span class="review-author">Elena K. • Verified Buyer</span>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <footer id="footer" class="mt-4 pt-4" style="background-color: #fafafa; border-top: 1px solid #eee;">
        <div class="container">
            <div class="row d-flex flex-wrap justify-content-between py-2">

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="footer-menu">
                        <div class="footer-intro mb-3">
                            <a href="index.html" class="text-decoration-none">
                                <span
                                    style="font-family: 'Marcellus', serif; font-size: 2.2rem; color: #111827; letter-spacing: 3px; font-weight: 300;">
                                    INFINI<span style="color: #c5a059;">.</span>
                                </span>
                            </a>
                        </div>
                        <p class="text-muted" style="line-height: 1.6; font-size: 1.1rem;">
                            Elevating the art of gifting through curated luxury experiences and custom packaging
                            solutions designed to last forever.
                        </p>
                        <div class="social-links mt-4"
                            style="font-family: 'Marcellus', serif; font-size: 2.2rem; color: #111827; letter-spacing: 3px; font-weight: 300;">
                            <ul class="list-unstyled d-flex gap-4">
                                <li><a href="#" class="text-dark"><i class="bi bi-instagram fs-4"></i></a></li>
                                <li><a href="#" class="text-dark"><i class="bi bi-whatsapp fs-4"></i></a></li>
                                <li><a href="#" class="text-dark"><i class="bi bi-tiktok fs-4"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Column 2 -->
                <div class="col-lg-3 col-md-6">
                    <h6 class="footer-title"
                        style="font-family: 'Marcellus', serif; font-size: 1.3rem; color: #111827; letter-spacing: 2px; font-weight:bold;">
                        Customer Service</h6>
                    <ul class="footer-links" style="list-style: none; padding: 10px;">
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Track Order</a></li>
                        <li><a href="#">Policies</a></li>
                    </ul>
                </div>

                <!-- Column 3 -->
                <div class="col-lg-3 col-md-6">
                    <h6 class="footer-title"
                        style="font-family: 'Marcellus', serif; font-size: 1.3rem; color: #111827; letter-spacing: 2px; font-weight:bold;">
                        Contact Us</h6>
                    <ul class="footer-contact">
                        <li><i class="bi bi-envelope me-2"></i> hello@email.com</li>
                        <li><i class="bi bi-telephone me-2"></i> +1 (000) 000-GIFTS</li>
                        <li><i class="bi bi-geo-alt me-2"></i> 123 Street Name, City, ST 00000</li>
                    </ul>
                </div>
                <!-- Column 4 -->
                <div class="col-lg-3 col-md-6">
                    <h6 class="footer-title"
                        style="font-family: 'Marcellus', serif; font-size: 1.3rem; color: #111827; letter-spacing: 2px; font-weight:bold;">
                        Newsletter</h6>
                    <p class="text-muted" style="line-height: 1.6; font-size: 1.1rem;">
                        Subscribe to receive exclusive offer and updates.
                    </p>

                    <form class="newsletter-form">
                        <input type="email" placeholder="Email Address" required>
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="border-top py-1 bg-white">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
                        <p class="mb-0" style="font-size: 1rem; color: #666;">© 2026 INFINI Store. All rights
                            reserved.</p>
                    </div>
                    <div class="col-md-6 text-center text-md-end">

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            let quantity = 1;
            let basePrice = parseFloat(document.getElementById("productPrice").textContent);

            const priceEl = document.getElementById("productPrice");
            const totalEl = document.getElementById("totalPrice");
            const qtyEl = document.getElementById("quantity");
            const mainImage = document.getElementById("mainProductImage");



            /* ===== Quantity ===== */
            document.getElementById("plusQty").onclick = function() {
                quantity++;
                updateTotal();
            };

            document.getElementById("minusQty").onclick = function() {
                if (quantity > 1) {
                    quantity--;
                    updateTotal();
                }
            };

            function updateTotal() {
                qtyEl.textContent = quantity;
                totalEl.textContent = (quantity * basePrice).toFixed(2);
            }

            /* ===== Accordion ===== */
            const acc = document.querySelector(".accordion h3");
            if (acc) {
                acc.addEventListener("click", function() {
                    this.parentElement.classList.toggle("active");
                });
            }

            /* ===== Helpful Buttons ===== */
            document.querySelectorAll(".helpful-btn").forEach(btn => {
                btn.addEventListener("click", function() {
                    let span = this.querySelector("span");
                    span.textContent = parseInt(span.textContent) + 1;
                });
            });

            /* ===== Add To Cart ===== */
            const addBtn = document.getElementById("addToCart");

            if (addBtn) {
                addBtn.addEventListener("click", function() {

                    const product = {
                        id: this.dataset.id,
                        name: this.dataset.name,
                        price: parseFloat(document.getElementById("productPrice").textContent),
                        image: this.dataset.image,
                        quantity: parseInt(document.getElementById("quantity").textContent) || 1
                    };

                    let cart = getCart();

                    const existing = cart.find(item => item.id == product.id);

                    if (existing) {
                        existing.quantity += product.quantity;
                    } else {
                        cart.push(product);
                    }

                    saveCart(cart);

                    /* 🔥 أهم سطر */
                    updateCartCount();


                });
            }

        });
        /* ===== Review Toggle ===== */
        document.addEventListener("DOMContentLoaded", function() {

            const toggleBtn = document.getElementById('toggleReviewBtn');
            const formContainer = document.getElementById('reviewFormContainer');
            const cancelBtn = document.getElementById('cancelReviewBtn');
            const saveBtn = document.getElementById('saveReviewBtn');

            if (toggleBtn) {
                toggleBtn.addEventListener('click', function() {
                    if (formContainer.style.display === 'none') {
                        formContainer.style.display = 'block';
                        toggleBtn.innerText = 'Close Form';
                    } else {
                        formContainer.style.display = 'none';
                        toggleBtn.innerText = 'Write a Review';
                    }
                });
            }

            if (cancelBtn) {
                cancelBtn.addEventListener('click', function() {
                    formContainer.style.display = 'none';
                    toggleBtn.innerText = 'Write a Review';
                });
            }

            if (saveBtn) {
                saveBtn.addEventListener('click', function() {
                    alert('Thank you! Your review has been submitted for approval.');
                    formContainer.style.display = 'none';
                    toggleBtn.innerText = 'Write a Review';
                });
            }

        });
        document.addEventListener("DOMContentLoaded", function() {
            const cartIcon = document.getElementById("cart-icon");

            if (cartIcon) {
                cartIcon.addEventListener("click", function(e) {
                    e.preventDefault(); // يمنع # من إعادة تحميل الصفحة
                    window.location.href = "/cart";
                });
            }
        });
    </script>
@endsection
