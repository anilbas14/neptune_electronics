<?php

use Illuminate\Database\Seeder;
use App\Product;

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
        $product->name = 'J Burrows yellow sticky notes';
        $product->image = 'http://s3-ap-southeast-2.amazonaws.com/wc-prod-pim/JPEG_300x300/JB4A76127_j_burrows_adhesive_notes_76_x_127mm_pack_4.jpg';
        $product->description = 'Yellow sticky notes';
        $product->type = 'Sticky notes';
        $product->brand = 'J.Burrows';
        $product->retail_price = 13;
        $product->wholesale_price = 10;
        $product->quantity = 1000;
        $product->save();
        
        $product = new Product;
        $product->name = 'Studio Oh! Take Me With You Planner';
        $product->image = 'https://s-media-cache-ak0.pinimg.com/736x/e1/1d/88/e11d884c4c1f8861385385c829c655e1.jpg';
        $product->description = 'The best way to get something done is to begin. 2017 Planner';
        $product->type = 'Planner';
        $product->brand = 'Studio Oh!';
        $product->retail_price = 20;
        $product->wholesale_price = 15;
        $product->quantity = 60;
        $product->save();
        
        $product = new Product;
        $product->name = 'HP Envy 4524 Wireless Inkjet MFC Printer';
        $product->image = 'http://images.esellerpro.com/2451/I/283/649/5/HP%20ENVY%20PRINTER.jpg';
        $product->description = 'Wireless multifunctional photo printer';
        $product->type = 'Printer';
        $product->brand = 'HP';
        $product->retail_price = 90;
        $product->wholesale_price = 80;
        $product->quantity = 50;
        $product->save();
        
        $product = new Product;
        $product->name = 'Keji 5 Sheet Strip Cut Personal Shredder Black';
        $product->image = 'http://s3-ap-southeast-2.amazonaws.com/wc-prod-pim/JPEG_1000x1000/KESC5SHBK_keji_keji_5sh_strip_cut_shredder_bk_black.jpg';
        $product->type = 'Shredder';
        $product->brand = 'Keji';
        $product->retail_price = 25;
        $product->wholesale_price = 20;
        $product->quantity = 50;
        $product->save();
        
        $product = new Product;
        $product->name = 'Beats by Dr. Dre urBeats In Ear Headphones Black';
        $product->image = 'https://www.mwave.com.au/images/400/AB49745_10.jpg';
        $product->type = 'Headphones';
        $product->brand = 'Dr. Dre';
        $product->retail_price = 100;
        $product->wholesale_price = 80;
        $product->quantity = 100;
        $product->save();
        
        $product = new Product;
        $product->name = 'Logitech M280 Wireless mouse';
        $product->image = 'http://s3-ap-southeast-2.amazonaws.com/wc-prod-pim/JPEG_1000x1000/LOM280BLK_logitech_m280_wireless_mouse_black.jpg';
        $product->type = 'Computer mouse';
        $product->brand = 'Logitech';
        $product->retail_price = 25;
        $product->wholesale_price = 15;
        $product->quantity = 1000;
        $product->save();
        
        $product = new Product;
        $product->name = 'Acer ES1 15.6-inch AMD A4 laptop';
        $product->image = 'https://n1.sdlcdn.com/imgs/b/i/y/Acer-Aspire-ES1-521-Notebook-SDL861809023-1-fc526.jpg';
        $product->type = 'Laptop';
        $product->brand = 'Acer';
        $product->retail_price = 500;
        $product->wholesale_price = 450;
        $product->quantity = 20;
        $product->save();
        
        $product = new Product;
        $product->name = 'Motorola Moto G4 Plus 16GB Black';
        $product->image = 'http://cdn2.gsmarena.com/vv/pics/motorola/motorola-moto-g4-plus-r1.jpg';
        $product->type = 'Mobile phone';
        $product->brand = 'Motorola';
        $product->retail_price = 370;
        $product->wholesale_price = 350;
        $product->quantity = 50;
        $product->save();
        
    }
}
