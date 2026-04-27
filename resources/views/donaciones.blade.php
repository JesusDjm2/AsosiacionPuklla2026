@extends('layouts.app')

@section('title', 'Aporta — ')

@section('content')

{{-- Banner --}}
<section class="page-banner" style="background: linear-gradient(135deg, #c0392b 0%, #922b21 100%); padding: 6rem 0 4rem;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-white">
                <h1 class="fw-bold display-5">Ayúdanos a cumplir nuestros proyectos</h1>
                <p class="lead opacity-75">Tu aporte transforma vidas en el sur andino</p>
            </div>
        </div>
    </div>
</section>

{{-- Introducción --}}
<section class="py-5">
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="fw-bold mb-4" style="color:#c0392b;">¿Por qué aportar?</h2>
                <p class="fs-5 text-secondary">Ayúdanos a transformar la vida de las personas en situación de pobreza y vulnerabilidad, desarrollando juntos programas, proyectos e intervenciones que mejoren su calidad de vida. Puedes contribuir con nuestra labor a través de los siguientes canales de pago:</p>
            </div>
        </div>
    </div>
</section>

{{-- Formas de pago --}}
<section class="py-4" style="background:#f8f9fa;">
    <div class="container py-4">
        <div class="row g-4 justify-content-center">

            {{-- PayPal / Tarjeta --}}
            <div class="col-lg-5">
                <div class="card h-100 border-0 shadow p-4">
                    <div class="card-body text-center">
                        <div class="mb-4">
                            <i class="bi bi-credit-card-2-front" style="font-size:3rem; color:#c0392b;"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Tarjeta de crédito / débito</h4>
                        <p class="text-secondary mb-4">Realiza tu donación de forma segura a través de PayPal. No necesitas cuenta PayPal; puedes pagar directamente con tu tarjeta.</p>
                        <a href="https://paypal.me/pukllasunchis?country.x=PE&locale.x=es_XC" target="_blank" class="btn btn-danger btn-lg px-5 fw-semibold">
                            <i class="bi bi-paypal me-2"></i>Donar ahora
                        </a>
                    </div>
                </div>
            </div>

            {{-- Transferencia bancaria --}}
            <div class="col-lg-5">
                <div class="card h-100 border-0 shadow p-4">
                    <div class="card-body text-center">
                        <div class="mb-4">
                            <i class="bi bi-bank" style="font-size:3rem; color:#c0392b;"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Transferencia Bancaria</h4>
                        <p class="text-secondary mb-4">Si prefieres hacer una transferencia directa, aquí están los datos de nuestra cuenta bancaria en Scotiabank.</p>
                        <button class="btn btn-outline-danger btn-lg px-5 fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#datosBancarios">
                            <i class="bi bi-building me-2"></i>Ver datos bancarios
                        </button>
                    </div>
                    <div class="collapse mt-4" id="datosBancarios">
                        <div class="border rounded-3 p-4 text-start bg-light">
                            <dl class="row mb-0 small">
                                <dt class="col-sm-5 text-muted">Razón social</dt>
                                <dd class="col-sm-7 fw-semibold">ASOCIACIÓN PUKLLASUNCHIS</dd>

                                <dt class="col-sm-5 text-muted">RUC</dt>
                                <dd class="col-sm-7 fw-semibold">20116406218</dd>

                                <dt class="col-sm-5 text-muted">SUNARP</dt>
                                <dd class="col-sm-7 fw-semibold">Partida electrónica 11015278 SEDE X Cusco</dd>

                                <dt class="col-sm-5 text-muted">Banco</dt>
                                <dd class="col-sm-7 fw-semibold">SCOTIABANK SAA</dd>

                                <dt class="col-sm-5 text-muted">SWIFT</dt>
                                <dd class="col-sm-7 fw-semibold">BSUDPEPL</dd>

                                <dt class="col-sm-5 text-muted">Tipo de cuenta</dt>
                                <dd class="col-sm-7 fw-semibold">Libreta de ahorros</dd>

                                <dt class="col-sm-5 text-muted">N° de cuenta</dt>
                                <dd class="col-sm-7 fw-semibold">780 7322837</dd>

                                <dt class="col-sm-5 text-muted">Divisa</dt>
                                <dd class="col-sm-7 fw-semibold">Dólar estadounidense</dd>

                                <dt class="col-sm-5 text-muted">CCI</dt>
                                <dd class="col-sm-7 fw-semibold">00931821780732283773</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- Impacto --}}
<section class="py-5">
    <div class="container py-4">
        <h2 class="fw-bold text-center mb-5" style="color:#c0392b;">Tu aporte hace posible</h2>
        <div class="row g-4 text-center">
            <div class="col-md-3 col-6">
                <div class="p-4">
                    <i class="bi bi-mortarboard" style="font-size:2.5rem; color:#c0392b;"></i>
                    <h6 class="fw-bold mt-3">Becas educativas</h6>
                    <p class="text-muted small">Para estudiantes de escasos recursos</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="p-4">
                    <i class="bi bi-broadcast" style="font-size:2.5rem; color:#c0392b;"></i>
                    <h6 class="fw-bold mt-3">Radio comunitaria</h6>
                    <p class="text-muted small">Voz de las comunidades andinas</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="p-4">
                    <i class="bi bi-tree" style="font-size:2.5rem; color:#c0392b;"></i>
                    <h6 class="fw-bold mt-3">Proyectos ambientales</h6>
                    <p class="text-muted small">Cuidado del territorio y naturaleza</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="p-4">
                    <i class="bi bi-people" style="font-size:2.5rem; color:#c0392b;"></i>
                    <h6 class="fw-bold mt-3">Programas juveniles</h6>
                    <p class="text-muted small">Espacios para adolescentes y jóvenes</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Agradecimiento --}}
<section class="py-5" style="background:#1a1a2e;">
    <div class="container text-center text-white py-3">
        <h3 class="fw-bold mb-3">Gracias por confiar en Pukllasunchis</h3>
        <p class="opacity-75 mb-4">Son muchas las instituciones y personas que han confiado y confían en nosotros, aportando a nuestro crecimiento y al desarrollo de una educación alternativa de calidad en el Perú. A todas ellas y a la <a href="https://puklla.ch/" target="_blank" class="text-warning text-decoration-none fw-semibold">Stiftung Pukllasunchis</a>, nuestra profunda gratitud.</p>
        <a href="{{ route('contacto') }}" class="btn btn-outline-light px-5">Contáctanos</a>
    </div>
</section>

@endsection
