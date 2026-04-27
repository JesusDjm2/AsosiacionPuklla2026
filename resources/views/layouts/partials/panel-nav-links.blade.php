@php
    /** @var \App\Models\User $u */
    $u = auth()->user();
@endphp

<a href="{{ route('dashboard') }}"
    class="nav-side-link d-block rounded px-3 py-2 text-decoration-none small {{ request()->routeIs('dashboard') ? 'bg-danger text-white fw-semibold' : 'text-white-50' }}">
    <i class="bi bi-speedometer2 me-2"></i>Inicio
</a>

@if ($u->isAdmin())
    <a href="{{ route('admin.users.index') }}"
        class="nav-side-link d-block rounded px-3 py-2 text-decoration-none small mt-1 {{ request()->routeIs('admin.users.*') ? 'bg-danger text-white fw-semibold' : 'text-white-50' }}">
        <i class="bi bi-people me-2"></i>Usuarios
    </a>
@endif

<div class="text-uppercase text-white-50 px-3 mt-4 mb-2" style="font-size: 0.65rem; letter-spacing: 0.12em;">Áreas de gestión</div>

@if ($u->canAccessRoleArea('colegio'))
    <a href="{{ route('panel.colegio') }}"
        class="nav-side-link d-block rounded px-3 py-2 text-decoration-none small {{ request()->routeIs('panel.colegio') ? 'bg-danger text-white fw-semibold' : 'text-white-50' }}">
        <i class="bi bi-mortarboard me-2"></i>Colegio
    </a>
@endif
@if ($u->canAccessRoleArea('escuela'))
    <a href="{{ route('panel.escuela') }}"
        class="nav-side-link d-block rounded px-3 py-2 text-decoration-none small mt-1 {{ request()->routeIs('panel.escuela') ? 'bg-danger text-white fw-semibold' : 'text-white-50' }}">
        <i class="bi bi-journal-bookmark me-2"></i>Escuela superior
    </a>
@endif
@if ($u->canAccessRoleArea('sipas_wayna'))
    <a href="{{ route('panel.sipas-wayna') }}"
        class="nav-side-link d-block rounded px-3 py-2 text-decoration-none small mt-1 {{ request()->routeIs('panel.sipas-wayna') ? 'bg-danger text-white fw-semibold' : 'text-white-50' }}">
        <i class="bi bi-stars me-2"></i>Sipas Wayna
    </a>
@endif
@if ($u->canAccessRoleArea('radio'))
    <a href="{{ route('panel.radio') }}"
        class="nav-side-link d-block rounded px-3 py-2 text-decoration-none small mt-1 {{ request()->routeIs('panel.radio') ? 'bg-danger text-white fw-semibold' : 'text-white-50' }}">
        <i class="bi bi-broadcast me-2"></i>Radio
    </a>
@endif
@if ($u->canAccessRoleArea('kawsay'))
    <a href="{{ route('panel.kawsay') }}"
        class="nav-side-link d-block rounded px-3 py-2 text-decoration-none small mt-1 {{ request()->routeIs('panel.kawsay') ? 'bg-danger text-white fw-semibold' : 'text-white-50' }}">
        <i class="bi bi-globe2 me-2"></i>Kawsay
    </a>
@endif
