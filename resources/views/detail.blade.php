@extends('layouts.layout1')

@section('content')
              <div>
              <h3>{{{ $product->name }}}</h3>
              Description: {{{ $product->description }}} <br>
              Price: ${{{ $product->price }}} <br>
              @if ($product->quantity > 0)
              in stock
              @else
              out of stock
              @endif
              </div>
@stop