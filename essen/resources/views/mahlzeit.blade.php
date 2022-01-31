@extends('layouts.app')

@section('content')

    <h1 class="text-center text-5xl">Mahlzeiten<sup>&#9432;</sup></h1>

    <p class="text-center text-3xl"> Heute gibt es {{ $fleisch->name }} mit {{ $saettigung->name }} und {{ $beilage->name }}</p>

@endsection
