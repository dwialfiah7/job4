<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand"href="{{ route ('home')}}">MyApp</a>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{ route('home')}}"> Home </a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about')}}"> About </a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('profile')}}"> Profile </a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact')}}"> Contact </a></li>
            </ul>
        </div>
    </nav>
    
    <div class="container mt-4">
        @yield('content')
    </div>

    <style>
.profile-img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    border: 3px solid #ddd;
    object-fit: cover;
}

.team-img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover; 
    border: 3px solid #ddd; 
    padding: 3px;
    background-color: white;
    display: block; 
    margin: 0 auto;
}
    </style>

    <footer class="text-center mt-5 py-4 bg-light container-fluid">
            <p>&copy; {{ date('Y') }} MyApp. All rights reserved. | <a href="#">Kebijakan Privasi</a> | <a href="#">Syarat & Ketentuan</a></p>
    </footer>
</body>
</html>
