@extends('frontend.layout')
@section('content')

    <div class="container-fluid" >
        <div class="container">

            <div class="row mt-5">
                @foreach($departments as $department)
                <div class="col-md-4">
                    <div class="container ab-program border mb-1 program-container p1" style="">
                        <a href="/programs_detail/{{$department->department_id}}" class="row py-5" >
                            <div class="col-md-4">
                                <img src="{{asset('images/logo.jpg')}}" style="height: 100px; width: 100px;">
                            </div>
                            <div class="col-md-8 align-middle" style=" text-align: center;">
                                <div class="course-title"><h3 >{{$department->name}}</h3>
                                </div>
                            </div>

                        </a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>

@endsection