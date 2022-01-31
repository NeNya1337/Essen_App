@extends('layouts.app')

@section('content')

    <div class="m-auto w-4/5 py-4">
        <div class="text-center">
            <h1 class=" text-5xl bold"> Essen </h1>
        </div>
    </div>
    <div class="m-auto w-1/2 pt-10 text-center flex justify-evenly">
        <a href="/" class="border-b-2 pb-2 border-dotted italic text-gray-500">
            &larr; Zurück zur Übersicht
        </a>
        <a href="/essen/create" class="border-b-2 pb-2 border-dotted italic text-gray-500">
            Neues Essen hinzufügen &plus;
        </a>
    </div>
    <div class="flex justify-items-center text-center">
        <div class="flex-grow">
            <h2>Hauptspeise</h2>
            @foreach($fleisch as $zutat)
                <p>{{ $zutat->name }}<a href="/essen/{{ $zutat->id }}" class="border-b-2 pb-2 border-dotted italic text-blue-600"><sup>&#9432;</sup></a></p>
            @endforeach
        </div>
        <div class="flex-grow">
            <h2>Beilage</h2>
            @foreach($beilage as $zutat)
                <p>{{ $zutat->name }}<a href="/essen/{{ $zutat->id }}" class="border-b-2 pb-2 border-dotted italic text-blue-600"><sup>&#9432;</sup></a></p>
            @endforeach
        </div>
        <div class="flex-grow">
            <h2>Sättigung</h2>
            @foreach($saettigung as $zutat)
                <p>{{ $zutat->name }}<a href="/essen/{{ $zutat->id }}" class="border-b-2 pb-2 border-dotted italic text-blue-600"><sup>&#9432;</sup></a></p>
            @endforeach
        </div>
    </div>
@endsection
