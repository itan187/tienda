@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
                 <div class="col-md-6 ">
                    <div class="panel panel-default">

                        <div class="panel-heading">{{ $product -> name }}</div>
                        <div class="panel-body">
                            <img src="{{$product->image}}"  style="height: 400px">
                        </div>
                        <div class="panel-body">
                            {{$product->description}}
                        </div>
                        <div class="panel-body" style="font-weight:bold; text-align: right">
                            {{number_format($product->price,2)}}€
                            <a href="{{ route('cart-add', $product->slug) }}" class="btn btn-warning">Añadir al carrito</a>
                            <a href="/" class="btn btn-primary">ir al inicio</a>
                        </div>
                    </div>
                </div>

        </div>
    </div>
@endsection