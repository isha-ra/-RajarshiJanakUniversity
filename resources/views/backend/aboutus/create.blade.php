@extends('backend.includes.layout')

@section('content')

    <div class="pl-5" >
        <div class="row"><h3 class="mx-auto mt-3">Add About Us</h3></div>
        <div class="container">
            <div class="row mx-5 pb-5">
                <div class="col-md-9 mx-auto shadow p-5">
                    <form action="/aboutus" method="post" enctype="multipart/form-data">
                        {{@csrf_field()}}
                        <div class="form-row">
                            <div class="col-md-6 pl-0">
                                <label for="type" class="label">Type</label>
                                <select class="form-control" id="type" name="type">
                                    <option selected disabled>Select Type</option>
                                    <option value="introduction">Introduction</option>
                                    <option value="history">Our History</option>
                                    <option value="principalVoice">Principal's Voice</option>
                                </select>
                            </div>
                        </div>
                        {{--<div class="form-row">--}}
                            {{--<label for="title" class="label">Title</label>--}}
                            {{--<input type="text" class="form-control" id="title" name="title">--}}
                        {{--</div>--}}
                        <div class="col-md-12 pl-0">
                            <label for="description" class="label">Description</label>
                            <textarea id="editor" name="description" class="form-control"></textarea>
                        </div>
                        <div class="form-row py-2">
                            <div class="col-md-6 my-auto">
                                <input type="file" id="gallery-photo-add"  name="aboutus_img" class="hide" onchange="readURL(this);" />
                                <label for="gallery-photo-add" id="lable_file" class="btn theme-blue-background theme-white-color">Browse Photo</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="gallery"></div>
                        </div>
                        <div class="form-row py-2">
                            <button class="btn theme-blue-background theme-white-color" type="submit">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection()