<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\SubCategory;

class AccueilController extends Controller
{
    //
    public function index(){

        //$categories  = Categories::all(['id','name']);
        $data['categories'] = Categories::get(["name", "id"]);
        $data['subcategory'] = SubCategory::get(["name", "id"]);
        //return view('accueil',['categories' => $categories,'subcategory' => $subcategory]);
        return view('accueil', $data);

    }
}
