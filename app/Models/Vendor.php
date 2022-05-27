<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\User;

class Vendor extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','store_name','address','phone','image','descr'];

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function getProduct()
    {
        return $this->hasMany(Product::class);
    } 

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
