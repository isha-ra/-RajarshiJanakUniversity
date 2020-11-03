

@extends('backend.includes.layout')
@section('content')

<div class="container ">
    <div class="row"><h3 class="mx-auto mt-3">Add New Staff type</h3></div>
    <div class="container">
        <div class="row mx-5 pb-5">
            <div class="col-md-9 mx-auto shadow p-5">
                <form method="post" action="/stafftype/{{$stafftypes->type_id}}">

                    {{@csrf_field()}}
                    <div class="form-row py-2">
                        <label for="title" class="label">Title</label>
                        <input type="text" name="title" class="form-control"  id="title" value="{{$stafftypes->title}}">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Update Staff types</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection