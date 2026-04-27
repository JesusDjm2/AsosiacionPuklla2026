@php
    /** @var \App\Enums\UserRole[] $roles */
    $editing = isset($user);
@endphp

<div class="row g-3">
    <div class="col-md-6">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
            value="{{ old('name', $user->name ?? '') }}" required maxlength="255">
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="email" class="form-label">Correo</label>
        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror"
            value="{{ old('email', $user->email ?? '') }}" required maxlength="255">
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="password" class="form-label">Contraseña @if ($editing)
                <span class="text-muted fw-normal">(opcional)</span>
            @endif
        </label>
        <input type="password" name="password" id="password"
            class="form-control @error('password') is-invalid @enderror" {{ $editing ? '' : 'required' }}
            autocomplete="new-password">
        @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="password_confirmation" class="form-label">Confirmar contraseña</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"
            {{ $editing ? '' : 'required' }} autocomplete="new-password">
    </div>
    <div class="col-12 col-md-6">
        <label for="role" class="form-label">Rol</label>
        <select name="role" id="role" class="form-select @error('role') is-invalid @enderror" required>
            @foreach ($roles as $roleOption)
                <option value="{{ $roleOption->value }}" @selected(old('role', $editing ? $user->role->value : '') === $roleOption->value)>
                    {{ $roleOption->label() }}
                </option>
            @endforeach
        </select>
        @error('role')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>
