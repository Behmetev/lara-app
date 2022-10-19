@extends('layouts.master')

@section('title', 'Главная')

@section('content')

    <h1>Все товары</h1>

    <div class="row">
        @foreach ($products as $item)
            @include('layouts.card', compact('item'))
        @endforeach
    </div>

@endsection
