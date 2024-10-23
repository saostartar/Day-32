<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description', 'Default SEO Description')">
    <title>@yield('title', 'E-Commerce Website')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('products.index') }}">Products</a></li>
                <li><a href="{{ route('posts.index') }}">Blog</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} - Your Company</p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
