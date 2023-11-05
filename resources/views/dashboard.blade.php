<x-app-layout>
    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
        Most Viewed Games
    </h4>
    <div class="grid gap-6 mb-8 md:grid-cols-4">
        @foreach($data as $item)
            <x-game-card>
                <x-slot name="title">
                    {{$item->title}}@if($item->subtitle) - {{$item->subtitle}}@endif
                </x-slot>
                <x-slot name="game_id">{{ $item->game_id }}</x-slot>
            </x-game-card>
        @endforeach
    </div>
</x-app-layout>
