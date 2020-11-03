@extends('frontend.layout')
@section('content')
    <div class="container-fluid roboto-font">
        <div class="container p-5">
            <h3 class="text-uppercase">{{$departments->name}}</h3>
            <ul class="list-unstyled">
                <li class="pt-5">
                    <div class="row">
                        @foreach($programs as $row)
                        <div class="col-md-8 text-justify">
                            <h4 class="text-capitalize">{{$row->name}}</h4>
                            <p>{{$row->description}}</p>
                            <a href="/programs_intro/{{$row->program_id}}" class="rju-btn-blue btn-2  mt-5" style=" ">
                                <svg>
                                    <rect x="0" y="0" fill="none" width="100%" height="100%"/>
                                </svg>




                                View More
                            </a>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-4 text-center">
                                    <div class="container theme-light-blue-background theme-white-color" style="width: 100px; height: 100px; border-radius: 50px;">
                                        <span style="line-height: 100px;">{{$row->credit_hours}} hrs</span>
                                    </div>
                                    <span>Credit Hours</span>
                                </div>
                                <div class="col-md-4 text-center">
                                    <div class="container theme-blue-background theme-white-color" style="width: 100px; height: 100px; border-radius: 50px;">
                                        <span style="line-height: 100px;">15</span>
                                    </div>
                                    <span>Staffs</span>
                                </div>
                                <div class="col-md-4 text-center">
                                    <div class="container theme-dark-red-background theme-white-color" style="width: 100px; height: 100px; border-radius: 50px;">
                                        <span style="line-height: 100px;">{{$row->semester}} Semester</span>
                                    </div>
                                    <span>Semesters</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </li>



            </ul>

        </div>
    </div>

@endsection