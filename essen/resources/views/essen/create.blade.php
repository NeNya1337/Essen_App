@extends('layouts.app')

@section('content')

    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Add new ship
            </h1>
        </div>
    </div>

    <div class="flex justify-center pt-20">
        <form action="/essen" method="POST">
            @csrf
            <div class="block">
                <a href="/essen" class="border-b-2 pb-1 border-dotted italic text-gray-600">
                    &larr; Cancel
                </a>
                <input
                    class="mt-3 block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    type="text"
                    name="name"
                    placeholder="Essen...">
                <input
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    type="text"
                    name="essen_typen_id"
                    placeholder="Typ...">
                <input
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    type="text"
                    name="kalorien"
                    placeholder="Kalorien...">
                <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold">
                    Submit
                </button>
            </div>
        </form>
    </div>
@endsection