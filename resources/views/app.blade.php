<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'متجر الهدايا')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; font-family: 'Segoe UI', sans-serif; }
        .navbar { background-color: #ff4d6d; }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="/">🎁 متجر الهدايا الفاخرة</a>
            <a href="/cart" class="btn btn-light">السلة 🛒</a>
        </div>
    </nav>

    @yield('content') <footer class="text-center mt-5 py-3 border-top">
        <p>جميع الحقوق محفوظة - فريق مشروع التخرج &copy; 2026</p>
    </footer>
</body>
</html>