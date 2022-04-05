<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = [
            [
               'vendor_id'=>1,
               'name'=>'Susu Sapi',
               'price'=>'50000',
               'weight'=>'5',
               'category'=>'Produk Ternak',
               'image'=>'noimg.jpg',
               'desc'=>'Lorem ipsum dolor sit amet'
            ],
            [
               'vendor_id'=>1,
               'name'=>'Susu Kambing',
               'price'=>'60000',
               'weight'=>'6',
               'category'=>'Produk Ternak',
               'image'=>'noimg.jpg',
               'desc'=>'Lorem ipsum dolor sit amet'
            ],
            [
               'vendor_id'=>2,
               'name'=>'Sapi Jantan',
               'price'=>'20000000',
               'weight'=>'50',
               'category'=>'Hewan Ternak',
               'image'=>'noimg.jpg',
               'desc'=>'Lorem ipsum dolor sit amet'
            ],
            [
               'vendor_id'=>2,
               'name'=>'Kambing Jantan',
               'price'=>'5000000',
               'weight'=>'10',
               'category'=>'Hewan Ternak',
               'image'=>'noimg.jpg',
               'desc'=>'Lorem ipsum dolor sit amet'
            ],
        ]; 
  
        foreach ($product as $key => $value) {
            Product::create($value);
        }
    }
}
