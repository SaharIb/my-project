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
    <section class="shop-page py-5">
        <div class="container">

            <!-- Breadcrumb -->
            <div class="breadcrumb">
                <a href="/">Home</a> >
                {{ ucwords(str_replace('-', ' ', $occasion)) }}
            </div>

            <!-- Header -->
            <div class="shop-header">
                <div>
                    <h1>{{ ucwords(str_replace('-', ' ', $occasion)) }} Gifts</h1>
                    <p>
                        Celebrate their achievement with unique, personalized keepsakes.
                        <span class="products-count">Showing 24 products</span>
                    </p>
                </div>

                <div class="sort-box">
                    Sort By:
                    <select>
                        <option>Newest Arrivals</option>
                        <option>Price Low to High</option>
                        <option>Price High to Low</option>
                    </select>
                </div>
            </div>

            <!-- ===== Layout Start ===== -->
            <div class="shop-layout-wrapper">

                <!-- Sidebar -->
                <aside class="sidebar">

                    <div class="filter-group">
                        <h4>Category</h4>
                        <label><input type="checkbox"> Mugs & Drinkware</label>
                        <label><input type="checkbox"> Trophy Shields</label>
                        <label><input type="checkbox"> Gift Boxes</label>
                        <label><input type="checkbox"> Photo Frames</label>
                    </div>

                    <div class="filter-group">
                        <h4>Price Range</h4>
                        <input type="range">
                        <div class="price-labels">
                            <span>$10</span>
                            <span>$500+</span>
                        </div>
                    </div>

                    <div class="filter-group">
                        <h4>Color</h4>
                        <div class="colors">
                            <span class="color black"></span>
                            <span class="color yellow"></span>
                            <span class="color gray"></span>
                            <span class="color red"></span>
                            <span class="color blue"></span>
                        </div>
                    </div>

                    <div class="filter-group">
                        <h4>Customization</h4>
                        <label><input type="radio" name="c"> Photo Upload</label>
                        <label><input type="radio" name="c"> Text Only</label>
                        <label><input type="radio" name="c"> No Personalization</label>
                    </div>

                </aside>

                <!-- Products Area -->
                <div class="products-area">

                    <!-- Smart Gift Pairing -->
                    <div class="smart-box">
                        <div>
                            <h4>Smart Gift Pairing</h4>
                            <p>Don't forget to add a greeting card or premium wrapping to your gift.</p>
                        </div>
                        <button>View Add-ons</button>
                    </div>

                    <!-- Products Grid -->
                    <div class="products-grid">

                        @for ($i = 1; $i <= 9; $i++)
                            <div class="product-card">

                                <div class="badge bestseller">BESTSELLER</div>
                                <div class="wishlist">♡</div>

                                <div class="product-image-wrapper">
                                    <img src="{{ asset('images/Eid__ (1).png') }}" alt="">
                                </div>

                                <div class="card-body">

                                    <div class="rating">
                                        ★ ★ ★ ★ ★ <span>(124)</span>
                                    </div>

                                    <h4>Engraved Wooden Frame</h4>

                                    <div class="price-box">
                                        <span class="current-price">$34.99</span>
                                        <span class="old-price">$45.00</span>
                                    </div>

                                    <button class="btn secondary">Customize</button>

                                </div>

                            </div>
                        @endfor

                    </div>

                    <!-- Pagination -->
                    <div class="pagination">
                        <span class="page-arrow prev">‹</span>
                        <span class="page-number active" data-page="1">1</span>
                        <span class="page-number" data-page="2">2</span>
                        <span class="page-number" data-page="3">3</span>
                        <span class="page-arrow next">›</span>
                    </div>
                </div>
                <!-- End products-area -->

            </div>
            <!-- ===== Layout End ===== -->


            <!-- Recently Viewed -->
            <div class="recently-viewed">
                <h2>Recently Viewed</h2>

                <div class="recent-grid">
                    <div class="recent-card">
                        <div class="recent-img-wrapper">
                            <img src="{{ asset('images/Eid__ (2).png') }}">
                        </div>
                        <div class="recent-info">
                            <h4>Photo Mug</h4>
                            <p class="recent-price">$19.99</p>
                        </div>
                    </div>

                    <div class="recent-card">
                        <div class="recent-img-wrapper">
                            <img src="{{ asset('images/Eid__ (3).png') }}">
                        </div>
                        <div class="recent-info">
                            <h4>Wooden Frame</h4>
                            <p class="recent-price">$34.99</p>
                        </div>
                    </div>

                    <div class="recent-card">
                        <div class="recent-img-wrapper">
                            <img src="{{ asset('images/Eid__ (4).png') }}">
                        </div>
                        <div class="recent-info">
                            <h4>Award Shield</h4>
                            <p class="recent-price">$55.25</p>
                        </div>
                    </div>

                    <div class="recent-card">
                        <div class="recent-img-wrapper">
                            <img src="{{ asset('images/Eid__ (5).png') }}">
                        </div>
                        <div class="recent-info">
                            <h4>Gift Box Set</h4>
                            <p class="recent-price">$89.00</p>
                        </div>
                    </div>

                    <div class="recent-card">
                        <div class="recent-img-wrapper">
                            <img src="{{ asset('images/Eid__ (6).png') }}">
                        </div>
                        <div class="recent-info">
                            <h4>Greeting Cards</h4>
                            <p class="recent-price">$12.99</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function() {

                const products = document.querySelectorAll(".product-card");
                const numbers = document.querySelectorAll(".page-number");
                const prev = document.querySelector(".prev");
                const next = document.querySelector(".next");

                const itemsPerPage = 6;
                let currentPage = 1;
                const totalPages = Math.ceil(products.length / itemsPerPage);

                function showPage(page) {
                    currentPage = page;

                    products.forEach((product, index) => {
                        product.style.display =
                            index >= (page - 1) * itemsPerPage &&
                            index < page * itemsPerPage ?
                            "block" :
                            "none";
                    });

                    numbers.forEach(n => n.classList.remove("active"));
                    document.querySelector(`[data-page="${page}"]`).classList.add("active");
                }

                numbers.forEach(number => {
                    number.addEventListener("click", function() {
                        showPage(parseInt(this.dataset.page));
                    });
                });

                prev.addEventListener("click", function() {
                    if (currentPage > 1) showPage(currentPage - 1);
                });

                next.addEventListener("click", function() {
                    if (currentPage < totalPages) showPage(currentPage + 1);
                });

                showPage(1);
            });
        </script>
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
                            Policies</h6>
                        <ul class="footer-links" style="list-style: none; padding: 10px;">
                            <li><a href="#">Return Policy</a></li>
                            <li><a href="#">Shipping Info</a></li>
                            <li><a href="#">Terms of Services</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                       </ul>
                    </div>

                    <!-- Column 3 -->
                    <div class="col-lg-3 col-md-6">
                        <h6 class="footer-title"
                            style="font-family: 'Marcellus', serif; font-size: 1.3rem; color: #111827; letter-spacing: 2px; font-weight:bold;">
                            Customer Care</h6>
                        <ul class="footer-contact">
                            <li><i class="bi bi-envelope me-2"></i>Help Center</li>
                            <li><i class="bi bi-telephone me-2"></i>Track Order</li>
                            <li><i class="bi bi-geo-alt me-2"></i>Gift Cards</li>
                            <li><i class="bi bi-geo-alt me-2"></i>Bulk Orders</li>
                        </ul>
                    </div>
                    <!-- Column 4 -->
                    <div class="col-lg-3 col-md-6">
                        <h6 class="footer-title"
                            style="font-family: 'Marcellus', serif; font-size: 1.3rem; color: #111827; letter-spacing: 2px; font-weight:bold;">
                            Contact Us</h6>
                                               <ul class="footer-contact">
                            <li><i class="bi bi-envelope me-2"></i>support@infinitegifts.com</li>
                            <li><i class="bi bi-telephone me-2"></i>4567-123 (800) 1+</li>
                            <li><i class="bi bi-geo-alt me-2"></i>123 Gifting Lane, NY 10001</li>
                        </ul>
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
    </section>
@endsection
