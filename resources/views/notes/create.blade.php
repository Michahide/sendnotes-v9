@extends('layouts.app')

@section('content')
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Create a Note') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-2xl sm:px-6 lg:px-8">
            <x-primary-button href="{{ route('notes.index') }}" wire:navigate class="mb-6">Back to Notes</x-primary-button>
            @livewire('notes.create-note')
        </div>
    </div>
@endsection
