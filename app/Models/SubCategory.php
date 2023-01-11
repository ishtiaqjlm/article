<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MyResearch;
use App\Models\articles;
class SubCategory extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'subcategory';

    public $fillable = [
        'name',
        'cat_id',
        'created_at',
        'updated_at',
    ];
    public function search_subcat(){
        return $this->hasOne(MyResearch::class);
    }
    public function article_subcat(){
        return $this->hasOne(articles::class);
    }
}
