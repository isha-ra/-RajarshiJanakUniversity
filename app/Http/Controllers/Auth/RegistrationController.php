<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Sentinel;
use App\Http\Controllers\Controller;

class RegistrationController extends Controller
{

    public function register()
    {
        return view('backend.authentication.register');
    }

    public function postregister(Request $request){
        $request->validate([
            'name' => 'required|unique:users',
             'email' => 'required',
            'password' => 'required|confirmed',
        ]);

//        $user =Sentinel::registerAndActivate($request->all());

        $credentials = [
            'name' => $request->name,
            'email' => $request->email,
            'password'=>$request->password,

        ];
//
        $users = Sentinel::registerAndActivate($credentials);
        return view('backend.authentication.login');





    }
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
        //
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
        //
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
