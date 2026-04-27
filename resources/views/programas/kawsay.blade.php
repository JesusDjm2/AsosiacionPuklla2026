@extends('layouts.app')

@section('title', 'Kawsay — ')

@section('content')

{{-- Banner --}}
<section class="page-banner" style="background: linear-gradient(135deg, #1a6b3c 0%, #0e4020 100%); padding: 6rem 0 4rem;">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-md-3 text-center">
                <img src="{{ asset('img/logos/kAWSAY-LOGO.png') }}" alt="Kawsay" style="height:120px; object-fit:contain;" onerror="this.style.display='none'">
            </div>
            <div class="col-md-9 text-white">
                <h1 class="fw-bold display-5">Kawsay</h1>
                <p class="lead opacity-85">Bienestar integral · Vida plena y sostenible</p>
            </div>
        </div>
    </div>
</section>

{{-- Presentación --}}
<section class="py-5">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-8">
                <p class="fs-5 text-secondary">Construimos aprendizajes para proteger y vivir armónicamente en la naturaleza, valorando nuestros conocimientos ancestrales y las técnicas modernas alternativas. Desarrollamos conciencia frente al cambio climático y los problemas ambientales con una actitud positiva: todos podemos contribuir a la mitigación de esta situación.</p>
            </div>
            <div class="col-lg-4">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/7wdm2XdChZI" title="Kawsay Pukllasunchis" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Educación Ambiental --}}
<section class="py-5" style="background:#f8f9fa;" id="educacion">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold" style="color:#1a6b3c;">KAWSAY (<em>Vida</em>) — Educación Ambiental</h2>
        </div>
        <div class="row g-4 text-center">
            @php
            $areas = [
                ['icon' => 'bi-flower2', 'titulo' => 'Biohuerto', 'texto' => 'Contamos con un huerto escolar con parcelas de cultivo y un vivero que trabajan nuestros estudiantes.'],
                ['icon' => 'bi-recycle', 'titulo' => 'Salud Ambiental', 'texto' => 'Promovemos la segregación y reciclaje de residuos, el cultivo y transformación de plantas medicinales en productos herbolarios.'],
                ['icon' => 'bi-piggy-bank', 'titulo' => 'Crianza de Animales', 'texto' => 'La crianza de animales domésticos nos permite desarrollar conciencia, sensibilidad y responsabilidad hacia el mundo animal.'],
                ['icon' => 'bi-tree', 'titulo' => 'Bosques y Entorno', 'texto' => 'En nuestro vivero propagamos plantas nativas forestales, frutales, ornamentales y medicinales para forestación y reforestación.'],
                ['icon' => 'bi-signpost-split', 'titulo' => 'Camino Ecológico', 'texto' => 'Recibimos a grupos de estudiantes, docentes y personas interesadas en conocer nuestro trabajo en el colegio.'],
            ];
            @endphp
            @foreach($areas as $a)
            <div class="col-md-4 col-6">
                <div class="p-4">
                    <i class="bi {{ $a['icon'] }}" style="font-size:2.5rem; color:#1a6b3c;"></i>
                    <h5 class="fw-bold mt-3 mb-2">{{ $a['titulo'] }}</h5>
                    <p class="text-muted small">{{ $a['texto'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Saberes Culturales --}}
<section class="py-5" id="saberes">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div style="height:340px; background:linear-gradient(135deg,#1a6b3c20,#1a6b3c10); border-radius:16px; display:flex; align-items:center; justify-content:center;">
                    <span class="text-muted">Foto Kawsay</span>
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="fw-bold mb-4" style="color:#1a6b3c;">Saberes Culturales en Práctica</h3>
                <p class="text-secondary">La cosmovisión del habitante andino está unida a la naturaleza. Sus saberes agrícolas son la base del conocimiento que transmitimos en Kawsay, en un diálogo armonioso con técnicas contemporáneas.</p>
                <p class="text-secondary mt-3">El calendario agrícola, el movimiento de la luna, el cariño hacia la Pachamama y sus seres, son tan válidos e importantes para nosotros como la ciencia formal.</p>
            </div>
        </div>
    </div>
</section>

{{-- Escuelas Impulsando Territorios --}}
<section class="py-5" style="background:#f8f9fa;">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h3 class="fw-bold mb-4" style="color:#1a6b3c;">Escuelas Impulsando Territorios Vivos</h3>
                <p class="text-secondary">Promovemos la escuela como un territorio vibrante y lleno de posibilidades de cambio y desarrollo, apoyando el involucramiento activo de las comunidades en la protección del medio ambiente.</p>
                <p class="text-secondary mt-3">Capacitamos docentes en servicio partiendo por un diagnóstico participativo que incluye a la comunidad educativa en general: estudiantes, docentes y familias, así como a líderes y sabios comunales. Juntos desarrollamos proyectos para la mitigación de los efectos del calentamiento global, adaptando los contenidos a la realidad y condiciones de cada comunidad e institución educativa.</p>
            </div>
            <div class="col-lg-6">
                <div style="height:340px; background:linear-gradient(135deg,#1a6b3c30,#1a6b3c15); border-radius:16px; display:flex; align-items:center; justify-content:center;">
                    <span class="text-muted">Foto comunidad</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Premio --}}
<section class="py-5" style="background:#1a6b3c;">
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center text-white">
                <i class="bi bi-trophy-fill mb-3" style="font-size:2.5rem; color:#f39c12;"></i>
                <h3 class="fw-bold mb-3">Proyecto premiado</h3>
                <p class="opacity-75 lead">Nuestro programa ha logrado premios importantes: Primer puesto CONAM al Desarrollo Sostenible (Perú, 1999) y del Ministerio del Ambiente, Primer Premio Nacional de Ciudadanía Ambiental (Perú, 2012).</p>
            </div>
        </div>
    </div>
</section>

{{-- Redes --}}
<section class="py-5">
    <div class="container py-4 text-center">
        <h3 class="fw-bold mb-4" style="color:#1a6b3c;">Síguenos en redes</h3>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="https://www.facebook.com/profile.php?id=100083370180873" target="_blank" class="btn btn-outline-primary btn-lg px-4">
                <i class="bi bi-facebook me-2"></i>Facebook
            </a>
            <a href="https://www.youtube.com/@AsociacionPukllasuchis/videos" target="_blank" class="btn btn-outline-danger btn-lg px-4">
                <i class="bi bi-youtube me-2"></i>YouTube
            </a>
        </div>
    </div>
</section>

@endsection
