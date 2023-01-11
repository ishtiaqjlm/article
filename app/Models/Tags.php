<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\search_tags;
use App\Models\ArticleTags;
class Tags extends Model
{
    use HasFactory;
    protected $table = 'tag';

    public function search_tags(){
        return $this->hasOne(search_tags::class);
    }
    public function article_tag(){

        return $this->hasOne(ArticleTags::class);
    }
}
