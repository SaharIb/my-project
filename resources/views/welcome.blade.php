<!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Marcellus&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 sticky-top border-bottom">
        <div class="container-fluid px-lg-5 d-flex align-items-center justify-content-between">

            <div class="navbar-brand-wrapper d-flex align-items-center" style="flex: 1;">
                <a class="navbar-brand d-flex align-items-center gap-2 fw-light" href="index.html">
                    <div class="logo-icon-wrapper">
                        <i class="bi bi-infinity fs-1 logo-icon"></i>
                    </div>
                    <span
                        style="font-family: 'Marcellus', serif; font-size: 1.8rem; color: #111827; letter-spacing: 2px;">
                        INFINI<span style="color: #c5a059;">.</span>
                    </span>
                </a>
            </div>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav mx-auto gap-lg-3 gap-2 text-center py-3 py-lg-0">
                    <li class="nav-item"><a class="nav-link text-capitalize fw-normal p-lg-0" href="#home"
                            style="color: #111827; font-family: 'Marcellus', serif;">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-capitalize fw-normal p-lg-0" href="#shop"
                            style="color: #111827; font-family: 'Marcellus', serif;">Shop</a></li>
                    <li class="nav-item"><a class="nav-link text-capitalize fw-normal p-lg-0" href="#occasions"
                            style="color: #111827; font-family: 'Marcellus', serif;">Occasions</a></li>
                    <li class="nav-item"><a class="nav-link text-capitalize fw-normal p-lg-0" href="#about-us"
                            style="color: #111827; font-family: 'Marcellus', serif;">About Us</a></li>
                    <li class="nav-item"><a class="nav-link text-capitalize fw-normal p-lg-0" href="#contact-us"
                            style="color: #111827; font-family: 'Marcellus', serif;">Contact Us</a></li>
                </ul>
            </div>

            <div class="d-flex align-items-center justify-content-end gap-3 gap-xl-4" style="flex: 1;">
                <div class="d-none d-xl-flex position-relative align-items-center">
                    <input type="text" class="form-control pe-5" placeholder="Search..."
                        style="border-radius: 25px; background-color: #f3f4f6; border: none; width: 290px; padding: 10px 20px; font-size: 1rem; font-family: 'Marcellus', serif;">
                    <i class="bi bi-search position-absolute end-0 me-3 text-muted"
                        style="font-size: 1.2rem; cursor: pointer;"></i>
                </div>

                <div class="d-flex align-items-center gap-4">

                    <a href="#" class="text-dark position-relative">
                        <i class="bi bi-bag" style="font-size: 1.8rem;"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark"
                            style="font-size: 0.7rem;">0</span>
                    </a>
                    <a href="#" class="text-dark"><i class="bi bi-bell" style="font-size: 1.8rem;"></i></a>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal" class="text-dark"><i
                            class="bi bi-person" style="font-size: 1.8rem;"></i></a>
                </div>
            </div>

        </div>
    </nav>
    <section id="home" class="hero-slider-section position-relative">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="slider-image" style="background-image: url('{{ asset('images/home (10).png') }}');">
                    </div>
                    <div class="overlay"></div>
                </div>
                <div class="carousel-item">
                    <div class="slider-image" style="background-image: url('{{ asset('images/home (11).png') }}');">
                    </div>
                    <div class="overlay"></div>
                </div>
                <div class="carousel-item">
                    <div class="slider-image" style="background-image: url('{{ asset('images/home (12).png') }}');">
                    </div>
                    <div class="overlay"></div>
                </div>
                <div class="carousel-item">
                    <div class="slider-image" style="background-image: url('{{ asset('images/home (13).png') }}');">
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="hero-fixed-content d-flex align-items-center justify-content-center text-center text-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="display-1 mb-4 hero-title" style="font-family: 'Marcellus', serif;">Elevate Every
                            Gift</h1>
                        <p class="lead mb-5 fs-4 hero-subtitle">Discover packaging solutions and curated gifts for
                            every occasion.</p>
                        <div class="d-flex justify-content-center gap-3">
                            <a href="{{ url('/shop') }}" class="btn btn-hero-primary px-5 py-3">Shop Products</a>
                            <a href="#" class="btn btn-hero-outline px-5 py-3">Our Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section id="about-us" class="py-5" style="background-color: #fff;">
        <div class="container py-5">
            <div class="row align-items-center g-5">
                <div class="col-md-6" data-aos="fade-right">
                    <div class="position-relative">
                        <img src="{{ asset('images/About_img.png') }}" alt="Our Craft" class="img-fluid shadow-sm">
                        <div
                            style="position: absolute; top: -20px; left: -20px; width: 100px; height: 100px; background: #f4f4f2; z-index: -1;">
                        </div>
                    </div>
                </div>

                <div class="col-md-6" data-aos="fade-left">
                    <h2 class="display-5 mb-4" style="font-family: 'Marcellus', serif; font-weight: 300;">Crafting
                        Moments That Last Forever</h2>
                    <p class="text-muted fs-5 mb-4" style="font-weight: 300; line-height: 1.8;">
                        At INFINI, we believe that a gift is more than just an object; it's a message of love,
                        appreciation, and connection. Our mission is to provide premium packaging and curated gifts that
                        elevate those precious moments.
                    </p>
                    <p class="text-muted fs-5 mb-5" style="font-weight: 300; line-height: 1.8;">
                        Every box we create is a blend of high-quality materials and meticulous craftsmanship, ensuring
                        that your brand or personal message stands out with elegance.
                    </p>
                    <a href="#" class="btn-view-all text-uppercase" style="padding: 12px 35px;">Learn More</a>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- <section id="featured-products" class="product-store py-5">
  <div class="container">

    <div class="row mb-5">
      <div class="col-md-12 text-center" data-aos="fade-up">
        <h2 class="display-4 text-uppercase mb-3" style="font-family: 'Marcellus', serif; font-weight: 300;">Featured Products</h2>
        <p class="text-muted">Explore our curated collection of luxury gifts.</p>
        <div class="row mb-4">
  <div class="col-12 d-flex justify-content-center">
    <div class="filter-button-group border-bottom pb-2">
      <button class="btn btn-link text-dark text-decoration-none mx-3 active" data-filter="*">الكل</button>
      <button class="btn btn-link text-muted text-decoration-none mx-3" data-filter=".boxes">صناديق هدايا</button>
      <button class="btn btn-link text-muted text-decoration-none mx-3" data-filter=".wraps">تغليف</button>
      <button class="btn btn-link text-muted text-decoration-none mx-3" data-filter=".accessories">إكسسوارات</button>
    </div>
  </div>
 </div>
        <div class="mx-auto" style="width: 50px; height: 1px; background: #c5a059;"></div>
      </div>
    </div>

    <div class="row g-4" data-aos="zoom-out">

      <div class="col-md-4 col-sm-6">
        <div class="product-item text-center">
          <div class="image-holder " style="background-color: #f8f9fa; padding: 30px; border-radius: 4px; overflow: hidden;">
            <img src="{{ asset('images/product1.jpg') }}" alt="product" class="img-fluid hover-zoom-effect">
          </div>

          <div class="product-detail pt-4 px-1 text-center">
            <h6 class="text-uppercase mb-2" style="font-family: 'Marcellus', serif; letter-spacing: 2px; font-weight: 300; font-size: 1.3rem;">Luxury Gift Box</h6>
            <div class="d-flex align-items-center justify-content-center gap-4">
              <span class="text-muted" style="font-size: 0.9rem; letter-spacing: 1px;">49.00 SAR</span>
              <div style="width: 1px; height: 15px; background-color: #e0e0e0;"></div>
              <button class="btn-mini-cart border-0 bg-transparent p-0">
                <i class="bi bi-bag-plus fs-5 text-dark"></i>
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="product-item text-center">
          <div class="image-holder " style="background-color: #f8f9fa; padding: 30px; border-radius: 4px; overflow: hidden;">
            <img src="{{ asset('images/product2.jpg') }}" alt="product" class="img-fluid hover-zoom-effect">
          </div>
          <div class="product-detail pt-4 px-1 text-center">
            <h6 class="text-uppercase mb-2" style="font-family: 'Marcellus', serif; letter-spacing: 2px; font-weight: 300; font-size: 1.3rem;">Premium Wrap</h6>
            <div class="d-flex align-items-center justify-content-center gap-4">
              <span class="text-muted" style="font-size: 0.9rem; letter-spacing: 1px;">25.00 SAR</span>
              <div style="width: 1px; height: 15px; background-color: #e0e0e0;"></div>
              <button class="btn-mini-cart border-0 bg-transparent p-0">
                <i class="bi bi-bag-plus fs-5 text-dark"></i>
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="product-item text-center">
          <div class="image-holder " style="background-color: #f8f9fa; padding: 30px; border-radius: 4px; overflow: hidden;">
            <img src="{{ asset('images/product3.jpg') }}" alt="product" class="img-fluid hover-zoom-effect">
          </div>
          <div class="product-detail pt-4 px-1 text-center">
            <h6 class="text-uppercase mb-2" style="font-family: 'Marcellus', serif; letter-spacing: 2px; font-weight: 300; font-size: 1.3rem;">Ribbon Collection</h6>
            <div class="d-flex align-items-center justify-content-center gap-4">
              <span class="text-muted" style="font-size: 0.9rem; letter-spacing: 1px;">15.00 SAR</span>
              <div style="width: 1px; height: 15px; background-color: #e0e0e0;"></div>
              <button class="btn-mini-cart border-0 bg-transparent p-0">
                <i class="bi bi-bag-plus fs-5 text-dark"></i>
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="product-item text-center">
          <div class="image-holder " style="background-color: #f8f9fa; padding: 30px; border-radius: 4px; overflow: hidden;">
            <img src="{{ asset('images/product4.jpg') }}" alt="product" class="img-fluid hover-zoom-effect">
          </div>
          <div class="product-detail pt-4 px-1 text-center">
            <h6 class="text-uppercase mb-2" style="font-family: 'Marcellus', serif; letter-spacing: 2px; font-weight: 300; font-size: 1.3rem;">Luxury Gift Box V2</h6>
            <div class="d-flex align-items-center justify-content-center gap-4">
              <span class="text-muted" style="font-size: 0.9rem; letter-spacing: 1px;">55.00 SAR</span>
              <div style="width: 1px; height: 15px; background-color: #e0e0e0;"></div>
              <button class="btn-mini-cart border-0 bg-transparent p-0">
                <i class="bi bi-bag-plus fs-5 text-dark"></i>
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="product-item text-center">
          <div class="image-holder " style="background-color: #f8f9fa; padding: 30px; border-radius: 4px; overflow: hidden;">
            <img src="{{ asset('images/product5.jpg') }}" alt="product" class="img-fluid hover-zoom-effect">
          </div>
          <div class="product-detail pt-4 px-1 text-center">
            <h6 class="text-uppercase mb-2" style="font-family: 'Marcellus', serif; letter-spacing: 2px; font-weight: 300; font-size: 1.3rem;">Custom Tag Set</h6>
            <div class="d-flex align-items-center justify-content-center gap-4">
              <span class="text-muted" style="font-size: 0.9rem; letter-spacing: 1px;">10.00 SAR</span>
              <div style="width: 1px; height: 15px; background-color: #e0e0e0;"></div>
              <button class="btn-mini-cart border-0 bg-transparent p-0">
                <i class="bi bi-bag-plus fs-5 text-dark"></i>
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="product-item text-center">
          <div class="image-holder" style="background-color: #f8f9fa; padding: 30px; border-radius: 4px; overflow: hidden;">
            <img src="{{ asset('images/product6.jpg') }}" alt="product" class="img-fluid hover-zoom-effect">
          </div>
          <div class="product-detail pt-4 px-1 text-center">
            <h6 class="text-uppercase mb-2" style="font-family: 'Marcellus', serif; letter-spacing: 2px; font-weight: 300; font-size: 1.3rem;">Signature Card</h6>
            <div class="d-flex align-items-center justify-content-center gap-4">
              <span class="text-muted" style="font-size: 0.9rem; letter-spacing: 1px;">5.00 SAR</span>
              <div style="width: 1px; height: 15px; background-color: #e0e0e0;"></div>
              <button class="btn-mini-cart border-0 bg-transparent p-0">
                <i class="bi bi-bag-plus fs-5 text-dark"></i>
              </button>
            </div>
          </div>
        </div>
      </div>

    </div>

 <div class="row mt-5">
  <div class="col-12 text-center d-flex flex-column flex-md-row justify-content-center align-items-center gap-3">

    <a href="{{ url('/shop') }}" class="btn btn-outline-dark text-uppercase px-5 py-3" style="letter-spacing: 2px; font-size: 1.3rem;">
      View All Products
    </a>
  </div>
 </div>
 </section> -->
    <section id="occasion-catalog" class="py-5 bg-white">
        <div class="container-fluid px-4 px-lg-5 occasion-wrapper" data-aos="fade-up">


            <div class="d-flex justify-content-between align-items-end mb-5 border-bottom pb-5">
                <div>
                    <h5 class="display-6 text-uppercase m-0"
                        style="font-family: 'Marcellus', serif; letter-spacing: 2px; color: #111827;">
                        Browse by Occasions
                    </h5>
                </div>

                <a href="#" class="view-all-link text-decoration-none text-uppercase">
                    View All Occasions <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>

            <div class="row g-4 justify-content-center">

                <div class="col-lg-2 col-md-3 col-6 text-center" data-aos="fade-right" data-aos-delay="100">
                    <a href="{{ route('products.by_occasion', ['occasion' => 'wedding']) }}"
                        class="occasion-circle-item text-decoration-none">
                        <div class="circle-wrapper mb-3">
                            <img src="{{ asset('images/Wedding_Cat.png') }}" alt="Weddings">
                        </div>
                        <h6 class="occasion-title">Wedding</h6>
                    </a>
                </div>

                <div class="col-lg-2 col-md-3 col-6 text-center" data-aos="fade-right" data-aos-delay="100">
                    <a href="{{ route('products.by_occasion', ['occasion' => 'Birthday']) }}"
                        class="occasion-circle-item text-decoration-none">
                        <div class="circle-wrapper mb-3">
                            <img src="{{ asset('images/Birthday_Cat.png') }}" alt="Birthdays">
                        </div>
                        <h6 class="occasion-title">Birthday</h6>
                    </a>
                </div>

                <div class="col-lg-2 col-md-3 col-6 text-center" data-aos="fade-right" data-aos-delay="100">
                    <a href="{{ route('products.by_occasion', ['occasion' => 'Anniversary']) }}"
                        class="occasion-circle-item text-decoration-none">
                        <div class="circle-wrapper mb-3">
                            <img src="{{ asset('images/Couple_Cat.png') }}" alt="Anniversaries">
                        </div>
                        <h6 class="occasion-title">Anniversaries</h6>
                    </a>
                </div>

                <div class="col-lg-2 col-md-3 col-6 text-center" data-aos="fade-left" data-aos-delay="100">
                    <a href="{{ route('products.by_occasion', ['occasion' => 'Graduation']) }}"
                        class="occasion-circle-item text-decoration-none">
                        <div class="circle-wrapper mb-3">
                            <img src="{{ asset('images/Graduation.png') }}" alt="Graduation">
                        </div>
                        <h6 class="occasion-title">Graduation</h6>
                    </a>
                </div>

                <div class="col-lg-2 col-md-3 col-6 text-center" data-aos="fade-left" data-aos-delay="100">
                    <a href="{{ route('products.by_occasion', ['occasion' => 'New Home']) }}"
                        class="occasion-circle-item text-decoration-none">
                        <div class="circle-wrapper mb-3">
                            <img src="{{ asset('images/Home.png') }}" alt="New Home">
                        </div>
                        <h6 class="occasion-title">New Home</h6>
                    </a>
                </div>

                <div class="col-lg-2 col-md-3 col-6 text-center" data-aos="fade-left" data-aos-delay="100">
                    <a href="{{ route('products.by_occasion', ['occasion' => 'Eid Gifts']) }}"
                        class="occasion-circle-item text-decoration-none">
                        <div class="circle-wrapper mb-3">
                            <img src="{{ asset('images/Eid_Cat.png') }}" alt="Eid Gifts">
                        </div>
                        <h6 class="occasion-title">Eid Gifts</h6>
                    </a>
                </div>

            </div>

            <div id="filtered-products-display" class="row mt-5"></div>
        </div>
    </section>
    <section class="design-lab-section py-5">
        <div class="container">
            <div class="design-lab-card" data-aos="fade-up">

                <!-- Left Side -->
                <div class="lab-content" data-aos="fade-right">
                    <h2 class="lab-title">Design Lab: Live Preview</h2>

                    <div class="steps-list">

                        <div class="step-item">
                            <div class="step-number">1</div>
                            <div>
                                <h6>Choose a Gift</h6>
                                <p>Select from our premium collection of mugs, crystal, textiles, and more.</p>
                            </div>
                        </div>

                        <div class="step-item">
                            <div class="step-number">2</div>
                            <div>
                                <h6>Add Your Photo</h6>
                                <p>Upload your favorite memory and see it instantly on the product.</p>
                            </div>
                        </div>

                        <div class="step-item">
                            <div class="step-number">3</div>
                            <div>
                                <h6>Receive It Wrapped</h6>
                                <p>Delivered in luxury packaging ready for your special occasion.</p>
                            </div>
                        </div>

                    </div>

                    <a href="#" class="btn btn-gold-lab">Try Design Lab</a>
                </div>

                <!-- Right Side -->
                <div class="lab-preview" data-aos="fade-left" data-aos-delay="200">
                    <div class="white-box-container">
                        <div class="image-wrapper">
                            <img src="{{ asset('images/Home.png') }}" alt="Preview" class="img-preview">
                        </div>
                        <div class="preview-tag">
                            <i class="bi bi-magic"></i> LIVE PREVIEW
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="trending" class="py-5 trending-section">
        <div class="container-fluid px-0" data-aos="fade-left">

            <!-- Title -->
            <div class="text-center mb-5">
                <h2 class="trending-title">Trending Personalizations</h2>
                <p class="trending-subtitle">
                    Hand-picked favorites that our customers love to customize the most.
                </p>
            </div>

            <!-- Swiper -->
            <div class="swiper trendingSwiper">

                <div class="swiper-wrapper">

                    <!-- Product 1 -->
                    <div class="swiper-slide">
                        <div class="trending-card">
                            <div class="trending-img-wrapper">
                                <img src="{{ asset('images/cat1.png') }}" alt="Product">
                                <div class="wishlist-icon">
                                    <i class="bi bi-heart"></i>
                                </div>
                            </div>
                            <div class="trending-card-body">
                                <div class="rating">★★★★★ <span>(32)</span></div>
                                <h3 class="h6 text-uppercase mb-1"
                                    style="font-family: var(--heading-font); padding: 20px 0 15px 0 ;">Luxury Perfume
                                </h3>
                                <div class="price">$89.00</div>
                                <button class="btn trending-btn w-100">
                                    <i class="bi bi-cart"></i> Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 2 -->
                    <div class="swiper-slide">
                        <div class="trending-card">
                            <div class="trending-img-wrapper">
                                <img src="{{ asset('images/cat1.png') }}" alt="Product">
                                <div class="wishlist-icon">
                                    <i class="bi bi-heart"></i>
                                </div>
                            </div>
                            <div class="trending-card-body">
                                <div class="rating">★★★★★ <span>(22)</span></div>
                                <h3 class="h6 text-uppercase mb-1"
                                    style="font-family: var(--heading-font); padding: 20px 0 15px 0 ;">Luxury Perfume
                                </h3>

                                <div class="price">$74.00</div>
                                <button class="btn trending-btn w-100">
                                    <i class="bi bi-cart"></i> Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 3 -->
                    <div class="swiper-slide">
                        <div class="trending-card">
                            <div class="trending-img-wrapper">
                                <img src="{{ asset('images/cat1.png') }}" alt="Product">
                                <div class="wishlist-icon">
                                    <i class="bi bi-heart"></i>
                                </div>
                            </div>
                            <div class="trending-card-body">
                                <div class="rating">★★★★★ <span>(18)</span></div>
                                <h3 class="h6 text-uppercase mb-1"
                                    style="font-family: var(--heading-font); padding: 20px 0 15px 0 ;">Luxury Perfume
                                </h3>

                                <div class="price">$92.00</div>
                                <button class="btn trending-btn w-100">
                                    <i class="bi bi-cart"></i> Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 4 -->
                    <div class="swiper-slide">
                        <div class="trending-card">
                            <div class="trending-img-wrapper">
                                <img src="{{ asset('images/cat1.png') }}" alt="Product">
                                <div class="wishlist-icon">
                                    <i class="bi bi-heart"></i>
                                </div>
                            </div>
                            <div class="trending-card-body">
                                <div class="rating">★★★★★ <span>(63)</span></div>
                                <h3 class="h6 text-uppercase mb-1"
                                    style="font-family: var(--heading-font); padding: 20px 0 15px 0 ;">Luxury Perfume
                                </h3>

                                <div class="price">$65.00</div>
                                <button class="btn trending-btn w-100">
                                    <i class="bi bi-cart"></i> Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 5 -->
                    <div class="swiper-slide">
                        <div class="trending-card">
                            <div class="trending-img-wrapper">
                                <img src="{{ asset('images/cat1.png') }}" alt="Product">
                                <div class="wishlist-icon">
                                    <i class="bi bi-heart"></i>
                                </div>
                            </div>
                            <div class="trending-card-body">
                                <div class="rating">★★★★★ <span>(41)</span></div>
                                <h3 class="h6 text-uppercase mb-1"
                                    style="font-family: var(--heading-font); padding: 20px 0 15px 0 ;">Luxury Perfume
                                </h3>

                                <div class="price">$80.00</div>
                                <button class="btn trending-btn w-100">
                                    <i class="bi bi-cart"></i> Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    {{-- <section id="custom-solution" class="py-5" style="background-color: #f9fafb; overflow: hidden;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8 text-center" data-aos="fade-up">
                    <div class="custom-solution-content p-5 border rounded-0 bg-white shadow-sm custom-hover-card">

                        <div class="mb-4 text-dark" data-aos="zoom-in" data-aos-delay="300">
                            <i class="bi bi-chat-left-dots fs-1"></i>
                        </div>

                        <h2 class="display-5 mb-3 text-uppercase" style="font-family: var(--heading-font);">Need a
                            Custom Solution?</h2>

                        <p class="lead text-muted mb-4">
                            Looking for something unique? Whether it's a specific design, bulk ordering, or a
                            specialized fashion service, our team is ready to bring your vision to life.
                        </p>

                        <div class="row mt-5">
                            <div class="col-12 text-center">
                                <a href="{{ url('/products') }}" class="btn btn-view-all text-uppercase">
                                    Contact Us Now
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- <section id="new-arrival" class="new-arrival product-carousel py-5 position-relative overflow-hidden">
    <div class="container">
      <div class="d-flex flex-wrap justify-content-between align-items-center mt-5 mb-3">
        <h4 class="text-uppercase">Our New Arrivals</h4>
        <a href="index.html" class="btn-link">View All Products</a>
      </div>
      <div class="swiper product-swiper open-up" data-aos="zoom-out">
        <div class="swiper-wrapper d-flex">
          <div class="swiper-slide">
            <div class="product-item image-zoom-effect link-effect">
              <div class="image-holder position-relative">
                <a href="index.html">
                  <img src="{{ asset('images/Home (10).png') }}" alt="categories" class="product-image img-fluid">
                </a>
                <a href="index.html" class="btn-icon btn-wishlist">
                  <svg width="24" height="24" viewBox="0 0 24 24">
                    <use xlink:href="#heart"></use>
                  </svg>
                </a>
                <div class="product-content">
                  <h5 class="element-title text-uppercase fs-5 mt-3">
                    <a href="index.html">Dark florish onepiece</a>
                  </h5>
                  <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$95.00</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-item image-zoom-effect link-effect">
              <div class="image-holder position-relative">
                <a href="index.html">
                  <img src="{{ asset('images/Eid__ (8).png') }}" alt="categories" class="product-image img-fluid">
                </a>
                <a href="index.html" class="btn-icon btn-wishlist">
                  <svg width="24" height="24" viewBox="0 0 24 24">
                    <use xlink:href="#heart"></use>
                  </svg>
                </a>
                <div class="product-content">
                  <h5 class="text-uppercase fs-5 mt-3">
                    <a href="index.html">Cotton off-white shirt</a>
                  </h5>
                  <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$65.00</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-item image-zoom-effect link-effect">
              <div class="image-holder position-relative">
                <a href="index.html">
                  <img src="{{ asset('images/Eid__ (1).png') }}" alt="categories" class="product-image img-fluid">
                </a>
                <a href="index.html" class="btn-icon btn-wishlist">
                  <svg width="24" height="24" viewBox="0 0 24 24">
                    <use xlink:href="#heart"></use>
                  </svg>
                </a>
                <div class="product-content">
                  <h5 class="text-uppercase fs-5 mt-3">
                    <a href="index.html">Cotton off-white shirt</a>
                  </h5>
                  <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$65.00</span></a>
                </div>
              </div>
            </div>
          </div>
                    <div class="swiper-slide">
            <div class="product-item image-zoom-effect link-effect">
              <div class="image-holder position-relative">
                <a href="index.html">
                  <img src="{{ asset('images/Eid__ (10).png') }}" alt="categories" class="product-image img-fluid">
                </a>
                <a href="index.html" class="btn-icon btn-wishlist">
                  <svg width="24" height="24" viewBox="0 0 24 24">
                    <use xlink:href="#heart"></use>
                  </svg>
                </a>
                <div class="product-content">
                  <h5 class="text-uppercase fs-5 mt-3">
                    <a href="index.html">Cotton off-white shirt</a>
                  </h5>
                  <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$65.00</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-item image-zoom-effect link-effect">
              <div class="image-holder position-relative">
                <a href="index.html">
                  <img src="{{ asset('images/Eid__ (4).png') }}" alt="categories" class="product-image img-fluid">
                </a>
                <a href="index.html" class="btn-icon btn-wishlist">
                  <svg width="24" height="24" viewBox="0 0 24 24">
                    <use xlink:href="#heart"></use>
                  </svg>
                </a>
                <div class="product-content">
                  <h5 class="text-uppercase fs-5 mt-3">
                    <a href="index.html">Crop sweater</a>
                  </h5>
                  <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$50.00</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-item image-zoom-effect link-effect">
              <div class="image-holder position-relative">
                <a href="index.html">
                  <img src="{{ asset('images/Home (1).png') }}" alt="categories" class="product-image img-fluid">
                </a>
                <a href="index.html" class="btn-icon btn-wishlist">
                  <svg width="24" height="24" viewBox="0 0 24 24">
                    <use xlink:href="#heart"></use>
                  </svg>
                </a>
                <div class="product-content">
                  <h5 class="text-uppercase fs-5 mt-3">
                    <a href="index.html">Crop sweater</a>
                  </h5>
                  <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$70.00</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-pagination"></div>
      </div>
      <div class="icon-arrow icon-arrow-left"><svg width="50" height="50" viewBox="0 0 24 24">
          <use xlink:href="#arrow-left"></use>
        </svg></div>
      <div class="icon-arrow icon-arrow-right"><svg width="50" height="50" viewBox="0 0 24 24">
          <use xlink:href="#arrow-right"></use>
        </svg></div>
    </div>
  </section> -->

    <!-- <section class="testimonials py-5 bg-light">
    <div class="section-header text-center mt-5">
      <h3 class="section-title">WE LOVE GOOD COMPLIMENT</h3>
    </div>
    <div class="swiper testimonial-swiper overflow-hidden my-5">
      <div class="swiper-wrapper d-flex">
        <div class="swiper-slide">
          <div class="testimonial-item text-center">
            <blockquote>
              <p>“More than expected crazy soft, flexible and best fitted white simple denim shirt.”</p>
              <div class="review-title text-uppercase">casual way</div>
            </blockquote>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="testimonial-item text-center">
            <blockquote>
              <p>“Best fitted white denim shirt more than expected crazy soft, flexible</p>
              <div class="review-title text-uppercase">uptop</div>
            </blockquote>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="testimonial-item text-center">
            <blockquote>
              <p>“Best fitted white denim shirt more white denim than expected flexible crazy soft.”</p>
              <div class="review-title text-uppercase">Denim craze</div>
            </blockquote>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="testimonial-item text-center">
            <blockquote>
              <p>“Best fitted white denim shirt more than expected crazy soft, flexible</p>
              <div class="review-title text-uppercase">uptop</div>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
    <div class="testimonial-swiper-pagination d-flex justify-content-center mb-5"></div>
  </section> -->

    <section id="wrap-feelings" class="wrap-section py-5">
        <div class="container-fluid px-md-5">
            <div class="row align-items-center gx-lg-3">

                <div class="col-lg-6" data-aos="fade-right">
                    <div class="wrap-images">
                        <div class="top-images d-flex gap-3 mb-3">
                            <img src="{{ asset('images/birthday (1).png') }}" alt="Gift 1"
                                class="img-fluid rounded-4 w-50">
                            <img src="{{ asset('images/birthday (2).png') }}" alt="Gift 2"
                                class="img-fluid rounded-4 w-50">
                        </div>
                        <div class="bottom-image">
                            <img src="{{ asset('images/birthday (3).png') }}" alt="Gift 3"
                                class="img-fluid rounded-4 w-100" style="height: 300px; object-fit: cover;">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left">
                    <div class="wrap-content ps-lg-5">
                        <h2 class="wrap-title display-4 text-uppercase mb-4"
                            style="font-family: var(--heading-font);">
                            We Wrap Your <span style="color: #c5a059;">Feelings</span>
                        </h2>

                        <p class="wrap-text fs-5 text-muted mb-4" style="line-height: 1.8;">
                            Every gift tells a story. We carefully personalize and wrap each item with love, ensuring
                            your emotions are delivered with elegance.
                        </p>

                        <ul class="wrap-list list-unstyled mb-5">
                            <li class="mb-3 d-flex align-items-center">
                                <i class="bi bi-check-circle-fill me-3" style="color: #c5a059;"></i>
                                <span class="text-uppercase fw-bold small">Premium quality packaging</span>
                            </li>
                            <li class="mb-3 d-flex align-items-center">
                                <i class="bi bi-check-circle-fill me-3" style="color: #c5a059;"></i>
                                <span class="text-uppercase fw-bold small">Fully customizable gifts</span>
                            </li>
                            <li class="mb-3 d-flex align-items-center">
                                <i class="bi bi-check-circle-fill me-3" style="color: #c5a059;"></i>
                                <span class="text-uppercase fw-bold small">Fast & secure delivery</span>
                            </li>
                        </ul>

                        <a href="#" class="btn main-btn rounded-0 px-5 py-3 text-uppercase fw-bold">
                            Explore Wrapping Options
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="our-services">
        <div class="container-fluid px-md-5">
            <div class="row text-center justify-content-between g-4">

                <div class="col-6 col-lg-auto px-lg-4" data-aos="fade-up">
                    <div class="service-wrapper">
                        <div class="icon-circle-bg mb-3">
                            <i class="bi bi-vector-pen"></i>
                        </div>
                        <h6 class="text-uppercase fw-bold mb-1"
                            style="font-family: var(--heading-font); font-size: 1.3rem;">Direct Customization</h6>
                        <p class="text-muted small mb-0" style="font-family: var(--heading-font); font-size: 1rem;">
                            Use 310 previews for gifts</p>
                    </div>
                </div>

                <div class="col-6 col-lg-auto px-lg-4" data-aos="fade-up">
                    <div class="service-wrapper">
                        <div class="icon-circle-bg mb-3">
                            <i class="bi bi-gift"></i>
                        </div>
                        <h6 class="text-uppercase fw-bold mb-1"
                            style="font-family: var(--heading-font); font-size: 1.3rem;"> Luxury Wrapping</h6>
                        <p class="text-muted small mb-0" style="font-family: var(--heading-font); font-size: 1rem;">
                            Boutique-quality packaging</p>
                    </div>
                </div>

                <div class="col-6 col-lg-auto px-lg-4" data-aos="fade-up">
                    <div class="service-wrapper">
                        <div class="icon-circle-bg mb-3">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h6 class="text-uppercase fw-bold mb-1"
                            style="font-family: var(--heading-font); font-size: 1.3rem;">Secure Payment</h6>
                        <p class="text-muted small mb-0" style="font-family: var(--heading-font); font-size: 1rem;">
                            100% secure transactions</p>
                    </div>
                </div>

                <div class="col-6 col-lg-auto px-lg-4" data-aos="fade-up">
                    <div class="service-wrapper">
                        <div class="icon-circle-bg mb-3">
                            <i class="bi bi-truck"></i>
                        </div>
                        <h6 class="text-uppercase fw-bold mb-1"
                            style="font-family: var(--heading-font); font-size: 1.3rem;">Scheduled Delivery</h6>
                        <p class="text-muted small mb-0" style="font-family: var(--heading-font); font-size: 1rem;">
                            Precise timing by your need</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="brand-story" class="brand-section py-5">
        <div class="container py-5">

            <div class="row align-items-center">

                <!-- IMAGE SIDE -->
                <div class="col-lg-6 mb-5 mb-lg-0 position-relative" data-aos="fade-right" data-aos-delay="100">

                    <!-- Decorative Square -->
                    <div class="brand-decor"></div>

                    <div class="brand-image">
                        <img src="{{ asset('images/Home (23).png') }}" alt="Our Store">
                    </div>

                </div>

                <!-- TEXT SIDE -->
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">

                    <h2 class="brand-title mb-4">
                        Strengthening social bonds <br>
                        through gifts.
                    </h2>

                    <p class="brand-text mb-3">
                        Since our beginning, we believed gifts are more than objects —
                        they are emotions wrapped with care and attention.
                    </p>

                    <p class="brand-text mb-4">
                        Our team of creators and designers works tirelessly to ensure
                        each gift becomes a lasting memory that strengthens relationships.
                    </p>

                    <a href="#" class="btn main-btn">
                        Read Our Story
                    </a>

                </div>

            </div>

        </div>
    </section>
    <section id="testimonials" class="testimonials-section py-5">
        <div class="container-fluid px-md-5">

            <!-- Title -->
            <div class="text-center mb-5"data-aos="fade-left" data-aos-delay="100">
                <h2 class="testimonials-title">
                    What Our Clients Say
                </h2>
            </div>

            <div class="row g-4">

                <!-- Testimonial 1 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-card p-4 ">

                        <div class="stars mb-3">
                            ★★★★★
                        </div>

                        <p class="testimonial-text">
                            "The customization process was so easy.
                            Everything was beautifully wrapped and delivered perfectly!"
                        </p>

                        <div class="client-info d-flex align-items-center mt-4">
                            <div class="client-img">
                                <img src="{{ asset('images/client1.png') }}" alt="Sarah"
                                    class="client-img-custom">
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0 fw-semibold">Sarah M.</h6>
                                <small class="text-muted">Event Planner</small>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-card p-4">

                        <div class="stars mb-3">
                            ★★★★★
                        </div>

                        <p class="testimonial-text">
                            "Absolutely loved the attention to detail.
                            The packaging made the gift even more special."
                        </p>

                        <div class="client-info d-flex align-items-center mt-4">
                            <div class="client-img">
                                <img src="{{ asset('images/client1.png') }}" alt="Sarah"
                                    class="client-img-custom">
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0 fw-semibold">Lina K.</h6>
                                <small class="text-muted">Marketing Manager</small>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-card p-4">

                        <div class="stars mb-3">
                            ★★★★★
                        </div>

                        <p class="testimonial-text">
                            "Fast delivery and premium support.
                            Highly recommended for personalized gifts!"
                        </p>

                        <div class="client-info d-flex align-items-center mt-4">
                            <div class="client-img">
                                <img src="{{ asset('images/client1.png') }}" alt="Sarah"
                                    class="client-img-custom">
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0 fw-semibold">Maya A.</h6>
                                <small class="text-muted">Business Owner</small>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="instagram-section py-5">
        <div class="container-fluid px-0">

            <!-- Top Bar -->
            <div class="d-flex justify-content-between align-items-center px-5 mb-4 flex-wrap">

                <h5 class="instagram-title mb-3 mb-md-0">
                    <i class="bi bi-instagram me-2"></i>
                    Gifted with Infinite Love
                </h5>

                <a href="#" class="btn instagram-btn">
                    Follow us on Instagram
                </a>

            </div>

            <!-- Full Width Images -->
            <div class="row g-0">

                <div class="col-6 col-sm-4 col-md-2">
                    <div class="insta-item">
                        <img src="{{ asset('images/Eid__ (8).png') }}" alt="">
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-md-2">
                    <div class="insta-item">
                        <img src="{{ asset('images/Eid__ (10).png') }}" alt="">
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-md-2">
                    <div class="insta-item">
                        <img src="{{ asset('images/Wedding (11).png') }}" alt="">
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-md-2">
                    <div class="insta-item">
                        <img src="{{ asset('images/Wedding (4).png') }}" alt="">
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-md-2">
                    <div class="insta-item">
                        <img src="{{ asset('images/Graduation (2).png') }}" alt="">
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-md-2">
                    <div class="insta-item">
                        <img src="{{ asset('images/Graduation (5).png') }}" alt="">
                    </div>
                </div>

            </div>

        </div>
    </section>

    <script>
        function handleAQuteRequest() {
            // Navigate to a contact or quote request page
            alert('Thank you for your interest! Please fill out the form to request a quote.');
            // You can replace this with actual navigation:
            // window.location.href = '/request-quote';
        }
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
    <script src="js/jquery.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/SmoothScroll.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="js/script.min.js"></script>
    <div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 0px; border: 1px solid #D4AF37;">
                <div class="modal-body p-5">
                    <h3 class="text-center text-uppercase mb-4" style="letter-spacing: 2px; color: #111827;">Welcome
                        Back</h3>
                    <form>
                        <div class="mb-3">
                            <input type="email" class="form-control shadow-none" placeholder="Email Address"
                                style="border-radius: 0px; border-color: #eee;">
                        </div>
                        <div class="mb-4">
                            <input type="password" class="form-control shadow-none" placeholder="Password"
                                style="border-radius: 0px; border-color: #eee;">
                        </div>
                        <button type="submit" class="btn btn-dark w-100 text-uppercase"
                            style="border-radius: 0px; background-color: #111827; padding: 12px; letter-spacing: 1px;">Login</button>
                        <div class="text-center mt-3">
                            <a href="#" class="text-muted small text-decoration-none">Forgot Password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000, // سرعة الحركة (ملي ثانية)
            once: true, // تتحرك مرة واحدة فقط عند النزول
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // 1. قاعدة البيانات الوهمية (تأكدي أن أسماء الصور صحيحة في مجلد images عندك)
        const productsData = [{
                id: 1,
                name: "Luxury Wedding Box",
                category: "wedding",
                price: "120$",
                image: "{{ asset('images/Wedding (11).png') }}"
            },
            {
                id: 2,
                name: "Wedding Flower Set",
                category: "wedding",
                price: "85$",
                image: "{{ asset('images/Wedding (4).png') }}"
            },
            {
                id: 3,
                name: "Graduation Gift Card",
                category: "graduation",
                price: "45$",
                image: "{{ asset('images/Graduation (2).png') }}"
            },
            {
                id: 4,
                name: "Graduation Trophy",
                category: "graduation",
                price: "60$",
                image: "{{ asset('images/Graduation (5).png') }}"
            },
            {
                id: 5,
                name: "Eid Sweets Box",
                category: "eid",
                price: "30$",
                image: "{{ asset('images/Eid__ (8).png') }}"
            },
            {
                id: 6,
                name: "Eid Lantern",
                category: "eid",
                price: "25$",
                image: "{{ asset('images/Eid__ (10).png') }}"
            },
            {
                id: 7,
                name: "Birthday Cupcake",
                category: "birthday",
                price: "15$",
                image: "{{ asset('images/Home (10).png') }}"
            },
            {
                id: 8,
                name: "New Home Towels",
                category: "new-home",
                price: "40$",
                image: "{{ asset('images/Home (1).png') }}"
            },
            {
                id: 9,
                name: "Gold Wedding Ring",
                category: "wedding",
                price: "500$",
                image: "{{ asset('images/Wedding (4).png') }}"
            },
        ];

        const circles = document.querySelectorAll('.filter-circle');
        const container = document.getElementById('filtered-products-display');

        circles.forEach(circle => {
            circle.addEventListener('click', function(e) {
                e.preventDefault();
                const selectedCat = this.getAttribute('data-filter');

                // فلترة المنتجات بناءً على القسم
                const filtered = productsData.filter(p => p.category === selectedCat);

                // استدعاء وظيفة العرض
                //renderProducts(filtered);

                // تمرير الشاشة (Scroll) لأسفل قليلاً ليرى المستخدم المنتجات
                window.scrollTo({
                    top: container.offsetTop - 100,
                    behavior: 'smooth'
                });
            });
        });
/*
        function renderProducts(products) {
            if (products.length === 0) {
                container.innerHTML =
                    '<div class="col-12 text-center"><p class="text-muted">Coming Soon: More products for this occasion!</p></div>';
                return;
            }*/

            // تحويل المصفوفة إلى HTML (نفس التصميم الاحترافي اللي عملناه أول مرة)
            container.innerHTML = products.map(p => `
            <div class="col-6 col-md-4 col-lg-3 mb-4" data-aos="fade-up">
                <div class="product-item shadow-sm p-2 border-0 card h-100">
                    <div class="image-holder overflow-hidden" style="height: 250px;">
                        <img src="${p.image}" class="img-fluid w-100 h-100" style="object-fit: cover;" alt="${p.name}">
                    </div>
                    <div class="product-content text-center p-3">
                        <h6 class="text-uppercase mt-2" style="font-family: 'Marcellus', serif; font-size: 0.85rem;">${p.name}</h6>
                        <span class="text-gold" style="color: #c5a059;">${p.price}</span>
                        <div class="mt-2">
                             <button class="btn btn-sm btn-outline-dark text-uppercase" style="font-size: 0.7rem;">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        `).join('');
        }
    });
    // تفعيل مراقبة السكاشن لتغيير الكلمة النشطة
    window.addEventListener('scroll', () => {
        let current = "";
        const sections = document.querySelectorAll("section, footer, div[id]"); // مراقبة السكاشن والفوتر

        sections.forEach((section) => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (pageYOffset >= sectionTop - 150) { // 150 offset لضمان التغيير قبل الوصول تماماً
                current = section.getAttribute("id");
            }
        });

        document.querySelectorAll(".nav-link").forEach((link) => {
            link.classList.remove("active");
            if (link.getAttribute("href").includes(current) && current !== "") {
                link.classList.add("active");
            }
        });
    });
</script>
<script>
    var swiper = new Swiper(".trendingSwiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 4,
            }
        }
    });
</script>

</html>
