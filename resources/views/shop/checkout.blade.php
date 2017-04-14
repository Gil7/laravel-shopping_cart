@extends('layouts.master')
@section('title')
  Checkout
@endsection

@section('content')
  <div class="row">
    <div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">
      <h1>Checkout</h1>
      <h4>Your Total: {{$total}}</h4>

      <form class="form" action="{{route('checkout')}}" method="post" id="checkout-form">
        {{csrf_field()}}
        <div class="row">
          <div class="col-xs-12">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" id="name" class="form-control" required="true">
            </div>
          </div>
          <div class="col-xs-12">
            <div class="form-group">
              <label for="address">Address:</label>
              <input type="text" id="address" class="form-control" required="true">
            </div>
          </div>
          <div class="col-xs-12">
            <div class="form-group">
              <label for="card-name">Car Holder Name:</label>
              <input type="text" id="card-name" class="form-control" required="true">
            </div>
          </div>
          <div class="col-xs-12">
            <div class="form-group">
              <label for="card-number">Credit Card Number:</label>
              <input type="text" id="card-number" class="form-control" required="true">
            </div>
          </div>
          <div class="col-xs-6">
            <div class="form-group">
              <label for="card-expiry-month">Expiration Month:</label>
              <input type="text" id="card-expiry-month" class="form-control" required="true">
            </div>
          </div>
          <div class="col-xs-6">
            <div class="form-group">
              <label for="card-expiry-year">Expiration Year:</label>
              <input type="text" id="card-expiry-year" class="form-control" required="true">
            </div>
          </div>

          <div class="col-xs-6">
            <div class="form-group">
              <label for="card-cvc">CVC:</label>
              <input type="text" id="card-cvc" class="form-control" required="true">
            </div>
          </div>
        </div>
        <input type="submit" name="name" value="Buy now" class="btn btn-success">
      </form>

    </div>
  </div>
@endsection
