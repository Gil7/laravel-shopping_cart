@extends('layouts.master')

@section('title')
    Profile
@endsection

@section('content')
    <div class="row">
        <h1>Welcome to your dashboard : {{Auth::user()->email}}</h1>
        <hr>

        <div class="col-md-8 col-md-offset-2">
          <h2>My orders</h2>
          @foreach ($orders as $order)
            <div class="panel panel-success">
              <div class="panel-heading">Date: {{$order->created_at}}</div>
              <div class="panel-body">
                <ul class="list-group">
                  @foreach ($order->cart->items as $item)
                    <li class="list-group-item">
                      <span class="badge">{{$item['price']}} $</span>
                      {{$item['item']['title']}} | {{$item['qty']}} Units

                    </li>
                  @endforeach
                </ul>
              </div>
              <div class="panel-footer">
                <strong>Total Price: ${{$order->cart->totalPrice}}</strong>
              </div>
            </div>
          @endforeach

        </div>
    </div>

@endsection
