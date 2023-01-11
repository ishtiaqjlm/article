<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CommentReply;
use App\Models\User;
class Comments extends Model
{
    use HasFactory;
    protected $table = 'comments';
    public function reply(){
        return $this->hasMany(CommentReply::class,'comment_id');
    }
    public function usercomment(){
        return $this->belongsTo(User::class,'user_id');
    }
}
