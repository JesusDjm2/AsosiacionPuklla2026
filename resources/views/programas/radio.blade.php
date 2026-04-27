@extends('layouts.app')

@section('title', 'Radio Pukllasunchis — ')

@section('content')

{{-- Banner --}}
<section class="page-banner" style="background: linear-gradient(135deg, #1a4a6b 0%, #0e2a40 100%); padding: 6rem 0 4rem;">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-md-3 text-center">
                <img src="{{ asset('img/logos/Radio-Puklla.png') }}" alt="Radio Pukllasunchis" style="height:120px; object-fit:contain;" onerror="this.style.display='none'">
            </div>
            <div class="col-md-9 text-white">
                <h1 class="fw-bold display-5">Radio con Niñas y Niños Andinos</h1>
                <p class="lead opacity-85">Voz, cultura y patrimonio vivo desde las comunidades</p>
            </div>
        </div>
    </div>
</section>

{{-- Presentación --}}
<section class="py-5">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-8">
                <p class="fs-5 text-secondary">Proyectos de aprendizaje en el aula unen niñez y comunidad quechua desde su cosmovisión y corazón para producir programas radiales sobre su vida como expresión del patrimonio vivo. Se difunden por radioemisoras regionales y redes sociales, desarrollando competencias para la ciudadanía global.</p>
                <a href="https://www.facebook.com/Sisichakunaq" target="_blank" class="btn btn-primary mt-4 px-4">
                    <i class="bi bi-broadcast me-2"></i>Escúchanos en Facebook
                </a>
            </div>
            <div class="col-lg-4">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/NtcKGRUgnrs?si=Nk6CNBq8_qOxXp_L" title="Radio en 5 minutos" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <p class="text-center text-muted small mt-2">Nuestro trabajo en 5 minutos</p>
            </div>
        </div>
    </div>
</section>

{{-- Nuestra propuesta --}}
<section class="py-5" style="background:#f8f9fa;" id="propuesta">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold" style="color:#1a4a6b;">Nuestra propuesta</h2>
            <p class="lead text-secondary mt-3">El programa alcanza un ideal formativo al trabajar con los tres actores de la educación:<br>estudiantes, docentes, madres y padres de familia.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm p-4">
                    <div class="card-body">
                        <i class="bi bi-mic-fill mb-3" style="font-size:2rem; color:#1a4a6b;"></i>
                        <h5 class="fw-bold mb-3">Niños producen sus programas</h5>
                        <p class="text-muted">Diariamente, dentro del horario escolar, se escuchan "en vivo" dos tipos de programas radiales: los que diseñan y producen los mismos niños y niñas, y los que se elaboran en nuestro centro de comunicación institucional. Una vez emitido el programa, este se convierte en un recurso pedagógico en el aula.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm p-4">
                    <div class="card-body">
                        <i class="bi bi-people-fill mb-3" style="font-size:2rem; color:#1a4a6b;"></i>
                        <h5 class="fw-bold mb-3">Radio en comunidades rurales</h5>
                        <p class="text-muted">Atiende la demanda de comunidades que ven la propuesta de "radio en la escuela" como una herramienta potente para visibilizar sus conocimientos, cosmovisión, su memoria y darle un significado propio a la noción de territorio, en diálogo permanente con la modernidad y la educación intercultural.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm p-4">
                    <div class="card-body">
                        <i class="bi bi-mortarboard-fill mb-3" style="font-size:2rem; color:#1a4a6b;"></i>
                        <h5 class="fw-bold mb-3">Formación docente in situ</h5>
                        <p class="text-muted">A través de talleres que llegan directamente a las escuelas y con un vínculo cercano y dinámico con nuestro equipo, los y las docentes hacen suyas las posibilidades pedagógicas de la radio, las diversifican y acceden a material virtual y físico.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Premio --}}
<section class="py-5" style="background:#1a4a6b;">
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center text-white">
                <i class="bi bi-trophy-fill mb-3" style="font-size:2.5rem; color:#f39c12;"></i>
                <h3 class="fw-bold mb-3">Programa premiado</h3>
                <p class="opacity-75 lead">Nuestro programa ha logrado reconocimientos importantes de la UNESCO (2005, México), del Consejo Consultivo de Radio y Televisión (2014, Perú), de la Asociación de Comunicadores Sociales Calandria (2008, Perú) y de mSchools (2023, España).</p>
            </div>
        </div>
    </div>
</section>

{{-- Redes sociales --}}
<section class="py-5">
    <div class="container py-4">
        <h3 class="fw-bold text-center mb-5" style="color:#1a4a6b;">Síguenos y escúchanos</h3>
        <div class="row justify-content-center g-4">
            <div class="col-md-3 col-6 text-center">
                <a href="https://www.facebook.com/Sisichakunaq" target="_blank" class="text-decoration-none">
                    <div class="p-4 rounded-3" style="background:#f8f9fa;">
                        <i class="bi bi-facebook" style="font-size:2.5rem; color:#1877F2;"></i>
                        <p class="fw-semibold mt-2 mb-0 text-dark">Facebook</p>
                        <small class="text-muted">Sisichakunaq</small>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-6 text-center">
                <a href="https://www.instagram.com/sisichakunaq/" target="_blank" class="text-decoration-none">
                    <div class="p-4 rounded-3" style="background:#f8f9fa;">
                        <i class="bi bi-instagram" style="font-size:2.5rem; color:#E1306C;"></i>
                        <p class="fw-semibold mt-2 mb-0 text-dark">Instagram</p>
                        <small class="text-muted">@sisichakunaq</small>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-6 text-center">
                <a href="https://www.youtube.com/@AsociacionPukllasuchis/videos" target="_blank" class="text-decoration-none">
                    <div class="p-4 rounded-3" style="background:#f8f9fa;">
                        <i class="bi bi-youtube" style="font-size:2.5rem; color:#FF0000;"></i>
                        <p class="fw-semibold mt-2 mb-0 text-dark">YouTube</p>
                        <small class="text-muted">Pukllasunchis</small>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
