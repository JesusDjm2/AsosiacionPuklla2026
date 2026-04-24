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
                        <li class="nav-item"><a class="nav-link px-lg-3" href="#">Nosotros</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle px-lg-3" href="#" id="dropdownProgramas"
                                data-bs-toggle="dropdown" aria-expanded="false">Programas y proyectos</a>
                            <ul class="dropdown-menu dropdown-menu-lg-end rounded-3 border-0 shadow"
                                aria-labelledby="dropdownProgramas">
                                <li><a class="dropdown-item" href="{{ url('/colegio') }}">Colegio</a></li>
                                <li><a class="dropdown-item" href="{{ url('/escuela') }}">Escuela superior</a></li>
                                <li><a class="dropdown-item" href="{{ url('/sipas-wayna') }}">Sipas Wayna</a></li>
                                <li><a class="dropdown-item" href="{{ url('/radio') }}">Radio</a></li>
                                <li><a class="dropdown-item" href="{{ url('/kawsay') }}">Kawsay</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link px-lg-3" href="#">Noticias</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3" href="#">Publicaciones</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3" href="#">Contactos</a></li>
                        <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                            <a class="btn btn-danger btn-sm px-4 rounded-pill text-white" href="#">Aporta</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    @yield('content')
    <footer class="site-footer mt-auto border-top">
        <div class="container py-5">
            <div class="row g-4 row-cols-2 row-cols-md-3 row-cols-lg-6 small">
                <div class="col">
                    <h4 class="h6 text-uppercase home-ls-footer">Colegio</h4>
                    <ul class="mb-0">
                        <li><a href="#">Perfil del estudiante</a></li>
                        <li><a href="#">¿Por qué Puklla?</a></li>
                        <li><a href="#">Admisión</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h4 class="h6 text-uppercase home-ls-footer">Escuela</h4>
                    <ul class="mb-0">
                        <li><a href="#">Formación</a></li>
                        <li><a href="#">Propuesta</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h4 class="h6 text-uppercase home-ls-footer">Sipas Wayna</h4>
                    <ul class="mb-0">
                        <li><a href="#">Juventud</a></li>
                        <li><a href="#">Participación</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h4 class="h6 text-uppercase home-ls-footer">Radio</h4>
                    <ul class="mb-0">
                        <li><a href="#">Programación</a></li>
                        <li><a href="#">Comunidad</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h4 class="h6 text-uppercase home-ls-footer">Kawsay</h4>
                    <ul class="mb-0">
                        <li><a href="#">Vida plena</a></li>
                        <li><a href="#">Proyectos</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h4 class="h6 text-uppercase home-ls-footer">Contacto</h4>
                    <ul class="mb-0">
                        <li><a href="#">Ubicación</a></li>
                        <li><a href="#">Escríbenos</a></li>
                    </ul>
                </div>
            </div>
            <div class="row pt-4 mt-2 border-top border-opacity-10">
                <div class="col-12 text-center text-muted small">
                    <p class="mb-0">&copy; {{ date('Y') }} Asociación Pukllasunchis</p>
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
</body>

</html>
