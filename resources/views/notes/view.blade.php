@extends('layouts.app')

@section('content')
    <div class="flex justify-between">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ $note->title }}
        </h2>
    </div>
    <p class="mt-4 mb-12">{{ $note->body }}</p>
    <div class="flex items-center justify-end mt-12">
        <h3 class="mr-10 text-sm">Sent from {{ $user->name }}</h3>
        <livewire:heartreact :note="$note" class="ml-4" />
    </div>
@endsection
