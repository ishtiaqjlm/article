<?php

namespace App\Http\Controllers;

use App\Models\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
class TagsController extends Controller
{
    //
    public function index(){

    }
    public function create_tag(Request $request){

        //print_r($request->all());
        $request->validate([
            'tagname' => 'required',
        ]);
        $tag  =new Tags;
        $tag->name=$request->tagname;
        $tag->save();
        return back()->with('success','You added new tag!');

    }
    public function delete_tag($id){

        //print_r($id);

        //$tag = Tags::where('id','=',$id)->delete();
        $tag = Tags::find($id);
        if($tag){
            $tag = Tags::destroy($id);
            return back()->with('success_delete','Selected Tag Deleted Successfully!');
        }else{
            return back()->with('error_delete','Something went wrong');
        }


    }
}
