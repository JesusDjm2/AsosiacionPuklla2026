@extends('layouts.app')

@section('title', 'Contacto — ')

@section('content')

{{-- Banner --}}
<section class="page-banner" style="background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%); padding: 6rem 0 4rem;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-white">
                <h1 class="fw-bold display-5">Contacto</h1>
                <p class="lead opacity-75">Estamos para escucharte</p>
            </div>
        </div>
    </div>
</section>

{{-- Contacto --}}
<section class="py-5">
    <div class="container py-4">
        <div class="row g-5 align-items-start">

            {{-- Info de contacto --}}
            <div class="col-lg-6">
                <h2 class="fw-bold mb-5" style="color:#c0392b;">Información de Contacto</h2>

                <div class="d-flex align-items-start mb-4">
                    <div class="flex-shrink-0 me-4">
                        <div class="rounded-circle d-flex align-items-center justify-content-center" style="width:52px; height:52px; background:#c0392b;">
                            <i class="bi bi-geo-alt-fill text-white fs-5"></i>
                        </div>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Oficina principal</h6>
                        <p class="text-secondary mb-0">Siete Diablitos 222, San Blas, Cusco.</p>
                    </div>
                </div>

                <div class="d-flex align-items-start mb-4">
                    <div class="flex-shrink-0 me-4">
                        <div class="rounded-circle d-flex align-items-center justify-content-center" style="width:52px; height:52px; background:#c0392b;">
                            <i class="bi bi-telephone-fill text-white fs-5"></i>
                        </div>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Llámenos</h6>
                        <p class="text-secondary mb-0"><a href="tel:+5184385099" class="text-secondary text-decoration-none">+51 (84) 385 099</a></p>
                    </div>
                </div>

                <div class="d-flex align-items-start mb-4">
                    <div class="flex-shrink-0 me-4">
                        <div class="rounded-circle d-flex align-items-center justify-content-center" style="width:52px; height:52px; background:#c0392b;">
                            <i class="bi bi-envelope-fill text-white fs-5"></i>
                        </div>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Escríbanos</h6>
                        <p class="text-secondary mb-0"><a href="mailto:info@pukllasunchis.org" class="text-secondary text-decoration-none">info@pukllasunchis.org</a></p>
                    </div>
                </div>

                <div class="d-flex align-items-start mb-4">
                    <div class="flex-shrink-0 me-4">
                        <div class="rounded-circle d-flex align-items-center justify-content-center" style="width:52px; height:52px; background:#25D366;">
                            <i class="bi bi-whatsapp text-white fs-5"></i>
                        </div>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">WhatsApp</h6>
                        <p class="text-secondary mb-0"><a href="https://wa.me/51984261431" target="_blank" class="text-secondary text-decoration-none">+51 984 261 431</a></p>
                    </div>
                </div>

                {{-- Redes sociales --}}
                <div class="mt-5">
                    <h6 class="fw-bold mb-3">Síguenos en redes</h6>
                    <a href="https://www.youtube.com/@AsociacionPukllasuchis/videos" target="_blank" class="btn btn-outline-danger me-2 mb-2">
                        <i class="bi bi-youtube me-1"></i> YouTube
                    </a>
                    <a href="https://www.facebook.com/colegio.pukllasunchis" target="_blank" class="btn btn-outline-primary me-2 mb-2">
                        <i class="bi bi-facebook me-1"></i> Facebook
                    </a>
                </div>
            </div>

            {{-- Mapa --}}
            <div class="col-lg-6">
                <div class="rounded-3 overflow-hidden shadow-sm">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124130.99947840966!2d-72.02182307654637!3d-13.529838858143403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916dd5d826598431%3A0x2aa996cc2318315d!2sCusco!5e0!3m2!1ses-419!2spe!4v1697297492470!5m2!1ses-419!2spe"
                        width="100%" height="420" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
