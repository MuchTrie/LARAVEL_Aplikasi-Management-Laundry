<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Modern Laundry Management System">
    <meta name="author" content="">

    <title>{{ config('app.name', 'Laundry XYZ') }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/jpeg" href="{{ asset('img/landing/logo.jpg') }}">
    <link rel="shortcut icon" type="image/jpeg" href="{{ asset('img/landing/logo.jpg') }}">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/landing-modern.css') }}" rel="stylesheet">

    <!-- Javascript -->
    <script defer src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script defer src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>

<body>

    <!-- Animated Background -->
    <div class="animated-bg"></div>

    <!-- Loading Animation -->
    <div class="loading-animation" id="loading">
        <div class="loader"></div>
    </div>

    <!-- Particles -->
    <div class="particles" id="particles"></div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-sm navbar-dark modern-nav fixed-top">
        <div class="container">
            <a class="navbar-brand" href="">
                {{ config('app.name') }}
            </a>
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
                                <i class="fas fa-globe"></i> @lang('landing.langtext')
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
                        <a class="btn modern-btn" href="{{url('login')}}">
                            <i class="fas fa-sign-in-alt"></i> @lang('landing.loginOrRegister')
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="hero-section">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-6 hero-content">
                    <h1 class="hero-title">@lang('landing.welcome')</h1>
                    <p class="hero-subtitle">@lang('landing.tagline')</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="{{url('login')}}" class="btn modern-btn">
                            <i class="fas fa-rocket"></i> @lang('landing.getStarted')
                        </a>
                        <a href="#services" class="btn modern-btn-outline">
                            <i class="fas fa-info-circle"></i> @lang('landing.learnMore')
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image">
                        <img class="img-fluid d-none d-lg-block" src="{{asset('img/landing/header.png')}}" alt="Modern Laundry" style="max-height: 500px;">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Why Choose Us -->
    <section class="modern-section" id="why-choose">
        <div class="container">
            <h2 class="section-title">@lang('landing.why')</h2>
        </div>
    </section>

    <!-- Features Section -->
    <section class="modern-section" id="features">
        <div class="container">
            <!-- First Row - Two columns -->
            <div class="row mb-4">
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="feature-card h-100">
                        <div class="row align-items-center h-100">
                            <div class="col-md-8">
                                <h4><i class="fas fa-cogs"></i> @lang('landing.equipment')</h4>
                                <p>@lang('landing.equipmentDesc')</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <img class="img-fluid feature-image" src="{{asset('img/landing/alat.png')}}" alt="Modern Equipment" style="max-height: 120px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="feature-card h-100">
                        <div class="row align-items-center h-100">
                            <div class="col-md-4 text-center">
                                <img class="img-fluid feature-image" src="{{asset('img/landing/tipebaju.png')}}" alt="All Types" style="max-height: 120px;">
                            </div>
                            <div class="col-md-8">
                                <h4><i class="fas fa-tshirt"></i> @lang('landing.allTypes')</h4>
                                <p>@lang('landing.allTypesDesc')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Second Row - Full width -->
            <div class="row">
                <div class="col-12">
                    <div class="feature-card">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h4><i class="fas fa-users"></i> @lang('landing.professional')</h4>
                                <p>@lang('landing.professionalDesc')</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <img class="img-fluid feature-image" src="{{asset('img/landing/pegawai.png')}}" alt="Professional Staff" style="max-height: 120px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="modern-section" id="services">
        <div class="container">
            <h2 class="section-title">@lang('landing.featuresTitle')</h2>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                    <div class="service-card h-100">
                        <img src="{{asset('img/landing/Baju.jpg')}}" alt="Baju" class="w-100" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <p class="card-text"><i class="fas fa-tshirt"></i> @lang('landing.clothingTypes.shirt')</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                    <div class="service-card h-100">
                        <img src="{{asset('img/landing/Celana.jpg')}}" alt="Celana" class="w-100" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <p class="card-text"><i class="fas fa-user-tie"></i> @lang('landing.clothingTypes.pants')</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                    <div class="service-card h-100">
                        <img src="{{asset('img/landing/Jas.jpg')}}" alt="Jas" class="w-100" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <p class="card-text"><i class="fas fa-user-suit"></i> @lang('landing.clothingTypes.suit')</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                    <div class="service-card h-100">
                        <img src="{{asset('img/landing/Selimut.jpg')}}" alt="Selimut" class="w-100" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <p class="card-text"><i class="fas fa-bed"></i> @lang('landing.clothingTypes.blanket')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="modern-section" id="how-it-works" style="background: var(--gradient-dark);">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">@lang('landing.howItWorks')</h2>
                <p class="lead text-muted">@lang('landing.howItWorksSubtitle')</p>
            </div>
            
            <div class="row justify-content-center align-items-center position-relative" id="how-it-works-container">
                <!-- Step 1 -->
                <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
                    <div class="text-center step-item" data-step="1">
                        <div class="step-icon mb-3">
                            <img src="{{asset('img/landing/How_It_Work/1.svg')}}" alt="Check Postcode" class="img-fluid" style="height: 80px;">
                        </div>
                        <h4 class="step-title">@lang('landing.step1Title')</h4>
                        <p class="step-description">@lang('landing.step1Desc')</p>
                    </div>
                </div>
                
                <!-- Step 2 -->
                <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
                    <div class="text-center step-item" data-step="2">
                        <div class="step-icon mb-3">
                            <img src="{{asset('img/landing/How_It_Work/2.svg')}}" alt="Book Collection" class="img-fluid" style="height: 80px;">
                        </div>
                        <h4 class="step-title">@lang('landing.step2Title')</h4>
                        <p class="step-description">@lang('landing.step2Desc')</p>
                    </div>
                </div>
                
                <!-- Step 3 -->
                <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
                    <div class="text-center step-item" data-step="3">
                        <div class="step-icon mb-3">
                            <img src="{{asset('img/landing/How_It_Work/3.svg')}}" alt="We Deliver" class="img-fluid" style="height: 80px;">
                        </div>
                        <h4 class="step-title">@lang('landing.step3Title')</h4>
                        <p class="step-description">@lang('landing.step3Desc')</p>
                    </div>
                </div>
                
                <!-- Connection Lines positioned to connect images directly -->
                <div class="connector-container d-none d-lg-block">
                    <!-- Line 1 to 2 - dari tepi kanan gambar 1 ke tepi kiri gambar 2 -->
                    <div class="connection-line-direct" style="left: 22%; top: 60px; width: 23%; transform: translateY(-50%);"></div>
                    <!-- Line 2 to 3 - dari tepi kanan gambar 2 ke tepi kiri gambar 3 -->
                    <div class="connection-line-direct" style="left: 55%; top: 60px; width: 23%; transform: translateY(-50%);"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="modern-section contact-section" id="contact">
        <div class="container">
            <h2 class="section-title">@lang('landing.findUs')</h2>
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                    <div class="contact-info">
                        <div class="mb-4">
                            <h5><i class="fas fa-map-marker-alt"></i> @lang('landing.address')</h5>
                            <p>Jl. Padasuka No.131, Pasirlayung, Kec. Cibeunying Kidul, Kabupaten Bandung, Jawa Barat 40911</p>
                        </div>
                        <div class="mb-4">
                            <h5><i class="fas fa-phone"></i> @lang('landing.contact')</h5>
                            <p><i class="fas fa-envelope"></i> malaundryxyz@gmail.com</p>
                            <p><i class="fas fa-phone"></i> (0361)123456</p>
                            <p><i class="fas fa-mobile-alt"></i> 081234567890</p>
                        </div>
                        <div class="mb-4">
                            <h5><i class="fas fa-clock"></i> @lang('landing.operatingHours')</h5>
                            <p>@lang('landing.monday_saturday')</p>
                            <p>@lang('landing.sunday')</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="map-container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1400.4124197411315!2d107.65598242322162!3d-6.894852924673951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7d91e1eacc7%3A0x22f1d4f7adbe20fb!2sMalaundry!5e0!3m2!1sen!2sid!4v1756080928027!5m2!1sen!2sid"
                            width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                            aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="py-5 modern-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="m-0 text-left">
                        {{config('app.name')}} 
                        <span style="color: var(--neon-red);">2025</span>
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="text-right">
                        <a href="#" class="text-decoration-none mx-2" style="color: var(--neon-red);">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-decoration-none mx-2" style="color: var(--neon-red);">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-decoration-none mx-2" style="color: var(--neon-red);">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript for Modern Effects -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Hide loading animation
            setTimeout(function() {
                document.getElementById('loading').style.display = 'none';
            }, 500);

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

            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

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