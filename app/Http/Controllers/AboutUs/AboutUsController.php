<?php

namespace App\Http\Controllers\AboutUs;

use App\Model\AboutUs\AboutUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index()
//    {
//        $aboutuses= AboutUs::orderBy('aboutus_id', 'asc')->get();
//        return view('backend.aboutus.index', compact('aboutuses'));
//    }
    public function intro()
    {
        $aboutuses= AboutUs::orderBy('aboutus_id', 'asc')->where('type','introduction')->get();
        return view('backend.aboutus.index', compact('aboutuses'));
    }
    public function history()
    {
        $aboutuses= AboutUs::orderBy('aboutus_id', 'asc')->where('type','history')->get();
        return view('backend.aboutus.index', compact('aboutuses'));
    }
    public function voice()
    {
        $aboutuses= AboutUs::orderBy('aboutus_id', 'asc')->where('type','voice')->get();
        return view('backend.aboutus.index', compact('aboutuses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.aboutus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aboutus = new AboutUs();
        $aboutus->type = $request->type;
        $aboutus->description= $request->description;


        $randVal = rand(1111,9999);
        $img = $request->file('aboutus_img');
        $aboutus->img_url = $randVal.time().$img->getClientOriginalName();
        $img->move(public_path().'/images/'.'aboutusImage',$aboutus->img_url);

//        dd($request->all());

        if($aboutus->save()){
            $request->session()->flash('success_msg', 'Added Successfully.');

        }
        else{
            $request->session()->flash('error_msg', 'Oops!! Error Occured');
        }
        if($aboutus->type=="introduction"){
            return redirect()->action('AboutUs\AboutUsController@intro');
        }
         elseif($aboutus->type=="voice"){
                    return redirect()->action('AboutUs\AboutUsController@voice');
         }
         elseif($aboutus->type=="history"){
                    return redirect()->action('AboutUs\AboutUsController@history');
         }

//        return redirect()->action('AboutUs\AboutUsController@index');

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
        $aboutus = AboutUs::find($id);
        return view('backend.aboutus.edit', compact('aboutus'));
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
        $aboutus = AboutUs::find($id);
        $aboutus->type = $request->type;
        $aboutus->description= $request->description;

        if(!empty($request->about_img)) {
            $randVal = rand(1111, 9999);
            $img = $request->file('aboutus_img');
            $aboutus->img_url = $randVal . time() . $img->getClientOriginalName();
            $img->move(public_path() . '/images/' . 'aboutusImage', $aboutus->img_url);
        }

//        dd($request->all());

        if($aboutus->save()){
            $request->session()->flash('success_msg', 'Updated Successfully.');

        }
        else{
            $request->session()->flash('error_msg', 'Oops!! Error Occured');
        }
        if($aboutus->type=="introduction"){
            return redirect()->action('AboutUs\AboutUsController@intro');
        }
        elseif($aboutus->type=="voice"){
            return redirect()->action('AboutUs\AboutUsController@voice');
        }
        elseif($aboutus->type=="history"){
            return redirect()->action('AboutUs\AboutUsController@history');
        }
//        return redirect()->action('AboutUs\AboutUsController@index');


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
