

@extends('backend.includes.layout')
@section('content')

    <div class="container ">
        <div class="row"><h3 class="mx-auto mt-3">Add Experience</h3></div>
        <div class="container">
            <div class="row mx-5 pb-5">
                <div class="col-md-9 mx-auto shadow p-5">
                    <form method="post" action="/experience/store" enctype="multipart/form-data">
            {{@csrf_field()}}
            <div class="form-row">
                {{--<input type="number" name="staff_id"  readonly class="form-control" value="{{$staff->staff_id}}">--}}

                <div class="col-md-6">
                    <label>Staff Name</label>
                    <input type="number" name="staff_id"  readonly class="form-control" value="{{$staff->staff_id}}">
                </div>


                <div class="col-md-6">
                    <label>Designation on previous Organization</label>
                    <input type="text" name="designation" class="form-control" >
                </div>
            </div>

            <div class="form-row">
                <label>Previous Organization</label>
                <input type="text" name="previous_organization"   class="form-control" value="{{old('previous_organization')}} ">
            </div>
            <div class="form-row">
                <div class="col-md-6">
                    <label>Year From </label>
                    <input type="date" name="year_from"   class="form-control" value="{{old('year_from')}} ">
                </div>
                <div class="col-md-6">
                    <label>Year To</label>
                    <input type="date" name="year_to"   class="form-control" value="{{old('year_to')}} ">
                </div>
            </div>


            <div class="form-row py-2">
                <button class="btn btn-outline-info btn-lg" type="submit">Add Staff Experience</button>
            </div>
        </form>
                </div>
            </div>
        </div>
    </div>
@endsection