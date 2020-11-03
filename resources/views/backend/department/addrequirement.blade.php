

@extends('backend.includes.layout')
@section('content')

    <div class="container ">
        <div class="row"><h3 class="mx-auto mt-3">Add Requirements</h3></div>
        <div class="container">
            <div class="row m-5">
                <div class="col-md-8 mx-auto shadow p-5">
                    <form method="post" action="/department/ins" enctype="multipart/form-data">
                        {{@csrf_field()}}
                        <div class="form-group">

                            <input type="hidden" name="program_id"  readonly class="form-control" value="{{$programs->program_id}}">
                        </div>
                        <div class="form-row">
                            <label>Program name</label>
                            <input type="text" name=" "  readonly class="form-control" value="{{$programs->name}}">
                        </div>
                        <div class="form-row">
                            <label>Requirement Name</label>
                            <input type="text" required  name="requirement_name"  class="form-control" placeholder="Add name">
                        </div>
                        <div class="form-row">
                            <label>Description</label>
                            <textarea type="text" id="editor"   name="description"  class="form-control" placeholder="Add description">
                            </textarea>
                        </div>


                        <div class="form-row">
                            <button class="btn btn-outline-info btn-lg my-1" type="submit">Add Program Requirement</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection