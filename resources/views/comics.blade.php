

@extends('layouts.base')

@section('pageTitle', 'comics')

@section('content')
<section id=products>
    <div class="container">
       
        @foreach ($generi as $genere )
        <div class="product">
        <img src="{{$genere['thumb']}}" alt="">
        <h4>{{$genere['title']}}</h4>
          </div>
        @endforeach
  

</div>

<div class="bottone">
    <a href="#" class="btn"> LOAD MORE </a>
  </div>



</section>
   

@endsection