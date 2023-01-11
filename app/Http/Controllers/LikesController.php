<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Likes;
use App\Models\SubCategory;
use App\Models\Categories;
use App\Models\Tags;
use App\Models\Days;
use App\Models\articles;
use DB;
class LikesController extends Controller
{
    //
    public function index(){

        if(session('id') ==""){
            //return view('login');
            return Redirect::to('/');
        }

        $data['articles'] = DB::table('articles as a')->select(
                    'a.id as id',
                    'a.title as title',
                    'a.description as description',
                    'a.created_at as created_at',
                    'c.name as categoryname',
                    'sc.name as subcategoryname',
                    't.name as tagname',
                    'd.days as days',
                    DB::raw('(SELECT count(uc.article_id) from urgent_cab uc WHERE a.id = uc.article_id) as t_urgent'),
                    DB::raw('(SELECT count(article_id) from likes l WHERE a.id=l.article_id) as t_likes'),
                    DB::raw('(SELECT count(ra.article_id) from readalready ra WHERE a.id = ra.article_id) as t_read'),
                    DB::raw('(SELECT count(rl.article_id) from readlater rl WHERE a.id=rl.article_id) as t_unread'),
                    DB::raw('(SELECT count(uc.article_id) from urgent_cab uc WHERE a.id = uc.article_id='.session('id').') as u_urgent'),
                    DB::raw('(SELECT count(article_id) from likes l WHERE a.id=l.article_id and l.user_id='.session('id').') as u_likes'),
                    DB::raw('(SELECT count(ra.article_id) from readalready ra WHERE a.id = ra.article_id and l.user_id='.session('id').') as u_read'),
                    DB::raw('(SELECT count(rl.article_id) from readlater rl WHERE a.id=rl.article_id and l.user_id='.session('id').') as u_unread' )
                  )
                ->leftjoin('likes as l', 'l.article_id', '=', 'a.id')
                ->leftjoin('category as c', 'a.cat_id', '=', 'c.id')
                ->leftjoin('subcategory as sc', 'a.subcat_id', '=', 'sc.id')
                ->leftjoin('tag as t', 'a.tag_id', '=', 't.id')
                ->leftjoin('days as d', 'a.day_id', '=', 'd.id')
                ->where('l.user_id',session('id'))
                ->paginate(6);

        $data['categories']  = Categories::get(["name", "id"]);
        $data['subcategory'] = SubCategory::get(["name", "id"]);
        $data['day']         = Days::get(["days", "id"]);
        $data['tags']        = Tags::get(["name", "id"]);
                 
        return view('jaime', $data);

    }

    public function search_jaime(Request $request){

        $search_text = $request->search_text;
        $catdd = $request->catdd;
        $subcatdd = $request->subcatdd;
        $dddd = $request->dddd;
        $tagsdd = $request->tagsdd;

        if(session('id') ==""){
            //return view('login');
            return Redirect::to('/');
        }
        $data['articles'] = DB::table('articles as a')->select(
                    'a.id as id',
                    'a.title as title',
                    'a.description as description',
                    'a.created_at as created_at',
                    'c.name as categoryname',
                    'sc.name as subcategoryname',
                    't.name as tagname',
                    'd.days as days',
                    DB::raw('(SELECT count(uc.article_id) from urgent_cab uc WHERE a.id = uc.article_id) as t_urgent'),
                    DB::raw('(SELECT count(article_id) from likes l WHERE a.id=l.article_id) as t_likes'),
                    DB::raw('(SELECT count(ra.article_id) from readalready ra WHERE a.id = ra.article_id) as t_read'),
                    DB::raw('(SELECT count(rl.article_id) from readlater rl WHERE a.id=rl.article_id) as t_unread'),
                    DB::raw('(SELECT count(uc.article_id) from urgent_cab uc WHERE a.id = uc.article_id='.session('id').') as u_urgent'),
                    DB::raw('(SELECT count(article_id) from likes l WHERE a.id=l.article_id and l.user_id='.session('id').') as u_likes'),
                    DB::raw('(SELECT count(ra.article_id) from readalready ra WHERE a.id = ra.article_id and l.user_id='.session('id').') as u_read'),
                    DB::raw('(SELECT count(rl.article_id) from readlater rl WHERE a.id=rl.article_id and l.user_id='.session('id').') as u_unread' )
                  )
                ->leftjoin('likes as l', 'l.article_id', '=', 'a.id')
                ->leftjoin('category as c', 'a.cat_id', '=', 'c.id')
                ->leftjoin('subcategory as sc', 'a.subcat_id', '=', 'sc.id')
                ->leftjoin('article_tags as tg', 'a.id', '=', 'tg.article_id')
                ->leftjoin('tag as t', 'a.tag_id', '=', 't.id')
                ->leftjoin('days as d', 'a.day_id', '=', 'd.id')
                ->where('l.user_id',session('id'))
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
        $data['categories']  = Categories::get(["name", "id"]);
        $data['subcategory'] = SubCategory::get(["name", "id"]);
        $data['day']         = Days::get(["days", "id"]);
        $data['tags']        = Tags::get(["name", "id"]);

        return view('jaime', $data);
    }
}
