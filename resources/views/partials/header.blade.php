<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{url('/products')}}">SuitsChiapas</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{route('product.shopping-cart')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
           Shopping Cart
           <span class="badge">{{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span>
         </a></li>
        <li class="dropdown">
          @if(Auth::check())
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true "></i> {{Auth::user()->email}} <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{route('user.profile')}}">Profile</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="{{route('user.logout')}}">Logout</a></li>
            @else
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true "></i> User Account <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{route('user.signin')}}">Sign in</a></li>
                <li><a href="{{route('user.signup')}}">Sign up</a></li>
            @endif
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
