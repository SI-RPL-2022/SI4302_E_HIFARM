<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounting_Book extends Model
{
    use HasFactory;
    protected $fillable = ['vendor_id','note','date','income','expense'];
}
