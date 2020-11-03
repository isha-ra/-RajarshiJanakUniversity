

@extends('backend.includes.layout')
@section('content')

    <div class="container ">
        <br>
        {{--{{dd($program_requirements)}}--}}
        <form method="post" action="/researchedit/{{$program_researches->id}}">


            {{@csrf_field()}}
            <div class="form-group">
                <label>Requirement Name</label>
                <input type="text" name="title" class="form-control" value="{{$program_researches->title}}">
            </div>

            <div class="form-group">
                <label>Staff id</label>
                <input type="number" readonly  name="staff_id" class="form-control" value="{{$program_researches->staff_id}}">
            </div>






            <div class="form-group">
                <button class="btn btn-outline-info btn-lg" type="submit">Update Research</button>
            </div>
        </form>
    </div>
@endsection