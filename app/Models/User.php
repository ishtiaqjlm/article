<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\articles;
use App\Models\CommentReply;
use App\Models\Comments;
use App\Models\UrgentCab;
use App\Models\Likes;
use App\Models\ReadAlready;
use App\Models\ReadLater;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function sendPasswordResetNotification($token)
        {
            $this->notify(new \App\Notifications\MailResetPasswordNotification($token));
        }
    public function userarticle(){
        return $this->hasMany(articles::class,'user_id');
    }
    public function usercommentreply(){
        return $this->hasOne(CommentReply::class);
    }
    public function comments(){
        return $this->hasOne(Comments::class);
    }
    public function article_user(){
        return $this->hasOne(articles::class);
    }
    public function article_urgent(){
        return $this->hasOne(UrgentCab::class);
    }
    public function article_like(){

        return $this->hasOne(Likes::class);
    }
    public function article_read(){

        return $this->hasOne(ReadAlready::class);
    }
    public function article_unread(){

        return $this->hasOne(ReadLater::class);
    }
}
