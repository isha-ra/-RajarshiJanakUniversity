@extends('backend.includes.layout')
@section('content')


    <div class="container">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Tag</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $i=1;
                @endphp
                @foreach($newseventnotices as $newseventnotice)
                <tr>
                    <td data-toggle="modal" data-target="#exampleModal{{$newseventnotice->nen_id}}">{{$i++}}</td>
                    <td><a href="{{asset('images/newseventnoticeImage').'/'.$newseventnotice->img_url}}" data-lightbox="news"><img src="{{asset('images/newseventnoticeImage').'/'.$newseventnotice->img_url}}" class="table-thumbnail-img" ></a> </td>
                    <td data-toggle="modal" data-target="#exampleModal{{$newseventnotice->nen_id}}">{{$newseventnotice->title}}</td>
                    <td data-toggle="modal" data-target="#exampleModal{{$newseventnotice->nen_id}}">{!! substr($newseventnotice->description,0,250) !!}..</td>
                    <td data-toggle="modal" data-target="#exampleModal{{$newseventnotice->nen_id}}" class="text-capitalize" >{{$newseventnotice->tag}}</td>
                    <td>
                        <a href="/newseventnotice/{{$newseventnotice->nen_id}}/edit"><button class="btn btn-outline-primary my-1" ><i class="fa fa-edit"></i></button></a>
                        {{--<button class="btn btn-danger my-1" ><i class="fa fa-trash"></i></button>--}}
                    </td>
                </tr>
                <div class="modal fade" id="exampleModal{{ $newseventnotice->nen_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{ $newseventnotice->title}} </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container p-5">
                                    <a href="{{asset('images/newseventnoticeImage').'/'.$newseventnotice->img_url}}" data-lightbox="news"><img src="{{asset('images/newseventnoticeImage').'/'.$newseventnotice->img_url}}" class="table-thumbnail-img" ></a>
                                    <br/>
                                    {!! $newseventnotice->description !!}
                                    <br/>
                                    Tag: {{$newseventnotice->tag}}


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>


@stop()