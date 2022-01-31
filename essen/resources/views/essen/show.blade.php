@extends('layouts.app')

@section('content')

    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Details anzeigen
            </h1>
        </div>
    </div>

    <div class="w-5/6 py-10">
        <div class="m-auto">
            <div class="float-right">
                <div class="inline-block">
                    <a href="/essen" class="border-b-2 pb-2 border-dotted italic text-gray-600">
                        &larr; Back
                    </a>
{{--                    <a href="/ships/{{ $ship->id }}/edit" class="border-b-2 pb-2 border-dotted italic text-green-500">--}}
{{--                        Edit &rarr;--}}
{{--                    </a>--}}
                </div>
{{--                <form action="/ships/{{ $ship->id }}" method="POST">--}}
{{--                    @csrf--}}
{{--                    @method('delete')--}}
{{--                    <button class="border-b-2 pb-2 border-dotted italic text-red-500">--}}
{{--                        Delete &rarr;--}}
{{--                    </button>--}}
{{--                </form>--}}
            </div>
            <span class="uppercase text-blue-500 font-bold text-xs italic">
                         cal.{{ $essen->kalorien }}
                    </span>
            <h2 class="text-gray-700 text-5xl">
                {{ $essen->name }}
            </h2>
            <p class="text-lg text-gray-700 py-6">
                {{ $typ->name }}
            </p>
            <hr class="mt-4 mb-8">
        </div>
    </div>
@endsection
