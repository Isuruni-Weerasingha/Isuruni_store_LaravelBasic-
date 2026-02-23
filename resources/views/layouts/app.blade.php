<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Small Store')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body { background: #f8f9fa; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .navbar { box-shadow: 0 2px 4px rgba(0,0,0,.08); }
        .card { border: none; box-shadow: 0 0 20px rgba(0,0,0,.08); border-radius: 12px; }
        .btn-gradient { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border: none; }
        .btn-gradient:hover { background: linear-gradient(135deg, #764ba2 0%, #667eea 100%); transform: translateY(-1px); }
        .form-control, .form-select { border-radius: 8px; border: 1px solid #e0e0e0; padding: 10px 15px; }
        .form-control:focus, .form-select:focus { border-color: #667eea; box-shadow: 0 0 0 0.2rem rgba(102,126,234,.25); }
        .table { border-radius: 8px; overflow: hidden; }
        .table thead { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="{{ route('products.index') }}">
                <i class=""></i> Amila Store
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.index') }}"><i class="bi bi-list-ul"></i> Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.create') }}"><i class="bi bi-plus-circle"></i> Add Product</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
