@extends('layouts.app')

@section('title', 'Noticias — ')

@section('content')

{{-- Banner --}}
<section class="page-banner" style="background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%); padding: 6rem 0 4rem;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-white">
                <h1 class="fw-bold display-5">Noticias</h1>
                <p class="lead opacity-75">Lo que está pasando en Pukllasunchis</p>
            </div>
        </div>
    </div>
</section>

{{-- Noticias --}}
<section class="py-5">
    <div class="container py-4">
        <div class="row g-4">

            {{-- Noticia 1 --}}
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm overflow-hidden">
                    <div style="height:220px; background:linear-gradient(135deg,#c0392b,#922b21); display:flex; align-items:center; justify-content:center; padding:1rem;">
                        <span class="badge bg-white text-danger fw-semibold px-3 py-2">Noticia</span>
                    </div>
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-3">Nuestro programa radial Sisichakunaq Pukllaynin gana importante premio a nivel internacional</h5>
                        <p class="text-muted small">En marzo de este año, en Barcelona, nuestro conocido programa radial Sisichakunaq Pukllaynin recibió el premio de mSchools a la innovación educativa en aprendizaje mediático...</p>
                    </div>
                    <div class="card-footer bg-white border-0 p-4 pt-0">
                        <span class="text-muted small"><i class="bi bi-person me-1"></i>Pukllasunchis</span>
                    </div>
                </div>
            </div>

            {{-- Noticia 2 --}}
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm overflow-hidden">
                    <div style="height:220px; background:linear-gradient(135deg,#1a6b3c,#0e4d2a); display:flex; align-items:center; justify-content:center; padding:1rem;">
                        <span class="badge bg-white text-success fw-semibold px-3 py-2">Noticia</span>
                    </div>
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-3">Radio con Niñas y Niños Andinos, en Francia</h5>
                        <p class="text-muted small">El 17 de octubre último, el Programa Radio con Niñas y Niños Andinos fue invitado por la Casa de las Culturas del Mundo al XI Coloquio Internacional del Centro Francés del Patrimonio Cultural Inmaterial, en la ciudad de Vitré, Francia...</p>
                    </div>
                    <div class="card-footer bg-white border-0 p-4 pt-0">
                        <span class="text-muted small"><i class="bi bi-person me-1"></i>Pukllasunchis</span>
                    </div>
                </div>
            </div>

            {{-- Noticia 3 --}}
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm overflow-hidden">
                    <div style="height:220px; background:linear-gradient(135deg,#1a3a6b,#0e2a4d); display:flex; align-items:center; justify-content:center; padding:1rem;">
                        <span class="badge bg-white text-primary fw-semibold px-3 py-2">Noticia</span>
                    </div>
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-3">Novedades del Colegio Pukllasunchis 2025</h5>
                        <p class="text-muted small">El Colegio Pukllasunchis abre su proceso de admisión 2025. Conoce los requisitos, fechas y el proceso de matrícula para el próximo año escolar...</p>
                    </div>
                    <div class="card-footer bg-white border-0 p-4 pt-0">
                        <span class="text-muted small"><i class="bi bi-person me-1"></i>Pukllasunchis</span>
                    </div>
                </div>
            </div>

            {{-- Noticia 4 --}}
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm overflow-hidden">
                    <div style="height:220px; background:linear-gradient(135deg,#6b3a1a,#4d2a0e); display:flex; align-items:center; justify-content:center; padding:1rem;">
                        <span class="badge bg-white fw-semibold px-3 py-2" style="color:#6b3a1a;">Noticia</span>
                    </div>
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-3">Kawsay: Proyecto premiado en educación ambiental</h5>
                        <p class="text-muted small">Nuestro programa Kawsay continúa cosechando reconocimientos por su trabajo en educación ambiental y la integración de saberes ancestrales andinos en las prácticas pedagógicas...</p>
                    </div>
                    <div class="card-footer bg-white border-0 p-4 pt-0">
                        <span class="text-muted small"><i class="bi bi-person me-1"></i>Pukllasunchis</span>
                    </div>
                </div>
            </div>

        </div>

        {{-- Próximamente --}}
        <div class="row mt-5">
            <div class="col-12 text-center py-4" style="background:#f8f9fa; border-radius:12px;">
                <i class="bi bi-newspaper" style="font-size:3rem; color:#c0392b;"></i>
                <h4 class="fw-bold mt-3">Más noticias próximamente</h4>
                <p class="text-muted">Estamos trabajando para traerte toda la actualidad de Pukllasunchis. Síguenos en nuestras redes sociales para estar al día.</p>
                <a href="https://www.youtube.com/@AsociacionPukllasuchis/videos" target="_blank" class="btn btn-danger me-2">
                    <i class="bi bi-youtube me-1"></i>YouTube
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
