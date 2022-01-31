@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/5 py-4">
        <div class="text-center">
            <h1 class=" text-5xl bold"> Essen </h1>
        </div>
    </div>
    <div class="m-auto w-1/2 pt-10 text-center flex justify-evenly">
        <a href="/essen" class="border-b-2 pb-2 border-dotted italic text-gray-500">
            Liste anzeigen &rarr;
        </a>
        <a href="/mahlzeit" class="border-b-2 pb-2 border-dotted italic text-gray-500">
            Mahlzeit zusammenstellen &rarr;
        </a>
    </div>
@endsection
