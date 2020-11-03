@extends('backend.includes.layout')
@section('content')
    <div class="container">
        <div class="row"><h3 class="mx-auto mt-3">Add New Features</h3></div>
        <div class="container">
            <div class="row mx-5 pb-5">
                <div class="col-md-9 mx-auto shadow p-5">

                    <form method="post" action="/features/insert" enctype="multipart/form-data">
                        {{@csrf_field()}}
                        <div class="form-row py-2">
                            <label for="title" class="label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter the Feature Title">
                        </div>
                        <div class="form-row py-2">
                            <div class="col-md-6">
                            <div class="">
                                <input type="file" id="gallery-photo-add" name="img_ur" class="hide" onchange="readURL(this);" />
                                <label for="gallery-photo-add" id="lable_file"  class="btn theme-blue-background theme-white-color">Browse Photo</label>
                            </div>
                            <div class="form-row ">
                                <div class="gallery"></div>
                            </div>
                            </div>
                            <div class="col-md-6">
                                <label for="priority" class="label">Priority</label>
                                <select class="form-control"  name="priority" >
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <label for="description" class="label">Description</label>
                            {{--<textarea class="form-control text-editor" name="text-editor" id="text-editor" rows="10" cols="80" ></textarea>--}}
                            <textarea id="editor" name="description" class="form-control" rows="50" cols="80" ></textarea>
                        </div>
                        <div class="form-row py-2">
                            <button class="btn theme-blue-background theme-white-color" type="submit">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection