@extends('layouts.master')

@section('title')
  My shopping-cart
@endsection

@section('content')
  @if (Session::has('cart'))
    <div class="row">
      <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
        <ul class="list-group">
          @foreach ($products as $product)
            <li>{{$product}}</li>
          @endforeach
        </ul>
      </div>
    </div>
  @else

  @endif
@endsection
