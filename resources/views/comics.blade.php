

@extends('layouts.base')

@section('pageTitle', 'comics')

@section('content')
<main>
    <div class="container">
        <div class="product">
            @foreach ($generi as $genere )
            <img src="{{$genere['thumb']}}" alt="">
            <h4>{{$genere['title']}}</h4>
                
            @endforeach
        </div>

    </div>
</main>




@endsection