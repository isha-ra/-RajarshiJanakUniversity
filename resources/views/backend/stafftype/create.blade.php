@extends('backend.includes.layout')
@section('content')
    <div class="container">
        <div class="row"><h3 class="mx-auto mt-3">Add New Staff type</h3></div>
        <div class="container">
            <div class="row mx-5 pb-5">
                <div class="col-md-9 mx-auto shadow p-5">

                        <form method="post" action="/stafftype/insert" enctype="multipart/form-data">
                            {{@csrf_field()}}
                        <div class="form-row py-2">
                            <label for="title" class="label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter staff title">
                        </div>

                        <div class="form-row py-2">
                            <button class="btn theme-blue-background theme-white-color" type="submit">Add Staff Type</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection