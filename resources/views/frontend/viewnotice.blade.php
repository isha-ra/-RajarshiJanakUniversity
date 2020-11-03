@include('frontend.header')
@include('frontend.nav')

@yield('content')
<div class="container">

    <h2 class="top">Notice title:- {{$news_event_notices->title}}</h2>
    <br>
    <p>{!!$news_event_notices->description !!}</p>





</div>

@include('frontend.footer')