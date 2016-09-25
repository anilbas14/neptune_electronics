<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::table('products')->truncate();
	    
	    $product = new Product;
        $product->name = 'Samsung refrigerator';
        $product->description = 'This is a refrigerator manufactured by Samsung';
        $product->price = 500;
        $product->quantity = 50;
        $product->save();
        
        $product = new Product;
        $product->name = 'Wirlpool washing machine';
        $product->price = 400;
        $product->quantity = 60;
        $product->save();
    }
}
