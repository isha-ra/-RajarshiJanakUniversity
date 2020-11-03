@extends('frontend.layout')
@section('content')

    <div class="container-fluid">
        <div class="container-fluid theme-white-background m-0 p-0" style="">
            <div class="container pt-5 mt-5 pb-5 mb-5">
                <div class="row responsive-event" style="">
                    <div class="col-md-3 col-sm-12 p-0">
                        <div class="card-img-top theme-light-blue-background event-block  p-3 theme-white-color" style="">
                            <h2 class="" style="font-size: 40px">Upcomi</h2>
                            <p>Vestibulum tincidunt justo at lectus euismod sagittis.</p>
                            {{--<a href="#" class="rju-btn btn-1 theme-white-color" style=" ">--}}
                                {{--<svg>--}}
                                    {{--<rect x="0" y="0" fill="none" width="100%" height="100%"/>--}}
                                {{--</svg>--}}
                                {{--learn More <i class="fa fa-chevron-right"></i>--}}
                            {{--</a>--}}

                        </div>
                    </div>
                    @foreach($news_event_notices as $event)

                    <div class="col-md-3 col-sm-12 p-0 responsive-event-col">
                        <a href="/eventdetail/{{$event->nen_id}}">

                            <img class="card-img-top event-block" src="{{asset('images/book.jpg')}}" style="position: absolute; z-index: 1 ">
                            <div class="theme-white-color p-2 text-center" style="top: 20px;right: 10px; position: absolute; z-index: 10; background: rgba(0,0,0,0.3);">
                                {{substr($event->created_at,0,10)}}<br/>
                            </div>
                            <div class="event-description theme-white-color" style="">
                                <div class="" style="height: 80px;">
                                    <p class="event-heading">{{$event->title}}</p>
                                </div>
                                <div class="border-top event-footer" style="">
                                    <p class="mb-0">{{$event->time}}</p>
                                    <p class="mt-0">{{$event->location}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                        @endforeach


                </div>

            </div>


            </div>

@endsection