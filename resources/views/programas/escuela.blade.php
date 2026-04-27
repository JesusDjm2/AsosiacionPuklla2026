@extends('layouts.app')

@section('title', 'EESP Pukllasunchis — ')

@section('content')

{{-- Banner --}}
<section class="page-banner" style="background: linear-gradient(135deg, #1a3a6b 0%, #0e2040 100%); padding: 6rem 0 4rem;">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-md-3 text-center">
                <img src="{{ asset('img/logos/logo-eespp.png') }}" alt="EESP Pukllasunchis" style="height:120px; object-fit:contain;" onerror="this.style.display='none'">
            </div>
            <div class="col-md-9 text-white">
                <h1 class="fw-bold display-5">Escuela de Educación Superior</h1>
                <p class="lead opacity-85">Formación docente intercultural e inclusiva · EESP Pukllasunchis</p>
            </div>
        </div>
    </div>
</section>

{{-- Presentación --}}
<section class="py-5">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-8">
                <p class="fs-5 text-secondary">La EESP Pukllasunchis es una institución que asume un serio compromiso con la educación del Perú y es sensible a las diferencias culturales, principalmente de la región y el país. Es un proyecto alternativo que busca revisar los paradigmas tradicionales para reconstruir una educación que sea inclusiva e intercultural. Desde esa perspectiva, atendemos a una población diversa que incluye a estudiantes de Beca 18 procedentes de distintas comunidades andinas.</p>
            </div>
            <div class="col-lg-4">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/xaUIkhx3pOg?si=ru1IsXC4bArzjNk8" title="EESP Pukllasunchis" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Programas de estudio --}}
<section class="py-5" style="background:#f8f9fa;" id="programas">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold" style="color:#1a3a6b;">Nuestros Programas de Estudios</h2>
            <p class="lead text-secondary mt-3">Nuestra finalidad es desarrollar un programa alternativo e interesante, con un enfoque inclusivo e intercultural, que contribuya a la formación de profesionales capaces de aportar al desarrollo de nuevos escenarios educativos.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm overflow-hidden">
                    <div style="height:8px; background:#c0392b;"></div>
                    <div class="card-body p-4">
                        <i class="bi bi-people-fill mb-3" style="font-size:2.5rem; color:#1a3a6b;"></i>
                        <h4 class="fw-bold mb-3">Educación Inicial</h4>
                        <p class="text-muted">Esta especialidad está dirigida a jóvenes, varones y mujeres que se interesan en los niños pequeños y que tienen disposición para generar espacios de juego, creatividad e imaginación donde los niños desplieguen sus facultades y habilidades para aprender a convivir, y su sensibilidad para vivenciar la naturaleza sintiéndose parte de un colectivo.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm overflow-hidden">
                    <div style="height:8px; background:#1a6b3c;"></div>
                    <div class="card-body p-4">
                        <i class="bi bi-translate mb-3" style="font-size:2.5rem; color:#1a3a6b;"></i>
                        <h4 class="fw-bold mb-3">Educación Primaria EIB</h4>
                        <p class="text-muted">Esta especialidad está dirigida a jóvenes varones y mujeres, con conocimiento de la lengua quechua, interesados y con disposición para proponer alternativas educativas que respondan a la realidad social y lingüística de las poblaciones quechuas en distintos contextos, afirmando el valor de las culturas tradicionales y potenciando la diversidad.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm overflow-hidden">
                    <div style="height:8px; background:#6b1a1a;"></div>
                    <div class="card-body p-4">
                        <i class="bi bi-book-fill mb-3" style="font-size:2.5rem; color:#1a3a6b;"></i>
                        <h4 class="fw-bold mb-3">Educación Primaria</h4>
                        <p class="text-muted">Esta especialidad está dirigida a jóvenes varones y mujeres, interesados y con disposición para proponer alternativas educativas que respondan a la realidad social y lingüística de los niños y niñas de primaria, y para desarrollar estrategias y experiencias que afirmen la identidad cultural y aspiren al desarrollo de valores para una ciudadanía intercultural.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ¿Qué es una EES? --}}
<section class="py-5" id="escuela">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div style="height:360px; background:linear-gradient(135deg,#1a3a6b20,#1a3a6b10); border-radius:16px; display:flex; align-items:center; justify-content:center;">
                    <span class="text-muted">Foto institucional EESP</span>
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="fw-bold mb-2" style="color:#1a3a6b;">Qué significa ser</h3>
                <h5 class="text-muted mb-4">Escuela de Educación Superior</h5>
                <p class="text-secondary">Las escuelas de Educación Superior (EES) son instituciones educativas de la segunda etapa del sistema educativo nacional, que forman personas especializadas en los campos de la docencia, la ciencia y la tecnología, con énfasis en una formación aplicada.</p>
                <ul class="text-secondary mt-3 ps-3">
                    <li class="mb-2">Formación teórica altamente especializada, con aplicación de técnicas para resolver problemas o proponer nuevas soluciones. Desarrollan investigación y proyectos de innovación.</li>
                    <li class="mb-2">Estudios de especialización, de perfeccionamiento profesional en áreas específicas y de otros programas de formación continua.</li>
                    <li class="mb-2">Estudios de segunda especialidad y de profesionalización docente, según corresponda.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- Proyectos --}}
<section class="py-5" style="background:#f8f9fa;">
    <div class="container py-4">
        <h2 class="fw-bold text-center mb-5" style="color:#1a3a6b;">Proyectos</h2>
        <div class="row g-4">
            @php
            $proyectos = [
                ['num' => '1', 'titulo' => 'Taller de cerámica', 'texto' => 'En el taller de cerámica tratamos temas de territorialidad, tomando como referencia la cuatripartición del territorio andino.'],
                ['num' => '2', 'titulo' => 'Taller de radio', 'texto' => 'El taller radio contribuye a que los estudiantes descubran las múltiples intersecciones de sus identidades, su relación con el territorio y sus comunidades de origen.'],
                ['num' => '3', 'titulo' => 'Explorando nuestra identidad', 'texto' => 'Nuestras raíces son importantes, revelan nuestra identidad. Los estudiantes de I Ciclo se identificaron con sus comunidades de origen y se mostraron ante el mundo.'],
                ['num' => '4', 'titulo' => 'Currículo y educación intercultural', 'texto' => 'Visibilizar el potencial de la diversidad de nuestro país hará que enriquezcamos nuestras miradas, nuestros contextos y nuestra práctica docente.'],
                ['num' => '5', 'titulo' => 'Fortaleciendo nuestra lengua, nuestra cultura', 'texto' => 'El quechua como vehículo de saberes y como expresión de identidad cultural es fundamental en nuestra formación docente.'],
                ['num' => '6', 'titulo' => 'El estudiante en el centro', 'texto' => 'El curso coloca a los estudiantes en el centro del proceso educativo para potenciar la afirmación de sus identidades y su práctica pedagógica.'],
            ];
            @endphp
            @foreach($proyectos as $p)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm p-4">
                    <div class="card-body">
                        <span class="badge mb-3" style="background:#1a3a6b; font-size:1rem;">{{ $p['num'] }}</span>
                        <h5 class="fw-bold mb-2">{{ $p['titulo'] }}</h5>
                        <p class="text-muted">{{ $p['texto'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Web institucional --}}
<section class="py-5">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h3 class="fw-bold mb-4" style="color:#1a3a6b;">Visítanos en nuestra página web</h3>
                <p class="text-secondary">La Escuela de Educación Superior Pedagógica Privada Pukllasunchis es un espacio de reflexión, debate y formación académica, donde estudiantes de diversa procedencia y experiencia cultural, comparten y adquieren capacidades para proponer estrategias pedagógicas que favorezcan la construcción de una ciudadanía intercultural.</p>
                <a href="https://www.eesppukllasunchis.edu.pe/" target="_blank" class="btn btn-primary mt-4 px-4">
                    <i class="bi bi-box-arrow-up-right me-2"></i>Ir al sitio oficial
                </a>
            </div>
            <div class="col-lg-6">
                <div class="d-flex gap-3 flex-wrap justify-content-center">
                    <a href="https://www.facebook.com/eesp.pukllasunchis/" target="_blank" class="btn btn-outline-primary btn-lg">
                        <i class="bi bi-facebook me-2"></i>Facebook
                    </a>
                    <a href="https://www.instagram.com/eesp.pukllasunchis/" target="_blank" class="btn btn-outline-danger btn-lg">
                        <i class="bi bi-instagram me-2"></i>Instagram
                    </a>
                    <a href="https://youtube.com/@eesp.pukllasunchis" target="_blank" class="btn btn-outline-danger btn-lg">
                        <i class="bi bi-youtube me-2"></i>YouTube
                    </a>
                    <a href="https://www.tiktok.com/@eesp.pukllasunchis" target="_blank" class="btn btn-outline-dark btn-lg">
                        <i class="bi bi-tiktok me-2"></i>TikTok
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
