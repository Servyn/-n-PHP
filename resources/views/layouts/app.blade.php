<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website Title</title>

    <link rel="stylesheet" href="{{ asset('css\styles.css') }}">
</head>

<body>
    <header class="header">
        <div class="container">

        </div>
    </header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer class="footer">
        <div class="container">

        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
