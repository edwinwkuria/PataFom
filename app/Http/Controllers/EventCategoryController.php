<?php

namespace App\Http\Controllers;

use App\categories;
use App\event;
use App\eventphoto;
use App\eventCategory;
use Illuminate\Http\Request;

class EventCategoryController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\eventCategory  $eventCategory
     * @return \Illuminate\Http\Response
     */
    public function show(eventCategory $eventCategory, $id)
    {
        $categories =categories::all();
        $events = eventCategory::with('events','eventphoto');
        $events = $events->where('category_id',$id)->get();
        //return($events);
        return view ('categories', compact('events','categories'));
        //return redirect(compact('events','categories'))->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\eventCategory  $eventCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(eventCategory $eventCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\eventCategory  $eventCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, eventCategory $eventCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\eventCategory  $eventCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(eventCategory $eventCategory)
    {
        //
    }
}
