<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Tags;
use App\Models\User;
use App\Models\articles;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Node\FunctionNode;

class AdminProfileController extends Controller
{
    //
    public function index(){

        $data['tag']      = Tags::all()->sortBy("name");
        $data['user']     = User::all()->sortBy("name");
        $data['article']  = articles::count();
        $data['category'] = Categories::count();
        return view('adminprofile', $data);

    }
}
