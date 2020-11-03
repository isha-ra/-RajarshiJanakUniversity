<?php

namespace App\Http\Controllers\Staff;

use App\Imports\StafftypeImport;
use App\Model\StaffModel\Staff;
use App\Model\StafftypeModel\Stafftype;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class StafftypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $stafftypes = Stafftype::get();
        return view('backend.stafftype.index',compact('stafftypes'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function import(Request $request)
    {
 Excel::import(new StafftypeImport(),$request->file('import_file'));
 return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.stafftype.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:stafftypes',
        ]);

        $stafftypes = new Stafftype();
        $stafftypes->title = $request->title;

        if ($stafftypes->save()) {

            $request->session()->flash('success_msg', 'Staff type Created Successfully');

        } else {

            $request->session()->flash('error_msg', 'Oops! Error Occured');


        }
        return redirect()->action('Staff\StafftypeController@index');
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
        $stafftypes =Stafftype::find($id);
        return view('backend.stafftype.edit',compact('stafftypes'));
    }
    public function update(Request $request, $id)
    {

        $stafftypes =Stafftype::find($id);
        $stafftypes->title = $request->title;

        if($stafftypes->save())
        {
            return redirect()->action(
                'Staff\StafftypeController@index'
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
        $stafftype = Stafftype::find($id);
        $staff = Staff::where('type_id',$id)->get();
        if(count($staff)>0)
        {
            session()->flash('error_msg','Staffs are assigned to this type. So, This Staff type cant be deleted');
            return redirect()->back();
        }elseif($stafftype->delete())
        {
            session()->flash('success_msg','Staff Type Deleted Successfully');
            return redirect()->back();
        }else{
            session()->flash('error_msg','Oops! Error Occured..');
            return redirect()->back();
        }
    }
}
