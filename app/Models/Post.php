<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comments;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    public $timestamps = false;

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }
}
