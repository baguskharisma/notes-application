<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    @php
        $notes = App\Models\Note::all()->where('user_id', Auth::user()->id);
    @endphp

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="p-6 text-gray-900">
                <livewire:notes.show-notes lazy />
            </div>
        </div>
    </div>
</x-app-layout>