@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
       <h1>{{$user->email}} Profile</h1>
       <hr>
       <h2>My Orders</h2>
       @foreach($orders as $order)
       <div style="color:blue;text-align:center; font-size: 20px;" >Date {{$order->created_at}}</div>
        <div class="panel panel-default">
            <div class="panel-body">
                <ul class="list-group">
                    @foreach($order->cart->items as $item)
                    <li class="list-group-item">
                        <span class="badge">{{$item['price']}}  DH</span>
                        {{$item['item']['title']}}  | Prix {{$item['InitialPrice']}} DH X {{$item['qty']}} Quantité
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="panel-footer">
                <strong>Total Price: {{$order->cart->totalPrice}}  DH</strong>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection