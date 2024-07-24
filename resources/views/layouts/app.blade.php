<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <title>Todo | @yield('title')</title>
</head>
<body class="text-light bg-dark">
    <main class="container">
        <header class="app-header d-flex">
            <a href="/" id = "logo">
                <h4>Daily Task</h4>
                <img src="/images/today.svg" alt="today's calendar"/>
            </a>
        </header>
        <!-- Content -->
        @yield('content')
        <!-- Content -->
    </main>
    


<script src="/js/bootstrap.min.js"></script>
<script src="/js/app.js"></script>
</body>
</html>