@include('frontend.header')
@include('frontend.nav')

@yield('content')
<div class="container">

    <h2 class="top">Event title:- {{$events->title}}</h2>
    <br>
    <p>{!!$events->description !!}</p>





</div>

@include('frontend.footer')