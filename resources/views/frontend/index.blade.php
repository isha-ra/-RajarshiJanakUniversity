@extends('frontend.layout')

@section('content')
    {{------------carousel------------------}}
    <div class="container-fluid  p-0">
        @php
            $i=1;
        @endphp
        <div id="carouselControls" class="carousel slide" data-ride="carousel" >
            <div class="carousel-inner">
                @foreach($sliders as $slider)
                    @php
                        if($i==1)
                        {
                            $x= "active";
                        }else
                        {
                            $x="";
                        }
                    $i++;
                    @endphp
                <div class="carousel-item {{$x}}">
                    <img class="d-block w-100" src="{{asset('images/sliderImage').'/'.$slider->img_url}}" alt="First slide">
                </div>
                @endforeach
                {{--<div class="carousel-item">--}}
                    {{--<img class="d-block w-100" src="{{asset('images/book.jpg')}}" alt="Second slide">--}}
                {{--</div>--}}
                {{--<div class="carousel-item">--}}
                    {{--<img class="d-block w-100" src="{{asset('images/janaki.jpg')}}" alt="Third slide">--}}
                {{--</div>--}}
            </div>
            <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        {{---------------------News------------------------}}
        <div class="col-md-4 offset-md-1 news col-sm-12" style="" >
            <div class="container" style="overflow: hidden; height: 591px;" id="news-container">
               <div style="height: 470px; overflow: hidden">
                   <ul class="list-unstyled" id="news-list">
                       <li class="border-bottom">
                           <div class="media">
                               <img class="mr-3" src="{{asset('images/logo.jpg')}}" style="height: 80px; width: 80px;" alt="Generic placeholder image">
                               <div class="media-body">
                                   <h5 class="mt-0">Media heading</h5>
                                   Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                               </div>
                           </div>
                       </li>
                       <li class="border-bottom">
                           <div class="media">
                               <img class="mr-3" src="{{asset('images/logo.jpg')}}" style="height: 80px; width: 80px;" alt="Generic placeholder image">
                               <div class="media-body">
                                   <h5 class="mt-0">Media heading</h5>
                                   Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                               </div>
                           </div>
                       </li>
                       <li class="border-bottom">
                           <div class="media">
                               <img class="mr-3" src="{{asset('images/logo.jpg')}}" style="height: 80px; width: 80px;" alt="Generic placeholder image">
                               <div class="media-body">
                                   <h5 class="mt-0">Media heading</h5>
                                   Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                               </div>
                           </div>
                       </li>
                       <li class="border-bottom">
                           <div class="media">
                               <img class="mr-3" src="{{asset('images/logo.jpg')}}" style="height: 80px; width: 80px;" alt="Generic placeholder image">
                               <div class="media-body">
                                   <h5 class="mt-0">Media heading</h5>
                                   Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                               </div>
                           </div>
                       </li>
                       <li class="border-bottom">
                           <div class="media">
                               <img class="mr-3" src="{{asset('images/logo.jpg')}}" style="height: 80px; width: 80px;" alt="Generic placeholder image">
                               <div class="media-body">
                                   <h5 class="mt-0">Media heading</h5>
                                   Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                               </div>
                           </div>
                       </li>
                       <li class="border-bottom">
                           <div class="media">
                               <img class="mr-3" src="{{asset('images/logo.jpg')}}" style="height: 80px; width: 80px;" alt="Generic placeholder image">
                               <div class="media-body">
                                   <h5 class="mt-0">Media heading</h5>
                                   Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                               </div>
                           </div>
                       </li>
                       <li class="border-bottom">
                           <div class="media">
                               <img class="mr-3" src="{{asset('images/logo.jpg')}}" style="height: 80px; width: 80px;" alt="Generic placeholder image">
                               <div class="media-body">
                                   <h5 class="mt-0">Media heading</h5>
                                   Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                               </div>
                           </div>
                       </li>
                       <li class="border-bottom">
                           <div class="media">
                               <img class="mr-3" src="{{asset('images/logo.jpg')}}" style="height: 80px; width: 80px;" alt="Generic placeholder image">
                               <div class="media-body">
                                   <h5 class="mt-0">Media heading</h5>
                                   Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                               </div>
                           </div>
                       </li>
                   </ul>
               </div>
                <div class="mt-5">
                    <a href="#" class="rju-btn-blue btn-2 mt-5" style=" ">
                        <svg>
                            <rect x="0" y="0" fill="none" width="100%" height="100%"/>
                        </svg>
                        View More <i class="fa fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
        {{--------------------News------------------------}}
    </div>
    {{---------------carousel-----------------}}

    {{--<div class="container-fluid theme-light-blue-background feature-container">--}}
        {{--<div class="container theme-white-color">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-4">--}}
                    {{--<div class="feature-wrapper">--}}
                        {{--<div class="feature-heading">--}}
                            {{--<h1 style="font-size: 26px;">Feature Number 1</h1>--}}
                        {{--</div>--}}
                        {{--<div class="feature-body text-justify">--}}
                            {{--<p>University is an simple yet complete solution for you to build an education or online course, training website. The design is innovative and supper modern so you will have a professional web page.</p>--}}
                        {{--</div>--}}
                        {{--<div class="feature-footer" style="">--}}
                            {{--<a href="#" class="rju-btn btn-1 theme-white-color" style=" ">--}}
                                {{--<svg>--}}
                                    {{--<rect x="0" y="0" fill="none" width="100%" height="100%"/>--}}
                                {{--</svg>--}}
                                {{--learn More <i class="fa fa-chevron-right"></i>--}}
                            {{--</a>--}}
                            {{--<a href="#"><button class="btn rju-btn">Learn More <i class="fa fa-chevron-right"></i></button></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4">--}}
                    {{--<div class="feature-wrapper">--}}
                        {{--<div class="feature-heading">--}}
                            {{--<h1 style="font-size: 26px;">Feature Number 1</h1>--}}
                        {{--</div>--}}
                        {{--<div class="feature-body text-justify">--}}
                            {{--<p>University is an simple yet complete solution for you to build an education or online course, training website. The design is innovative and supper modern so you will have a professional web page.</p>--}}
                        {{--</div>--}}
                        {{--<div class="feature-footer" style="">--}}
                            {{--<a href="#" class="rju-btn btn-1 theme-white-color" style=" ">--}}
                                {{--<svg>--}}
                                    {{--<rect x="0" y="0" fill="none" width="100%" height="100%"/>--}}
                                {{--</svg>--}}
                                {{--learn More<i class="fa fa-chevron-right"></i>--}}
                            {{--</a>--}}
                            {{--<a href="#"><button class="btn rju-btn">Learn More <i class="fa fa-chevron-right"></i></button></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4">--}}
                    {{--<div class="feature-wrapper">--}}
                        {{--<div class="feature-heading">--}}
                            {{--<h1 style="font-size: 26px;">Feature Number 1</h1>--}}
                        {{--</div>--}}
                        {{--<div class="feature-body text-justify">--}}
                            {{--<p>University is an simple yet complete solution for you to build an education or online course, training website. The design is innovative and supper modern so you will have a professional web page.</p>--}}
                        {{--</div>--}}
                        {{--<div class="feature-footer" style="">--}}
                            {{--<a href="#" class="rju-btn btn-1 theme-white-color" style=" ">--}}
                                {{--<svg>--}}
                                    {{--<rect x="0" y="0" fill="none" width="100%" height="100%"/>--}}
                                {{--</svg>--}}
                                {{--learn More<i class="fa fa-chevron-right"></i>--}}
                            {{--</a>--}}
                            {{--<a href="#"><button class="btn rju-btn">Learn More <i class="fa fa-chevron-right"></i></button></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}



            {{--</div>--}}
        {{--</div>--}}


    {{--</div>--}}

    {{-----------------features-------------------------------}}
    <div class="container-fluid theme-light-blue-background feature-container">
        <div class="container theme-white-color">
            {{--@php--}}
                {{--$features = App\Model\FeatureModel\Feature::paginate(3);--}}
            {{--@endphp--}}
            <div class="row">
                @foreach($features as $row)
                <div class="col-md-4">
                    <div class="feature-wrapper">

                            <div class="feature-heading">
                                <h1 style="font-size: 26px;">
                                    {{$row->title}}
                                </h1>
                            </div>
                            <div class="feature-body text-justify">
                                <p>
                                    {!! substr($row->description,0,200) !!}..
                                </p>
                            </div>
                            <div class="feature-footer" style="">
                                {{--<a href="/features_detail/{{$row->feature_id}}" class="rju-btn btn-1 theme-white-color" style=" ">--}}
                                <a href="/features_detail/{{$row->feature_id}}" class="rju-btn btn-1 theme-white-color" style=" ">
                                {{--<a href="/about#feature" class="rju-btn btn-1 theme-white-color" style=" ">--}}
                                    <svg>
                                        <rect x="0" y="0" fill="none" width="100%" height="100%"/>
                                    </svg>



                                    learn More <i class="fa fa-chevron-right"></i>
                                </a>
                                {{--<a href="#"><button class="btn rju-btn">Learn More <i class="fa fa-chevron-right"></i></button></a>--}}
                            </div>



                    </div>
                </div>
                @endforeach


        </div>


        </div>
    </div>
    {{------------------------features-----------------------}}

    {{-------------------------------featured Course----------------}}
    <div class="container-fluid m-0 p-0" style="background-image: linear-gradient(0deg,rgba(52,73,94,0.8),rgba(52,73,94,0.8)),url('{{asset('images/background.jpg')}}'); min-height: 600px; background-attachment: fixed; background-repeat: no-repeat;">
        <div class="container" style="padding: 8% 3% 8% 3%;">
            <div class="row m-0 p-0 text-center">
                <div class="container text-center mb-5"> <h3 class="theme-white-color">Featured Courses</h3></div>
            </div>
            <div class="row m-0 p-0">
                @foreach($departments as $department)
                <div class="col-md-4">
                    <div class="card card-background-0 border-0 ">
                        <div class="card-img-top" style="">
                            <img src="{{asset('images/book.jpg')}}" style="height: 200px; width: 100%; object-fit: cover; border-radius: 3px;">
                        </div>
                        <div class="card-body theme-white-color px-0" >
                            <h5>{{$department->name}}</h5>
                            {{--<span>{{$course->credit_hours}} hours</span>--}}
                        </div>
                    </div>
                </div>
                @endforeach
                {{--<div class="col-md-4">--}}
                    {{--<div class="card card-background-0 border-0 ">--}}
                        {{--<div class="card-img-top" style="">--}}
                            {{--<img src="{{asset('images/book.jpg')}}" style="height: 200px; width: 100%; object-fit: cover; border-radius: 3px;">--}}
                        {{--</div>--}}
                        {{--<div class="card-body theme-white-color px-0" >--}}
                            {{--<h5>Bachelor's in Computer Science</h5>--}}
                            {{--<span> 233 Credit Hours</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4">--}}
                    {{--<div class="card card-background-0 border-0 ">--}}
                        {{--<div class="card-img-top" style="">--}}
                            {{--<img src="{{asset('images/book.jpg')}}" style="height: 200px; width: 100%; object-fit: cover; border-radius: 3px;">--}}
                        {{--</div>--}}
                        {{--<div class="card-body theme-white-color px-0" >--}}
                            {{--<h5>Bachelor's in Computer Science</h5>--}}
                            {{--<span> 233 Credit Hours</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

            </div>
            <div class="row m-0 p-0 text-center">
                <div class="container text-center mt-5">
                    <a href="/departments" class="rju-btn btn-1 theme-white-color" style=" ">
                        <svg>
                            <rect x="0" y="0" fill="none" width="100%" height="100%"/>
                        </svg>
                        learn More <i class="fa fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>


    </div>
    {{-------------------feature Course-----------------------------}}

    {{------------------------Events----------------}}
    <div class="container-fluid theme-white-background m-0 p-0" style="">
        <div class="container pt-5 mt-5 pb-5 mb-5">
            <div class="row responsive-event" style="">
                <div class="col-md-3 col-sm-12 p-0">
                    <div class="card-img-top theme-light-blue-background event-block  p-3 theme-white-color" style="">
                        <h2 class="" style="font-size: 40px">Upcoming Events</h2>
                        @foreach($events as $event)
{{--                        <p>{{$event->title}}</p>--}}
                        <a href="/events" class="rju-btn btn-1 theme-white-color" style=" ">
                            <svg>
                                <rect x="0" y="0" fill="none" width="100%" height="100%"/>
                            </svg>
                            learn More <i class="fa fa-chevron-right"></i>
                        </a>
@endforeach
                    </div>
                </div>
                    @foreach($events as $event)
                        {{--<a href="/allevent/{{$event->event_id}}" >--}}
                     <div class="col-md-3 col-sm-12 p-0 responsive-event-col">
                         <a href="" >
                             <img class="card-img-top event-block" src="{{asset('images/eventImage').'/'.$event->img_url}}" style="position: absolute; z-index: 1 " alt="Event Photo." >
                            <div class="theme-white-color p-2 text-center" style="top: 20px;right: 10px; position: absolute; z-index: 10; background: rgba(0,0,0,0.3);">
                            @php
                                $full_date = strtotime($event->date);
                                $month = date('m',$full_date);
                                $date = date('d', $full_date);
                            @endphp
                            {{--@if($month == 1) JAN @elseif($month == 2) FEB @elseif($month == 3) @elseif($month == 2)--}}
                             @switch ($month)
                                 @case(1)
                                    Jan
                                    @break
                                 @case(2)
                                    Feb
                                 @break
                                 @case(3)
                                    Mar
                                 @break
                                 @case(4)
                                    Apr
                                 @break
                                 @case(5)
                                    May
                                 @break
                                 @case(6)
                                    Jun
                                 @break
                                 @case(7)
                                    Jul
                                 @break
                                 @case(8)
                                    Aug
                                 @break
                                 @case(9)
                                    Sept
                                 @break
                                 @case(10)
                                    Oct
                                 @break
                                 @case(11)
                                    Nov
                                 @break
                                 @case(12)
                                    Dec
                                 @break
                            @endswitch
                            <br/> {{$date}}
                        </div>
                            <div class="event-description theme-white-color" style="">
                                 <div class="" style="height: 80px;">

                                     <a href="/allevent/{{$event->event_id}}" >

                                         <p class="event-heading text-capitalize">{!! $event->title !!}</a></p>
                        </div>
                                 <div class="border-top event-footer" style="">
                                     @php
                                        $tm = $event->time;
                                        $time= date("h:i a", strtotime($tm));
                                     @endphp
                                    <p class="mb-0">{{$time}}</p>

                                    <p class="mt-0 text-capitalize">{{$event->location}}</p>
                        </div>
                            </div>
                         </a>
                     </div>
                        {{--</a>--}}
                @endforeach

                {{--<div class="col-md-3 col-sm-12  p-0 responsive-event-col ">--}}
                    {{--<img class="card-img-top event-block" src="{{asset('images/background.jpg')}}" style="position: absolute; z-index: 1 ">--}}
                    {{--<div class="theme-white-color p-2 text-center" style="top: 20px;right: 10px; position: absolute; z-index: 10; background: rgba(0,0,0,0.3);">--}}

                        {{--June<br/> 22--}}
                    {{--</div>--}}
                    {{--<div class="event-description theme-white-color" style="">--}}
                        {{--<div class="" style="height: 80px;">--}}
                            {{--<p class="event-heading">Vestibulum tincidunt justo otsuj dunt tinc eyr.</p>--}}
                        {{--</div>--}}
                        {{--<div class="border-top event-footer" style="">--}}
                            {{--<p class="mb-0">8:00 Am</p>--}}
                            {{--<p class="mt-0">KU Labground</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-3 col-sm-12 p-0 responsive-event-col">--}}
                    {{--<img class="card-img-top event-block" src="{{asset('images/book.jpg')}}" style="position: absolute; z-index: 1 ">--}}
                    {{--<div class="theme-white-color p-2 text-center" style="top: 20px;right: 10px; position: absolute; z-index: 10; background: rgba(0,0,0,0.3);">--}}
                        {{--June<br/> 22--}}
                    {{--</div>--}}
                    {{--<div class="event-description theme-white-color" style="">--}}
                        {{--<div class="" style="height: 80px;">--}}
                            {{--<p class="event-heading">Vestibulum tincidunt justo otsuj dunt tinc eyr.</p>--}}
                        {{--</div>--}}
                        {{--<div class="border-top event-footer" style="">--}}
                            {{--<p class="mb-0">8:00 Am</p>--}}
                            {{--<p class="mt-0">KU Labground</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
            {{--<div class="row responsive-event" style="">--}}
                {{--<div class="col-md-3 col-sm-12 p-0 responsive-event-col ">--}}
                    {{--<img class="card-img-top event-block" src="{{asset('images/book.jpg')}}" style="position: absolute; z-index: 1 ">--}}
                    {{--<div class="theme-white-color p-2 text-center" style="top: 20px;right: 10px; position: absolute; z-index: 10; background: rgba(0,0,0,0.3);">--}}
                        {{--June<br/> 22--}}
                    {{--</div>--}}
                    {{--<div class="event-description theme-white-color" style="">--}}
                        {{--<div class="" style="height: 80px;">--}}
                            {{--<p class="event-heading">Vestibulum tincidunt justo otsuj dunt tinc eyr.</p>--}}
                        {{--</div>--}}
                        {{--<div class="border-top event-footer" style="">--}}
                            {{--<p class="mb-0">8:00 Am</p>--}}
                            {{--<p class="mt-0">KU Labground</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-3 col-sm-12  p-0 responsive-event-col ">--}}
                    {{--<img class="card-img-top event-block" src="{{asset('images/background.jpg')}}" style="position: absolute; z-index: 1 ">--}}
                    {{--<div class="theme-white-color p-2 text-center" style="top: 20px;right: 10px; position: absolute; z-index: 10; background: rgba(0,0,0,0.3);">--}}
                        {{--June<br/> 22--}}
                    {{--</div>--}}
                    {{--<div class="event-description theme-white-color" style="">--}}
                        {{--<div class="" style="height: 80px;">--}}
                            {{--<p class="event-heading">Vestibulum tincidunt justo otsuj dunt tinc eyr.</p>--}}
                        {{--</div>--}}
                        {{--<div class="border-top event-footer" style="">--}}
                            {{--<p class="mb-0">8:00 Am</p>--}}
                            {{--<p class="mt-0">KU Labground</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-3 col-sm-12 p-0 responsive-event-col ">--}}
                    {{--<img class="card-img-top event-block" src="{{asset('images/book.jpg')}}" style="position: absolute; z-index: 1 ">--}}
                    {{--<div class="theme-white-color p-2 text-center" style="top: 20px;right: 10px; position: absolute; z-index: 10; background: rgba(0,0,0,0.3);">--}}
                        {{--June<br/> 22--}}
                    {{--</div>--}}
                    {{--<div class="event-description theme-white-color" style="">--}}
                        {{--<div class="" style="height: 80px;">--}}
                            {{--<p class="event-heading">Vestibulum tincidunt justo otsuj dunt tinc eyr.</p>--}}
                        {{--</div>--}}
                        {{--<div class="border-top event-footer" style="">--}}
                            {{--<p class="mb-0">8:00 Am</p>--}}
                            {{--<p class="mt-0">KU Labground</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-3 col-sm-12 p-0 responsive-event-col ">--}}
                    {{--<img class="card-img-top event-block" src="{{asset('images/book.jpg')}}" style="position: absolute; z-index: 1 ">--}}
                    {{--<div class="theme-white-color p-2 text-center" style="top: 20px;right: 10px; position: absolute; z-index: 10; background: rgba(0,0,0,0.3);">--}}
                        {{--June<br/> 22--}}
                    {{--</div>--}}
                    {{--<div class="event-description theme-white-color" style="">--}}
                        {{--<div class="" style="height: 80px;">--}}
                            {{--<p class="event-heading">Vestibulum tincidunt justo otsuj dunt tinc eyr.</p>--}}
                        {{--</div>--}}
                        {{--<div class="border-top event-footer" style="">--}}
                            {{--<p class="mb-0">8:00 Am</p>--}}
                            {{--<p class="mt-0">KU Labground</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
    {{-------------------Events------------------------}}



    {{--------------------staffs----------------------}}
    <div class="container-fluid p-0" style="">
        <div class="container text-center" style="padding-top: 2%; padding-bottom: 30px;">
            <h3>We are training future of the Country </h3>
            <a href="#" class="rju-btn-blue btn-2" style="  ">
                <svg>
                    <rect x="0" y="0" fill="none" width="100%" height="100%"/>
                </svg>
                learn More <i class="fa fa-chevron-right"></i>
            </a>
        </div>
        <img class="img-fluid" src="http://university.cactusthemes.com/wp-content/uploads/2014/06/university-education-all-background-01.jpg" style="height: auto; width: 100%;">

    </div>
    {{-----------------staffs--------------------}}

@endsection