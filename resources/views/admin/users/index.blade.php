<x-app-layout>
    <x-slot name="header">
        <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-md-between gap-3">
            <div>
                <h1 class="h4 mb-1 text-secondary">Usuarios</h1>
                <p class="small text-muted mb-0">Gestión de cuentas y roles del panel.</p>
            </div>
            <a href="{{ route('admin.users.create') }}" class="btn btn-danger rounded-pill px-4 align-self-start align-self-md-center">Nuevo usuario</a>
        </div>
    </x-slot>

    <div class="container-fluid px-0">
        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
            </div>
        @endif

        @if ($errors->has('delete'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $errors->first('delete') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
            </div>
        @endif

        <div class="card border-0 shadow-sm rounded-3 overflow-hidden">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="ps-4">Nombre</th>
                            <th>Correo</th>
                            <th>Rol</th>
                            <th class="text-end pe-4">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <td class="ps-4">{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td><span class="badge text-bg-secondary">{{ $user->role->label() }}</span></td>
                                <td class="text-end pe-4">
                                    <a href="{{ route('admin.users.edit', $user) }}"
                                        class="btn btn-sm btn-outline-secondary">Editar</a>
                                    @if (! $user->is(request()->user()))
                                        <form action="{{ route('admin.users.destroy', $user) }}" method="post"
                                            class="d-inline"
                                            onsubmit="return confirm('¿Eliminar a {{ $user->name }}?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">Eliminar</button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted py-5">No hay usuarios.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-4 d-flex justify-content-center">
            {{ $users->links() }}
        </div>
    </div>
</x-app-layout>
