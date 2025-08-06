<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('dashboard/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/style.css') }}">
    <title>{{ $title }}</title>

</head>
<body>
<x-admin-sidebar />

<main id="main" class="main">

    {{ $slot }}

</main>

<script src="{{ asset('dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<script src="{{ asset('dashboard/js/main.js') }}"></script>
<script src="{{ asset('aset/js/script-admin.js') }}"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

</body>
</html>
