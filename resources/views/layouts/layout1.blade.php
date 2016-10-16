<!DOCTYPE html>
<html>
    <head>
        <title>Neptune electronics</title>
        <style type="text/css">
            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }
        </style>
    </head>
        <body>
        <div class="container">
            <div class="content">
               <h4>Products in cart</h4>
              @foreach(Cart::content() as $product)
              <div>
             {{{ $product->name }}}, ${{{$product->price}}}, {{{ $product->qty }}} <br>
              </div>
              @endforeach
              <h3>Total: ${{{Cart::total()}}} </h3>
             <form method="POST" action="{{url('clear-cart')}}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit">
                  Clear cart
                </button>
              </form>
              <form method="GET" action="{{url('cart')}}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit">
                  Checkout
                </button>
              </form> 
            </div>            
        <div class="container">
            <div class="content">
               @yield('content')
            </div>
        </div>
    </body>
</html>