<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tags;
class ArticleTags extends Model
{
    use HasFactory;

    public function article_tag(){

        return $this->belongsTo(Tags::class,'tag_id');
    }
}
