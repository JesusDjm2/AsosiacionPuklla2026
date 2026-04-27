@extends('layouts.app')

@section('title', 'Publicaciones — ')

@section('content')

{{-- Banner --}}
<section class="page-banner" style="background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%); padding: 6rem 0 4rem;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-white">
                <h1 class="fw-bold display-5">Publicaciones</h1>
                <p class="lead opacity-75">Recursos pedagógicos para una educación transformadora</p>
            </div>
        </div>
    </div>
</section>

{{-- Intro --}}
<section class="py-5">
    <div class="container py-3">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <p class="fs-5 text-secondary">Las publicaciones que la Asociación Pukllasunchis produce tienen un fin meramente educativo. Gran parte de estos textos son compartidos con docentes, alumnos y alumnas de zonas altoandinas del Cusco, donde la necesidad de recursos pedagógicos es mayor.</p>
            </div>
        </div>
    </div>
</section>

{{-- Categorías de publicaciones --}}
<section class="py-4" style="background:#f8f9fa;">
    <div class="container py-4">
        <div class="row g-4">

            @php
            $categorias = [
                ['nombre' => 'Interculturalidad', 'color' => '#c0392b', 'icon' => 'bi-globe-americas'],
                ['nombre' => 'Quechua como segunda lengua', 'color' => '#1a6b3c', 'icon' => 'bi-chat-dots'],
                ['nombre' => 'Castellano como segunda lengua', 'color' => '#1a3a6b', 'icon' => 'bi-book'],
                ['nombre' => 'Cuentos en quechua y castellano', 'color' => '#6b3a1a', 'icon' => 'bi-journal-text'],
                ['nombre' => 'Medioambiente', 'color' => '#2e7d32', 'icon' => 'bi-tree'],
                ['nombre' => 'Inclusión educativa', 'color' => '#6a1a6b', 'icon' => 'bi-people'],
                ['nombre' => 'Radio en la escuela – experiencias', 'color' => '#b45309', 'icon' => 'bi-broadcast'],
                ['nombre' => 'Colegio Pukllasunchis – experiencias', 'color' => '#1565c0', 'icon' => 'bi-building'],
                ['nombre' => 'Artes', 'color' => '#ad1457', 'icon' => 'bi-palette'],
                ['nombre' => 'Matemática', 'color' => '#00695c', 'icon' => 'bi-calculator'],
                ['nombre' => 'Investigación educativa', 'color' => '#37474f', 'icon' => 'bi-search'],
                ['nombre' => 'Educación física y movimiento', 'color' => '#c62828', 'icon' => 'bi-activity'],
            ];
            @endphp

            @foreach($categorias as $cat)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm overflow-hidden" style="border-top:4px solid {{ $cat['color'] }} !important;">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0" style="width:48px; height:48px; background:{{ $cat['color'] }}20;">
                                <i class="bi {{ $cat['icon'] }} fs-5" style="color:{{ $cat['color'] }};"></i>
                            </div>
                            <h6 class="fw-bold mb-0">{{ $cat['nombre'] }}</h6>
                        </div>
                        <a href="#" class="btn btn-sm btn-outline-secondary stretched-link">Ver libros</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

{{-- Información adicional --}}
<section class="py-5">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h3 class="fw-bold mb-4" style="color:#c0392b;">¿Para quién son estas publicaciones?</h3>
                <p class="text-secondary">Nuestros materiales están diseñados para docentes, estudiantes y comunidades de zonas rurales y urbanas del sur andino del Perú, con énfasis en la región del Cusco.</p>
                <ul class="text-secondary mt-3 ps-3">
                    <li class="mb-2">Docentes en servicio de escuelas rurales y urbanas</li>
                    <li class="mb-2">Estudiantes de educación inicial, primaria y secundaria</li>
                    <li class="mb-2">Formadores de formadores y docentes universitarios</li>
                    <li class="mb-2">Instituciones educativas con enfoque intercultural</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="card border-0 shadow p-4 text-center" style="background:linear-gradient(135deg,#1a1a2e,#0f3460);">
                    <div class="card-body text-white">
                        <i class="bi bi-download" style="font-size:3rem; color:#c0392b;"></i>
                        <h4 class="fw-bold mt-3 mb-3">Acceso a publicaciones</h4>
                        <p class="opacity-75 mb-4">Próximamente habilitaremos la descarga directa de nuestras publicaciones en formato digital. Por ahora, contáctanos para solicitar material.</p>
                        <a href="{{ route('contacto') }}" class="btn btn-danger px-4">Solicitar material</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
