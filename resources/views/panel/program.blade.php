<x-app-layout>
    <x-slot name="header">
        <h1 class="h4 mb-0 text-secondary">{{ $title }}</h1>
    </x-slot>

    <div class="rounded-3 border bg-white p-4 shadow-sm">
        <p class="text-muted mb-0">
            {{ $description ?? 'Aquí podrás gestionar el contenido de este programa. Los formularios y listados (CRUD) se irán añadiendo en esta sección.' }}
        </p>
    </div>
</x-app-layout>
