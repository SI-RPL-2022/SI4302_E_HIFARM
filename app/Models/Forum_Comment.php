<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Forum_Comment extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','thread_id','comment'];
    protected $table = 'forum_comments';
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
