<?php

namespace App\Http\Controllers;

use App\event;
use App\eventphoto;
use Illuminate\Http\Request;
use App\Http\Requests\UploadRequest;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = event::with('eventphoto')->get();
        //return ($events);
        return view ('welcome', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Event.createevent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UploadRequest $request)
    {
        $events= event::create($request->all());
        $filename = $request -> photos ->store('eventimages');
        eventphoto::create([
        'eventname'=>$request-> eventname,
        'eventlocation'=>$request-> eventlocation,
        'eventcost'=>$request-> eventcost,
        'eventtime'=>$request-> eventtime,
        'eventdate'=>$request -> eventdate,
        'eventdescription'=>$request-> eventdescription,
        'eventorganizer'=>$request-> eventorganizer,
        'eventcontactemail'=>$request-> eventcontactemail,
        'eventcontactphone'=>$request -> eventcontactphone,
        'event_id'=>$events->id,
        'filename' => $filename,
        ]);
        //return ($request-> photos);

        return redirect ('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(event $event)
    {
        //
    }
}
