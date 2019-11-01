<?php

namespace App\Http\Controllers;

use App\eventOrganizer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class EventOrganizerController extends Controller
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
        return view ('auth.registerorganizer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        eventOrganizer::create([
            'organizerName' => $request['organizerName'],
            'organizerEmail' =>$request['organizerEmail'],
            'organizerEmail2' => $request['organizerEmail2'],
            'organizerPhone' => $request['organizerPhone'],
            'organizerPhone2' =>$request['organizerPhone2'],
            'password' => Hash::make($request['password']),
        ]);
        return view('auth.organizerevents');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\eventOrganizer  $eventOrganizer
     * @return \Illuminate\Http\Response
     */
    public function show(eventOrganizer $eventOrganizer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\eventOrganizer  $eventOrganizer
     * @return \Illuminate\Http\Response
     */
    public function edit(eventOrganizer $eventOrganizer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\eventOrganizer  $eventOrganizer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, eventOrganizer $eventOrganizer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\eventOrganizer  $eventOrganizer
     * @return \Illuminate\Http\Response
     */
    public function destroy(eventOrganizer $eventOrganizer)
    {
        //
    }
}
