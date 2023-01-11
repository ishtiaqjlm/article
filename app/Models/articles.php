<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Categories;
use App\Models\SubCategory;
use App\Models\Days;
use App\Models\UrgentCab;
use App\Models\Likes;
use App\Models\ReadAlready;
use App\Models\ReadLater;
class articles extends Model
{
    use HasFactory;

    public function articlesuser(){

        return $this->belongsTo(User::class,'id');
    }
    public function article_cat(){

        return $this->belongsTo(Categories::class,'cat_id');
    }
    public function article_subcat(){

        return $this->belongsTo(SubCategory::class,'subcat_id');
    }
    public function article_days(){

        return $this->belongsTo(Days::class,'day_id');
    }
    public function article_user(){

        return $this->belongsTo(User::class,'user_id');
    }
    public function tags(){
        return $this->hasMany(ArticleTags::class,'article_id');
    }
    public function urgent(){
        return $this->hasMany(UrgentCab::class,'article_id');
    }
    public function like(){
        return $this->hasMany(Likes::class,'article_id');
    }
    public function read(){
        return $this->hasMany(ReadAlready::class,'article_id');
    }
    public function unread(){
        return $this->hasMany(ReadLater::class,'article_id');
    }
}

