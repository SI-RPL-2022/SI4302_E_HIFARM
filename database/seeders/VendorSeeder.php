<?php

namespace Database\Seeders;

use App\Models\Vendor;
use Illuminate\Database\Seeder;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vendor = [
            [
               'user_id'=>3,
               'store_name'=>'Toko Vendor 1',
               'address'=>'Pangalengan',
               'phone'=>'+62 8018',
               'image'=>'noimg.jpg',
               'descr'=>'Lorem ipsum dolor sit amet'
            ],
            [
               'user_id'=>4,
               'store_name'=>'Toko Vendor 2',
               'address'=>'Pangalengan',
               'phone'=>'+62 8019',
               'image'=>'noimg.jpg',
               'descr'=>'Lorem ipsum dolor sit amet'
            ],
        ]; 
  
        foreach ($vendor as $key => $value) {
            Vendor::create($value);
        }
    }
}
