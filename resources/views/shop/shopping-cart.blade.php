@extends('layouts.master')

@section('title')
  My shopping-cart
@endsection

@section('content')
  <div class="row">
    <div class="col-md-4 col-md-offset-4" style="margin-bottom:20px">
      <h1><span class="text-info"><i class="fa fa-shopping-cart"></i> My Shopping Cart</span></h1>
    </div>
  </div>
  @if (Session::has('cart'))
    <div class="row">
      <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
        <ul class="list-group">
          @foreach ($products as $product)
            <li class="list-group-item">
              <span class="badge">{{$product['qty']}}</span>
              {{$product['item']['title']}}
              <span class="label label-success">{{$product['price']}}</span>
              <div class="btn-group">
                <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Reduce by 1</a></li>
                    <li><a href="#">Reduce All</a></li>
                  </ul>
              </div>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
        <strong>Total : {{$total}}</strong>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
        <a href="{{route('checkout')}}" type="button" name="button" class="btn btn-success">CheckOut</a>
      </div>
    </div>
  @else
    <div class="row">
      <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
        <h2>No items in Cart!</h2>
      </div>
    </div>
  @endif
@endsection
