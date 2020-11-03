<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}" >
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" >
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
    <link rel="stylesheet" type="text/css" href="{{asset('css/lightbox.min.css')}}" >
    <link rel="stylesheet" type="text/css" href="{{asset('css/mystyle.css')}}" >


    {{--<style>--}}
        {{--body{--}}
            {{--font-family: 'Helvetica Neue', sans-serif;--}}
            {{--/*font-size: 14px;*/--}}
            {{--/*line-height: 2;*/--}}
        {{--}--}}
        {{--.ab-navigation{--}}
            {{--float: right !important;--}}
        {{--}--}}

        {{--.ab-navigation>li, #slide-menu .ab-navigation>li{--}}
            {{--position: relative;--}}
            {{--display: inline-block;--}}
            {{--margin: 5px;--}}
            {{--padding-left: 20px;--}}
            {{--/*padding-right: 20px;*/--}}


        {{--}--}}
        {{--.ab-navigation li a, .ab-navigation li a:hover {--}}
            {{--height: 100px;--}}
            {{--position: relative;--}}
            {{--text-decoration: none;--}}
            {{--/*border-right: 1px white solid;*/--}}
        {{--}--}}
        {{--.menu-item{--}}

        {{--}--}}
        {{--.menu-item-span{--}}
            {{--font-size: 12px;--}}
        {{--}--}}

        {{--.carousel-inner img{--}}
            {{--height: 591.75px;!important;--}}
            {{--width: 100%;--}}
        {{--}--}}
        {{--.sticky-menu{--}}
            {{--position: fixed;--}}
        {{--}--}}



        {{--.theme-blue-color, .theme-blue-color:hover{--}}
            {{--color: #253b80;--}}
        {{--}--}}
        {{--.theme-blue-background{--}}
            {{--background-color: #253b80;--}}
        {{--}--}}
        {{--.theme-white-color, .theme-white-color:hover {--}}
            {{--color: #fff;--}}
        {{--}--}}
        {{--.theme-white-background{--}}
            {{--background-color: #fff;--}}
        {{--}--}}
        {{--.theme-dark-red-color, .theme-dark-red-color:hover{--}}
            {{--color: #940334;--}}
        {{--}--}}
        {{--.theme-dark-red-background{--}}
            {{--background-color: #940334;--}}
        {{--}--}}
        {{--.theme-black-background{--}}
            {{--background-color: #0a0300;--}}
        {{--}--}}
        {{--.theme-black-color, .theme-black-color:hover{--}}
           {{--color: #0a0300;--}}
        {{--}--}}
        {{--.roboto-font{--}}
            {{--font-family: Roboto;--}}
        {{--}--}}
        {{--.img-gallery{--}}
            {{--height: 250px;--}}
            {{--width: 100%;--}}
        {{--}--}}

        {{--#slide-menu{--}}
            {{--height: 50px;--}}
            {{--background-color: #333;--}}
            {{--position: fixed;--}}
            {{--top: -50px;--}}
            {{--/*width: 100%;*/--}}
            {{--transition: top 0.3s;--}}
            {{--z-index: 1000;--}}
        {{--}--}}
        {{--.theme-light-blue-background{--}}
            {{--background-color: #179bd7;--}}
        {{--}--}}
        {{--.feature-container{--}}

            {{--padding: 8%;--}}
        {{--}--}}
        {{--.feature-heading h1{--}}
            {{--text-transform: uppercase;--}}
        {{--}--}}
        {{--.feature-body{--}}
            {{--padding-top: 10px;--}}

        {{--}--}}
        {{--.feature-footer{--}}

        {{--}--}}
        {{--.rju-btn, .rju-btn-blue{--}}

            {{--cursor: pointer;--}}
            {{--font-size: 16px;--}}
            {{--font-weight: 400;--}}
            {{--line-height: 45px;--}}
            {{--margin: 0 0 2em;--}}
            {{--max-width: 160px;--}}
            {{--position: relative;--}}
            {{--text-decoration: none;--}}
            {{--text-transform: uppercase;--}}
            {{--width: 100%;--}}
            {{--padding: 0 30px 0 30px;--}}
        {{--}--}}
        {{--.rju-btn{--}}
            {{--color: #fff;--}}
        {{--}--}}
        {{--.rju-btn-blue{--}}
            {{--color: #253b80;--}}
        {{--}--}}
        {{--.btn-1 {--}}
            {{--/*background: #e02c26;*/--}}
            {{--font-weight: 100;--}}
            {{--width: 100%;--}}
        {{--}--}}
        {{--.btn-1 svg {--}}
            {{--height: 45px;--}}
            {{--left: 0;--}}
            {{--position: absolute;--}}
            {{--/*top: 0;*/--}}
            {{--width: 100%;--}}
        {{--}--}}
        {{--.btn-1 rect {--}}
            {{--fill: none;--}}
            {{--stroke: #fff;--}}
            {{--/*stroke: #000;*/--}}
            {{--stroke-width: 2;--}}
            {{--stroke-dasharray: 422, 0;--}}
            {{--transition: all 0.35s linear;--}}
        {{--}--}}

        {{--.btn-1:hover {--}}
            {{--background: rgba(225, 51, 45, 0);--}}
            {{--font-weight: 900;--}}
            {{--letter-spacing: 1px;--}}
        {{--}--}}
        {{--.btn-1:hover rect {--}}
            {{--stroke-width: 5;--}}
            {{--stroke-dasharray: 15, 310;--}}
            {{--stroke-dashoffset: 48;--}}
            {{--transition: all 1.35s cubic-bezier(0.19, 1, 0.22, 1);--}}
        {{--}--}}
        {{--/*here*/--}}
        {{--.btn-2 {--}}
            {{--/*background: #e02c26;*/--}}
            {{--font-weight: 100;--}}
            {{--width: 100%;--}}
        {{--}--}}
        {{--.btn-2 svg {--}}
            {{--height: 45px;--}}
            {{--left: 0;--}}
            {{--position: absolute;--}}
            {{--/*top: 0;*/--}}
            {{--width: 100%;--}}
        {{--}--}}
        {{--.btn-2 rect {--}}
            {{--fill: none;--}}
            {{--/*stroke: #fff;*/--}}
            {{--stroke:  #253b80;--}}
            {{--stroke-width: 2;--}}
            {{--stroke-dasharray: 422, 0;--}}
            {{--transition: all 0.35s linear;--}}
        {{--}--}}

        {{--.btn-2:hover {--}}
            {{--background: rgba(37, 59, 128, 0);--}}
            {{--font-weight: 900;--}}
            {{--letter-spacing: 1px;--}}
        {{--}--}}
        {{--.btn-2:hover rect {--}}
            {{--stroke-width: 5;--}}
            {{--stroke-dasharray: 15, 310;--}}
            {{--stroke-dashoffset: 48;--}}
            {{--transition: all 1.35s cubic-bezier(0.19, 1, 0.22, 1);--}}
        {{--}--}}
        {{--/*to here*/--}}
        {{--.card-background-0{--}}
            {{--background-color: transparent!important;--}}
        {{--}--}}
        {{--h4{--}}
            {{--letter-spacing: 0;--}}
        {{--}--}}
        {{--.event-block{--}}
            {{--height: 350px;--}}
            {{--width: 100%;--}}
        {{--}--}}
        {{--.event-block > .event-description{--}}
            {{--overflow: hidden;--}}
        {{--}--}}
        {{--.event-description{--}}
            {{--height: 80px;--}}
            {{--bottom:0;--}}
            {{--width: 100%;--}}
            {{--padding: 10px 10px 10px 15px;--}}
            {{--background: rgba(0,0,0,0.4);--}}
            {{--position: absolute;--}}
            {{--z-index:10;--}}
            {{--overflow: hidden;--}}
        {{--}--}}
        {{--.event-description:hover, .event-block:hover + .event-description{--}}
            {{--overflow: visible;--}}
            {{--height: 170px;--}}
            {{--/*transform: translateY(-70px);*/--}}
            {{--transition: height ease-in 0.3s;--}}
        {{--}--}}
        {{--.event-item:hover img{--}}
            {{--/*transform: scale(0.9);*/--}}
        {{--}--}}
        {{--.event-heading{--}}
            {{--font-size: 16px;--}}
            {{--font-weight: 600;--}}
        {{--}--}}
        {{--.event-footer{--}}
            {{--font-size: 12px;--}}
        {{--}--}}
        {{--.responsive-event{--}}
            {{--height: 350px;--}}
            {{--margin: 0;--}}
        {{--}--}}
        {{--.news{--}}
            {{--height: 591.75px;--}}
            {{--background-color: rgba(255,255,255,0.7);--}}
            {{--position: absolute;--}}
            {{--top:57px;--}}
            {{--left: 15px;--}}
        {{--}--}}
        {{--.carousel-control-next, .carousel-control-prev{--}}
            {{--top: 80%;--}}
            {{--padding: 10px;--}}
            {{--font-size: 30px;--}}
            {{--width: 50px;--}}
            {{--height: 30px;--}}
            {{--background:rgba(1,1,1,0.7)no-repeat center center;--}}

        {{--}--}}
        {{--.carousel-control-prev{--}}
            {{--left: 80%;--}}
        {{--}--}}
        {{--.carousel-control-next{--}}
            {{--right: 10%;--}}
        {{--}--}}


        {{--/*.owl-carousel{*/--}}
            {{--/*transform: rotate(90deg);*/--}}
            {{--/*width: 270px;*/--}}
            {{--/*!*margin-top:100px;*!*/--}}
            {{--/*margin-top:100px;*/--}}
        {{--/*}*/--}}
        {{--/*.item{*/--}}
            {{--/*transform: rotate(-90deg);*/--}}
        {{--/*}*/--}}
        {{--/*.owl-carousel .owl-nav{*/--}}
            {{--/*display: flex;*/--}}
            {{--/*!*justify-content: space-between;*!*/--}}
            {{--/*position: absolute;*/--}}
            {{--/*!*min-width: 100%;*!*/--}}
            {{--/*!*top: calc(50% - 33px);*!*/--}}
        {{--/*}*/--}}
        {{--/*div.owl-carousel .owl-nav .owl-prev, div.owl-carousel .owl-nav .owl-next{*/--}}
            {{--/*font-size:36px;*/--}}
            {{--/*!*top:unset;*!*/--}}
            {{--/*bottom: 15px;*/--}}
        {{--/*}*/--}}
        {{--/*.owl-carousel{*/--}}
             {{--/*transform: rotate(90deg);*/--}}
             {{--/*width: 270px;*/--}}
             {{--/*!*margin-top:100px;*!*/--}}
         {{--/*}*/--}}
        {{--/*.item{*/--}}
            {{--/*transform: rotate(-90deg);*/--}}
        {{--/*}*/--}}
        {{--/*.owl-carousel .owl-nav{*/--}}
            {{--/*display: flex;*/--}}
            {{--/*justify-content: space-between;*/--}}
            {{--/*position: absolute;*/--}}
            {{--/*width: 100%;*/--}}
            {{--/*top: calc(50% - 33px);*/--}}
        {{--/*}*/--}}
        {{--/*div.owl-carousel .owl-nav .owl-prev, div.owl-carousel .owl-nav .owl-next{*/--}}
            {{--/*font-size:36px;*/--}}
            {{--/*top:unset;*/--}}
            {{--/*bottom: 15px;*/--}}
        {{--/*}*/--}}

        {{--.owl-carousel{--}}
            {{--transform: rotate(90deg);--}}
            {{--/*width: 270px;*/--}}
            {{--/*width: 270px;*/--}}
            {{--/*height: 271px;*/--}}
            {{--/*margin-top:100px;*/--}}
        {{--}--}}
        {{--.owl-stage-outer{--}}
            {{--/*width: 100%;*/--}}
            {{--/*height: 100%;*/--}}
            {{--/*width: 100%;*/--}}
        {{--}--}}
        {{--.owl-stage{--}}
            {{--height: 100%;--}}
        {{--}--}}
        {{--/*.item{*/--}}
            {{--/*transform: rotate(-90deg);*/--}}
        {{--/*}*/--}}
        {{--/*.owl-carousel .owl-nav{*/--}}
            {{--/*display: flex;*/--}}
            {{--/*justify-content: space-between;*/--}}
            {{--/*position: absolute;*/--}}
            {{--/*width: 100%;*/--}}
            {{--/*top: calc(50% - 33px);*/--}}
        {{--/*}*/--}}
        {{--div.owl-carousel .owl-nav .owl-prev, div.owl-carousel .owl-nav .owl-next{--}}
            {{--/*font-size:36px;*/--}}
            {{--/*top:unset;*/--}}
            {{--/*bottom: 15px;*/--}}
        {{--}--}}
        {{--.aba{--}}
            {{--transform: rotate(270deg) translateX(-85%);--}}
            {{--/*transform: translateX(100%);*/--}}
            {{--/*height: 300px;*/--}}
            {{--z-index: 100;--}}
            {{--/*background-color: #f1b0b7;*/--}}

            {{--/*width: 300px;*/--}}
            {{--/*margin-top: 100px;*/--}}
        {{--}--}}
        {{--/*from here*/--}}

        {{--/*mega menu starts here*/--}}
        {{--.nav-mega {--}}
            {{--width: 100%;--}}
        {{--}--}}
        {{--.nav-mega .dropdown {--}}
            {{--position: static;--}}
        {{--}--}}
        {{--.nav-mega .dropdown-menu.mega-menu {--}}
            {{---moz-box-sizing: border-box;--}}
            {{---webkit-box-sizing: border-box;--}}
            {{--box-sizing: border-box;--}}
            {{---moz-border-radius-topleft: 0;--}}
            {{---webkit-border-top-left-radius: 0;--}}
            {{--border-top-left-radius: 0;--}}
            {{---moz-border-radius-topright: 0;--}}
            {{---webkit-border-top-right-radius: 0;--}}
            {{--border-top-right-radius: 0;--}}
            {{--min-width: auto;--}}
            {{--width: 100%;--}}
            {{--margin-top: 0;--}}
            {{--padding: 0;--}}
            {{--border-color: #ccc;--}}
        {{--}--}}
        {{--/*mega menu ends here*/--}}

        {{--#news-list li {--}}
            {{--margin-top: 10px;--}}
        {{--}--}}

        {{--/*program overlay starts here*/--}}
                {{--.program-overlay{--}}
                    {{--position: absolute;--}}
                    {{--background-color: rgba(1,1,1,0.5);--}}
                    {{--height: 200px;--}}
                    {{--/*height: auto;*/--}}
                    {{--/*height: fit-content;*/--}}
                    {{--/*width: 100%;*/--}}
                    {{--width: 100%;--}}
                    {{--/*width: fit-content;*/--}}
                    {{--display: none;--}}
                    {{--top:0;bottom:0;left:0; right:0;--}}
                {{--}--}}
                {{--.p1:hover >.program-overlay{--}}
                    {{--display: block;--}}
                {{--}--}}
                {{--.program-container{--}}
                    {{--height: fit-content;--}}
                {{--}--}}
        {{--/*program overlay ends here*/--}}
                {{--/*.course-title{*/--}}
                    {{--/*visibility: visible;*/--}}
                {{--/*}*/--}}
                {{--.courses{--}}
                    {{--visibility: hidden;--}}
                {{--}--}}
                {{--/*.course-title:hover h3{*/--}}
                    {{--/*visibility: hidden;*/--}}
                {{--/*}*/--}}
                {{--/*.course-title:hover .courses{*/--}}
                    {{--/*visibility: visible;*/--}}
                {{--/*}*/--}}

            {{--/*subject css starts here*/--}}

                {{--.list-title{--}}
                    {{--font-size: 18px;--}}
                {{--}--}}

            {{--/*subject css ends here*/--}}

        {{--/*FOOTER STYLE STARTS HERE*/--}}
            {{--.list-space li{--}}
                {{--padding-top: 15px;--}}
            {{--}--}}
        {{--/*FOOTER STYLE ENDS HERE*/--}}

        {{--/*PROGRAM STYLE STARTS HERE*/--}}
        {{--.active-arrow{--}}
            {{--display:block;--}}
        {{--}--}}
            {{--.arrow-down {--}}
                {{--/*margin: 0rem 1rem;*/--}}
                {{--/*margin-top: 1rem;*/--}}
                {{--width: 0;--}}
                {{--height: 0;--}}
               {{--/*display: none;*/--}}
                {{--border-left: 20px solid transparent;--}}
                {{--border-right: 20px solid transparent;--}}
                {{--display:block;--}}
                {{--border-top: 20px solid #940334;--}}
                {{--margin-left: auto;--}}
                {{--margin-right: auto;--}}
            {{--}--}}

        {{--/*PROGRAM STYLE ENDS HERE*/--}}
            {{--.blue-grad{--}}
                {{--background: #940334; /* Old browsers */--}}
                {{--background: -moz-linear-gradient(top, #940334 78%, #940334 48%, #fcfcfc 33%); /* FF3.6-15 */--}}
                {{--background: -webkit-linear-gradient(top, #940334 78%,#940334 48%,#fcfcfc 33%); /* Chrome10-25,Safari5.1-6 */--}}
                {{--background: linear-gradient(to bottom, #940334 78%,#940334 48%,#fcfcfc 33%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */--}}
                {{--filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e5799', endColorstr='#fcfcfc',GradientType=0 ); /* IE6-9 */--}}
            {{--}--}}
        {{--.img-container {--}}
            {{--position: relative;--}}
            {{--width: 100%;--}}
        {{--}--}}

        {{--.image {--}}
            {{--display: block;--}}
            {{--width: 100%;--}}
            {{--height: auto;--}}
        {{--}--}}

        {{--.overlay {--}}
            {{--position: absolute;--}}
            {{--bottom: 0;--}}
            {{--left: 0;--}}
            {{--right: 0;--}}
            {{--background-color: rgba(0,0,0,0.5);--}}
            {{--overflow: hidden;--}}
            {{--width: 100%;--}}
            {{--height: 0;--}}
            {{--transition: .5s ease;--}}
        {{--}--}}

        {{--.img-container:hover .overlay {--}}
            {{--height: 50%;--}}
        {{--}--}}

        {{--.text {--}}
            {{--color: white;--}}
            {{--font-size: 14px;--}}
            {{--position: absolute;--}}
            {{--top: 50%;--}}
            {{--left: 50%;--}}
            {{---webkit-transform: translate(-50%, -50%);--}}
            {{---ms-transform: translate(-50%, -50%);--}}
            {{--transform: translate(-50%, -50%);--}}
            {{--text-align: center;--}}
        {{--}--}}


        {{--@media only screen and (max-width: 600px){--}}
            {{--.feature-container{--}}

                {{--padding: 0;--}}
            {{--}--}}
            {{--.responsive-event{--}}
                {{--height: auto;--}}
                {{--/*margin: 15px;*/--}}
            {{--}--}}
            {{--.event-block{--}}
                {{--height: 250px;--}}
                {{--width: 100%;--}}
            {{--}--}}
            {{--.responsive-event-col{--}}
                {{--height: 250px;--}}
            {{--}--}}

        {{--}--}}

    {{--</style>--}}
    {{--<script type="text/javascript" href="{{asset('js/jquery.min.js')}}"></script>--}}




</head>
<body>
            {{--<div class="container-fluid">--}}
            {{--<div class="container">--}}
            {{--<span class="mx-auto my-auto" style="">Contact details</span>--}}
            {{--</div>--}}
            {{--</div>--}}


{{--<div class="container-fluid m-0 p-0 theme-blue-background" id="main-menu" style="height: 70px;">--}}
    {{--<div class="container" style="">--}}
        {{--commented section starts here--}}
        {{--<div class="col-md-2" style="margin-top: auto; margin-bottom: auto;">--}}
        {{--<img src="{{asset('images/logo1.jpg')}}" class="img-fluid" style="height: 100px; width: 100%;" />--}}

        {{--<h4 > RJUUC </h4>--}}

        {{--</div>--}}
        {{----}}
        {{--comment section ends here--}}

        {{--<div class="navbar ">--}}
            {{--<a class="navbar-brand theme-white-color">RJUUC</a>--}}


                {{--<div class="my-auto">--}}
                {{--<ul class="ab-navigation mx-auto px-auto m-0 p-0 nav-mega my-auto" style="list-style: none;">--}}
                    {{--<li ><a href="/" class="theme-white-color">--}}
                            {{--<div class="menu-item" >Home </div>--}}
                            {{--<div class="menu-item-span" >All Variations</div>--}}
                        {{--</a></li>--}}
                    {{--<li class="theme-white-color">--}}
                        {{--<a href="/events" class="theme-white-color">--}}
                            {{--<div class="menu-item">News, Event & Notice </div>--}}
                            {{--<div class="menu-item-span">Our Activities</div>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="theme-white-color">--}}
                    {{--<li class="theme-white-color  dropdown " data-toggle="dropdown">--}}
                        {{--<a href="/departments" class="theme-white-color ">--}}
                            {{--<div class="menu-item">Courses </div>--}}
                            {{--<div class="menu-item-span">Academic Lists</div>--}}
                        {{--</a>--}}
                        {{--<div class="dropdown-menu  mega-menu" aria-labelledby="dropdownMenuButton">--}}
                            {{--<a class="dropdown-item" href="#">Action</a>--}}
                            {{--<a class="dropdown-item" href="#">Another action</a>--}}
                            {{--<a class="dropdown-item" href="#">Something else here</a>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="theme-white-color">--}}
                        {{--<a href="#" class="theme-white-color ">--}}
                            {{--<div class="menu-item">Contact Us </div>--}}
                            {{--<div class="menu-item-span">Connect with us</div>--}}
                        {{--</a>--}}

                    {{--</li>--}}

                {{--</ul>--}}
            {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

{{--<div class="container-fluid">--}}
    {{--<div class="container">--}}
        {{--<nav>--}}

        {{--</nav>--}}
    {{--</div>--}}
{{--</div>--}}







<div class="container-fluid m-0 p-0  theme-blue-background theme sticky-top " id="slidemenu2" >
    <nav class="navbar navbar-expand-lg container ">
        <a class="navbar-brand theme-white-color" href="#">Navbar</a>
        <button class="navbar-toggler navbar-light bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon theme-black-color "></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto " style="">
                <li class="nav-item active">
                    <a class="nav-link theme-white-color" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link theme-white-color" href="/events">News  & Notice</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link theme-white-color" href="/departments">Courses</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link theme-white-color" href="#">Contact Us</a>
                </li>
                {{--<li class="nav-item dropdown">--}}
                    {{--<a class="nav-link dropdown-toggle theme-white-color" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                        {{--Dropdown--}}
                    {{--</a>--}}
                    {{--<div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                        {{--<a class="dropdown-item theme-white-color" href="#">Action</a>--}}
                        {{--<a class="dropdown-item theme-white-color" href="#">Another action</a>--}}
                        {{--<div class="dropdown-divider "></div>--}}
                        {{--<a class="dropdown-item theme-white-color" href="#">Something else here</a>--}}
                    {{--</div>--}}
                {{--</li>--}}
            </ul>

        </div>
    </nav>
</div>

{{--<div class="container-fluid d-sm-none d-lg-block d-md-block" id="slide-menu">--}}
    {{--<div class="container" style="background-color: #9fcdff">--}}
        {{--<ul class="ab-navigation  m-0 p-0" style="list-style: none;">--}}
            {{--<li ><a href="#" class="theme-white-color">--}}
                    {{--<div class="menu-item" >Home </div>--}}
                    {{--<div class="menu-item-span" >All Variations</div>--}}
                {{--</a></li>--}}
            {{--<li class="theme-white-color">--}}
                {{--<a href="#" class="theme-white-color">--}}
                    {{--<div class="menu-item">News, Event & Notice </div>--}}
                    {{--<div class="menu-item-span">Our Activities</div>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li class="theme-white-color">--}}
                {{--<a href="#" class="theme-white-color">--}}
                    {{--<div class="menu-item">Courses </div>--}}
                    {{--<div class="menu-item-span">Academic Lists</div>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li class="theme-white-color">--}}
                {{--<a href="#" class="theme-white-color">--}}
                    {{--<div class="menu-item">Contact Us </div>--}}
                    {{--<div class="menu-item-span">Connect with us</div>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li class="theme-white-color">--}}
                {{--<a href="#main-menu" class="theme-white-color">--}}
                    {{--<div class="menu-item"><i class="fa fa-chevron-up"></i></div>--}}
                    {{--<div class="menu-item-span"></div>--}}
                {{--</a>--}}
            {{--</li>--}}
        {{--</ul>--}}
    {{--</div>--}}
{{--</div>--}}