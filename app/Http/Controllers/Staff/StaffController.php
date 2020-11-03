<?php

namespace App\Http\Controllers\Staff;

use App\Exports\StaffExport;
use App\Model\Department\Department;

use App\Model\StaffModel\Staff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;


class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff = Staff::get();
        return view('backend.staff.index',compact('staff'));

    }
    public function export()
    {
//        return Excel::download(new UsersExport, 'users.xlsx');
        return Excel::download(new StaffExport(),'staffs.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function addexperience()
//    {
//
//        $staff =Staff::find($id);
//        return view('backend.staff.addexperience',compact('staff'));
//    }


    public function create()
    {
        return view('backend.staff.create');
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
            'name' => 'required',
            'address' => 'required',
            'designation' => 'required',
            'gender' => 'required',

            'contact' => 'required',
            'type_id' => 'required',

        ]);

        $staff = new Staff();
        $staff->name = $request->name;
        $randVal = rand(1111,9999);
        $img = $request->file('staff_img');
        $staff->staff_img= $randVal.time().$img->getClientOriginalName();
        $img->move(public_path().'/images/'.'staffImage',$staff->staff_img);
        $staff->address =$request->address;
        $staff->designation=$request->designation;
        $staff->gender=$request->gender;

        $staff->contact=$request->contact;
        $staff->type_id=$request->type_id;




        if ($staff->save()) {

            $request->session()->flash('success_msg', 'Staff  Created Successfully');
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
        $staff = Staff::find($id);
        return view('backend.staff.edit',compact('staff'));
    }
    public function update(Request $request, $id)
    {


        $staff = Staff::find($id);
        $staff->name = $request->name;


        $staff->address = $request->address;
        $staff->designation = $request->designation;
        $staff->job_status = $request->job_status;
        $staff->contact = $request->contact;
        $staff->gender = $request->gender;
        $staff->type_id = $request->type_id;








        if($staff->save())
        {
            return redirect()->action(
                'Staff\StaffController@index'
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
        $staff = Staff::find($id);
        $departments = Department::where('staff_id',$id)->get();
        if(count($departments)>0)
        {
            session()->flash('error_msg','Department is assigned to this staff. So, This Staff type cant be deleted');
            return redirect()->back();
        }elseif($staff->delete())
        {
            session()->flash('success_msg','Staff its Experiences and education Deleted Successfully ');
            return redirect()->back();
        }else{
            session()->flash('error_msg','Oops! Error Occured..');
            return redirect()->back();
        }
    }

}
