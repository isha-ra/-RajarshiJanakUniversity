@extends('frontend.layout')
@section('content')

        <div class="container-fluid">
            <div class="container pt-5">
                <div class="row">
                    <div class="col-md-4 text-center mb-2">
                        <a href="{{asset('images/logo.jpg')}}" data-lightbox="roadtrip">
                            <img src="{{asset('images/logo.jpg')}}" data-lightbox="roadtrip" class="img-gallery">
                        </a>
                    </div>
                    <div class="col-md-4 text-center mb-2">
                        <a href="{{asset('images/library.jpg')}}" data-lightbox="roadtrip">
                            <img src="{{asset('images/library.jpg')}}" data-lightbox="roadtrip" class="img-gallery">
                        </a>
                    </div>
                    <div class="col-md-4 text-center mb-2">
                        <a href="{{asset('images/book.jpg')}}" data-lightbox="roadtrip">
                            <img src="{{asset('images/book.jpg')}}" data-lightbox="roadtrip" class="img-gallery">
                        </a>
                    </div>
                    <div class="col-md-4 text-center mb-2">
                        <a href="{{asset('images/library.jpg')}}" data-lightbox="roadtrip">
                            <img src="{{asset('images/library.jpg')}}" data-lightbox="roadtrip" class="img-gallery">
                        </a>
                    </div>
                    <div class="col-md-4 text-center mb-2">
                        <a href="{{asset('images/logo.jpg')}}" data-lightbox="roadtrip">
                            <img src="{{asset('images/logo.jpg')}}" data-lightbox="roadtrip" class="img-gallery">
                        </a>
                    </div>
                    <div class="col-md-4 text-center mb-2">
                        <a href="{{asset('images/book.jpg')}}" data-lightbox="roadtrip">
                            <img src="{{asset('images/book.jpg')}}" data-lightbox="roadtrip" class="img-gallery">
                        </a>
                    </div>
                </div>
                <div class="row pt-3">
                    <h5>Summary</h5>
                    <p>Maecenas dolor quam, aliquet id laoreet ac, mollis eu dui.
                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                        Nullam porttitor velit est, sit amet interdum velit convallis sit amet. Pellentesque laoreet cursus orci ac dictum. Donec ut magna ligula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla vel metus ac mauris varius molestie.</p>
                </div>

            </div>
        </div>

@endsection