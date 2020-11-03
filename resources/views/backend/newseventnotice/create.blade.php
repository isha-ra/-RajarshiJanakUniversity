@extends('backend.includes.layout')
@section('content')
    <div class="container">
        <div class="row"><h3 class="mx-auto mt-3">Add News/ Notice</h3></div>
        <div class="container">
            <div class="row mx-5 pb-5">
                <div class="col-md-9 mx-auto shadow p-5">
                   <form action="/newseventnotice" method="post" enctype="multipart/form-data">
                       {{@csrf_field()}}
                       <div class="form-row">
                           <div class="col-md-9">
                               {{--<label for="title" class="label">Title</label>--}}
                               <input type="text" class="form-control" id="title" placeholder="Title" name="title"required>
                           </div>
                           <div class="com-md-3">
                               {{--<label for="tag" class="label">Tag</label>--}}
                               <select class="form-control" id="tag" name="tag" required>
                                   <option selected disabled>News/Notice</option>
                                   <option value="news">News</option>
                                   <option value="notice">Notice</option>
                               </select>
                           </div>
                       </div>
                       <div class="col-md-12 pl-0">
                           <label for="description" class="label">Description</label>
                           <textarea id="editor" name="description" class="form-control"   ></textarea>
                       </div>
                       <div class="form-row py-2">
                           <div class="col-md-6 my-auto">
                               <input type="file" id="gallery-photo-add"  name="newsEventNotice_img" class="hide" onchange="readURL(this);" />
                               <label for="gallery-photo-add" id="lable_file" class="btn theme-blue-background theme-white-color">Browse Photo</label>
                           </div>
                       </div>
                       <div class="form-row">
                           <div class="gallery "></div>
                       </div>
                       <div class="form-row py-2">
                           <button class="btn theme-blue-background theme-white-color" type="submit">Add</button>
                       </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
@stop()