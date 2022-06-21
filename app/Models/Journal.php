<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;
    protected $table = 'journals';
    public $timestamps = false;
    protected $fillable = ['vendor_id','note','amount','category','date'];
}
