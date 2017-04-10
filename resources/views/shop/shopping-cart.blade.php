@extends('layouts.master')

@section('title')
  My shopping-cart
@endsection

@section('content')
  @if (Session::has('cart'))

  @else
      @foreach ($products as $product)

      @endforeach
  @endif
@endsection
