<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MyResearch;
class Days extends Model
{
    use HasFactory;
    protected $table = 'days';
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
        'days',
        'created_at',
        'updated_at',
    ];

    public function search_day(){
        return $this->hasOne(MyResearch::class);
    }
    public function article_day(){
        return $this->hasOne(articles::class);
    }
}
