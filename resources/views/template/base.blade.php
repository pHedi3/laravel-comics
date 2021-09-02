<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DC - @yield('title-tab')</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <header>
        @include('template.header')
    </header>

    <main>
        @yield('main')
    </main>

    <footer>
        @include('template.footer')
    </footer>
</body>
</html>