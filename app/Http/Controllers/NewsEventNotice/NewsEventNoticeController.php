<?php

namespace App\Http\Controllers\NewsEventNotice;

use App\Model\NewsEventNotice\NewsEventNotice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsEventNoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index()
//    {
//        $newseventnotices = NewsEventNotice::orderBy('nen_id', 'desc')->get();
//        return view('backend.newseventnotice.index', compact('newseventnotices'));
//    }
    public function news()
    {
        $newseventnotices = NewsEventNotice::orderBy('nen_id', 'desc')->where('tag','news')->get();
        return view('backend.newseventnotice.index', compact('newseventnotices'));
    }
    public function notice()
    {
        $newseventnotices = NewsEventNotice::orderBy('nen_id', 'desc')->where('tag','notice')->get();
        return view('backend.newseventnotice.index', compact('newseventnotices'));
    }
    public function event()
    {
        $newseventnotices = NewsEventNotice::orderBy('nen_id', 'desc')->where('tag','event')->get();
        return view('backend.newseventnotice.index', compact('newseventnotices'));
    }
    public function event_detail($id){
        $news_event_notices = NewsEventNotice::find($id);
        return view('frontend.viewnotice',compact('news_event_notices'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $newseventnotices = NewsEventNotice::orderBy('nen_id', 'desc')->get();
        return view('backend.newseventnotice.create', compact('newseventnotices'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newsandevent = new NewsEventNotice();

        $newsandevent->tag = $request->tag;
        $newsandevent->title= $request->title;
        $newsandevent->description = $request->description;

        $randVal = rand(1111,9999);
        $img = $request->file('newsEventNotice_img');
        $newsandevent->img_url= $randVal.time().$img->getClientOriginalName();
        $img->move(public_path().'/images/'.'newseventnoticeImage',$newsandevent->img_url);
//        dd($request->all());

        if($newsandevent->save()){
            $request->session()->flash('success_msg', 'Added Successfully.');

        }
        else{
            $request->session()->flash('error_msg', 'Oops!! Error Occured');
        }

        return redirect()->back();

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
        $newseventnotice = NewsEventNotice::find($id);
        return view('backend.newseventnotice.edit', compact('newseventnotice'));
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
        $newsandevent = NewsEventNotice::find($id);

        $newsandevent->tag = $request->tag;
        $newsandevent->title= $request->title;
        $newsandevent->description = $request->description;

        if(!empty($request->newsEventNotice_img))
        {
            $randVal = rand(1111, 9999);
            $img = $request->file('newsEventNotice_img');
            $newsandevent->img_url = $randVal . time() . $img->getClientOriginalName();
            $img->move(public_path() . '/images/' . 'newseventnoticeImage', $newsandevent->img_url);
        }
//        dd($request->all());

        if($newsandevent->save()){
            $request->session()->flash('success_msg', 'Updated Successfully!');

        }
        else{
            $request->session()->flash('error_msg', 'Oops!! Error Occured');
        }
        if( $newsandevent->tag == 'news' )
        {
            return redirect()->action('NewsEventNotice\NewsEventNoticeController@news');
        }
        elseif( $newsandevent->tag == 'notice' )
        {
            return redirect()->action('NewsEventNotice\NewsEventNoticeController@notice');
        }
        elseif( $newsandevent->tag == 'event' )
        {
            return redirect()->action('NewsEventNotice\NewsEventNoticeController@event');
        }

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
