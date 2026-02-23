<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Product Registration') – Small Store</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --primary:   #4f46e5;
            --primary-h: #4338ca;
            --success:   #059669;
            --danger:    #dc2626;
            --bg:        #f8fafc;
            --surface:   #ffffff;
            --border:    #e2e8f0;
            --text:      #1e293b;
            --muted:     #64748b;
            --radius:    10px;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--bg);
            color: var(--text);
            min-height: 100vh;
        }

        /* ── Navbar ── */
        nav {
            background: var(--primary);
            padding: 0 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 60px;
            box-shadow: 0 2px 8px rgba(0,0,0,.15);
        }
        nav .brand {
            color: #fff;
            font-weight: 700;
            font-size: 1.15rem;
            text-decoration: none;
            letter-spacing: .3px;
        }
        nav .nav-links { display: flex; gap: 1rem; }
        nav .nav-links a {
            color: rgba(255,255,255,.85);
            text-decoration: none;
            font-size: .9rem;
            font-weight: 500;
            padding: .35rem .75rem;
            border-radius: 6px;
            transition: background .2s;
        }
        nav .nav-links a:hover,
        nav .nav-links a.active { background: rgba(255,255,255,.2); color: #fff; }

        /* ── Main wrapper ── */
        main {
            max-width: 1000px;
            margin: 2.5rem auto;
            padding: 0 1.5rem;
        }

        /* ── Page heading ── */
        .page-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1.5rem;
            flex-wrap: wrap;
            gap: .75rem;
        }
        .page-header h1 { font-size: 1.6rem; font-weight: 700; }

        /* ── Card ── */
        .card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 2rem;
            box-shadow: 0 1px 4px rgba(0,0,0,.06);
        }

        /* ── Buttons ── */
        .btn {
            display: inline-flex;
            align-items: center;
            gap: .4rem;
            padding: .55rem 1.2rem;
            border-radius: 7px;
            font-size: .9rem;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            border: none;
            transition: background .2s, transform .1s;
        }
        .btn:active { transform: scale(.97); }
        .btn-primary { background: var(--primary); color: #fff; }
        .btn-primary:hover { background: var(--primary-h); }
        .btn-outline {
            background: transparent;
            border: 1.5px solid var(--border);
            color: var(--text);
        }
        .btn-outline:hover { background: var(--bg); }

        /* ── Alert ── */
        .alert {
            padding: .85rem 1.2rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            font-size: .9rem;
            font-weight: 500;
        }
        .alert-success { background: #d1fae5; color: var(--success); border: 1px solid #a7f3d0; }
        .alert-error   { background: #fee2e2; color: var(--danger);  border: 1px solid #fecaca; }

        /* ── Form ── */
        .form-group { margin-bottom: 1.25rem; }
        .form-group label {
            display: block;
            font-size: .85rem;
            font-weight: 600;
            color: var(--muted);
            margin-bottom: .4rem;
            text-transform: uppercase;
            letter-spacing: .4px;
        }
        .form-group input,
        .form-group select {
            width: 100%;
            padding: .65rem .9rem;
            border: 1.5px solid var(--border);
            border-radius: 7px;
            font-size: .95rem;
            font-family: inherit;
            background: var(--bg);
            color: var(--text);
            transition: border-color .2s, box-shadow .2s;
            outline: none;
        }
        .form-group input:focus,
        .form-group select:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(79,70,229,.15);
            background: #fff;
        }
        .form-group .error-msg {
            margin-top: .35rem;
            font-size: .82rem;
            color: var(--danger);
        }
        .form-group input.is-invalid,
        .form-group select.is-invalid { border-color: var(--danger); }

        .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
        @media(max-width: 540px) { .form-row { grid-template-columns: 1fr; } }

        .form-actions {
            display: flex;
            gap: .75rem;
            margin-top: 1.75rem;
            padding-top: 1.25rem;
            border-top: 1px solid var(--border);
        }

        /* ── Table ── */
        .table-wrapper { overflow-x: auto; }
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: .92rem;
        }
        thead tr { background: #f1f5f9; }
        th {
            text-align: left;
            padding: .75rem 1rem;
            font-size: .78rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .5px;
            color: var(--muted);
            border-bottom: 2px solid var(--border);
        }
        td {
            padding: .85rem 1rem;
            border-bottom: 1px solid var(--border);
            vertical-align: middle;
        }
        tbody tr:last-child td { border-bottom: none; }
        tbody tr:hover { background: #fafbfc; }

        .badge {
            display: inline-block;
            padding: .25rem .65rem;
            border-radius: 99px;
            font-size: .78rem;
            font-weight: 600;
            background: #ede9fe;
            color: #5b21b6;
        }
        .price { font-weight: 600; color: var(--success); }

        .empty-state {
            text-align: center;
            padding: 3rem 1rem;
            color: var(--muted);
        }
        .empty-state p { margin-top: .5rem; font-size: .95rem; }

        footer {
            text-align: center;
            color: var(--muted);
            font-size: .82rem;
            margin-top: 3rem;
            padding-bottom: 2rem;
        }
    </style>
</head>
<body>

<nav>
    <a href="{{ route('products.index') }}" class="brand">🛒 Small Store</a>
    <div class="nav-links">
        <a href="{{ route('products.index') }}" class="{{ request()->routeIs('products.index') ? 'active' : '' }}">Product List</a>
        <a href="{{ route('products.create') }}" class="{{ request()->routeIs('products.create') ? 'active' : '' }}">Add Product</a>
    </div>
</nav>

<main>
    @if(session('success'))
        <div class="alert alert-success">✅ {{ session('success') }}</div>
    @endif

    @yield('content')
</main>

<footer>&copy; {{ date('Y') }} Small Store – Product Registration System</footer>

</body>
</html>
