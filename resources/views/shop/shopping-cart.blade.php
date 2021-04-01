@extends('layouts.master')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')
    @if(Session::has('cart'))

       
         <div class="row"> 
            
                <ul class="list-group">
                <div class="table">
                        <div class="layout-inline row th">
                            <div class="col col-pro">Product</div>
                            <div class="col col-price align-center "> 
                            Price
                            </div>
                            <div class="col col-qty align-center">QTY</div>
                            <div class="col">Total</div>
                            <div class="col">Remove</div>
                        </div>
                @if(!empty($products))
                    @foreach($products as $product)
                        

                <div class="layout-inline row">
        
                    <div class="col col-pro layout-inline">
                    <img src="{{asset($product['item']['imagePath'])}}" alt="{{$product['item']['title']}}" width="80" height="80">
                    <p>{{$product['item']['title']}}</p>
                    </div>
        
                    <div class="col col-price col-numeric align-center ">
                    <p>{{$product['InitialPrice']}}</p>
                    </div>

                    <div class="col col-qty layout-inline">
                    <a href="{{route('product.reduceByOne', ['id'=>$product['item']['id']])}}" class="qty qty-minus">-</a>
                        <input type="numeric" value="{{$product['qty']}}" />
                    <a href="{{route('product.increaseByOne', ['id'=>$product['item']['id']])}}" class="qty qty-plus">+</a>
                    </div>
                    <div class="col align-center"> <p> {{$product['price']}}</p>
                    </div>
                    <div class="col align-center">
                    <a href="{{route('product.remove', ['id'=>$product['item']['id']])}}"><i class="fa fa-trash fa-2x"></i></a>
                    </div>
                </div>
            
                    @endforeach
                @endif
                </ul>
            
        </div>
                <div class="tf">
                    <div class="row layout-inline">
                        <div class="col">
                            <p>Montant Total: </p>
                        </div>
                        <div class="col">{{$totalPrice}} DH</div>
                    </div>
                </div>
        
        <hr>
        <form action="{{route('payondelivery')}}" method="GET">
        @csrf
             <input type="radio"  name="x" value="0" required>
            <label for="payondelivery"> Pay On Delivery</label><br>
            <input type="radio"  name="x" value="1" required>
            <label for="paywithcard"> Pay With Card</label><br>
    
            <div class="btn btn-update">
                <button type="submit">Checkout</button>
            </div>
        
        </form>
            
        
    @else
    <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <h2>No items in cart</h2>
            </div>
        </div>
    @endif

@endsection