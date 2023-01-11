<?php

namespace App\Http\Controllers;
use App\Models\CommentReply;
use Illuminate\Http\Request;

class CommentReplyController extends Controller
{
    //
    public function delete_reply($id){

        $cmnt = CommentReply::find($id);

        if($cmnt){
               CommentReply::destroy($id);
               return back()->with('success_delete','Selected Reply Deleted Successfully!');
        }else{
               return back()->with('error_delete','Something went wrong');
        }

    }
}
