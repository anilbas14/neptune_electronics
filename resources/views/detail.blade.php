@extends('layouts.layout1')

@section('content')
              <div>
              <h3>{{{ $product->name }}}</h3>
              Description: {{{ $product->description }}} <br>
              Price: ${{{ $product->price }}} <br>
              @if ($product->quantity > 0)
              in stock
              <form method="POST" action="{{url('cart')}}">
                <input type="hidden" name="product_id" value="{{$product->id}}">
                <input type="hidden" name="product" value="{{$product}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit">
                  Add to cart
                </button>
              </form>
              @else
              out of stock
              @endif
              </div>
@stop