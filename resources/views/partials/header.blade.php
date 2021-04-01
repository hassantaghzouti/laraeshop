<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('product.index')}}"><b style="font-size: 33px;">Lmarché</b></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{route('product.shoppingCart')}}">
                    <i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i>
                        <b style="font-size: 22px;">Shopping Cart</b>
                 <span class="badge badge-primary">{{Session::has('cart')?Session::get('cart')->totalQty:''}}</span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user fa-2x" aria-hidden="true"></i> 
                        <b style="font-size: 22px;">
                        @if(Auth::check())
                            {{auth()->user()->email}}
                        @else
                            User Account 
                        @endif
                        
                        </b>
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        @if(Auth::check())
                            <li><a href="{{route('user.profile')}}"><b style="font-size: 19px;">user profile</b></a></li>
                            <li><a href="{{route('user.logout')}}"><b style="font-size: 19px;">Logout</b></a></li>
                        @else
                            <li><a href="{{route('user.signup')}}"><b style="font-size: 19px;">SignUp</b></a></li>
                            <li><a href="{{route('user.signin')}}"><b style="font-size: 19px;">LogIn</b></a></li>
                            
                        @endif
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>