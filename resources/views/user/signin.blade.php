@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h1>Log In</h1>
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach
            </div>
        @endif
        <form action="{{route('auth.login')}}" method="post">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" id="email" name="email" class="from-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="from-control">
            </div>
            <button type="submit" class="btn btn-primary">Sign In</button>
            {{csrf_field()}}
        </form>
        <br>
        <p>Don't have an account? <a href="{{route('user.signup')}}">Register Here</a></p>
    </div>
</div>
@endsection