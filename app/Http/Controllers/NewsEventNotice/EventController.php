<?php

namespace App\Http\Controllers\NewsEventNotice;

use App\Model\NewsEventNotice\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::orderBy('event_id', 'desc')->get();
        return view ('backend.newseventnotice.event.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $events = Event::orderBy('event_id','desc')->get();
        return view('backend.newseventnotice.event.create',compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function event_detail($id){
        $news_event_notices = NewsEventNotice::find($id);
        return view('frontend.viewevent',compact('news_event_notices'));
    }
    public function allevent($id){
        $events = Event::find($id);
        return view('frontend.allevents',compact('events'));
    }
    public function store(Request $request)
    {
        $event = new Event();
        $event->title = $request->title;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->time = $request->time;
        $event->location = $request->location;

        $randVal = rand(1111,9999);
        $img = $request->file('event_img');
        $event->img_url= $randVal.time().$img->getClientOriginalName();
        $img->move(public_path().'/images/'.'eventImage',$event->img_url);
//        dd($request->all());
        if($event->save()){
            $request->session()->flash('success_msg', 'Added Successfully.');
        }
        else{
            $request->session()->flash('error_msg', 'Oops!! Error Occured');
        }
        return redirect()->action('NewsEventNotice\EventController@index');
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
    public function edit($id)
    {
        $event = Event::find($id);
        return view ('backend.newseventnotice.event.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $event = Event::find($id);
        $event->title = $request->title;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->time = $request->time;
        $event->location = $request->location;

        if(!empty($request->event_img)) {
            $randVal = rand(1111, 9999);
            $img = $request->file('event_img');
            $event->img_url = $randVal . time() . $img->getClientOriginalName();
            $img->move(public_path() . '/images/' . 'eventImage', $event->img_url);
        }
//        dd($request->all());
        if($event->save()){
            $request->session()->flash('success_msg', 'Updated Successfully.');
        }
        else{
            $request->session()->flash('error_msg', 'Oops!! Error Occured');
        }
        return redirect()->action('NewsEventNotice\EventController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
