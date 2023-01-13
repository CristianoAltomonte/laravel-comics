@extends('layouts.app')

@section('page-title', 'Comics - singolo prodotto')

@section('main-content')

    <div class="card-container d-flex flex-column">


        <div>
            <img class="image-comic" src="{{ $prodotto_singolo['thumb'] }}" alt="Card image">

        </div>
        <div class="card-body">
            <span class="card-title text-dark fs-6">{{ $prodotto_singolo['series'] }}</span>
            <span class="card-title text-dark fs-6">{{ $prodotto_singolo['price'] }}</span>
            <span class="card-title text-dark fs-6">{{ $prodotto_singolo['type'] }}</span>
            <span class="card-title text-dark fs-6">{{ $prodotto_singolo['description'] }}</span>
        </div>


    </div>
@endsection
