<?php

namespace App\Http\Controllers;

use App\Models\ArticleTags;
use App\Http\Requests\StoreArticleTagsRequest;
use App\Http\Requests\UpdateArticleTagsRequest;

class ArticleTagsController extends Controller
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
     * @param  \App\Http\Requests\StoreArticleTagsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticleTagsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ArticleTags  $articleTags
     * @return \Illuminate\Http\Response
     */
    public function show(ArticleTags $articleTags)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ArticleTags  $articleTags
     * @return \Illuminate\Http\Response
     */
    public function edit(ArticleTags $articleTags)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArticleTagsRequest  $request
     * @param  \App\Models\ArticleTags  $articleTags
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArticleTagsRequest $request, ArticleTags $articleTags)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ArticleTags  $articleTags
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArticleTags $articleTags)
    {
        //
    }
}
