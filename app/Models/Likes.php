<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Likes extends Model
{
    use HasFactory;
    protected $table = 'likes';

    public function article_like(){

        return $this->belongsTo(User::class,'user_id');
    }
}
