<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comments;
use App\Models\User;
class CommentReply extends Model
{
    use HasFactory;

    protected $table = 'comment_reply';

    public function comment(){

        return $this->belongsTo(Comments::class,'id');
    }
    public function userreply(){

        return $this->belongsTo(User::class,'user_id');
    }
}
