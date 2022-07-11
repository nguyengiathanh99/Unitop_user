<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unitop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/birdlogo.png') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>
<div class="wp-container">
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
    @include('layouts.message')
</div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
