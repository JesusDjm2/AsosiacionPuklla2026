@extends('layouts.app')

@section('title', 'Inicio · ')

@section('content')
    <div class="home-page">
        <section class="hero-wrap" aria-label="Accesos a programas">            
            <main class="hero-main">
                <a href="{{ url('/escuela') }}" class="hero-item escuela" aria-label="Ir a Escuela superior">
                    <span class="hero-item__thumb"
                        style="background-image: url('{{ asset('img/full/fondo-EESP-Puklla-2.jpg') }}');"></span>
                    <div class="hero-item__panel">
                        <img class="hero-item__logo" src="{{ asset('img/logos/logo-eespp.png') }}"
                            alt="Escuela superior Pukllasunchis" width="200" height="80" loading="eager" decoding="async">
                        <div class="hero-item__copy">
                            <span class="hero-item__eyebrow">Formación docente</span>
                            <p class="hero-item__desc mb-0">Profesionalización con enfoque
                                intercultural</p>
                            <span class="hero-item__cta">Visitar</span>
                        </div>
                    </div>
                </a>
                <a href="{{ url('/colegio') }}" class="hero-item colegio" aria-label="Ir a Colegio">
                    <span class="hero-item__thumb"
                        style="background-image: url('{{ asset('img/full/fondo-Colegio-pukllasunchis.jpg') }}');"></span>
                    <div class="hero-item__panel">
                        <img class="hero-item__logo d-none d-lg-block" src="{{ asset('img/logos/colegio-logo.png') }}"
                            alt="Colegio Pukllasunchis" width="200" height="80" loading="lazy" decoding="async">
                        <img class="hero-item__logo hero-item__logo--colegio-blanco d-lg-none"
                            src="{{ asset('img/logos/Colegio-logo-blanco.png') }}" alt="Colegio Pukllasunchis" width="200"
                            height="80" loading="lazy" decoding="async">
                        <div class="hero-item__copy">
                            <span class="hero-item__eyebrow">Educación inicial y primaria</span>
                            <p class="hero-item__desc mb-0">Aprendizaje significativo en comunidad</p>
                            <span class="hero-item__cta">Visitar</span>
                        </div>
                    </div>
                </a>
                <a href="{{ url('/radio') }}" class="hero-item radio" aria-label="Ir a Radio">
                    <span class="hero-item__thumb"
                        style="background-image: url('{{ asset('img/full/fondo-radio-Pukllasunchis.jpg') }}');"></span>
                    <div class="hero-item__panel">
                        <img class="hero-item__logo" src="{{ asset('img/logos/Radio-Puklla.png') }}"
                            alt="Radio Pukllasunchis" width="200" height="80" loading="lazy" decoding="async">
                        <div class="hero-item__copy">
                            <span class="hero-item__eyebrow">Voz y cultura viva</span>
                            <p class="hero-item__desc mb-0">Comunicación para el territorio</p>
                            <span class="hero-item__cta">Visitar</span>
                        </div>
                    </div>
                </a>
                <a href="{{ url('/sipas-wayna') }}" class="hero-item sipas" aria-label="Ir a Sipas Wayna">
                    <span class="hero-item__thumb"
                        style="background-image: url('{{ asset('img/full/Fondo-sipas-Wayna.jpg') }}');"></span>
                    <div class="hero-item__panel">
                        <img class="hero-item__logo" src="{{ asset('img/logos/Sipas-wayna-logo.png') }}"
                            alt="Sipas Wayna" width="200" height="80" loading="lazy" decoding="async">
                        <div class="hero-item__copy">
                            <span class="hero-item__eyebrow">Juventudes</span>
                            <p class="hero-item__desc mb-0">Participación y liderazgo</p>
                            <span class="hero-item__cta">Visitar</span>
                        </div>
                    </div>
                </a>
                <a href="{{ url('/kawsay') }}" class="hero-item kawsay" aria-label="Ir a Kawsay">
                    <span class="hero-item__thumb"
                        style="background-image: url('{{ asset('img/full/FOndo-kawsay-Pukllasunchis.jpg') }}');"></span>
                    <div class="hero-item__panel">
                        <img class="hero-item__logo" src="{{ asset('img/logos/kAWSAY-LOGO.png') }}" alt="Kawsay"
                            width="200" height="80" loading="lazy" decoding="async">
                        <div class="hero-item__copy">
                            <span class="hero-item__eyebrow">Bienestar integral</span>
                            <p class="hero-item__desc mb-0">Vida plena y sostenible</p>
                            <span class="hero-item__cta">Visitar</span>
                        </div>
                    </div>
                </a>
            </main>
        </section>

        <section class="home-intro py-5 home-section-lg">
            <div class="container container-home">
                <div class="row align-items-center g-4 g-lg-5">
                    <div class="col-lg-7">
                        <p class="home-kicker text-uppercase small fw-semibold mb-2">Asociación Pukllasunchis</p>
                        <h1 class="home-heading display-6 fw-semibold mb-3">Formación para una educación ética,
                            inclusiva y con raíces.</h1>
                        <p class="home-lead lead text-secondary mb-0">Impulsamos espacios de aprendizaje donde niñas,
                            niños, jóvenes y docentes fortalecen identidad, convivencia y pensamiento crítico, desde una
                            mirada holística y el respeto a la diversidad cultural del Cusco y el país.</p>
                    </div>
                    <div class="col-lg-5">
                        <div class="home-stats card border-0 shadow-sm rounded-4 p-4 p-lg-5 bg-white">
                            <div class="home-stat">
                                <span class="home-stat__num">5</span>
                                <span class="home-stat__label">líneas de trabajo que articulan la misión de la
                                    asociación</span>
                            </div>
                            <hr class="my-4 opacity-25">
                            <div class="home-stat">
                                <span class="home-stat__num">+25</span>
                                <span class="home-stat__label">años comprometidos con la transformación educativa en el
                                    sur andino</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-programs py-5 bg-white border-top border-bottom border-opacity-10" id="programas">
            <div class="container container-home">
                <header class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-end gap-3 mb-4 mb-lg-5">
                    <div>
                        <h2 class="h3 fw-semibold mb-2">Programas y proyectos</h2>
                        <p class="text-secondary mb-0 home-prose">Explora cada área: en escritorio puedes ampliar el
                            panel superior; en móvil, entra directamente desde las tarjetas.</p>
                    </div>
                    <a class="btn btn-outline-secondary rounded-pill px-4 align-self-start" href="#">Ver todos</a>
                </header>
                <div class="row g-4">
                    <div class="col-md-6 col-xl-4">
                        <article class="program-card h-100">
                            <div class="program-card__accent program-card__accent--escuela"></div>
                            <div class="program-card__body">
                                <h3 class="h5 fw-semibold mb-2">Escuela superior</h3>
                                <p class="text-secondary small mb-4">Formación de educadores con pedagogía activa e
                                    interculturalidad.</p>
                                <a class="stretched-link program-card__link fw-semibold small" href="{{ url('/escuela') }}">Acceder
                                    <span aria-hidden="true">→</span></a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <article class="program-card h-100">
                            <div class="program-card__accent program-card__accent--colegio"></div>
                            <div class="program-card__body">
                                <h3 class="h5 fw-semibold mb-2">Colegio</h3>
                                <p class="text-secondary small mb-4">Experiencias de aula centradas en el estudiante y
                                    la comunidad.</p>
                                <a class="stretched-link program-card__link fw-semibold small" href="{{ url('/colegio') }}">Acceder
                                    <span aria-hidden="true">→</span></a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <article class="program-card h-100">
                            <div class="program-card__accent program-card__accent--radio"></div>
                            <div class="program-card__body">
                                <h3 class="h5 fw-semibold mb-2">Radio</h3>
                                <p class="text-secondary small mb-4">Medio comunitario para difundir saberes y
                                    lenguas.</p>
                                <a class="stretched-link program-card__link fw-semibold small" href="{{ url('/radio') }}">Acceder
                                    <span aria-hidden="true">→</span></a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <article class="program-card h-100">
                            <div class="program-card__accent program-card__accent--sipas"></div>
                            <div class="program-card__body">
                                <h3 class="h5 fw-semibold mb-2">Sipas Wayna</h3>
                                <p class="text-secondary small mb-4">Espacios seguros para adolescentes y jóvenes.</p>
                                <a class="stretched-link program-card__link fw-semibold small"
                                    href="{{ url('/sipas-wayna') }}">Acceder <span aria-hidden="true">→</span></a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <article class="program-card h-100">
                            <div class="program-card__accent program-card__accent--kawsay"></div>
                            <div class="program-card__body">
                                <h3 class="h5 fw-semibold mb-2">Kawsay</h3>
                                <p class="text-secondary small mb-4">Proyectos de vida, salud y vínculo con la
                                    naturaleza.</p>
                                <a class="stretched-link program-card__link fw-semibold small" href="{{ url('/kawsay') }}">Acceder
                                    <span aria-hidden="true">→</span></a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <article class="program-card program-card--muted h-100">
                            <div class="program-card__body">
                                <h3 class="h5 fw-semibold mb-2">Noticias y publicaciones</h3>
                                <p class="text-secondary small mb-4">Informes, memorias y voces del quehacer
                                    institucional.</p>
                                <a class="stretched-link program-card__link fw-semibold small text-secondary" href="#">Próximamente</a>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-pillars py-5 home-section-lg">
            <div class="container container-home">
                <h2 class="h3 fw-semibold text-center mb-4 mb-lg-5">Cómo trabajamos</h2>
                <div class="row g-4 g-lg-5">
                    <div class="col-md-4">
                        <div class="pillar-card text-center px-lg-3">
                            <div class="pillar-card__icon mb-3" aria-hidden="true">◎</div>
                            <h3 class="h6 fw-semibold text-uppercase home-ls mb-2">Pedagogía viva</h3>
                            <p class="text-secondary small mb-0">Aulas y talleres donde se aprende haciendo, dialogando
                                y cuidando el entorno.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pillar-card text-center px-lg-3">
                            <div class="pillar-card__icon mb-3" aria-hidden="true">⚖</div>
                            <h3 class="h6 fw-semibold text-uppercase home-ls mb-2">Ética y derechos</h3>
                            <p class="text-secondary small mb-0">Énfasis en equidad de género, inclusión y convivencia
                                democrática.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pillar-card text-center px-lg-3">
                            <div class="pillar-card__icon mb-3" aria-hidden="true">✦</div>
                            <h3 class="h6 fw-semibold text-uppercase home-ls mb-2">Territorio</h3>
                            <p class="text-secondary small mb-0">Proyectos anclados en realidades locales y en diálogo
                                con saberes andinos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-cta text-white text-center py-5 home-section-lg" aria-label="Llamado a la acción">
            <div class="container container-home position-relative">
                <h2 class="h3 fw-semibold mb-3">Tu apoyo sostiene esta red educativa</h2>
                <p class="mb-4 mx-auto home-cta__text">Las donaciones y alianzas permiten becas, equipamiento y
                    proyectos comunitarios que complementan la labor en aula.</p>
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                    <a class="btn btn-light btn-lg rounded-pill px-5 fw-semibold" href="#">Quiero aportar</a>
                    <a class="btn btn-outline-light btn-lg rounded-pill px-5" href="#">Ser voluntario/a</a>
                </div>
            </div>
        </section>
    </div>
@endsection
