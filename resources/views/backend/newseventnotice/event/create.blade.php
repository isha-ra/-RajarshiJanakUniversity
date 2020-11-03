@extends('backend.includes.layout')
@section('content')
    <div class="container">
        <div class="row"><h3 class="mx-auto mt-3">Add Event</h3></div>
        <div class="container">
            <div class="row mx-5 pb-5">
                <div class="col-md-9 mx-auto shadow p-5">
                    <form method="post" action="/event" enctype="multipart/form-data">
                        {{@csrf_field()}}
                        <div class="form-row">
                            <label for="title" class="label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4">
                                <label for="location" class="label">Location</label>
                                <input type="text" name="location" id="location" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="date" class="label">Date</label>
                                <input type="date" class="form-control" id="date" name="date" required/>
                            </div>
                            <div class="col-md-4">
                                <label for="time" class="label">Time</label>
                                <input type="time" name="time" id="time" class="form-control" required>
                            </div>

                        </div>
                        <div class="col-md-12 pl-0">
                            <label for="description" class="label">Description</label>
                            <textarea id="editor" name="description" class="form-control" ></textarea>
                        </div>
                        <div class="form-row py-2">
                            <div class="col-md-6 my-auto">
                                <input type="file" id="gallery-photo-add"  name="event_img" class="hide" onchange="readURL(this);" />
                                <label for="gallery-photo-add" id="lable_file" class="btn theme-blue-background theme-white-color">Browse Photo</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="gallery"></div>
                        </div>
                        <div class="form-row py-2">
                            <button class="btn theme-blue-background theme-white-color" type="submit">Add Event</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop()