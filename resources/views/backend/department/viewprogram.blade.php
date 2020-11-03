@extends('backend.includes.layout')
@section('content')
    <div class="container">
        <div class="container">
            <table class="table table-hover">
                <tr>
                    <th>S.N</th>
                    <th>Department id</th>
                    <th>Department Name</th>
                    <th>Program Name</th>
                    <th>Description</th>
                    <th>Credit hours</th>
                    <th>Semester</th>
                    <th>year to complete</th>
                    <th>Action</th>
                </tr>
                @php $i=1; @endphp
                @foreach($programs as $row)
                    <tr>
                        <td>{{$i++}}</td>

                        <td>{{$row->department_id}}</td>
                        <td>{{$row->departments->name}}</td>
                        <td>{{$row->name}}</td>
                        <td>{!! $row->description !!}</td>
                        <td>{{$row->credit_hours}}</td>
                        <td>{{$row->semester}}</td>
                        <td>{{$row->years_to_complete}}</td>

                        <td>



                            {{--------------------edit/add requirement-------------------------}}
                            {{--@if(count(\App\Model\Department\ProgramRequirement::where('program_id',$row->program_id)->get())>0)--}}
                                {{--<a href="/department/{{$row->program_id}}/editrequirement" class="btn btn-outline-primary">--}}
                                    {{--Edit Programs Requirements</a>--}}
                            {{--@else--}}
                                {{--<a href="/department/{{$row->program_id}}/addrequirement" class="btn btn-outline-primary">--}}
                                    {{--Add Programs Requirements</a>--}}
                            {{--------------------edit/add requirement-------------------------}}



                            {{--@if(count(\App\Model\Department\ProgramResearch::where('program_id',$row->program_id)->get())>0)--}}
                                    {{--<a href="/department/{{$row->program_id}}/editresearch" class="btn btn-outline-primary">--}}
                                        {{--Edit Programs Research</a>--}}
                                {{--@else--}}
                                    {{--<a href="/department/{{$row->program_id}}/addresearch" class="btn btn-outline-primary">--}}
                                        {{--Add Programs Research</a>--}}

                                {{--@endif--}}


                                {{--<a href="/department/{{$row->program_id}}/addresearch" class="btn btn-outline-primary">--}}
                                    {{--Add Programs Research</a>--}}




                                {{--<a href="/department/{{$row->program_id}}/viewresearch" class="btn btn-outline-primary">View Program Research</a>--}}
                            <a href="/department/{{$row->program_id}}/single-program" class="btn btn-outline-primary"><i class="fa fa-eye"></i></a>
                            {{--<a href="/single-program" class="btn btn-outline-secondary"><i class="fa fa-eye"></i></a>--}}

                            <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#del{{$row->program_id}}">
                                <i class="fa fa-trash"></i>
                            </button>

                            <div class="modal fade" id="del{{$row->program_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation?</h5>
                                            {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                                            {{--<span aria-hidden="true">&times;</span>--}}
                                            {{--</button>--}}
                                        </div>
                                        <form method="post" action="/delete-program/{{$row->program_id}}">
                                            {{@csrf_field()}}
                                            <div class="modal-body">
                                                Are you sure you want to Delete this data?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Confirm</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>



                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>
@endsection