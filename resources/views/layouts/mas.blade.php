<!DOCTYPE html>
<html>
<head>
    <title>Mon site | @yield('title')</title>
</head>
<body>
<x-nav-bar />

<main style="padding: 20px;">
    @yield('content')
</main>

<x-footer />
</body>
</html>
