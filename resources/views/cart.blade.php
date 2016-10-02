@extends('layouts.layout1')

@section('content')
<h3>Products in cart</h3>
              @foreach($cart as $product)
              <div>
              <h4>{{{ $product->name }}}</h4>
              Price: ${{{ $product->price }}} <br>
              {{{$product->subtotal}}} <br>
              {{ link_to_route ('products.show', 'View detail', array($product->id)) }}
              </div>
              @endforeach
              Total: {{{Cart::total()}}}

@stop