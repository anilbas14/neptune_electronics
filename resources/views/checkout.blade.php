@extends('layouts.layout1')

@section('content')
<h3>Checkout</h3>
${{{Cart::total()}}} <br>
Please select payment type
<form action="{{url('payment')}}"> 
<input type="radio" name="" value="visa"> Visa<br>
<input type="radio" name="" value="mastercard"> MasterCard<br>
<input type="radio" name="" value="paypal"> PayPal<br>
<button type="submit">
    Submit
</button>
</form> 


@stop