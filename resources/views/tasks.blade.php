<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    @foreach ($tasks as $task)
        <div>{{ $task }}</div>
    @endforeach
</x-layout>
