<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Create a Note') }}
        </h2>
    </x-slot>

    @php
        $notes = App\Models\Note::all()->where('user_id', Auth::user()->id);
    @endphp

    <div class="py-12">
        <div class="mx-auto max-w-2xl sm:px-6 lg:px-8 space-y-4">
            <x-button icon="arrow-left" class="mb-8" href="{{ route('notes.index') }}">All Notes</x-button>
            <livewire:notes.create-note />
        </div>
    </div>
</x-app-layout>
