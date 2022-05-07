<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Forum_Comment;

class Forum_Thread extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','title', 'content'];
    protected $table = 'forum_threads';


    // call these function to get their respective relation
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Forum_Comment::class, 'thread_id');
    }
}
