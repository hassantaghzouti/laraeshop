@extends('layouts.master')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')

            <p>You choose to pay on delivery</p>
            <div class="container">
                <h2>Shipping informations</h2>
                <div id="charge-error" class="alert alert-danger {{ !Session::has('error')? 'hidden' : ''}}">{{ Session::get('error')}}</div>
                <form action="{{route('payondelivery')}}" method="post" id="checkout-form">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="name" >Full Name</label>
                                <input type="text" id="name" name="name" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                            <label for="address" >Address</label>
                            <input type="text" id="address" name="address" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                            <label for="city" >City</label>
                            <input type="text" id="city" name="city" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                            <label for="telephone" >Telephone</label>
                            <input type="text" id="telephone" name="telephone" class="form-control" required>
                            </div>
                        </div>
                    {{csrf_field()}}
                    <button type="submit" class="btn btn-success">Buy Now</button>
                </form>
                

            </div>

@endsection