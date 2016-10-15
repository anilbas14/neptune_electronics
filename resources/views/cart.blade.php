@extends('layouts.layout1')

@section('content')
<h3>Products in cart</h3>
              @foreach($cart as $product)
              <div>
              <h4>{{{ $product->name }}}</h4>
              Price per unit: ${{{ $product->price }}} <br>
              Quantity: {{{ $product->qty }}} <br>
              {{--{{{$product->subtotal}}} --}}<br>
              {{--{{ link_to_route ('remove', 'Remove (stub)', array()) }}--}}
              </div>
              @endforeach <br><br>
              <h3>Total: ${{{Cart::total()}}} </h3>
             <form method="POST" action="{{url('clear-cart')}}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit">
                  Clear cart
                </button>
              </form>
              <form method="POST" action="{{url('checkout')}}">
             <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit">
                  Checkout
                </button>
              </form> 
@stop