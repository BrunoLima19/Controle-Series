<x-layout title="Temporadas">
    <ul class="list-group">
        @foreach ($seasons as $season)
        <li class="list-group-item d-flex justify-content-between align-items-center">

            <!-- Nome da série -->
                Temporada {{ $season->number }} 
            

            <span class="badge bg-secondary">
                {{ $season->episodes->count() }}
        </li>
        @endforeach
    </ul>
</x-layout>