<?php

namespace App\Http\Controllers;

use App\Models\search_tags;
use App\Http\Requests\Storesearch_tagsRequest;
use App\Http\Requests\Updatesearch_tagsRequest;

class SearchTagsController extends Controller
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
     * @param  \App\Http\Requests\Storesearch_tagsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storesearch_tagsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\search_tags  $search_tags
     * @return \Illuminate\Http\Response
     */
    public function show(search_tags $search_tags)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\search_tags  $search_tags
     * @return \Illuminate\Http\Response
     */
    public function edit(search_tags $search_tags)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatesearch_tagsRequest  $request
     * @param  \App\Models\search_tags  $search_tags
     * @return \Illuminate\Http\Response
     */
    public function update(Updatesearch_tagsRequest $request, search_tags $search_tags)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\search_tags  $search_tags
     * @return \Illuminate\Http\Response
     */
    public function destroy(search_tags $search_tags)
    {
        //
    }
}
