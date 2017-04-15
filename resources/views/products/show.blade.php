@extends('layouts.master')

@section('content')
  <div class="row">
    <div class="col-xs-4 col-xs-offset-4">
      <img src="{{$product->imagePath}}" alt="" / class="img-responsive">
      <h1>{{$product->title}}</h1>
      <p>
        {{$product->description}}

      </p>
      <p>
        <i class="fa fa-money"> $ {{$product->price}}</i>
      </p>
      <a href="{{route('product.addToCart' , $product->id)}}" class="btn btn-success pull-center" role="button"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</a>
      <hr>
      <a href="{{route('products.index')}}" class="btn btn-warning">Back</a>
    </div>
  </div>
@endsection
