<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','store_name','address','phone','image','descr'];

    public function getProduct()
    {
        return $this->hasMany(Product::class);
    }
}
