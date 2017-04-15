@extends('layouts.master')

@section('title')
  Index - Products
@endsection

@section('content')
  @if (Session::has('success'))
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="alert alert-success">
          {{Session::get('success')}}
        </div>
      </div>
    </div>
  @endif
  @foreach($products->chunk(3) as $productChunk)
    <div class="row">
      @foreach($productChunk as $product)
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="{{url($product->imagePath)}}" alt="..." class="img-responsive">
            <div class="caption">
              <h3>{{$product->title}}</h3>
              <p class="description">
                {{$product->description}}
              </p>
              <div class="clearfix">
                <div class="price pull-left">
                  $ {{$product->price}}
                </div>

              </div>
              <div class="clearfix">
                <a href="{{route('product.addToCart' , $product->id)}}" class="btn btn-success pull-right" role="button"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</a>
                <a href="{{route('products.show' , $product->id)}}" class="btn btn-info pull-left" role="button"><i class="fa fa-eye" aria-hidden="true"></i> View detail</a>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  @endforeach
@endsection
