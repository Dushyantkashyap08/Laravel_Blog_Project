<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $table = 'comments';

    public $timestamps = false;

    protected $fillable = ['post_id', 'user_id', 'comment', 'user_name'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
