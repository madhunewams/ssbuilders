<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SS PROMOTERS AND BUILDERS</title>

    <link rel="icon" href="{{ asset('images/logo.jpg') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="text-gray-800 overflow-x-hidden">

@include('partials.header')

<main>
    @yield('content')
</main>

@include('partials.footer')

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
