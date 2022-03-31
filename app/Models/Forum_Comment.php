<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum_Comment extends Model
{
    use HasFactory;
    protected $fillable = ['thread_id','comment'];
}
