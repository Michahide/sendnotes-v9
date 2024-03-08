@extends('layouts.app')

@section('content')
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Edit Note') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-2xl sm:px-6 lg:px-8">
            <form wire:submit='saveNote' class="space-y-4">
                <x-text-input wire:model="noteTitle" type="text" label="Note Title" placeholder="Greetings!" />
                <textarea wire:model="noteBody" label="Body" placeholder="Tell a story or something to your friend" />
                <x-text-input icon="user" wire:model="noteRecipient" type="text" label="Recipient"
                    placeholder="Your friend email" />
                <x-text-input icon="calendar" wire:model="noteSendDate" type="date" label="Send Date" />
                <x-checkbox wire:model="noteIsPublished" label="Note Published" />
                <x-primary-button wire:click="saveNote">Save Note</x-primary-button>
                <x-secondary-button icon="arrow-left" href="{{ route('notes.index') }}" wire:navigate secondary>
                    Back to Notes
                </x-secondary-button>
                <x-action-message on="note-saved" />
                <x-errors />
            </form>
        </div>
    </div>
@endsection
