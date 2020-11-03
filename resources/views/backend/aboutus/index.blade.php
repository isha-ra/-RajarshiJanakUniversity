@extends('backend.includes.layout')
@section('content')
    <div class="container">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $i=1;
                @endphp
                @foreach($aboutuses as $aboutus)
                    <tr>
                        <td data-toggle="modal" data-target="#exampleModal{{$aboutus->aboutus_id}}" >{{$i++}}</td>
                        <td><a href="{{asset('images/aboutusImage').'/'.$aboutus->img_url}}" data-lightbox="aboutus"><img src="{{asset('images/aboutusImage').'/'.$aboutus->img_url}}" class="table-thumbnail-img" /></a> </td>
                        <td data-toggle="modal" data-target="#exampleModal{{$aboutus->aboutus_id}}">{!! substr($aboutus->description, 0, 250) !!}...</td>
                        <td class="text-capitalize" data-toggle="modal" data-target="#exampleModal{{$aboutus->aboutus_id}}">{{$aboutus->type}}</td>
                        <td>
                            <a href="/aboutus/{{$aboutus->aboutus_id}}/edit"><button class="btn btn-success mt-2 "><i class="fa fa-edit"></i></button></a>

                            <button class="btn btn-danger mt-2"><i class="fa fa-trash-o"></i></button>
                        </td>
                    </tr>
                    <div class="modal fade" id="exampleModal{{$aboutus->aboutus_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-capitalize" id="exampleModalLabel">{{$aboutus->type}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container p-5">
                                        <a href="{{asset('images/aboutusImage').'/'.$aboutus->img_url}}" data-lightbox="aboutus"><img src="{{asset('images/aboutusImage').'/'.$aboutus->img_url}}" class="table-thumbnail-img" ></a>
                                        <br/>
                                        {!! $aboutus->description !!}
                                        <br/>
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