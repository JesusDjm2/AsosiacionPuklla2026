<x-app-layout>
    <x-slot name="header">
        <div>
            <a href="{{ route('admin.users.index') }}" class="small text-decoration-none text-muted">&larr; Volver al listado</a>
            <h1 class="h4 mt-2 mb-1 text-secondary">Nuevo usuario</h1>
            <p class="small text-muted mb-0">Asigne nombre, correo, contraseña y rol.</p>
        </div>
    </x-slot>

    <div class="container-fluid px-0">
        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-body p-4 p-lg-5">
                <form method="post" action="{{ route('admin.users.store') }}">
                    @csrf
                    @include('admin.users._form', ['roles' => $roles])
                    <div class="mt-4 d-flex flex-wrap gap-2">
                        <button type="submit" class="btn btn-danger rounded-pill px-4">Guardar</button>
                        <a href="{{ route('admin.users.index') }}" class="btn btn-outline-secondary rounded-pill px-4">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
