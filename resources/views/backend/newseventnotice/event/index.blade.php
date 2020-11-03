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
                    <th>Location</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $i=1;
                @endphp
                @foreach($events as $event)
                    <tr >
                        <td data-toggle="modal" data-target="#exampleModal{{$event->event_id}}">{{$i++}}</td>
                        <td><a href="{{asset('images/eventImage').'/'.$event->img_url}}" data-lightbox="event"><img src="{{asset('images/eventImage').'/'.$event->img_url}}" class="table-thumbnail-img"></a> </td>
                        <td data-toggle="modal" data-target="#exampleModal{{$event->event_id}}">{{$event->title}}</td>
                        <td data-toggle="modal" data-target="#exampleModal{{$event->event_id}}">{!! substr($event->description,0,250) !!}...</td>
                        <td data-toggle="modal" data-target="#exampleModal{{$event->event_id}}">{{$event->location}}</td>
                        <td data-toggle="modal" data-target="#exampleModal{{$event->event_id}}">{{$event->date}}</td>
                        <td data-toggle="modal" data-target="#exampleModal{{$event->event_id}}">{{$event->time}}</td>
                        <td>
                            <a href="/event/{{$event->event_id}}/edit"><button class="btn btn-outline-primary my-1" ><i class="fa fa-edit"></i></button></a>
                            {{--<button class="btn btn-danger my-1" ><i class="fa fa-trash"></i></button>--}}
                        </td>
                    </tr>

                    {{--modal to view more--}}
                    <div class="modal fade" id="exampleModal{{$event->event_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{$event->title}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container px-5 ">
                                        <a href="{{asset('images/eventImage').'/'.$event->img_url}}" data-lightbox="event"><img class="px-3 pb-3 table-thumbnail-img" src="{{asset('images/eventImage').'/'.$event->img_url}}" /></a>
                                        <br/>
                                        {!! $event->description !!}
                                        <br/>
                                         Location: {{$event->location}}<br/>
                                        Date:{{$event->date}}
                                         Time: {{$event->time}}

                                    </div>

                                </div>
                                {{--<div class="modal-footer">--}}
                                    {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
                                    {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>
                    {{--modal to view more--}}
                @endforeach
                </tbody>
            </table>

        </div>
    </div>


@stop()