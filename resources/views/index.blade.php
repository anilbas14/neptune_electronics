@extends('layouts.layout1')

@section('content')
<div class='list-group-item'>
    <br> <br>
{{ Form::open(array('method' => 'GET', 'action' => 'ProductController@index')) }}
{{ Form::text('search') }} 
{{ Form::select('field', ['name' => 'Name', 'description' => 'Description', 'type' => 'Type', 'brand' => 'Brand', 'retail_price' => 'Price', ]) }}
{{ Form::submit('Search') }}
</div>

@foreach ($products as $product)
              <div>
             <img width="60" height="60" src='{{{$product->image}}}' alt="">
              <h4>{{{ $product->name }}}</h4>
              Price: ${{{ $product->retail_price }}} <br>
              {{ link_to_route ('products.show', 'View detail', array($product->id)) }}
              </div>
@endforeach

@stop