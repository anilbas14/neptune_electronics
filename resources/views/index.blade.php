@extends('layouts.layout1')

@section('content')

@foreach ($products as $product)
              <div>
              <h4>{{{ $product->name }}}</h4>
              Price: ${{{ $product->price }}} <br>
              {{ link_to_route ('products.show', 'View detail', array($product->id)) }}
              </div>
@endforeach

@stop