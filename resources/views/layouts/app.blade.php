<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') Asociación Pukllasunchis</title>
    <meta name="description" itemprop="description"
        content="La Asociación Pukllasunchis crea y vitaliza espacios de formación para la transformación ética de la educación desde una perspectiva holística." />
    <meta name="keywords" content="educación, cusco, sistema, educativo, peruano, diversidad, inclusiva, intercultural">
    <meta name="subject" content="Asociación Pukllasunchis">
    <meta name="robots" content="index, follow" />
    <meta name="revisit-after" content="7 days" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">

    <!-- Styles / Scripts -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/puklla.css') }}">

</head>

<body class="site-body d-flex flex-column min-vh-100 bg-light text-dark">
    <header class="site-header sticky-top border-bottom border-opacity-10 shadow-sm">
        <nav class="navbar navbar-expand-lg navbar-light py-2">
            <div class="container">
                <a class="navbar-brand logo-wrapper py-0 me-lg-4" href="{{ url('/') }}" aria-label="Inicio">
                    <img id="logo" class="nav-logo" src="{{ asset('img/logo-asociacion-pukllasunchis.png') }}"
                        alt="Logo Asociación Pukllasunchis" width="200" height="56">
                </a>
                <button class="navbar-toggler rounded-3 border-0 shadow-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false"
                    aria-label="Abrir menú">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mainNav">
                    <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1 pt-3 pt-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3" href="{{ url('/') }}">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3" href="{{ route('nosotros') }}">Nosotros</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle px-lg-3" href="#" id="dropdownProgramas"
                                data-bs-toggle="dropdown" aria-expanded="false">Programas y proyectos</a>
                            <ul class="dropdown-menu dropdown-menu-lg-end rounded-3 border-0 shadow"
                                aria-labelledby="dropdownProgramas">
                                <li><a class="dropdown-item" href="{{ route('colegio') }}">Colegio</a></li>
                                <li><a class="dropdown-item" href="{{ route('escuela') }}">Escuela superior</a></li>
                                <li><a class="dropdown-item" href="{{ route('sipas-wayna') }}">Sipas Wayna</a></li>
                                <li><a class="dropdown-item" href="{{ route('radio') }}">Radio</a></li>
                                <li><a class="dropdown-item" href="{{ route('kawsay') }}">Kawsay</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link px-lg-3" href="{{ route('noticias') }}">Noticias</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3" href="{{ route('publicaciones') }}">Publicaciones</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3" href="{{ route('contacto') }}">Contactos</a></li>
                        @guest
                            <li class="nav-item"><a class="nav-link px-lg-3" href="{{ route('login') }}">Acceder</a></li>
                        @endguest
                        <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                            <a class="btn btn-danger btn-sm px-4 rounded-pill text-white" href="{{ route('donaciones') }}">Aporta</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    @yield('content')
    <footer class="site-footer mt-auto">
        <div class="container py-5">
            <div class="row g-4 g-lg-5">

                {{-- Columna marca --}}
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="footer-brand-col">
                        <a href="{{ url('/') }}" aria-label="Inicio">
                            <img class="nav-logo-footer" src="{{ asset('img/logo-asociacion-pukllasunchis.png') }}"
                                alt="Asociación Pukllasunchis">
                        </a>
                        <p class="footer-tagline">
                            Creamos y vitalizamos espacios de formación para la transformación ética de la educación desde una perspectiva holística.
                        </p>
                        <div class="footer-social-row" aria-label="Redes sociales">
                            <a class="footer-social-btn" href="https://www.facebook.com/AsociacionPukllasunchis" target="_blank" rel="noopener" aria-label="Facebook">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a class="footer-social-btn" href="https://www.youtube.com/@AsociacionPukllasuchis/videos" target="_blank" rel="noopener" aria-label="YouTube">
                                <i class="bi bi-youtube"></i>
                            </a>
                            <a class="footer-social-btn" href="https://www.instagram.com/sisichakunaq/" target="_blank" rel="noopener" aria-label="Instagram">
                                <i class="bi bi-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Columnas de navegación --}}
                <div class="col-6 col-sm-4 col-lg-2 small">
                    <h4 class="h6 text-uppercase home-ls-footer">Colegio</h4>
                    <ul class="mb-0">
                        <li><a href="{{ route('colegio') }}#perfil">Perfil del estudiante</a></li>
                        <li><a href="{{ route('colegio') }}#porque">¿Por qué Puklla?</a></li>
                        <li><a href="{{ route('colegio') }}#admision">Admisión</a></li>
                    </ul>
                </div>

                <div class="col-6 col-sm-4 col-lg-2 small">
                    <h4 class="h6 text-uppercase home-ls-footer">Escuela</h4>
                    <ul class="mb-0">
                        <li><a href="{{ route('escuela') }}#programas">Programas de Estudios</a></li>
                        <li><a href="{{ route('escuela') }}#escuela">Qué es una EES</a></li>
                    </ul>
                    <h4 class="h6 text-uppercase home-ls-footer mt-4">Radio</h4>
                    <ul class="mb-0">
                        <li><a href="{{ route('radio') }}">Nuestro trabajo</a></li>
                        <li><a href="{{ route('radio') }}#propuesta">Nuestra propuesta</a></li>
                    </ul>
                </div>

                <div class="col-6 col-sm-4 col-lg-2 small">
                    <h4 class="h6 text-uppercase home-ls-footer">Sipas Wayna</h4>
                    <ul class="mb-0">
                        <li><a href="{{ route('sipas-wayna') }}#quienes">¿Quiénes participan?</a></li>
                        <li><a href="{{ route('sipas-wayna') }}#areas">Áreas de trabajo</a></li>
                        <li><a href="{{ route('sipas-wayna') }}#inclusion">Inclusión laboral</a></li>
                    </ul>
                    <h4 class="h6 text-uppercase home-ls-footer mt-4">Kawsay</h4>
                    <ul class="mb-0">
                        <li><a href="{{ route('kawsay') }}#educacion">Educación Ambiental</a></li>
                        <li><a href="{{ route('kawsay') }}#saberes">Saberes culturales</a></li>
                    </ul>
                </div>

                <div class="col-6 col-sm-4 col-lg-2 small">
                    <h4 class="h6 text-uppercase home-ls-footer">Contacto</h4>
                    <ul class="mb-0">
                        <li><a href="{{ route('contacto') }}">Ubicación</a></li>
                        <li><a href="{{ route('contacto') }}">Escríbenos</a></li>
                        <li><a href="{{ route('donaciones') }}">Aporta</a></li>
                        <li><a href="{{ route('noticias') }}">Noticias</a></li>
                        <li><a href="{{ route('publicaciones') }}">Publicaciones</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <hr class="footer-divider m-0">

        <div class="footer-bottom">
            <div class="container d-flex flex-column flex-sm-row justify-content-between align-items-center gap-2">
                <p class="mb-0">&copy; {{ date('Y') }} Asociación Pukllasunchis · Cusco, Perú</p>
                <div class="d-flex gap-3">
                    <a href="{{ route('nosotros') }}">Nosotros</a>
                    <a href="{{ route('contacto') }}">Contacto</a>
                    <a href="{{ route('donaciones') }}">Aporta</a>
                </div>
            </div>
        </div>
    </footer>
    <script>
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.site-header');
            if (!header) return;
            if (window.scrollY > 50) {
                header.classList.add('header-scrolled');
            } else {
                header.classList.remove('header-scrolled');
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
    @stack('scripts')
</body>

</html>
