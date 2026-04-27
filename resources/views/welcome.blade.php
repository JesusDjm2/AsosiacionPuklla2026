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

        {{-- Quiénes somos --}}
        <section class="home-quienes py-5 home-section-lg">
            <div class="container container-home">
                <div class="row align-items-center g-5">

                    {{-- Texto izquierda --}}
                    <div class="col-lg-6 reveal">
                        <p class="home-kicker text-uppercase small fw-semibold mb-2">¿Quiénes somos?</p>
                        <h2 class="home-heading display-6 fw-semibold mb-1">Asociación<br>Pukllasunchis</h2>
                        <p class="home-quienes__deco-word" aria-hidden="true">Juguemos</p>
                        <p class="home-lead text-secondary mb-4"><em>Pukllasunchis</em> significa <strong>«juguemos»</strong> en quechua. Somos una institución sin fines de lucro dedicada a la educación, con propuestas transformadoras dentro del sistema educativo peruano y en espacios no escolarizados, con un enfoque intercultural, inclusivo y ambiental.</p>
                        <a class="btn btn-danger rounded-pill px-4 fw-semibold" href="{{ route('nosotros') }}">Conoce más de nosotros</a>
                    </div>

                    {{-- Imagen derecha --}}
                    <div class="col-lg-6 reveal reveal--delay-1">
                        <div class="home-quienes__frame">
                            <div class="home-quienes__accent" aria-hidden="true"></div>
                            <img src="{{ asset('img/banner-quienes-somos.jpg') }}"
                                 alt="Niñas y niños de Pukllasunchis"
                                 class="home-quienes__img">
                            <div class="home-quienes__badge">
                                <span class="home-quienes__badge-num">42</span>
                                <span class="home-quienes__badge-label">años<br>educando</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="home-intro py-5 home-section-lg">
            <div class="container container-home">
                <div class="row align-items-center g-4 g-lg-5">
                    <div class="col-lg-7 reveal">
                        <p class="home-kicker text-uppercase small fw-semibold mb-2">Asociación Pukllasunchis · Cusco, Perú</p>
                        <h1 class="home-heading display-6 fw-semibold mb-3">42 años formando una educación ética,
                            inclusiva y con raíces.</h1>
                        <p class="home-lead lead text-secondary mb-4">Creamos y vitalizamos espacios de aprendizaje donde niñas,
                            niños, jóvenes y docentes fortalecen identidad, convivencia y pensamiento crítico, desde una
                            mirada holística y el respeto a la diversidad cultural del Cusco y el país.</p>
                        <a class="btn btn-danger rounded-pill px-4 fw-semibold me-2" href="{{ route('nosotros') }}">Conoce nuestra historia</a>
                        <a class="btn btn-outline-secondary rounded-pill px-4" href="{{ route('contacto') }}">Contáctanos</a>
                    </div>
                    <div class="col-lg-5 reveal reveal--delay-1">
                        <div class="home-stats card border-0 shadow-sm rounded-4 p-4 p-lg-5 bg-white">
                            <div class="row g-4 text-center">
                                <div class="col-6">
                                    <span class="home-stat__num counter" data-target="42">0</span>
                                    <span class="home-stat__label d-block mt-1">años de trayectoria educativa</span>
                                </div>
                                <div class="col-6">
                                    <span class="home-stat__num counter" data-target="3600" data-prefix="+">0</span>
                                    <span class="home-stat__label d-block mt-1">beneficiarios directos cada año</span>
                                </div>
                                <div class="col-6">
                                    <span class="home-stat__num counter" data-target="150">0</span>
                                    <span class="home-stat__label d-block mt-1">colaboradores y aliados</span>
                                </div>
                                <div class="col-6">
                                    <span class="home-stat__num counter" data-target="6">0</span>
                                    <span class="home-stat__label d-block mt-1">programas y proyectos activos</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-programs py-5 bg-white border-top border-bottom border-opacity-10" id="programas">
            <div class="container container-home home-programs__intro">
                <header class="home-programs__header d-flex flex-column flex-md-row flex-md-wrap justify-content-md-between align-items-stretch align-items-md-end gap-3 gap-md-4 reveal">
                    <div class="home-programs__head">
                        <p class="home-programs__kicker mb-0">Áreas de trabajo</p>
                        <h2 class="home-programs__title h3 fw-semibold text-dark">Programas y proyectos</h2>
                        <p class="home-programs__lede text-secondary mb-0 home-prose">Explora cada área: en escritorio puedes ampliar el
                            panel superior; en móvil, entra directamente desde las tarjetas.</p>
                    </div>
                    <a class="btn btn-outline-secondary rounded-pill home-programs__cta align-self-start align-self-md-end"
                       href="{{ route('nosotros') }}">Ver todos</a>
                </header>
            </div>

            <div class="container container-home home-programs__cards">
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4 g-lg-4">
                    <div class="col reveal">
                        <article class="program-card h-100">
                            <div class="program-card__accent program-card__accent--escuela" aria-hidden="true"></div>
                            <div class="program-card__body d-flex flex-column">
                                <h3 class="program-card__title h5 fw-semibold mb-2">Escuela superior</h3>
                                <p class="program-card__desc text-secondary small flex-grow-1 mb-0">Formación de educadores con pedagogía activa, interculturalidad y enfoque de derechos.</p>
                                <div class="program-card__footer">
                                    <a class="stretched-link program-card__link fw-semibold small" href="{{ url('/escuela') }}">Acceder
                                        <span class="program-card__arrow" aria-hidden="true">→</span></a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col reveal reveal--delay-1">
                        <article class="program-card h-100">
                            <div class="program-card__accent program-card__accent--colegio" aria-hidden="true"></div>
                            <div class="program-card__body d-flex flex-column">
                                <h3 class="program-card__title h5 fw-semibold mb-2">Colegio</h3>
                                <p class="program-card__desc text-secondary small flex-grow-1 mb-0">Educación inicial y primaria centrada en el estudiante, la comunidad y la interculturalidad.</p>
                                <div class="program-card__footer">
                                    <a class="stretched-link program-card__link fw-semibold small" href="{{ url('/colegio') }}">Acceder
                                        <span class="program-card__arrow" aria-hidden="true">→</span></a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col reveal reveal--delay-2">
                        <article class="program-card h-100">
                            <div class="program-card__accent program-card__accent--radio" aria-hidden="true"></div>
                            <div class="program-card__body d-flex flex-column">
                                <h3 class="program-card__title h5 fw-semibold mb-2">Radio con Niñas y Niños Andinos</h3>
                                <p class="program-card__desc text-secondary small flex-grow-1 mb-0">Niñez y comunidad quechua producen programas radiales que difunden su patrimonio vivo.</p>
                                <div class="program-card__footer">
                                    <a class="stretched-link program-card__link fw-semibold small" href="{{ url('/radio') }}">Acceder
                                        <span class="program-card__arrow" aria-hidden="true">→</span></a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col reveal">
                        <article class="program-card h-100">
                            <div class="program-card__accent program-card__accent--sipas" aria-hidden="true"></div>
                            <div class="program-card__body d-flex flex-column">
                                <h3 class="program-card__title h5 fw-semibold mb-2">Sipas Wayna</h3>
                                <p class="program-card__desc text-secondary small flex-grow-1 mb-0">Adolescentes y jóvenes desarrollan identidad, autonomía y ciudadanía activa mediante arte y juego.</p>
                                <div class="program-card__footer">
                                    <a class="stretched-link program-card__link fw-semibold small" href="{{ url('/sipas-wayna') }}">Acceder
                                        <span class="program-card__arrow" aria-hidden="true">→</span></a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col reveal reveal--delay-1">
                        <article class="program-card h-100">
                            <div class="program-card__accent program-card__accent--kawsay" aria-hidden="true"></div>
                            <div class="program-card__body d-flex flex-column">
                                <h3 class="program-card__title h5 fw-semibold mb-2">Kawsay</h3>
                                <p class="program-card__desc text-secondary small flex-grow-1 mb-0">Aprendizajes para proteger la naturaleza, valorando saberes ancestrales y frente al cambio climático.</p>
                                <div class="program-card__footer">
                                    <a class="stretched-link program-card__link fw-semibold small" href="{{ url('/kawsay') }}">Acceder
                                        <span class="program-card__arrow" aria-hidden="true">→</span></a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col reveal reveal--delay-2">
                        <article class="program-card program-card--muted h-100">
                            <div class="program-card__accent program-card__accent--muted" aria-hidden="true"></div>
                            <div class="program-card__body d-flex flex-column">
                                <h3 class="program-card__title h5 fw-semibold mb-2">Noticias y publicaciones</h3>
                                <p class="program-card__desc text-secondary small flex-grow-1 mb-0">Informes, memorias, investigaciones y voces del quehacer institucional.</p>
                                <div class="program-card__footer">
                                    <a class="stretched-link program-card__link fw-semibold small" href="{{ route('noticias') }}">Ver noticias
                                        <span class="program-card__arrow" aria-hidden="true">→</span></a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <div class="home-patrocinio-parallax"
                 style="background-image: url('{{ asset('img/patrocinio-orquestas.jpg') }}');"
                 aria-labelledby="patrocinio-heading">
                <div class="container container-home home-patrocinio-parallax__inner">
                    <div class="home-patrocinio-parallax__panel">
                        <h3 id="patrocinio-heading" class="home-patrocinio-parallax__title text-uppercase fw-bold mb-3">Patrocinamos</h3>
                        <p class="home-patrocinio-parallax__text mb-4 mb-lg-3">Desde 2011, patrocinamos a las Orquestas y Coros Infantiles y Juveniles del Cusco, compartiendo nuestra infraestructura y apoyando temas logísticos y de financiamiento.</p>
                        <a class="btn home-patrocinio-parallax__btn rounded-3 px-4 py-2 fw-semibold text-uppercase d-inline-flex align-items-center gap-2"
                           href="https://www.facebook.com/AsociacionPukllasunchis"
                           target="_blank" rel="noopener noreferrer">
                            <i class="bi bi-facebook" aria-hidden="true"></i>
                            Facebook
                        </a>
                    </div>
                </div>
            </div>            
        </section>

        <section class="home-video-embed py-5 home-section-lg" aria-labelledby="home-video-heading">
            <div class="container container-home">
                <header class="home-video-embed__intro text-center mx-auto reveal">
                    <p class="home-video-embed__kicker mb-0 mt-4">Pukllasunchis en acción</p>
                    <h2 id="home-video-heading" class="home-video-embed__title h4 fw-semibold text-dark mb-2">Un vistazo a nuestro quehacer</h2>
                    <p class="home-video-embed__lede text-secondary small mb-0">Educación intercultural, comunidad y territorio — el trabajo que hacemos cada día en el Cusco.</p>
                </header>
                <div class="home-video-embed__shell reveal reveal--delay-1">
                    <div class="home-video-embed__frame ratio ratio-16x9">
                        <iframe class="home-video-embed__iframe"
                                src="https://www.youtube.com/embed/SDTf7hKEsAo?rel=0"
                                title="Asociación Pukllasunchis — video institucional"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin"
                                allowfullscreen
                                loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-pillars py-5 home-section-lg">
            <div class="container container-home">
                <h2 class="h3 fw-semibold text-center mb-4 mb-lg-5 reveal">Cómo trabajamos</h2>
                <div class="row g-4 g-lg-5">
                    <div class="col-md-4 reveal">
                        <div class="pillar-card text-center px-lg-3">
                            <div class="pillar-card__icon mb-3" aria-hidden="true">◎</div>
                            <h3 class="h6 fw-semibold text-uppercase home-ls mb-2">Pedagogía viva</h3>
                            <p class="text-secondary small mb-0">Aulas y talleres donde se aprende haciendo, dialogando
                                y cuidando el entorno.</p>
                        </div>
                    </div>
                    <div class="col-md-4 reveal reveal--delay-1">
                        <div class="pillar-card text-center px-lg-3">
                            <div class="pillar-card__icon mb-3" aria-hidden="true">⚖</div>
                            <h3 class="h6 fw-semibold text-uppercase home-ls mb-2">Ética y derechos</h3>
                            <p class="text-secondary small mb-0">Énfasis en equidad de género, inclusión y convivencia
                                democrática.</p>
                        </div>
                    </div>
                    <div class="col-md-4 reveal reveal--delay-2">
                        <div class="pillar-card text-center px-lg-3">
                            <div class="pillar-card__icon mb-3" aria-hidden="true">✦</div>
                            <h3 class="h6 fw-semibold text-uppercase home-ls mb-2">Territorio y saberes andinos</h3>
                            <p class="text-secondary small mb-0">Proyectos anclados en realidades locales y en diálogo
                                con conocimientos ancestrales del Cusco y el sur andino.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Reconocimientos --}}
        <section class="home-awards py-5 border-top border-opacity-10">
            <div class="container container-home">
                <h2 class="h3 fw-semibold text-center mb-4 mb-lg-5 reveal">Reconocimientos y premios</h2>
                <div class="row g-4 justify-content-center text-center">
                    <div class="col-md-4 reveal">
                        <div class="award-card p-4 h-100">
                            <i class="bi bi-trophy-fill mb-3 d-block" style="font-size:2rem; color:#c29030;"></i>
                            <h4 class="h6 fw-semibold mb-2">UNESCO</h4>
                            <p class="text-secondary small mb-0">Premio de comunicación educativa (México, 2005) al programa Radio con Niños Andinos.</p>
                        </div>
                    </div>
                    <div class="col-md-4 reveal reveal--delay-1">
                        <div class="award-card p-4 h-100">
                            <i class="bi bi-award-fill mb-3 d-block" style="font-size:2rem; color:#1f3990;"></i>
                            <h4 class="h6 fw-semibold mb-2">CONAM · Ministerio del Ambiente</h4>
                            <p class="text-secondary small mb-0">Primer puesto al Desarrollo Sostenible (1999) y Premio Nacional de Ciudadanía Ambiental (2012).</p>
                        </div>
                    </div>
                    <div class="col-md-4 reveal reveal--delay-2">
                        <div class="award-card p-4 h-100">
                            <i class="bi bi-star-fill mb-3 d-block" style="font-size:2rem; color:#6c3f17;"></i>
                            <h4 class="h6 fw-semibold mb-2">mSchools · Calandria</h4>
                            <p class="text-secondary small mb-0">Reconocimiento internacional en innovación educativa con tecnología (España, 2023) y por comunicación social (2008).</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-cta text-white text-center py-5 home-section-lg" aria-label="Llamado a la acción">
            <div class="container container-home position-relative reveal">
                <h2 class="h3 fw-semibold mb-3">Tu apoyo sostiene esta red educativa</h2>
                <p class="mb-4 mx-auto home-cta__text">Las donaciones y alianzas permiten becas, equipamiento y
                    proyectos comunitarios que complementan la labor en aula. Más de 3 600 personas se benefician cada año.</p>
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                    <a class="btn btn-light btn-lg rounded-pill px-5 fw-semibold" href="{{ route('donaciones') }}">Quiero aportar</a>
                    <a class="btn btn-outline-light btn-lg rounded-pill px-5" href="{{ route('contacto') }}">Ser voluntario/a</a>
                </div>
            </div>
        </section>
    </div>

@push('scripts')
<script>
(function () {
    // ── Scroll reveal ──────────────────────────────────────────
    const revealObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                revealObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12 });

    document.querySelectorAll('.reveal').forEach(function (el) {
        revealObserver.observe(el);
    });

    // ── Counter animation ──────────────────────────────────────
    function animateCounter(el) {
        const target = parseInt(el.dataset.target, 10);
        const prefix = el.dataset.prefix || '';
        const duration = 1400;
        const start = performance.now();
        function step(now) {
            const elapsed = now - start;
            const progress = Math.min(elapsed / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3);
            el.textContent = prefix + Math.floor(eased * target).toLocaleString('es');
            if (progress < 1) requestAnimationFrame(step);
            else el.textContent = prefix + target.toLocaleString('es');
        }
        requestAnimationFrame(step);
    }

    const counterObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                counterObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    document.querySelectorAll('.counter').forEach(function (el) {
        counterObserver.observe(el);
    });

})();
</script>
@endpush
@endsection
