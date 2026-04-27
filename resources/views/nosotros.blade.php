@extends('layouts.app')

@section('title', 'Nosotros — ')

@section('content')

{{-- Banner --}}
<section class="page-banner" style="background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%); padding: 6rem 0 4rem;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-white">
                <h1 class="fw-bold display-5">Nosotros</h1>
                <p class="lead opacity-75">Conoce quiénes somos y qué nos mueve</p>
            </div>
        </div>
    </div>
</section>

{{-- ¿Quiénes Somos? --}}
<section class="py-5">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-4">
                <h2 class="fw-bold" style="color:#c0392b;">¿Quiénes Somos?</h2>
            </div>
            <div class="col-lg-8">
                <p class="fs-5 text-secondary">Pukllasunchis significa <em>"juguemos"</em> en quechua. Somos una institución sin fines de lucro dedicada a la educación, con propuestas transformadoras dentro del sistema educativo peruano y en espacios no escolarizados, con un enfoque intercultural, inclusivo y medioambiental.</p>
            </div>
        </div>
    </div>
</section>

{{-- Estadísticas --}}
<section class="py-5" style="background:#f8f9fa;">
    <div class="container py-3">
        <div class="row text-center g-4">
            <div class="col-6 col-md-3">
                <div class="p-4">
                    <h2 class="display-4 fw-bold" style="color:#c0392b;">42</h2>
                    <p class="text-muted mb-0">Años de experiencia</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="p-4">
                    <h2 class="display-4 fw-bold" style="color:#c0392b;">3600+</h2>
                    <p class="text-muted mb-0">Beneficiarios por año</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="p-4">
                    <h2 class="display-4 fw-bold" style="color:#c0392b;">150</h2>
                    <p class="text-muted mb-0">Colaboradores</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="p-4">
                    <h2 class="display-4 fw-bold" style="color:#c0392b;">6</h2>
                    <p class="text-muted mb-0">Proyectos y programas</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Misión y Visión --}}
<section class="py-5">
    <div class="container py-4">
        <h2 class="fw-bold text-center mb-5" style="color:#c0392b;">Misión y Visión</h2>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm p-4">
                    <div class="card-body">
                        <h5 class="fw-bold mb-3">Misión</h5>
                        <blockquote class="blockquote mb-0">
                            <p class="fst-italic text-secondary">"La Asociación Pukllasunchis crea y vitaliza espacios de formación para la transformación ética de la educación desde una perspectiva holística."</p>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm p-4">
                    <div class="card-body">
                        <h5 class="fw-bold mb-3">Visión</h5>
                        <blockquote class="blockquote mb-0">
                            <p class="fst-italic text-secondary">"Somos un colectivo organizado, creativo, flexible, sensible, democrático y ético que celebra y agradece la vida impulsando propuestas educativas que afianzan y fortalecen los valores humanos."</p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Nuestro Equipo --}}
<section class="py-5" style="background:#f8f9fa;">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold" style="color:#c0392b;">Nuestro Equipo</h2>
            <p class="lead text-secondary">Somos alrededor de 150 personas entre profesionales de la educación<br>y otras especialidades, personal administrativo y de servicio.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm overflow-hidden">
                    <div class="card-body p-0">
                        <div style="height:280px; background:#dee2e6; display:flex; align-items:center; justify-content:center;">
                            <span class="text-muted fs-6">Equipo de Asociados</span>
                        </div>
                    </div>
                    <div class="card-footer bg-white border-0 p-3">
                        <p class="mb-0 text-center fw-semibold">Equipo de Asociados</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-0 shadow-sm overflow-hidden">
                    <div class="card-body p-0">
                        <div style="height:280px; background:#dee2e6; display:flex; align-items:center; justify-content:center;">
                            <span class="text-muted fs-6">Equipo de Coordinación General</span>
                        </div>
                    </div>
                    <div class="card-footer bg-white border-0 p-3">
                        <p class="mb-0 text-center fw-semibold">Equipo de Coordinación General</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Historia --}}
<section class="py-5">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-5">
                <div style="height:320px; background:#dee2e6; border-radius:12px; display:flex; align-items:center; justify-content:center;">
                    <span class="text-muted">Foto institucional</span>
                </div>
            </div>
            <div class="col-lg-7">
                <h2 class="fw-bold mb-4" style="color:#c0392b;">Un poco de historia</h2>
                <p class="text-secondary">Fundamos la Asociación Pukllasunchis en 1981 y comenzamos nuestro trabajo implementando centros de educación inicial en sectores populares de Cusco, con el compromiso de madres y padres de familia.</p>
                <p class="text-secondary mt-3">En 1988 creamos el Colegio Pukllasunchis y, en 1990, ya con experiencias y propuestas pedagógicas validadas, iniciamos una línea importante de capacitación a docentes en servicio. A partir de entonces no hemos dejado de crecer como institución, aportando al desarrollo de la educación en nuestra ciudad desde los diversos proyectos que fuimos construyendo.</p>
                <p class="text-secondary mt-3">Actualmente, Pukllasunchis es un referente importante para la comunidad educativa local, regional y nacional, tanto a nivel de la práctica pedagógica como de la formación docente.</p>
            </div>
        </div>
    </div>
</section>

{{-- Video --}}
<section class="py-5" style="background:#f8f9fa;">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/arx7vrF30ls?si=M8daN9rmeemaG15V" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="fw-bold" style="color:#c0392b;">¿Quieres saber cómo empezó todo?</h3>
                <p class="text-secondary mt-3">Mira nuestro video institucional y descubre la historia detrás de más de 40 años de educación transformadora en el Cusco.</p>
            </div>
        </div>
    </div>
</section>

{{-- Reconocimientos --}}
<section class="py-5">
    <div class="container py-4">
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="card h-100 border-0 shadow-sm p-4">
                    <div class="card-body">
                        <h5 class="fw-bold mb-3">Premios y Reconocimientos</h5>
                        <p class="text-secondary">A lo largo de estos años, la Asociación Pukllasunchis ha obtenido numerosos premios y reconocimientos; todos ellos fruto del trabajo profesional y comprometido de quienes colaboran con nosotros.</p>
                        <a href="#" class="btn btn-outline-danger btn-sm mt-3">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card h-100 border-0 shadow-sm p-4" style="border-top:3px solid #c0392b !important;">
                    <div class="card-body">
                        <h5 class="fw-bold mb-3">Autosostenimiento</h5>
                        <p class="text-secondary">El autosostenimiento de nuestros programas es un objetivo permanente. Hemos logrado un autofinanciamiento institucional del 44% con recursos locales, aunque aún dependemos de financiamiento externo y donaciones.</p>
                        <a href="{{ route('donaciones') }}" class="btn btn-danger btn-sm mt-3">Aporta</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card h-100 border-0 shadow-sm p-4">
                    <div class="card-body">
                        <h5 class="fw-bold mb-3">Agradecimientos</h5>
                        <p class="text-secondary">Son muchas las instituciones y financieras que han confiado en nosotros. A todas ellas y a la Stiftung Pukllasunchis, nuestra profunda gratitud.</p>
                        <a href="https://puklla.ch/" target="_blank" class="btn btn-outline-danger btn-sm mt-3">Stiftung Pukllasunchis</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-5" style="background:#c0392b;">
    <div class="container text-center text-white py-3">
        <h2 class="fw-bold mb-3">Ayúdanos a cumplir nuestros proyectos y sueños</h2>
        <p class="lead opacity-75 mb-4">Gracias a los aportes de amigos y fundaciones que confían en la transparencia y compromiso de Pukllasunchis, podemos seguir contribuyendo con la educación de nuestro país.</p>
        <a href="{{ route('donaciones') }}" class="btn btn-light btn-lg px-5 fw-semibold" style="color:#c0392b;">Aporta ahora</a>
    </div>
</section>

@endsection
