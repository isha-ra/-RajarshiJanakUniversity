@extends('backend.includes.layout')
@section('content')

    <div class="container ">
        <div class="row"><h3 class="mx-auto mt-3">Add Program</h3></div>
        <div class="container">
            <div class="row m-5">
                <div class="col-md-9 mx-auto shadow p-5">

                    <form method="post" action="/department/in" enctype="multipart/form-data">
            {{@csrf_field()}}
            <div class="form-group">

                <input type="hidden" name="department_id"  readonly class="form-control" value="{{$departments->department_id}}">
            </div>
            <div class="form-row">
                <label>Department name</label>
                <input type="text" name=" "  readonly class="form-control" value="{{$departments->name}}">
            </div>
            <div class="form-row">
                <label>Name</label>
                <input type="text" name="name"  value="{{old('name')}}" class="form-control" placeholder="Add Program Name">
            </div>

            <div class="form-row">
                <div class="col-md-4">
                    <label>Credit hours</label>
                    <input type="number" min="1" name="credit_hours"   class="form-control" value=" {{old('credit_hours')}}" placeholder="Add credit hours">
                </div>
                <div class="col-md-4">
                    <label>Semester </label>
                    <input type="number" min="1" name="semester"   class="form-control" value="{{old('semester')}} " placeholder="Add Semester">
                </div>
                <div class="col-md-4">
                    <label>Years to complete</label>
                    <input type="text" name="years_to_complete"   class="form-control" value="{{old('years_to_complete')}} " placeholder="Add No.Years to complete">
                </div>
            </div>

            <div class="form-row">
                <label>Description</label>
                <textarea type="text" name="description"  class="form-control" id="editor"  placeholder="Add description">{{old('description')}}</textarea>
            </div>

            <div class="form-row">
                <button class="btn btn-outline-info btn-lg my-2" type="submit">Add program</button>
            </div>
        </form>
                </div>
            </div>
        </div>
    </div>
@endsection