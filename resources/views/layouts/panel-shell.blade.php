<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} — Panel</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/puklla.css') }}">
    {{-- Tailwind sin preflight: no pisa Bootstrap; sirve para Livewire/Jetstream en perfil --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            corePlugins: {
                preflight: false,
            },
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Figtree', 'ui-sans-serif', 'system-ui', 'sans-serif'],
                    },
                },
            },
        };
    </script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>
    @livewireStyles
    <style>
        .panel-shell {
            --panel-sidebar: linear-gradient(180deg, #571e25 0%, #341618 55%, #2a1418 100%);
        }

        .panel-nav-side .nav-side-link:not(.bg-danger):hover {
            background: rgba(255, 255, 255, 0.08);
            color: #fff !important;
        }
    </style>
</head>

<body class="panel-shell bg-light m-0 min-vh-100">
    <div class="d-flex min-vh-100">
        {{-- Sidebar escritorio --}}
        <aside
            class="panel-nav-side d-none d-lg-flex flex-column flex-shrink-0 text-white border-end border-white border-opacity-10"
            style="width: 268px; background: var(--panel-sidebar);">
            <div class="p-3 border-bottom border-white border-opacity-10">
                <a href="{{ route('dashboard') }}" class="d-flex align-items-center gap-2 text-white text-decoration-none">
                    <img src="{{ asset('img/logo-asociacion-pukllasunchis.png') }}" alt="" width="40" height="40"
                        class="rounded object-fit-contain bg-white bg-opacity-10 p-1" style="object-fit: contain;">
                    <div class="lh-sm">
                        <div class="fw-semibold small">Pukllasunchis</div>
                        <div class="text-white-50" style="font-size: 0.7rem;">Panel interno</div>
                    </div>
                </a>
            </div>
            <nav class="flex-grow-1 overflow-auto py-2 small">
                @include('layouts.partials.panel-nav-links')
            </nav>
            <div class="p-3 border-top border-white border-opacity-10 text-white-50" style="font-size: 0.7rem;">
                Rol: <span class="text-white">{{ auth()->user()->role->label() }}</span>
            </div>
        </aside>

        <div class="d-flex min-vw-0 flex-grow-1 flex-column">
            {{-- Barra superior --}}
            <header class="navbar navbar-expand-lg navbar-light border-bottom bg-white shadow-sm px-2 px-sm-3">
                <div class="d-flex align-items-center gap-2">
                    <button class="btn btn-outline-secondary d-lg-none border-0" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#panelMenuOffcanvas" aria-controls="panelMenuOffcanvas" aria-label="Abrir menú">
                        <i class="bi bi-list fs-4"></i>
                    </button>
                    <span class="navbar-text d-none d-sm-inline text-muted small">Área privada</span>
                </div>
                <div class="ms-auto d-flex align-items-center gap-2 gap-sm-3">
                    <a href="{{ url('/') }}" class="btn btn-sm btn-outline-danger rounded-pill d-none d-md-inline-flex">
                        Ver sitio público
                    </a>
                    <div class="dropdown">
                        <button class="btn btn-light btn-sm dropdown-toggle rounded-pill border" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle me-1"></i>
                            <span class="d-none d-sm-inline">{{ Auth::user()->name }}</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end shadow border-0 rounded-3">
                            <li>
                                <a class="dropdown-item" href="{{ route('profile.show') }}">
                                    <i class="bi bi-gear me-2"></i>Mi perfil
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-md-none" href="{{ url('/') }}">
                                    <i class="bi bi-house me-2"></i>Sitio público
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger">
                                        <i class="bi bi-box-arrow-right me-2"></i>Cerrar sesión
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </header>

            <main class="flex-grow-1 overflow-auto p-3 p-md-4">
                @isset($header)
                    <div class="mb-4 rounded-3 border bg-white p-3 shadow-sm">
                        {{ $header }}
                    </div>
                @endisset
                {{ $slot }}
            </main>
        </div>
    </div>

    {{-- Menú móvil --}}
    <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="panelMenuOffcanvas"
        aria-labelledby="panelMenuOffcanvasLabel" style="background: linear-gradient(180deg, #571e25 0%, #341618 100%); max-width: 280px;">
        <div class="offcanvas-header border-bottom border-white border-opacity-10">
            <h2 class="offcanvas-title h6 text-white" id="panelMenuOffcanvasLabel">Menú del panel</h2>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                aria-label="Cerrar"></button>
        </div>
        <div class="offcanvas-body p-0">
            <nav class="py-2 small">
                @include('layouts.partials.panel-nav-links')
            </nav>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
    @livewireScripts
    @stack('scripts')
</body>

</html>
