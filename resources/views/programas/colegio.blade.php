@extends('layouts.app')

@section('title', 'Colegio Pukllasunchis — ')

@section('content')

{{-- Banner --}}
<section class="page-banner" style="background: linear-gradient(135deg, #c0392b 0%, #6b1a10 100%); padding: 6rem 0 4rem;">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-md-3 text-center">
                <img src="{{ asset('img/logos/colegio-logo.png') }}" alt="Colegio Pukllasunchis" style="height:120px; object-fit:contain;" onerror="this.style.display='none'">
            </div>
            <div class="col-md-9 text-white">
                <h1 class="fw-bold display-5">Colegio Pukllasunchis</h1>
                <p class="lead opacity-85">Desde 1988, educación intercultural, inclusiva y con alegría.</p>
            </div>
        </div>
    </div>
</section>

{{-- Presentación --}}
<section class="py-5">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-8">
                <p class="fs-5 text-secondary">Desde 1988, ofrecemos una educación intercultural en ciudad a niñas, niños y adolescentes de contextos diversos, con un enfoque inclusivo y en un entorno de alegría y afecto como fundamento para formar seres humanos felices, comprometidos con el colectivo y consigo mismos.</p>
            </div>
            <div class="col-lg-4 text-center">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/1KVDdlLGdxM?si=bJtA342C8PlPwFmF" title="Colegio Pukllasunchis" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Ejes transversales --}}
<section class="py-5" style="background:#f8f9fa;">
    <div class="container py-4">
        <h2 class="fw-bold text-center mb-5" style="color:#c0392b;">Ejes transversales</h2>
        <div class="row g-4 text-center">
            <div class="col-md-3 col-6">
                <div class="p-4">
                    <i class="bi bi-globe-americas" style="font-size:2.5rem; color:#c0392b;"></i>
                    <h5 class="fw-bold mt-3">Interculturalidad</h5>
                    <p class="text-muted small">Recibimos estudiantes diversos en lo social, económico, cultural y religioso, en un marco intercultural de enriquecimiento mutuo que fortalece nuestras culturas andina y amazónica.</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="p-4">
                    <i class="bi bi-tree" style="font-size:2.5rem; color:#1a6b3c;"></i>
                    <h5 class="fw-bold mt-3">Medio Ambiente</h5>
                    <p class="text-muted small">Promovemos conciencia hacia el cuidado y respeto por la tierra, creciendo en armonía con la naturaleza y asumiendo positivamente nuestro compromiso con ella.</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="p-4">
                    <i class="bi bi-gender-ambiguous" style="font-size:2.5rem; color:#6b1a6b;"></i>
                    <h5 class="fw-bold mt-3">Género</h5>
                    <p class="text-muted small">Promovemos relaciones equitativas de género para que todos los estudiantes se reconozcan como seres valiosos, protagonistas y partícipes de su construcción personal y colectiva.</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="p-4">
                    <i class="bi bi-heart" style="font-size:2.5rem; color:#b45309;"></i>
                    <h5 class="fw-bold mt-3">Valores y Actitudes</h5>
                    <p class="text-muted small">Solidaridad, laboriosidad, organización, creatividad y autonomía son actitudes esenciales que aseguran el desarrollo pleno de niñas, niños y adolescentes.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Perfil del alumno --}}
<section class="py-5" id="perfil">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h2 class="fw-bold mb-2" style="color:#c0392b;">Ser feliz</h2>
                <h5 class="text-muted mb-4">El perfil de la alumna y el alumno</h5>
                <ul class="list-unstyled">
                    @foreach([
                        'Actitud positiva ante la vida.',
                        'Conoce y valora su cultura.',
                        'Enfrenta problemas o situaciones complejas.',
                        'Se esfuerza en cualquier tarea que emprende.',
                        'Reconoce que las diferencias son enriquecedoras.',
                        'Asume la libertad con responsabilidad.',
                        'Convive en armonía con su entorno social y natural.',
                        'Se reconoce y acepta.',
                        'Sabe relacionarse con los demás.',
                        'Crítico y autocrítico.',
                        'Activo y competente en su medio.',
                        'Sensible a las necesidades de todos.',
                    ] as $item)
                    <li class="d-flex align-items-start mb-2">
                        <i class="bi bi-check-circle-fill me-2 mt-1 flex-shrink-0" style="color:#c0392b;"></i>
                        <span class="text-secondary">{{ $item }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-6">
                <div style="height:360px; background:linear-gradient(135deg,#c0392b20,#c0392b10); border-radius:16px; display:flex; align-items:center; justify-content:center;">
                    <span class="text-muted">Foto de estudiantes</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ¿Por qué Puklla? --}}
<section class="py-5" style="background:#f8f9fa;" id="porque">
    <div class="container py-4">
        <h2 class="fw-bold text-center mb-5" style="color:#c0392b;">¿Por qué Puklla?</h2>
        <div class="row g-4">
            @php
            $razones = [
                ['icon' => 'bi-heart-fill', 'titulo' => 'Afecto', 'texto' => 'Sabernos apreciados y queridos como personas con particularidades propias, fortalece nuestro autoconcepto, ayudándonos a reconocernos como seres valiosos y únicos, merecedores de amor y cuidado.'],
                ['icon' => 'bi-arrows-angle-contract', 'titulo' => 'Horizontalidad', 'texto' => 'Construimos un vínculo horizontal entre estudiantes y adultos como pares que se escuchan y respetan. Niñas y niños crecen fortaleciendo su derecho a opinar y discrepar asertivamente y sin temor.'],
                ['icon' => 'bi-person-check-fill', 'titulo' => 'Tutoría', 'texto' => 'El vínculo cercano con un maestro o maestra referente, a nivel individual o grupal, nos permite conocernos mejor, fortalecernos como colectivo e identificar todas las necesidades de atención de nuestros estudiantes.'],
                ['icon' => 'bi-hand-thumbs-up-fill', 'titulo' => 'Apertura de credo', 'texto' => 'Pensamos que la práctica religiosa es una elección íntima que corresponde a cada familia y a cada persona. En Pukllasunchis tenemos familias con religiones diversas y todas merecen nuestro respeto.'],
                ['icon' => 'bi-person-standing', 'titulo' => 'Sin uniformes ni marchas', 'texto' => 'Uniformarnos limita nuestra apuesta por una escuela diversa y no aporta a la construcción del propio yo. La ciudadanía no se construye a través de "lo castrense", sino desde la actuación en favor del colectivo.'],
            ];
            @endphp
            @foreach($razones as $r)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm p-4">
                    <div class="card-body">
                        <i class="bi {{ $r['icon'] }} mb-3" style="font-size:2rem; color:#c0392b;"></i>
                        <h5 class="fw-bold mb-3">{{ $r['titulo'] }}</h5>
                        <p class="text-muted">{{ $r['texto'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Quote premiado --}}
<section class="py-5" style="background:#1a1a2e;">
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center text-white">
                <i class="bi bi-trophy-fill mb-3" style="font-size:2.5rem; color:#f39c12;"></i>
                <h3 class="fw-bold mb-3">Colegio premiado</h3>
                <p class="opacity-75 lead">Nuestro colegio ha logrado reconocimientos importantes como el Premio CONAM al Desarrollo Sostenible (1999), el Premio Nacional de Ciudadanía Ambiental, otorgado por el Ministerio del Ambiente (2012) y el Premio ASHOKA por "Changemaker Schools" (2017).</p>
            </div>
        </div>
    </div>
</section>

{{-- Admisión y documentos --}}
<section class="py-5" id="admision">
    <div class="container py-4">
        <h2 class="fw-bold text-center mb-5" style="color:#c0392b;">Admisión y Documentos</h2>
        <div class="row g-4 justify-content-center">
            @php
            $docs = [
                ['titulo' => 'Admisión y Matrículas', 'desc' => 'Información importante para el proceso de admisión del año entrante y el proceso de matrículas.', 'link' => '#', 'target' => '_self'],
                ['titulo' => 'Boletín semanal', 'desc' => 'Comunicados y boletines informativos de la comunidad del Colegio Pukllasunchis.', 'link' => '#', 'target' => '_self'],
                ['titulo' => 'Plan Curricular 2025', 'desc' => 'Descarga el plan curricular y el plan anual del colegio para el año 2025.', 'link' => '#', 'target' => '_blank'],
                ['titulo' => 'Reglamento Interno 2025', 'desc' => 'Reglamento interno y de convivencia actualizado para el año escolar 2025.', 'link' => '#', 'target' => '_blank'],
                ['titulo' => 'Datos informativos', 'desc' => 'Datos y resoluciones institucionales del Colegio Pukllasunchis.', 'link' => '#', 'target' => '_blank'],
                ['titulo' => 'Libro de Reclamaciones', 'desc' => 'Accede al libro de reclamaciones virtual para registrar alguna queja o reclamo sobre nuestro servicio.', 'link' => 'https://forms.gle/9iHgKVRkRCkXzmWJA', 'target' => '_blank'],
            ];
            @endphp
            @foreach($docs as $doc)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm p-4">
                    <div class="card-body">
                        <i class="bi bi-file-earmark-text mb-3" style="font-size:1.8rem; color:#c0392b;"></i>
                        <h5 class="fw-bold mb-2">{{ $doc['titulo'] }}</h5>
                        <p class="text-muted small">{{ $doc['desc'] }}</p>
                    </div>
                    <div class="card-footer bg-white border-0">
                        <a href="{{ $doc['link'] }}" target="{{ $doc['target'] }}" class="btn btn-outline-danger btn-sm">Ver más</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Contacto del colegio --}}
<section class="py-5" style="background:#c0392b;">
    <div class="container py-4 text-white text-center">
        <h3 class="fw-bold mb-4">Contáctanos directamente</h3>
        <div class="row justify-content-center g-4">
            <div class="col-md-4">
                <i class="bi bi-telephone-fill fs-4 mb-2 d-block"></i>
                <a href="tel:+51984566781" class="text-white text-decoration-none">+51 984 566 781</a>
            </div>
            <div class="col-md-4">
                <i class="bi bi-envelope-fill fs-4 mb-2 d-block"></i>
                <a href="mailto:colepukllasunchis@gmail.com" class="text-white text-decoration-none">colepukllasunchis@gmail.com</a>
            </div>
            <div class="col-md-4">
                <i class="bi bi-facebook fs-4 mb-2 d-block"></i>
                <a href="https://www.facebook.com/colegio.pukllasunchis" target="_blank" class="text-white text-decoration-none">colegio.pukllasunchis</a>
            </div>
        </div>
    </div>
</section>

@endsection
