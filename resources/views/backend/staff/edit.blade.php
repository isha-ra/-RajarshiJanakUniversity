

@extends('backend.includes.layout')
@section('content')

    <div class="container ">
        <div class="row"><h3 class="mx-auto mt-3">Edit Staff</h3></div>
        <div class="container">
            <div class="row mx-5 pb-5">
                <div class="col-md-9 mx-auto shadow p-5">
                        <form method="post" action="/staff/{{$staff->staff_id}}">
                            {{@csrf_field()}}
                            <div class="form-row">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" value="{{$staff->name}}">
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label class="label" >Designation</label>
                                    <input type="text" name="designation" class="form-control" value="{{$staff->designation}}">
                                </div>
                                <div class="col-md-6">
                                    <label class="label">Gender</label>
                                    <select name="gender" class="form-control">Gender
                                        <option disabled selected value="{{$staff->gender}}">{{$staff->gender}}</option>
                                        <option value="male" >male</option>
                                        <option value="female" >female</option>

                                    </select>
                                    {{--<input type="text" name="gender"  class="form-control" value="">--}}
                                </div>
                            </div>
                             <div class="form-row">
                                 <div class="col-md-6">
                                    <label class="label">Address</label>
                                    <input type="text" name="address" class="form-control" value="{{$staff->address}}">
                                 </div>
                                 <div class="col-md-6">
                                     <label class="label">Contact</label>
                                     <input type="number"  name="contact" class="form-control" value="{{$staff->contact}}">
                                 </div>
                             </div>



                            <div class="form-row">
                                <label>Job status</label>
                                <input type="number" name="job_status" readonly  class="form-control" value="{{$staff->job_status}}">
                            </div>

                            <div class="form-row">
                                <label class="label">Type id</label>
                                <input type="number" readonly name="type_id" class="form-control" value="{{$staff->type_id}}">
                            </div>


            <div class="form-row">
                <button class="btn btn-outline-info btn-lg my-2" type="submit">Update Staff Details</button>
            </div>


        </form>
                </div>
            </div>
        </div>
    </div>

@endsection