@extends('backend.includes.layout')
@section('content')
    <div class="container">
        <div class="row"><h3 class="mx-auto mt-3">Update News/ Notice</h3></div>
        <div class="container">
            <div class="row mx-5 pb-5">
                <div class="col-md-9 mx-auto shadow p-5">
                    <form action="/newseventnotice/{{$newseventnotice->nen_id}}" method="post" enctype="multipart/form-data">
                        {{@csrf_field()}}
                        <input type="hidden"name="_method" value="PUT">
                        <div class="form-row">
                            <div class="col-md-9">
                                <label for="title" class="label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{$newseventnotice->title}}">
                            </div>
                            <div class="col-md-3">
                                <label for="tag" class="label">Tag: &nbsp;</label>
                                <select class="form-control" id="tag" name="tag">
                                    <option hidden selected value=" {{$newseventnotice->tag}}"> {{$newseventnotice->tag}}</option>
                                    <option value="news">News</option>
                                    <option value="notice">Notice</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="description" class="label">Description</label>
                            <textarea id="editor" name="description" class="form-control" rows="100" cols="80" >{{$newseventnotice->description}}</textarea>
                        </div>
                        <div class="form-row py-2">
                            <div class="col-md-6 my-auto">
                                <input type="file" id="gallery-photo-add" name="newsEventNotice_img" class="hide" onchange="readURL(this);" />
                                <label for="gallery-photo-add" id="lable_file" class="btn theme-blue-background theme-white-color">Browse Photo</label>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <img src="{{asset('images/newseventnoticeImage').'/'.$newseventnotice->img_url}}" class="table-thumbnail-img">
                            </div>
                            <div class="col-md-6">
                            <div class="gallery"></div>
                            </div>
                        </div>
                        <div class="form-row py-2">
                            <button class="btn theme-blue-background theme-white-color" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop()