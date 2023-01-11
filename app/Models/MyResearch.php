<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;
use App\Models\SubCategory;
use App\Models\search_tags;
use App\Models\Days;
class MyResearch extends Model
{
    use HasFactory;
    public function search_cat(){

        return $this->belongsTo(Categories::class,'cat_id');
    }
    public function search_subcat(){

        return $this->belongsTo(SubCategory::class,'subcat_id');
    }

    public function search_days(){

        return $this->belongsTo(Days::class,'day_id');
    }
    public function tags(){
        return $this->hasMany(search_tags::class,'search_id');
    }
}
