@extends('layouts.app')

@section('content')

    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Neues Essen hinzufügen
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
                <label for="name" class="block">
                    Speise:
                </label>
                <input
                    class="mt-3 block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    type="text"
                    name="name"
                    placeholder="Essen...">
                <label for="essen_typen_id">
                    Art:
                </label>
                <select
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    name="essen_typen_id">
                    @foreach($essenTypen as $essenTyp)
                        <option value="{{ $essenTyp->id }}">{{ $essenTyp->name }}</option>
                    @endforeach
                </select>
                <label for="kalorien">
                    Brennwert:
                </label>
                <input
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    type="text"
                    name="kalorien"
                    placeholder="kcal...">
                <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold">
                    Submit
                </button>
            </div>
        </form>
    </div>
@endsection
