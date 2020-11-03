

@extends('backend.includes.layout')
@section('content')

    <div class="container ">
        <br>
        {{--{{dd($program_requirements)}}--}}
        <form method="post" action="/requirementedit/{{$program_requirements->programrequirement_id}}">


            {{@csrf_field()}}
            <div class="form-group">
                <label>Requirement Name</label>
                <input type="text" name="requirement_name" class="form-control" value="{{$program_requirements->requirement_name}}">
            </div>
            <div class="col-md-12">
                <label for="description" class="label">Description</label>
                <textarea id="editor" name="description" class="form-control" rows="100" cols="80" >{{$program_requirements->description}}</textarea>
            </div>






            <div class="form-group">
                <button class="btn btn-outline-info btn-lg" type="submit">Update Requirement</button>
            </div>
        </form>
    </div>
@endsection