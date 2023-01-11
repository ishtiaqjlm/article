<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class ReadAlready extends Model
{
    use HasFactory;
    protected $table = 'readalready';

    public function article_read(){

        return $this->belongsTo(User::class,'user_id');
    }
}
