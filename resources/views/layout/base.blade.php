<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Mobile App')</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">

    <style>
        /* Additional styles to make the layout look more app-like */
        .app-logo {
            height: 50px;
        }
        .navbar-icons {
            font-size: 1.5rem;
            color: #ffffff; /* Ensures icons are visible on dark background */
        }
        /* Adjust the main content area to not overlap with the bottom navbar */
        main {
            padding-bottom: 60px; /* Ensure enough space for the bottom navbar */
        }
    </style>
</head>
<body>

<!-- Logo at the Top -->
<header class="text-center py-3 border-bottom">
    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="app-logo">
</header>

<!-- Main Content -->
<main class="container my-4">
    @yield('content')
</main>

<!-- Bottom Dark Navigation Bar -->
<nav class="navbar navbar-dark bg-dark fixed-bottom border-top">
    <div class="container d-flex justify-content-around">
        <a href="{{route('home')}}" class="navbar-icons text-center active:">
            <i class="bi bi-house-door"></i> <!-- Home Icon -->
            <div class="small">Home</div>
        </a>
        <a href="{{route('profile')}}" class="navbar-icons text-center">
            <i class="bi bi-person"></i> <!-- Profile Icon -->
            <div class="small">Profile</div>
        </a>
        <a href="{{route('chat')}}" class="navbar-icons text-center">
            <i class="bi bi-chat"></i> <!-- Chat Icon -->
            <div class="small">Chat</div>
        </a>
    </div>
</nav>

<!-- Bootstrap Icons and JavaScript -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
