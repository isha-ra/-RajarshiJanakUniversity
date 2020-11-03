@extends('backend.includes.layout')
@section('content')

    <div class="container">
        <div class="row"><h3 class="mx-auto mt-3">Edit Features</h3></div>
        <div class="container">
            <div class="row mx-5 pb-5">
                <div class="col-md-9 mx-auto shadow p-5">
                    <form action="/features/{{$features->feature_id}}/" method="post" enctype="multipart/form-data">
                        {{@csrf_field()}}


                        <div class="form-row">
                            <label for="title" class="label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{$features->title}}">
                        </div>
                        <div class="col-md-12">
                            <label for="description" class="label">Description</label>
                            <textarea id="editor" name="description" class="form-control" rows="100" cols="80" >{{$features->description}}</textarea>
                        </div>
                        <div class="form-row py-2">
                            <div class="col-md-6 my-auto">
                                <input type="file" id="gallery-photo-add" name="img_ur" class="hide" onchange="readURL(this);" />
                                <label for="gallery-photo-add" id="lable_file" class="btn theme-blue-background theme-white-color">Browse Photo</label>
                            </div>
                            <div class="col-md-6">
                                <label for="priroty" class="label">Priroty</label>
                                <input type="number" class="form-control" id="priroty" name="priority" value="{{$features->priority}}">
                            </div>

                        </div>
                        <div class="form-row py-2">
                            <div class="col-md-6">
                                <img src="{{asset('images/featureImage').'/'.$features->img_ur}}" class="table-thumbnail-img">
                            </div>
                            <div class="col-md-6">
                                <div class="gallery"></div>
                            </div>

                        </div>

                        <div class="form-row py-2">
                            <button class="btn theme-blue-background theme-white-color" type="submit">Update Features</button>
                        </div>
                    </form>



                </div>
            </div>
        </div>
    </div>


@stop()