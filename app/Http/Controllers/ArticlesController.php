<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Likes;
use App\Models\ReadAlready;
use App\Models\ReadLater;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\UrgentCab;
use App\Models\SubCategory;
use App\Models\Categories;
use App\Models\Tags;
use App\Models\Days;
use App\Models\articles;
use App\Models\ArticleTags;
use DB;
class ArticlesController extends Controller
{
    //
    public function index(){

     if(session('id') ==""){
        //return view('login');
        return Redirect::to('/');
     }
     else
     {
       $data['articles'] = DB::table('articles as a')->select(
                    'a.title as title',
                    'a.description as description',
                    'a.initial_research as initial_research',
                    'u.name as username',
                    'c.name as categoryname',
                    'sc.name as subcategoryname',
                    't.name as tagname',
                    'd.days as days',
                     DB::raw('(SELECT count(uc.article_id) from urgent_cab uc WHERE a.id = uc.article_id) as t_urgent'),
                     DB::raw('(SELECT count(article_id) from likes l WHERE a.id=l.article_id) as total_likes'),
                     DB::raw('(SELECT count(ra.article_id) from readalready ra WHERE a.id = ra.article_id) as t_readalready'),
                     DB::raw('(SELECT count(rl.article_id) from readlater rl WHERE a.id=rl.article_id) as t_readlater')
                )
                ->leftjoin('users as u', 'a.user_id', '=', 'u.id')
                ->leftjoin('category as c', 'a.cat_id', '=', 'c.id')
                ->leftjoin('subcategory as sc', 'a.subcat_id', '=', 'sc.id')
                ->leftjoin('tag as t', 'a.tag_id', '=', 't.id')
                ->leftjoin('days as d', 'a.day_id', '=', 'd.id')
                ->where('user_id',session('id'))
                ->paginate(6)
                ->withQueryString();
         //$articles=articles::all()->with('articlesuser');
         //$articles=articles::with('articlesuser')->get();
        // dd($articles);
        //$data['articles'] = Categories::get();
        return view('newsletter',$data);
       }
    }
    public function show_detail($id){
        //print_r($id);exit;
        if(session('id') ==""){
            //return view('login');
            return Redirect::to('/');
        }
        else
        {
            $data['articles'] = db::table('articles as a')->select(
                         'a.id as id',
                         'a.title as title',
                         'a.description as description',
                         'a.initial_research as initial_research',
                         'a.created_at as created_at',
                         'u.name as username',
                         'c.name as categoryname',
                         'sc.name as subcategoryname',
                         't.name as tagname',
                         'd.days as days',
                         DB::raw('(SELECT count(uc.article_id) from urgent_cab uc WHERE a.id = uc.article_id) as t_urgent'),
                         DB::raw('(SELECT count(article_id) from likes l WHERE a.id=l.article_id) as total_likes'),
                         DB::raw('(SELECT count(ra.article_id) from readalready ra WHERE a.id = ra.article_id) as t_readalready'),
                         DB::raw('(SELECT count(rl.article_id) from readlater rl WHERE a.id=rl.article_id) as t_readlater')
                     )
                     ->leftjoin('users as u', 'a.user_id', '=', 'u.id')
                     ->leftjoin('category as c', 'a.cat_id', '=', 'c.id')
                     ->leftjoin('subcategory as sc', 'a.subcat_id', '=', 'sc.id')
                     ->leftjoin('tag as t', 'a.tag_id', '=', 't.id')
                     ->leftjoin('days as d', 'a.day_id', '=', 'd.id')
                     ->where('a.subcat_id',$id)
                     ->paginate(6)
                     ->withQueryString();
            //dd($data);
            //$articles=articles::all()->with('articlesuser');
            //$articles=articles::with('articlesuser')->get();
            // dd($articles);
            //$data['articles'] = Categories::get();
            $data['categories']  = Categories::get(["name", "id"]);
            $data['subcategory'] = SubCategory::get(["name", "id"]);
            $data['day']         = Days::get(["days", "id"]);
            $data['tags']        = Tags::get(["name", "id"]);         
            return view('page_categories', $data);
        }
    }
    public function show_article($id){
        //echo $id;exit;
        if(session('id') ==""){
            //return view('login');
            return Redirect::to('/');
        }
        else
        {
            $data['articles'] = db::table('articles as a')->select(
                         'a.id as id',
                         'a.title as title',
                         'a.description as description',
                         'a.initial_research as initial_research',
                         'a.created_at as created_at',
                         'u.name as username',
                         'c.name as categoryname',
                         'sc.name as subcategoryname',
                         't.name as tagname',
                         'd.days as days',
                         DB::raw('(SELECT count(uc.article_id) from urgent_cab uc WHERE a.id = uc.article_id) as t_urgent'),
                         DB::raw('(SELECT count(article_id) from likes l WHERE a.id=l.article_id) as t_likes'),
                         DB::raw('(SELECT count(ra.article_id) from readalready ra WHERE a.id = ra.article_id) as t_read'),
                         DB::raw('(SELECT count(rl.article_id) from readlater rl WHERE a.id=rl.article_id) as t_unread'),
                         DB::raw('(SELECT count(uc.article_id) from urgent_cab uc WHERE a.id = uc.article_id and uc.user_id='.session('id').') as u_urgent'),
                         DB::raw('(SELECT count(article_id) from likes l WHERE a.id=l.article_id and l.user_id='.session('id').') as u_likes'),
                         DB::raw('(SELECT count(ra.article_id) from readalready ra WHERE a.id = ra.article_id and ra.user_id='.session('id').') as u_read'),
                         DB::raw('(SELECT count(rl.article_id) from readlater rl WHERE a.id=rl.article_id and rl.user_id='.session('id').') as u_unread' )
                     )
                     ->leftjoin('users as u', 'a.user_id', '=', 'u.id')
                     ->leftjoin('category as c', 'a.cat_id', '=', 'c.id')
                     ->leftjoin('subcategory as sc', 'a.subcat_id', '=', 'sc.id')
                     ->leftjoin('tag as t', 'a.tag_id', '=', 't.id')
                     ->leftjoin('days as d', 'a.day_id', '=', 'd.id')
                     ->where('a.id',$id)
                     ->get();
            //dd($data);
            /*$data['comments'] = db::table('comments as c')->select(
                         'c.id as id',
                         'c.comment as comment',
                         'c.created_at as created_at',
                         'u.name as username'
                     )
                     ->leftjoin('users as u', 'c.user_id', '=', 'u.id')
                     ->where('c.article_id',$id)
                     ->get();*/

            $data['comments'] = Comments::where('article_id',$id)->with(['reply.userreply','usercomment'])->get();
            //dd($data['comments'][0]->reply[0]);
            return view('article', $data);
            //return Redirect::to('/');
        }

    }
    public function search_article(Request $request){

        //echo "<pre>";print_r($request->all());exit;
        $search_text = $request->search_text;
        $catdd = $request->catdd;
        $subcatdd = $request->subcatdd;
        $dddd = $request->dddd;
        $tagsdd = $request->tagsdd;
        
        if(session('id') ==""){
            //return view('login');
            return Redirect::to('/');
        }
        //Eloquent query fail for search multiple tags
        /*$a = articles::where(
           function($query) use ($search_text) {
               if($search_text !=""){
                return $query
                      ->where('title','like', '%'.$search_text.'%');
                }
           })
          ->where(function($query) use ($catdd) {
               if($catdd !=""){
                return $query
                      ->where('cat_id',$catdd);
                }
           })
          ->where(function($query) use ($subcatdd) {
               if($subcatdd !=""){
                return $query
                      ->where('subcat_id',$subcatdd);
                }
           })
          ->where(function($query) use ($dddd) {
               if($dddd !=""){
                return $query
                      ->where('day_id',$dddd);
                }
           })
        ->with(['article_cat','article_subcat','article_days','article_user','tags'=>function($query) use ($tagsdd) {
               if($tagsdd !=""){
                return $query
                      ->where('tag_id',$tagsdd)->with('article_tag');
                }},'tags','urgent.article_urgent','like.article_like','read.article_read','unread.article_unread'])
         ->paginate(6); */


        //$data['articles']=articles::with(['article_cat','article_subcat','article_days','article_user','tags.article_tag','urgent.article_urgent','like.article_like','read.article_read','unread.article_unread'])->paginate(6);
        $a = db::table('articles as a')->select(
                         'a.id as id',
                         'a.title as title',
                         'a.description as description',
                         'a.initial_research as initial_research',
                         'a.created_at as created_at',
                         'u.name as username',
                         'c.name as categoryname',
                         'sc.name as subcategoryname',
                         't.name as tagname',
                         'd.days as days',
                         DB::raw('(SELECT count(uc.article_id) from urgent_cab uc WHERE a.id = uc.article_id) as t_urgent'),
                         DB::raw('(SELECT count(article_id) from likes l WHERE a.id=l.article_id) as t_likes'),
                         DB::raw('(SELECT count(ra.article_id) from readalready ra WHERE a.id = ra.article_id) as t_read'),
                         DB::raw('(SELECT count(rl.article_id) from readlater rl WHERE a.id=rl.article_id) as t_unread'),
                         DB::raw('(SELECT count(uc.article_id) from urgent_cab uc WHERE a.id = uc.article_id and u.id='.session('id').') as u_urgent'),
                         DB::raw('(SELECT count(article_id) from likes l WHERE a.id=l.article_id and u.id='.session('id').') as u_likes'),
                         DB::raw('(SELECT count(ra.article_id) from readalready ra WHERE a.id = ra.article_id and u.id='.session('id').') as u_read'),
                         DB::raw('(SELECT count(rl.article_id) from readlater rl WHERE a.id=rl.article_id and u.id='.session('id').') as u_unread' )
                     )
                     ->leftjoin('users as u', 'a.user_id', '=', 'u.id')
                     ->leftjoin('category as c', 'a.cat_id', '=', 'c.id')
                     ->leftjoin('subcategory as sc', 'a.subcat_id', '=', 'sc.id')
                     ->leftjoin('article_tags as tg', 'a.id', '=', 'tg.article_id')
                     ->leftjoin('tag as t', 't.id', '=', 'tg.tag_id')
                     ->leftjoin('days as d', 'a.day_id', '=', 'd.id')
                     ->where(
                       function($query) use ($search_text) {
                           if($search_text !=""){
                            return $query
                                  ->where('a.title','like', '%'.$search_text.'%');
                            }
                       })
                      ->where(function($query) use ($catdd) {
                           if($catdd !=""){
                            return $query
                                  ->where('a.cat_id',$catdd);
                            }
                       })
                      ->where(function($query) use ($subcatdd) {
                           if($subcatdd !=""){
                            return $query
                                  ->where('a.subcat_id',$subcatdd);
                            }
                       })
                      ->where(function($query) use ($dddd) {
                           if($dddd !=""){
                            return $query
                                  ->where('a.day_id',$dddd);
                            }
                       })
                      ->where(function($query) use ($tagsdd) {
                           if($tagsdd !=""){
                            return $query
                                  ->where('tg.tag_id',$tagsdd);
                            }
                       })
                     ->groupBy('tg.article_id')   
                     ->paginate(6);
                    $data['articles']    = $a;
                    //dd($data);
                    $data['categories']  = Categories::get(["name", "id"]);
                    $data['subcategory'] = SubCategory::get(["name", "id"]);
                    $data['day']         = Days::get(["days", "id"]);
                    $data['tags']        = Tags::get(["name", "id"]);
                    return view('page_categories', $data);
                    //return Redirect::to('/categories')->with('data' , $data);

    }
    
    public function create_newsletter(Request $request)
    {
        // code...
        //dd($request->all());
            $data['search_text']   = $request->stsearch;
            $data['pagename']   = $request->pagename;
        if($request->sscat !="")
            $data['category']      = Categories::where('id',$request->sscat)->get(["name", "id"]);
        if($request->sscat !="")
            $data['subcategory']   = SubCategory::where('id',$request->sssubcat)->get(["name", "id"]);
        if($request->ssdays !="")
            $data['days']          = Days::where('id',$request->ssdays)->get(["days", "id"]);
        if($request->sstags !="")
            $data['tags']          = Tags::where('id',$request->sstags)->get(["name", "id"]);
        
        //dd($data);
        return view('create_newsletter', $data);
    }

    public function save_newsletter(Request $request)
    {
        // code...
        //dd($request->all());
        if(session('id') ==""){
            //return view('login');
            return Redirect::to('/');
        }
        $arc                   = new articles;
        $arc->user_id          = session('id');
        $arc->title            = $request->title;
        $arc->description      = $request->description;
        $arc->initial_research = $request->search_text;
        $arc->cat_id           = $request->catid;
        $arc->subcat_id        = $request->subcatid;
        $arc->day_id           = $request->dayid;
        $arc->tag_id           = 1;
        $arc->save();
        if($arc->id>0){

           $at = new  ArticleTags;
           $at->article_id = $arc->id;
           $at->tag_id  = $request->tagid;
           $at->save();
           if($at->id>0){

            $success_msg='Newsletter has been saved successfully';
            //return Redirect::back()->with(['success_msg' => 'Newsletter has been saved successfully']);
            if($request->pagename == 'je_lis_plus_tard')
            return Redirect::to('/je_lis_plus_tard')->with(['type' => 'success','success_msg' => $success_msg]);
            
            if($request->pagename == 'j_ai_deja_lu')
            return Redirect::to('/j_ai_deja_lu')->with(['type' => 'success','success_msg' => $success_msg]);
           }
           else{
            //return Redirect::back()->with(['error_msg' => 'Something went wrong']);
           }
        }else{
            //return Redirect::back()->with(['error_msg' => 'Something went wrong']);
        }
        
        //dd($data);
       // return view('create_newsletter', $data);
    }

    public function mark_urgent($id){
        //print_r($id);exit;
        if(session('id') ==""){
            //return view('login');
            return Redirect::to('/');
        }
        else
        {
            $ugc = new UrgentCab;
            $ugc->user_id = session('id');
            $ugc->article_id =$id;
            $ugc->save();
            return response()->json(array('success' => true, 'last_insert_id' => $ugc->id,'changed_id' => $id), 200);

        }
    }

    public function mark_like($id){
        //print_r($id);exit;
        if(session('id') ==""){
            //return view('login');
            return Redirect::to('/');
        }
        else
        {
            $like = new Likes;
            $like->user_id = session('id');
            $like->article_id =$id;
            $like->save();
            return response()->json(array('success' => true, 'last_insert_id' => $like->id,'changed_id' => $id), 200);

        }
    }
    public function mark_read($id){
        //print_r($id);exit;
        if(session('id') ==""){
            //return view('login');
            return Redirect::to('/');
        }
        else
        {
            $ra = new ReadAlready;
            $ra->user_id = session('id');
            $ra->article_id =$id;
            $ra->save();
            return response()->json(array('success' => true, 'last_insert_id' => $ra->id,'changed_id' => $id), 200);

        }
    }

    public function mark_readlater($id){

        //print_r($id);exit;
        if(session('id') ==""){
            //return view('login');
            return Redirect::to('/');
        }
        else
        {
            $rd = new ReadLater;
            $rd->user_id = session('id');
            $rd->article_id =$id;
            $rd->save();
            return response()->json(array('success' => true, 'last_insert_id' => $rd->id,'changed_id' => $id), 200);
        }
    }
}
