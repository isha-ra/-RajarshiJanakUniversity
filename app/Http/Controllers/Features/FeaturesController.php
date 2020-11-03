<?php

namespace App\Http\Controllers\Features;

use App\Model\FeatureModel\Feature;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function features_detail($id){
        $features = Feature::find($id);
        return view('frontend.view',compact('features'));
    }
    public function index()
    {
        $features = Feature::get();
//        dd($features);
        return view('backend.features.index',compact('features'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.features.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $request->validate([
//            'title' => 'required',
//            'description' => 'required',
////            'img_ur' => 'required',
//            'priority' => 'required',





//        ]);

        $features = new Feature();
        $features->title = $request->title;
        $features->description =$request->description;

        $features->priority=$request->priority;

        $randVal = rand(1111,9999); //Generating Random Value between 1111 to 9999
        $img_ur = $request->file('img_ur');
//        $img_ur = $request->img_ur; //Puting Image in image Var
        $features->img_ur = $randVal.time().$img_ur->getClientOriginalName();
        $img_ur->move(public_path().'/images/'.'featureImage',$features->img_ur); //Moving Image to images\GalaryImage Folder
//        $randVal = rand(1111,9999);
//        $img = $request->file('newsEventNotice_img');
//        $newsandevent->img_url= $randVal.time().$img->getClientOriginalName();
//        $img->move(public_path().'/images/'.'newseventnoticeImage',$newsandevent->img_url);

        if ($features->save()) {

            $request->session()->flash('success_msg', 'Features  Created Successfully');
            return redirect()->back();
        } else {

            $request->session()->flash('error_msg', 'Oops! Error Occured');
            return redirect()->back();

        }
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
        $features =Feature::find($id);
        return view('backend.features.edit',compact('features'));
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


        $features =Feature::find($id);
        $features->title = $request->title;
        $features->description = $request->description;

        $features->priority = $request->priority;
        if(!empty($request->img_ur))
        {
            $randVal = rand(1111, 9999);
            $img_ur = $request->file('img_ur');
            $features->img_ur = $randVal . time() . $img_ur->getClientOriginalName();
            $img_ur->move(public_path() . '/images/' . 'FeaturesImage', $features->img_ur);
        }


        if($features->save())
        {
            return redirect()->action(
                'Features\FeaturesController@index'
            );
        }else{
            return redirect()->back();
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
