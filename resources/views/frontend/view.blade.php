@include('frontend.header')
@include('frontend.nav')

@yield('content')
<div class="container">

    <h2 class="top">Feature title:- {{$features->title}}</h2>
    <br>
    <p>{!!$features->description !!}</p>





</div>

@include('frontend.footer')