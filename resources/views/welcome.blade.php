<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="mt-5 pt-5">
    <div class="bg-light py-5 text-center">

        <div class="container">
            <h1 class="display-4 fw-bold pt-5" style="font-size: 7rem">Welcome to {{ config('app.name') }}</h1>
            <p class="lead py-5 fs-2">Track and manage your personal library. Only you can see your own books. Register now to start managing your collection!</p>
            <div class="py-5">
                <a href="{{ route('register') }}" class="btn btn-primary btn-lg me-2">Register Now</a>
                <a href="{{ route('login') }}" class="btn btn-secondary btn-lg">Log in</a>
            </div>
        </div>

    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
