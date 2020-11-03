@extends('frontend.layout')
@section('content')
    {{--<div class="container-fluid roboto-font">--}}
        {{--<div class="container pt-5 pb-5">--}}
            {{--<div class="mt-2">--}}
                    {{--<i class="fa fa-home"></i>Department > Program > Bachelor's in business Administration--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="container-fluid theme-blue-background" style="height: 300px; width: 100%">--}}
    {{--</div>--}}
    {{--<div class="container-fluid m-0" style="">--}}
        {{--<div class="container p-3" style="margin-top: -250px; ">--}}
            {{--<div class="p-5 theme-light-blue-background " style="height: 150px;">--}}
                {{--<h3 class="theme-white-color text-capitalize">Bachelor's in Business Administration</h3>--}}
            {{--</div>--}}
            {{--<div class=" theme-white-background p-5 shadow">--}}
                {{--<ul class="list-unstyled theme-blue-color">--}}
                    {{--<li class="list-title py-1">Introduction</li>--}}
                    {{--<li><p>Aenean at ultricies sem. Donec a urna quis leo tempor sollicitudin. Aenean lacinia, quam eu accumsan tincidunt,--}}
                            {{--ligula enim congue velit, non sodales nisi lectus ac nisl. Donec ornare elit ac lacus venenatis malesuada.--}}
                            {{--Duis at nunc in elit ultrices mattis. Aenean bibendum, eros placerat bibendum gravida.</p>--}}

                        {{--<p>Lectus lacus lobortis lorem, ac euismod tortor lacus vitae ante.--}}
                            {{--Ut ultrices eros sit amet ullamcorper molestie. Mauris blandit et ligula at aliquam.--}}
                            {{--ligula enim congue velit, non sodales nisi lectus ac nisl.--}}
                        {{--</p>--}}
                        {{--<p>Lectus lacus lobortis lorem, ac euismod tortor lacus vitae ante.--}}
                            {{--Ut ultrices eros sit amet ullamcorper molestie. Mauris blandit et ligula at aliquam.--}}
                            {{--ligula enim congue velit, non sodales nisi lectus ac nisl.--}}
                        {{--</p>--}}

                    {{--</li>--}}
                    {{--<li class="list-title py-1">Course Overview </li>--}}
                    {{--<li>--}}
                        {{--<ul>--}}
                            {{--<li><a href="#" class="theme-blue-color">Syllabus <i class="fa fa-download"></i> </a></li>--}}
                            {{--<li>4 year course</li>--}}
                            {{--<li>Start Year Intake- February</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="list-title py-1">Key Features</li>--}}
                    {{--<ul class="list-unstyled pl-3">--}}
                            {{--<li>Feature of Education 1--}}
                                {{--<ul class="list-unstyled">--}}
                                    {{--<li><p> Nunc id condimentum neque. Aenean auctor semper nunc, in dignissim nunc molestie ut.--}}
                                            {{--Donec non scelerisque ante. Vestibulum tincidunt risus quam, eu scelerisque eros vestibulum et.--}}
                                            {{--Vivamus vestibulum elementum justo, eget convallis sapien.</p></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li>Feature of Education 2--}}
                                {{--<ul class="list-unstyled">--}}
                                    {{--<li><p> Nunc id condimentum neque. Aenean auctor semper nunc, in dignissim nunc molestie ut.--}}
                                            {{--Donec non scelerisque ante. Vestibulum tincidunt risus quam, eu scelerisque eros vestibulum et.--}}
                                            {{--Vivamus vestibulum elementum justo, eget convallis sapien.</p></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li>Feature of Education 3--}}
                                {{--<ul class="list-unstyled">--}}
                                    {{--<li><p> Nunc id condimentum neque. Aenean auctor semper nunc, in dignissim nunc molestie ut.--}}
                                            {{--Donec non scelerisque ante. Vestibulum tincidunt risus quam, eu scelerisque eros vestibulum et.--}}
                                            {{--Vivamus vestibulum elementum justo, eget convallis sapien.</p></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--<li class="list-title py-1">Entry Requirement</li>--}}
                    {{--<li>uis at nunc in elit ultrices mattis. Aenean bibendum, eros placerat bibendum gravida, lectus lacus lobortis lorem, ac euismod tortor lacus vitae ante.--}}
                        {{--Ut ultrices eros sit amet ullamcorper molestie. Mauris blandit et ligula at aliquam.--}}
                        {{--<ul>--}}
                            {{--<li> Qualification 1 </li>--}}
                            {{--<li> Qualification 2 </li>--}}
                            {{--<li> Qualification 3 </li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}


    <div class="container-fluid p-0">
        <img src="{{asset('images/library.jpg')}}" style="height: 350px; width: 100%" />
        {{--<div class="" style="top:0; bottom:0; left:0; right: 0; position: absolute;">Anjana</div>--}}
    </div>
    <div class="container-fluid blue-grad pt-3">
        <div class="container">
            <ul class="nav justify-content-center" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active theme-white-color pb-4" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-home"></i></a>
                    <span class="arrow" id="home-id"></span>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link theme-white-color pb-4" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="false">Overview</a>
                    <span class="arrow"></span>
                </li>
                <li class="nav-item">
                    <a class="nav-link theme-white-color pb-4" id="entryRequirement-tab" data-toggle="tab" href="#entryRequirement" role="tab" aria-controls="entryRequirement" aria-selected="false">Entry Requirement</a>
                    <span class="arrow"></span>
                </li>
                <li class="nav-item">
                    <a class="nav-link theme-white-color pb-4" id="projectResearch-tab" data-toggle="tab" href="#projectResearch" role="tab" aria-controls="projectResearch" aria-selected="false">Project Research</a>
                    <span class="arrow"></span>
                </li>
            </ul>
        </div>
    </div>
    <div class="container-fluid" style="min-height: 500px;">
        <div class="container pl-5 pr-5">




            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="list-title py-1">Introduction to <b>{{$programs->name}}</b></h3>
                    <p>{{$programs->description}} </p>

                </div>


                <div class="tab-pane fade" id="overview" role="tabpanel" aria-labelledby="overview-tab">

                    <div class="row mt-5">
                        <div class="col-md-3">
                           <div class="row">
                               <div class="shadow p-4">
                                   <h5 class="list-title py-1" >Course Overview</h5>
                                   <ul class="list-unstyled">
                                       <li><a href="#" class="theme-blue-color">Syllabus <i class="fa fa-download"></i> </a></li>
                                       <li>4 year/ 8 semester course</li>
                                       <li>Start Year Intake- February</li>
                                   </ul>
                               </div>
                           </div>

                        </div>
                        <div class="col-md-9">
                            <div class="shadow p-4">
                                <ul class="list-unstyled">
                                    <li class="list-title py-1">Key Features</li>
                                </ul>
                                <ul class="list-unstyled pl-3">
                                    <li>Feature of Education 1
                                        <ul class="list-unstyled">
                                            <li><p> Nunc id condimentum neque. Aenean auctor semper nunc, in dignissim nunc molestie ut.
                                                    Donec non scelerisque ante. Vestibulum tincidunt risus quam, eu scelerisque eros vestibulum et.
                                                    Vivamus vestibulum elementum justo, eget convallis sapien.</p></li>
                                        </ul>
                                    </li>
                                    <li>Feature of Education 2
                                        <ul class="list-unstyled">
                                            <li><p> Nunc id condimentum neque. Aenean auctor semper nunc, in dignissim nunc molestie ut.
                                                    Donec non scelerisque ante. Vestibulum tincidunt risus quam, eu scelerisque eros vestibulum et.
                                                    Vivamus vestibulum elementum justo, eget convallis sapien.</p></li>
                                        </ul>
                                    </li>
                                    <li>Feature of Education 3
                                        <ul class="list-unstyled">
                                            <li><p> Nunc id condimentum neque. Aenean auctor semper nunc, in dignissim nunc molestie ut.
                                                    Donec non scelerisque ante. Vestibulum tincidunt risus quam, eu scelerisque eros vestibulum et.
                                                    Vivamus vestibulum elementum justo, eget convallis sapien.</p></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>



                </div>


                <div class="tab-pane fade" id="entryRequirement" role="tabpanel" aria-labelledby="entryRequirement-tab">
                    {{--@php--}}
                        {{--$programs_requirement = App\Model\Department\ProgramRequirement::get();--}}
                    {{--@endphp--}}

                    <div class="mt-5">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Requirements Name</th>
                                        <th> Number of copies</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($programs_requirements as $row)
                                <tr>
                                    <td>{{$row->requirement_name}}</td>
                                    <td>{{$row->description}}</td>
                                </tr>
@endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>



                <div class="tab-pane fade" id="projectResearch" role="tabpanel" aria-labelledby="projectResearch-tab">

                    <div class="pt-5">
                        <div class="table-responsive">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th>Name of Research</th>
                                        <th>Team Members</th>
                                    </tr>
                                </thead>
                                <tbody>







                                @foreach($programs_research as $row)
                                    <tr>
                                        <td>{{$row->title}}</td>
                                        <td>{{$row->staff_id}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection