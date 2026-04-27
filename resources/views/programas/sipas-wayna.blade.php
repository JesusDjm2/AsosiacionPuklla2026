@extends('layouts.app')

@section('title', 'Sipas Wayna — ')

@section('content')

{{-- Banner --}}
<section class="page-banner" style="background: linear-gradient(135deg, #6b1a6b 0%, #400e40 100%); padding: 6rem 0 4rem;">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-md-3 text-center">
                <img src="{{ asset('img/logos/Sipas-wayna-logo.png') }}" alt="Sipas Wayna" style="height:120px; object-fit:contain;" onerror="this.style.display='none'">
            </div>
            <div class="col-md-9 text-white">
                <h1 class="fw-bold display-5">Sipas Wayna</h1>
                <p class="lead opacity-85">Juventudes · Participación y liderazgo</p>
            </div>
        </div>
    </div>
</section>

{{-- Presentación --}}
<section class="py-5">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-8">
                <p class="fs-5 text-secondary">Adolescentes y jóvenes de Cusco, de toda condición, comparten su tiempo libre. Mediante actividades artísticas, de movimiento y juego, se divierten mientras desarrollan habilidades para la vida, afirmando su identidad, su autonomía y una actitud positiva hacia un ejercicio ciudadano activo.</p>
            </div>
            <div class="col-lg-4">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/w4zAfj5Bt1k?si=XtALd3lCuAS8Jj0Y" title="Sipas Wayna" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ¿Quiénes participan? --}}
<section class="py-5" style="background:#f8f9fa;" id="quienes">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div style="height:320px; background:linear-gradient(135deg,#6b1a6b20,#6b1a6b10); border-radius:16px; display:flex; align-items:center; justify-content:center;">
                    <span class="text-muted">Jóvenes Sipas Wayna</span>
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4" style="color:#6b1a6b;">¿Quiénes participan?</h2>
                <p class="text-secondary fs-5">Adolescentes y jóvenes hasta los 21 años de diferentes contextos culturales, sociales y personales: estudiantes, líderes, adolescentes que reciben apoyo social, jóvenes con habilidades diferentes y todos los que deseen participar.</p>
            </div>
        </div>
    </div>
</section>

{{-- Áreas de trabajo --}}
<section class="py-5" id="areas">
    <div class="container py-4">
        <h2 class="fw-bold text-center mb-5" style="color:#6b1a6b;">Nuestras áreas de trabajo</h2>
        <div class="row g-4 text-center">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm p-4" style="border-top:4px solid #6b1a6b !important;">
                    <div class="card-body">
                        <i class="bi bi-house-heart-fill mb-3" style="font-size:2.5rem; color:#6b1a6b;"></i>
                        <h4 class="fw-bold mb-3">Casa Cultural</h4>
                        <p class="text-muted">Espacio de encuentro de adolescentes y jóvenes donde se realizan nuestros diversos talleres y actividades artísticas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm p-4" style="border-top:4px solid #c0392b !important;">
                    <div class="card-body">
                        <i class="bi bi-heart-pulse-fill mb-3" style="font-size:2.5rem; color:#c0392b;"></i>
                        <h4 class="fw-bold mb-3">Vida Saludable</h4>
                        <p class="text-muted">Programa de educación sexual y prevención de la violencia para adolescentes de instituciones educativas públicas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm p-4" style="border-top:4px solid #1a6b3c !important;">
                    <div class="card-body">
                        <i class="bi bi-universal-access-circle mb-3" style="font-size:2.5rem; color:#1a6b3c;"></i>
                        <h4 class="fw-bold mb-3">Inclusión Social y Laboral</h4>
                        <p class="text-muted">Adolescentes y jóvenes con habilidades diferentes participan de nuestras actividades y fortalecen su autonomía social y laboral.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Casa Cultural --}}
<section class="py-5" style="background:#f8f9fa;">
    <div class="container py-4">
        <h3 class="fw-bold text-center mb-5" style="color:#6b1a6b;">Casa Cultural — Talleres y Actividades</h3>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm p-4">
                    <i class="bi bi-palette-fill mb-3" style="font-size:2rem; color:#6b1a6b;"></i>
                    <h5 class="fw-bold mb-2">Talleres Artísticos</h5>
                    <p class="text-muted">Talleres de expresión y creación artística que desarrollan habilidades sociales y comunicativas, promoviendo la interacción entre jóvenes.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm p-4">
                    <i class="bi bi-book-fill mb-3" style="font-size:2rem; color:#6b1a6b;"></i>
                    <h5 class="fw-bold mb-2">K'uskiteca</h5>
                    <p class="text-muted">Biblioteca juvenil que promueve la lectura y escritura creativa a través de actividades diversas. Libros ilustrados, novelas gráficas, cómics, etc.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm p-4">
                    <i class="bi bi-stars mb-3" style="font-size:2rem; color:#6b1a6b;"></i>
                    <h5 class="fw-bold mb-2">Desenrrollos</h5>
                    <p class="text-muted">Talleres gratuitos de 1 sola sesión en los que aprendemos algo novedoso e interesante: escritura creativa, manualidades diversas, entre otros.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Vida Saludable --}}
<section class="py-5">
    <div class="container py-4">
        <h3 class="fw-bold text-center mb-5" style="color:#c0392b;">Vida saludable y prevención de riesgos</h3>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm p-4">
                    <i class="bi bi-gender-ambiguous mb-3" style="font-size:2rem; color:#c0392b;"></i>
                    <h5 class="fw-bold mb-2">Educación Sexual Integral</h5>
                    <p class="text-muted">A través de talleres formativos y artísticos que desarrollan habilidades sociales, dirigidos a niñas, niños y adolescentes.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm p-4">
                    <i class="bi bi-chat-dots-fill mb-3" style="font-size:2rem; color:#c0392b;"></i>
                    <h5 class="fw-bold mb-2">Talleres de Liderazgo y Comunicación</h5>
                    <p class="text-muted">Desarrollo de iniciativas para promover una cultura de paz y diversión sin hacernos daño.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm p-4">
                    <i class="bi bi-plus-circle-fill mb-3" style="font-size:2rem; color:#c0392b;"></i>
                    <h5 class="fw-bold mb-2">Fortalecimiento en Comunicación y Matemáticas</h5>
                    <p class="text-muted">Promovemos el gusto y motivación por estos cursos con apoyo de estudiantes de la EESP Pukllasunchis y en horario extraescolar.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Inclusión Social y Laboral --}}
<section class="py-5" style="background:#f8f9fa;" id="inclusion">
    <div class="container py-4">
        <h3 class="fw-bold text-center mb-5" style="color:#1a6b3c;">Inclusión social y laboral juvenil</h3>
        <div class="row g-4 justify-content-center">
            <div class="col-md-5">
                <div class="card h-100 border-0 shadow-sm p-4">
                    <i class="bi bi-activity mb-3" style="font-size:2rem; color:#1a6b3c;"></i>
                    <h5 class="fw-bold mb-2">Habilidades para la Autonomía</h5>
                    <p class="text-muted">Jóvenes con habilidades diferentes practican actividades cotidianas como cruzar la pista o tomar el bus y socializan en paseos y Sábados Zanahoria.</p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card h-100 border-0 shadow-sm p-4">
                    <i class="bi bi-briefcase-fill mb-3" style="font-size:2rem; color:#1a6b3c;"></i>
                    <h5 class="fw-bold mb-2">Inclusión Laboral</h5>
                    <p class="text-muted">Jóvenes con habilidades diferentes se integran positivamente en centros de formación técnica y centros laborales, siendo ciudadanos productivos y felices.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Redes --}}
<section class="py-5" style="background:#6b1a6b;">
    <div class="container py-4 text-white text-center">
        <h3 class="fw-bold mb-4">Síguenos en redes</h3>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="https://www.facebook.com/SipasWaynaPukllasunchis" target="_blank" class="btn btn-light btn-lg px-4" style="color:#6b1a6b;">
                <i class="bi bi-facebook me-2"></i>Facebook
            </a>
            <a href="https://instagram.com/sipaswayna" target="_blank" class="btn btn-outline-light btn-lg px-4">
                <i class="bi bi-instagram me-2"></i>Instagram
            </a>
        </div>
    </div>
</section>

@endsection
