<x-app-layout>
    <x-slot name="header">
        <h1 class="h4 mb-0 text-secondary">Inicio del panel</h1>
    </x-slot>

    <div class="row g-3 g-lg-4">
        @if (auth()->user()->isAdmin())
            <div class="col-md-6 col-xl-4">
                <a href="{{ route('admin.users.index') }}" class="text-decoration-none">
                    <div class="card h-100 border-0 shadow-sm rounded-3 card-hover-rise">
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-3">
                                <span class="rounded-3 bg-danger bg-opacity-10 p-3 text-danger"><i
                                        class="bi bi-people fs-4"></i></span>
                                <div>
                                    <h2 class="h6 mb-1 text-dark">Usuarios</h2>
                                    <p class="small text-muted mb-0">Cuentas, roles y accesos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endif

        @foreach ([
            ['key' => 'colegio', 'route' => 'panel.colegio', 'icon' => 'bi-mortarboard', 'label' => 'Colegio'],
            ['key' => 'escuela', 'route' => 'panel.escuela', 'icon' => 'bi-journal-bookmark', 'label' => 'Escuela superior'],
            ['key' => 'sipas_wayna', 'route' => 'panel.sipas-wayna', 'icon' => 'bi-stars', 'label' => 'Sipas Wayna'],
            ['key' => 'radio', 'route' => 'panel.radio', 'icon' => 'bi-broadcast', 'label' => 'Radio'],
            ['key' => 'kawsay', 'route' => 'panel.kawsay', 'icon' => 'bi-globe2', 'label' => 'Kawsay'],
        ] as $item)
            @if (auth()->user()->canAccessRoleArea($item['key']))
                <div class="col-md-6 col-xl-4">
                    <a href="{{ route($item['route']) }}" class="text-decoration-none">
                        <div class="card h-100 border-0 shadow-sm rounded-3 card-hover-rise">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-3">
                                    <span class="rounded-3 bg-danger bg-opacity-10 p-3 text-danger"><i
                                            class="bi {{ $item['icon'] }} fs-4"></i></span>
                                    <div>
                                        <h2 class="h6 mb-1 text-dark">{{ $item['label'] }}</h2>
                                        <p class="small text-muted mb-0">Ir al área de gestión.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endif
        @endforeach
    </div>

    @push('scripts')
        <style>
            .card-hover-rise {
                transition: transform 0.15s ease, box-shadow 0.15s ease;
            }

            .card-hover-rise:hover {
                transform: translateY(-2px);
                box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.08) !important;
            }
        </style>
    @endpush
</x-app-layout>
