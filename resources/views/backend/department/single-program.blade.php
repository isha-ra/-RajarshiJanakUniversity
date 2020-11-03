@extends('backend.includes.layout')
@section('content')
    <div class="container">
        <div class="container">
            <h5 class="text-center">Program Name</h5>
            <table class="table table-hover pb-5">
                <thead>
                <th>Department Name</th>
                <th>Program Name</th>
                <th>Description</th>
                <th>Credit Hours</th>
                <th>Semester</th>
                <th>Year To Complete</th>
                <th>Action</th>
                </thead>
                <tbody>

                <tr>
                    <td>{{$program->departments->name}}</td>

                    <td>{{$program->name}}</td>
                    <td>{!!$program->description!!} </td>
                    <td>{{$program->credit_hours}}</td>
                    <td>{{$program->semester}}</td>
                    <td>{{$program->years_to_complete}}</td>
                    <td>

                        <a href="/department/{{$program->program_id}}/programedit" class="btn btn-outline-secondary my-1"><i class="fa fa-edit"></i></a>
                        <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#del{{$program->program_id}}">
                            <i class="fa fa-trash"></i>
                        </button>

                        <div class="modal fade" id="del{{$program->program_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation?</h5>
                                        {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                                        {{--<span aria-hidden="true">&times;</span>--}}
                                        {{--</button>--}}
                                    </div>
                                    <form method="post" action="/delete-program/{{$program->program_id}}">
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

                </tbody>
            </table>
            <h5 class="text-center mt-5 pt-5">Requirements</h5>
            <div class="my-2">
                <a href="/department/{{$program->program_id}}/addrequirement" class="btn btn-outline-secondary">
                    Add Programs Requirements</a>

            </div>
            <table class="table table-hover">
                <thead>
                    <th>S.N</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                </thead>
                <tbody>
                @php $i=1; @endphp
                @foreach($program_requirements as $program_requirement)
                    <tr>

                        <td>{{$i++}}</td>
                        <td>{{$program_requirement->requirement_name}}</td>
                        <td>{!! $program_requirement->description !!}</td>
                        <td>
                            <a href="/department/{{$program_requirement->programrequirement_id}}/editrequirement" class="btn btn-outline-secondary my-2"><i class="fa fa-edit"></i></a>


                            <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#del{{$program_requirement->programrequirement_id}}">
                                <i class="fa fa-trash"></i>
                            </button>

                            <div class="modal fade" id="del{{$program_requirement->programrequirement_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation?</h5>
                                            {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                                            {{--<span aria-hidden="true">&times;</span>--}}
                                            {{--</button>--}}
                                        </div>
                                        <form method="post" action="/delete-programrequirement/{{$program_requirement->programrequirement_id}}">
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
                </tbody>
                @endforeach
            </table>

            <h5 class="text-center mt-5 pt-5">Program Research</h5>
            <div class="my-2">
                <a href="/department/{{$program->program_id}}/addresearch" class="btn btn-outline-secondary">Add Research</a>
            </div>
            <table class="table table-hover">
                <thead>

                    <th>S.N</th>
                    <th>Project Name</th>
                    <th>Members</th>
                    <th>Action</th>
                </thead>
                <tbody>
                @php $i=1; @endphp

                @foreach($programs_research as $row)

                    <tr>

                        <td>{{$i++}}</td>
                        <td>{{$row->title}}</td>
                        <td>
                            <ul class="list-unstyled">
                             {{$row->staff_id}}
                            </ul>
                        </td>
                        <td>
                            <a href="/department/{{$row->id}}/editresearch" class="btn btn-outline-secondary my-2"><i class="fa fa-edit"></i></a>


                            <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#del{{$row->id}}">
                                <i class="fa fa-trash"></i>
                            </button>

                            <div class="modal fade" id="del{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation?</h5>
                                            {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                                            {{--<span aria-hidden="true">&times;</span>--}}
                                            {{--</button>--}}
                                        </div>
                                        <form method="post" action="/delete-programresearch/{{$row->id}}">
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



                </tbody>
                @endforeach
            </table>

        </div>
    </div>
@endsection()