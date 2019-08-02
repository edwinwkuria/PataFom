<?php

namespace App\Http\Controllers;

use App\User;
use App\eventUser;
use Illuminate\Http\Request;

class EventUserController extends Controller
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
     * @param  \App\eventUser  $eventUser
     * @return \Illuminate\Http\Response
     */
    public function show(eventUser $eventUser)
    {
        $id = auth()->user()->id;
        $attendees =User::with('events')->get();
        $userevents = $attendees->where('id',$id);
        return($userevents); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\eventUser  $eventUser
     * @return \Illuminate\Http\Response
     */
    public function edit(eventUser $eventUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\eventUser  $eventUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, eventUser $eventUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\eventUser  $eventUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(eventUser $eventUser)
    {
        //
    }
}
