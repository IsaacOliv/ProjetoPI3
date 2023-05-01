<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = ['title', 'coment', 'moneyPlus', 'moneyLess', 'id_user'];



    public function user()
    {
        return $this->hasOne(Post::class, 'id', 'id_user');
    }
}
