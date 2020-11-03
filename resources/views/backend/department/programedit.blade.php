

@extends('backend.includes.layout')
@section('content')

    <div class="container ">
        <div class="row"><h3 class="mx-auto mt-3">Edit Program</h3></div>
        <div class="container">
            <div class="row m-5">
                <div class="col-md-8 mx-auto shadow p-5">
                    <form method="post" action="/program/{{$programs->program_id}}">

                        {{@csrf_field()}}
                        <div class="form-row">
                            <label>Program Name</label>
                            <input type="text" name="name" class="form-control" value="{{$programs->name}}">
                        </div>
                        <div class="form-row">
                            <div class="col-md-4">
                                <label>Credit hours</label>
                                <input type="number"  name="credit_hours" class="form-control" value="{{$programs->credit_hours}}">
                            </div>
                            <div class="col-md-4">
                                <label>Semester</label>
                                <input type="number"  name="semester" class="form-control" value="{{$programs->semester}}">
                            </div>
                            <div class="col-md-4">
                                <label>Year to complete</label>
                                <input type="text"  name="years_to_complete" class="form-control" value="{{$programs->years_to_complete}}">
                            </div>
                        </div>

                        <div class="form-row">
                            <label for="description" class="label">Description</label>
                            <textarea id="editor" name="description" class="form-control" rows="100" cols="80" >{{$programs->description}}</textarea>
                        </div>



                        <div class="form-row">
                            <button class="btn btn-outline-info btn-lg my-1" type="submit">Update Programs</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection