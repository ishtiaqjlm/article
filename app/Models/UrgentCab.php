<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UrgentCab extends Model
{
    use HasFactory;
    protected $table = 'urgent_cab';

    public function article_urgent(){

        return $this->belongsTo(User::class,'user_id');
    }
}
