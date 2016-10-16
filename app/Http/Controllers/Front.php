<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;

//for cart
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Cart;

class Front extends Controller
{
    public function cartpost() {
    if (Request::isMethod('post')) {
        $product_id = Request::get('product_id');
        $product = Product::find($product_id);
        Cart::add(array('id' => $product_id, 'name' => $product->name, 'qty' => 1, 'price' => $product->retail_price));
    }

   // $cart = Cart::content();
    //return view('cart', array('cart' => $cart));
    	
    return redirect()->back();
    }
    
    public function cartget() {
    return view('cart', array('cart' => Cart::content()));
    }
    
    public function clearcart() {
    Cart::destroy();
    return redirect()->route('products.index');
    }
    
    public function checkout() {
    return view('checkout', array('cart' => Cart::content()));
    }
    
    
    
    //
}
