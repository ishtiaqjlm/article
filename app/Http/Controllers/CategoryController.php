<?php

namespace App\Http\Controllers;

use App\Models\articles;
use App\Models\SubCategory;
use App\Models\Categories;
use App\Models\Tags;
use App\Models\Days;
use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    //
    public function index(){


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
                     ->groupBy('tg.article_id')
                //->where('user_id',session('id'))
                //->limit(9)
                //->get();
                ->paginate(6)
                ->withQueryString();
        /*$data['articles']=articles::with(['article_cat','article_subcat','article_days','article_user','tags.article_tag',
            'urgent.article_urgent','like.article_like','read.article_read','unread.article_unread'])->paginate(6);*/


        $data['categories']  = Categories::get(["name", "id"]);
        $data['subcategory'] = SubCategory::get(["name", "id"]);
        $data['day']         = Days::get(["days", "id"]);
        $data['tags']        = Tags::get(["name", "id"]);
        //dd($data);
        return view('page_categories', $data);
    }

    public function get_subcat($id){

        $subcategory = SubCategory::where('cat_id', $id)
                        ->orderBy('name')
                        ->get(["name", "id"]);
        $html = '<option value="">Sous-catégorie</option>';

        foreach($subcategory as $subcategory){
            $html .= '<option value="'.$subcategory->id.'">'.$subcategory->name.'</option>';
        } //dd($html);
        return response()->json(array('success' => true, 'sub_cat_html' => $html), 200);

    }

}
