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

<div class="wrap-page container">

    <!-- Header -->
    <div class="wrap-header">
        <h2>Let’s add a special touch to your gift...</h2>
        <p>Choose how you want it to arrive...</p>
    </div>

    <!-- Gift Board -->
    <div class="gift-board">

        <!-- Wrapping -->
        <div class="card">
            <h4>Wrapping Style</h4>

            <label class="wrap-option">
                <input type="radio" name="wrap" value="kraft" checked>
                <span>Kraft Style</span>
            </label>

            <label class="wrap-option">
                <input type="radio" name="wrap" value="satin">
                <span>Satin Style</span>
            </label>

            <label class="wrap-option">
                <input type="radio" name="wrap" value="velvet">
                <span>Velvet Style</span>
            </label>
        </div>

        <!-- Ribbon -->
        <div class="card">
            <h4>Ribbon & Add-ons</h4>

            <div class="colors">
                <span class="color active" data-color="gold"></span>
                <span class="color" data-color="black"></span>
                <span class="color" data-color="crimson"></span>
            </div>

            <label class="addon">
                <input type="checkbox" id="flowers">
                Dried Flowers Add-on (+$5)
            </label>
        </div>

        <!-- Message -->
        <div class="card">
            <h4>Greeting Card</h4>
            <textarea id="message" placeholder="Write your message..."></textarea>
        </div>

    </div>

    <!-- Preview -->
    <div class="preview-section">
        <h3>How your gift will look</h3>

        <div class="preview-box">
            <div class="gift" id="giftBox">
                <div class="ribbon" id="ribbon"></div>
                <div class="ribbon-vertical" id="ribbonVertical"></div>
            </div>

            <p id="previewText">Your message</p>
        </div>

        <div class="preview-tags">
            <span id="tagWrap">Kraft Paper</span>
            <span id="tagRibbon">Gold Ribbon</span>
            <span id="tagAddon">No Add-on</span>
        </div>
    </div>

    <!-- Bottom -->
    <div class="bottom-bar">
        <div class="price">
            <span>Subtotal for Customization</span>
            <h3 id="price">$15.00</h3>
        </div>

        <div class="actions">
            <a href="/" class="btn-outline">Back to Shop</a>
            <button class="btn-main">Save & Continue →</button>
        </div>
    </div>

</div>
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
// message
const messageInput = document.getElementById("message");
const previewText = document.getElementById("previewText");

messageInput.addEventListener("input", () => {
    previewText.innerText = messageInput.value || "Your message";
});

// ribbon color
const ribbon = document.getElementById("ribbon");
const ribbonV = document.getElementById("ribbonVertical");
const tagRibbon = document.getElementById("tagRibbon");

document.querySelectorAll(".color").forEach(el => {
    el.addEventListener("click", () => {
        document.querySelectorAll(".color").forEach(c => c.classList.remove("active"));
        el.classList.add("active");

        let color = el.dataset.color;

        ribbon.style.background = color;
        ribbonV.style.background = color;

        tagRibbon.innerText = color + " Ribbon";
    });
});

// wrap type
const giftBox = document.getElementById("giftBox");
const tagWrap = document.getElementById("tagWrap");

document.querySelectorAll('input[name="wrap"]').forEach(el => {
    el.addEventListener("change", () => {

        if(el.value === "kraft"){
            giftBox.style.background = "#d6b98c";
            tagWrap.innerText = "Kraft Paper";
        }
        if(el.value === "satin"){
            giftBox.style.background = "#e6e6e6";
            tagWrap.innerText = "Satin Wrap";
        }
        if(el.value === "velvet"){
            giftBox.style.background = "#5a3e36";
            tagWrap.innerText = "Velvet Wrap";
        }
    });
});

// addon + price
const checkbox = document.getElementById("flowers");
const price = document.getElementById("price");
const tagAddon = document.getElementById("tagAddon");

checkbox.addEventListener("change", () => {
    if(checkbox.checked){
        price.innerText = "$20.00";
        tagAddon.innerText = "Dried Flowers";
    } else {
        price.innerText = "$15.00";
        tagAddon.innerText = "No Add-on";
    }
});
tagRibbon.innerText = color.charAt(0).toUpperCase() + color.slice(1) + " Ribbon";
</script>
@endsection
