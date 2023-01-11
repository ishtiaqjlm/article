<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MyResearch;
use App\Models\articles;
class Categories extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'category';

    public function setTable($table)
    {
        $this->table = $table;
        return $this;
    }
    public function getTable()
    {
        $table  = $this->table;
        return $table;
    }
    public $fillable = [
        'name',
        'created_at',
        'updated_at',
    ];
    public function search_cat(){
        return $this->hasOne(MyResearch::class);
    }
    public function article_cat(){
        return $this->hasOne(articles::class);
    }



}
