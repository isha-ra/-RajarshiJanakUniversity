@extends('backend.includes.layout')
@section('content')

    <div class="container ">
        <div class="row"><h3 class="mx-auto mt-3">Edit Department</h3></div>
        <div class="container">
            <div class="row m-5">
                <div class="col-md-8 mx-auto shadow p-5">
                         <form method="post" action="/department/{{$departments->department_id}}">

            {{@csrf_field()}}
            <div class="form-row">
                <label>Department Name</label>
                <input type="text" name="name" class="form-control" value="{{$departments->name}}">
            </div>
            <div class="form-row">
                <label>Established date</label>
                <input type="date" readonly name="established_date" class="form-control" value="{{$departments->established_date}}">
            </div>

            <div class="form-row">
                <label>Staff id</label>
                <input type="number" name="staff_id" readonly class="form-control" value="{{$departments->staff_id}}">
            </div>

            <div class="form-row">
                <button class="btn btn-outline-info btn-lg my-2" type="submit">Update Department</button>
            </div>
        </form>
                </div>
            </div>
        </div>
    </div>
@endsection