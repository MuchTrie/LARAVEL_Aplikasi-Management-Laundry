<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/jpeg" href="{{ asset('img/landing/logo.jpg') }}">
    <link rel="shortcut icon" type="image/jpeg" href="{{ asset('img/landing/logo.jpg') }}">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('vendor/fontawesome-free/css/all.min.css')}}">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/landing-modern.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>

    <!-- Animated Background -->
    <div class="animated-bg"></div>

    <!-- Particles -->
    <div class="particles" id="particles"></div>

    <nav class="navbar navbar-expand-sm navbar-dark modern-nav fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">{{ config('app.name') }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-sm-3 mb-2 mb-sm-0">
                        <div class="dropdown">
                            <button class="btn modern-btn-outline dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-globe"></i> @lang('auth.langtext')
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{url('id')}}">
                                    <i class="fas fa-flag"></i> Indonesia
                                </a>
                                <a class="dropdown-item" href="{{url('en')}}">
                                    <i class="fas fa-flag"></i> English
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="btn modern-btn-outline" href="{{ url('/') }}">
                            <i class="fas fa-home"></i> Beranda
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('container')

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- JavaScript for Modern Effects -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Simple particle animation (reduced frequency)
            function createParticle() {
                const particle = document.createElement('div');
                particle.classList.add('particle');
                particle.style.left = Math.random() * 100 + '%';
                particle.style.width = Math.random() * 2 + 1 + 'px';
                particle.style.height = particle.style.width;
                particle.style.animationDelay = Math.random() * 3 + 's';
                document.getElementById('particles').appendChild(particle);
                
                setTimeout(() => {
                    particle.remove();
                }, 15000);
            }

            // Reduced particle frequency to prevent performance issues
            setInterval(createParticle, 1000);

            // Navbar background on scroll
            window.addEventListener('scroll', function() {
                const navbar = document.querySelector('.modern-nav');
                if (window.scrollY > 50) {
                    navbar.style.background = 'rgba(15, 15, 15, 0.98)';
                } else {
                    navbar.style.background = 'rgba(15, 15, 15, 0.95)';
                }
            });
        });
    </script>

</body>

</html>