<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class ReadLater extends Model
{
    use HasFactory;
    protected $table = 'readlater';

    public function article_unread(){

        return $this->belongsTo(User::class,'user_id');
    }
}
