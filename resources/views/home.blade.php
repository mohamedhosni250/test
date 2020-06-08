<?php use Illuminate\Support\Str ; ?>
@extends('layouts.app')

@section('content')
<div class="container">
<h2> Product </h2>
    <div class="row justify-content-center">

        <div class="row">

        @foreach( $products as $product)
            <div class="col-md-3">
                <div class="card  ">
                    <img class="card-img-top" src="{{ asset('/images/image.jpeg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">{{$product->name}}</h4>
                        <p class="card-text">{{$product->description}}</p>
                    </div>
                    <div class="card-body">
                        <a href="#" class="card-link">Add To Card</a>

                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
@endsection
