<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TodoList</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('inc.navba')
    <div class="container">
        @include('inc.messages')
        @yield('content')
    </div>

    <footer id="footer" class="text-center m-1">
        <p>Copyright &copy; 2017 TodoList</p>
    </footer>
    <script src="/js/app.js"></script>
</body>
</html>