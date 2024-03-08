@extends('layouts.app')

@section('content')
    <div class="space-y-2">
        @if (is_null($notes))
            <div class="text-center">
                <h1 class="text-lg font-semibold leading-tight text-gray-800">No notes found</h1>
                <p class="mt-1 text-sm text-gray-600">Let's create your first note to send.</p>
                <x-primary-buttonclass="mt-6" href="{{ route('notes.create') }}" wire:navigate>Create
                a Note</x-primary-buttonclass=>
            </div>
        @else
            <div class="flex justify-end">
                <x-primary-button class="mt-6 mb-4" href="{{ route('notes.create') }}" wire:navigate>Create
                    a Note</x-primary-button>
            </div>
            <div class="grid grid-cols-2 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                @foreach ($notes as $note)
                    <div class="flex justify-between">
                        <div>
                            <a href="{{ route('notes.edit', $note) }}"
                                class="text-xl font bold hover:underline hover:text-blue-600">
                                {{ $note->title }}
                            </a>
                            <p class="text-xs mt-2 text-gray-600">
                                {{ Str::limit($note->body, 100) }}
                            </p>
                        </div>
                        <div class="text-xs text-gray-500">
                            {{ \Carbon\Carbon::parse($note->send_date)->format('d M Y') }}
                        </div>
                    </div>
                    <div class="flex items-end justify-between mt-4 space-x-1">
                        <p class="text-xs">
                            Recipient:
                            <span class="font-semibold">
                                {{ $note->recipient }}
                            </span>
                        </p>
                        <div>
                            {{-- Passing all data about note --}}
                            <x-primary-button icon="eye" href="{{ route('notes.edit', $note) }}"></x-primary-button>
                            {{-- Delete note --}}
                            <x-primary-button wire:click="deleteNote('{{ $note->id }}')"></x-primary-button>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
