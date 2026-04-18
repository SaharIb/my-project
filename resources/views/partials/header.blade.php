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
                    <li class="nav-item"><a class="nav-link text-capitalize fw-normal p-lg-0" href="{{ url('/') }}"
                            style="color: #111827; font-family: 'Marcellus', serif;">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-capitalize fw-normal p-lg-0" href="{{ url('/#occasion-catalog') }}"
                            style="color: #111827; font-family: 'Marcellus', serif;">Occasions</a></li>
                    <li class="nav-item"><a class="nav-link text-capitalize fw-normal p-lg-0" href="{{ url('/#footer') }}"
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

<a href="/cart" id="cart-icon" class="text-dark position-relative">
    <i class="bi bi-bag" style="font-size: 1.8rem;"></i>
    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark"
        style="font-size: 0.7rem;" id="cart-count">0</span>
</a>
                    <!-- أيقونة المفضلة -->
            <a href="wishlist.html" class="text-dark position-relative">
                    <i class="bi bi-heart" style="font-size: 1.8rem;"></i>
                     <span id="wishlist-count" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                   style="font-size: 0.7rem;" id="cart-count">0</span>
                        </a>
                    <a href="#" class="text-dark"><i class="bi bi-bell" style="font-size: 1.8rem;"></i></a>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal" class="text-dark"><i
                            class="bi bi-person" style="font-size: 1.8rem;"></i></a>
                </div>
            </div>

        </div>
    </nav>
