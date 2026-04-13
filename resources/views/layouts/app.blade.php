<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Menus Project')</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            background-color: #f4f6f9;
        }

        header {
            background-color: #2c3e50;
            padding: 15px 30px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
            padding: 8px 14px;
            border-radius: 6px;
        }

        nav a.active {
            background-color: #3498db;
            font-weight: bold;
        }

        nav a:hover {
            background-color: #1f618d;
        }

        main {
            padding: 30px;
            min-height: 70vh;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

        footer {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 15px;
        }
    </style>
</head>
<body>

    <header>
        <nav>
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('photos') }}" class="{{ request()->routeIs('photos') ? 'active' : '' }}">Photos</a>
            <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
        </nav>
    </header>

    <main>
        <div class="card">
            @yield('content')
        </div>
    </main>

    <footer>
        Activity 11 developed by Hannia - Web Application Design
    </footer>

</body>
</html>