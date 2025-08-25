<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>{{ config('app.name') }} - Admin</title>

    <!-- Favicon -->
    <link rel="icon" type="image/jpeg" href="{{ asset('img/landing/logo.jpg') }}">
    <link rel="shortcut icon" type="image/jpeg" href="{{ asset('img/landing/logo.jpg') }}">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/css/adminlte.min.css') }}">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/landing-modern.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @yield('css')
    @routes('admin')
</head>

<body class="hold-transition sidebar-mini admin-modern-theme">
    <!-- Animated Background -->
    <div class="animated-bg"></div>
    
    <!-- Particles -->
    <div class="particles" id="particles"></div>

    <div class="wrapper">

        <!-- Navbar -->
        @include('admin.template.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="" class="brand-link mt-2">
                <i class="fas fa-tshirt brand-image mt-1 ml-3"></i>
                <h4 class="brand-text text-center">{{ config('app.name') }}</h4>
            </a>

            <!-- Sidebar -->
            @include('admin.template.sidebar')
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            @yield('main-content')
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer modern-footer-admin">
            <div class="text-center">
                <strong>Copyright &copy; 2025 {{ config('app.name') }}</strong> - Modern Laundry Management System
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- Logout Modal -->
    <x-admin.modals.logout-modal />

    @yield('modals')

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('vendor/adminlte/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('js/myscript.js') }}"></script>

    <!-- JavaScript for Modern Effects -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Simple particle animation (reduced frequency for admin)
            function createParticle() {
                const particle = document.createElement('div');
                particle.classList.add('particle');
                particle.style.left = Math.random() * 100 + '%';
                particle.style.width = Math.random() * 1.5 + 0.5 + 'px';
                particle.style.height = particle.style.width;
                particle.style.animationDelay = Math.random() * 5 + 's';
                particle.style.opacity = '0.3';
                document.getElementById('particles').appendChild(particle);
                
                setTimeout(() => {
                    particle.remove();
                }, 20000);
            }

            // Very reduced particle frequency for admin dashboard
            setInterval(createParticle, 3000);
        });
    </script>

    @yield('scripts')

    @stack('js')
</body>

</html>
