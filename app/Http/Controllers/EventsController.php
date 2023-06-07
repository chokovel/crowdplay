<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use File;
use App\Traits\ImageUpload;
use App\Http\Requests\Events\CreateEventRequest;
use App\Http\Requests\Events\UpdateEventRequest;
use Cviebrock\EloquentSluggable\Services\SlugService;


class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('events.index')
        ->with('events', Event::orderBy('updated_at', 'DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEventRequest $request, Event $event)
    {
        if($request->hasFile('image')) {
            $image = $request->file('image')->store('public/images');
        }
        // $event->save();

        $event = Event::create([
            'title' => $request->input('title'),
            'venue' => $request->input('venue'),
            'map_url' => $request->input('map_url'),
            'description' => $request->input('description'),
            'start' => $request->input('start'),
            'end' => $request->input('end'),
            'slug' => SlugService::createSlug(Event::class, 'slug', $request->title),
            'image' => $image,
        ]);


        session()->flash('success', 'Event created successfully');
        return redirect(route('events.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('events.create')->with('event', $event);;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        
        if($request->hasFile('image')) {
            $image = $request->file('image')->store('public/images');
        }

        $event->update([
            'title' => $request->input('title'),
            'venue' => $request->input('venue'),
            'map_url' => $request->input('map_url'),
            'description' => $request->input('description'),
            'start' => $request->input('start'),
            'end' => $request->input('end'),
            'slug' => SlugService::createSlug(Event::class, 'slug', $request->title),
            'image' => $image,
        ]);

        session()->flash('success', 'Event updated successfully');
        return redirect(route('events.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();

        session()->flash('success', 'Event deleted successfully');
        return redirect(route('events.index'));
    }
}
