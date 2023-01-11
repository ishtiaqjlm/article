<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tags;
class search_tags extends Model
{
    use HasFactory;
    //public function search_tags(){
    //    return $this->hasMany(MyResearch::class,'search_id');
    //}
    //public function tags(){

    //    return $this->belongsTo(Tags::class,'id');
    //}
    public function search_tags(){

        return $this->belongsTo(Tags::class,'tag_id');
    }
}
