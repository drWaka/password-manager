<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @include('includes.css')
</head>
<body>
    @include('includes.navigation')

    @yield('pageSection')

    @include('includes.footer')

    @include('includes.javascript')
</body>
</html>