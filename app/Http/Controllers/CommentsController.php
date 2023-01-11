<?php

namespace App\Http\Controllers;

use App\Models\CommentReply;
use App\Models\Comments;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    //
    public function insert_comment(Request $request){
        //print_r($request->cr);
        //exit;
        $request->validate([
            'article_comment' => 'required',
            'cr' => 'required'
        ]);
        if($request->cr == 'c'){
            $cmnt=new Comments;
            $cmnt->comment=$request->article_comment;
            $cmnt->user_id=$request->user_id;
            $cmnt->article_id=$request->article_id;
            $cmnt->save();
        }
        else if($request->cr == 'rc'){
            $cmnt=new CommentReply;
            $cmnt->replied_text=$request->article_comment;
            $cmnt->user_id=$request->user_id;
            $cmnt->comment_id =$request->cmntid;
            $cmnt->save();
        }
        
        if($cmnt->id > 0){
            return back()->with(['success' => true]);
        }else{
            return back()->with(['error' => true]);
        }
    }

    public function delete_comment($id){

        $cmnt = Comments::find($id);
        if($cmnt){
            $cmntd = Comments::destroy($id);
            if($cmntd){
                CommentReply::where('comment_id','=',$id)->delete();
                return back()->with('success_delete','Selected Comment Deleted Successfully!');
            }else{
                return back()->with('error_delete','Something went wrong. Please try later');
            }
        }else{
            return back()->with('error_delete','Something went wrong');
        }

    }

}
