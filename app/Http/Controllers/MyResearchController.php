<?php

namespace App\Http\Controllers;

use App\Models\MyResearch;
use App\Models\search_tags;
use App\Http\Requests\StoreMyResearchRequest;
use App\Http\Requests\UpdateMyResearchRequest;
use Illuminate\Support\Facades\Redirect;

class MyResearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMyResearchRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMyResearchRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MyResearch  $myResearch
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $user_id = session('id');
        if($user_id == ""){
            return Redirect::to('/');
        }
        if(session('role') == 0){
            $data['my_research']=MyResearch::where('user_id',$user_id)
                 ->with(['search_cat','search_subcat','search_tags','search_days'])
                 ->paginate(10);
        }else{
            $data['my_research']=MyResearch::with(['search_cat','search_subcat','tags.search_tags','search_days'])
                 ->paginate(10);
        }
        //dd($data);
        return view('mes_recherches',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MyResearch  $myResearch
     * @return \Illuminate\Http\Response
     */
    public function edit(MyResearch $myResearch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMyResearchRequest  $request
     * @param  \App\Models\MyResearch  $myResearch
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMyResearchRequest $request, MyResearch $myResearch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MyResearch  $myResearch
     * @return \Illuminate\Http\Response
     */
    public function destroy(MyResearch $myResearch)
    {
        //
    }
    public function delete_search($id)
    {
        //
        $mys=MyResearch::find($id);
        if($mys){
            $stg = search_tags::where('search_id',$id);
            $stg->delete();
            $mys = MyResearch::destroy($id);
            return back()->with('success_delete','Selected Search Deleted Successfully!');
        }else{
            return back()->with('error_delete','Something went wrong');
        }

    }
}
