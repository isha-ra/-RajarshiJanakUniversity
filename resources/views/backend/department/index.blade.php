@extends('backend.includes.layout')
@section('content')

    <div class="container">
        {{--<input type="button" value="Export to excel" >--}}
        <div class="container">
            <table class="table table-hover">
                <tr>
                    <th>S.N</th>
                    <th>Department name</th>
                    <th>Department Head</th>
                    <th>Department Created Date</th>
                    <th>No. of Programs</th>
                    <th>Action</th>
                </tr>
                @php $i=1; @endphp
                @foreach($departments as $row)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->staff->name}} </td>
                        {{--<td>--}}
                            {{--@foreach($row->staff as $staffs)--}}
                                {{----}}
                            {{--@endforeach--}}
                        {{--</td>--}}
                        <td>{{$row->established_date}}</td>

                        <td>
                            {{--{{ $ct }}--}}
                            @php
                                $count = Count(\App\Model\Department\Program::where('department_id',$row->department_id)->get());
                            @endphp
                            {{$count}}
                        </td>
                        <td>

                            <a href="/department/{{$row->department_id}}/viewprogram" class="btn btn-outline-primary"><i class="fa fa-eye"></i></a>

                            <a href="/department/{{$row->department_id}}/edit" class="btn btn-outline-primary"><i class="fa fa-edit"></i></a>

                            <a href="/department/{{$row->department_id}}/addprograms" class="btn btn-outline-primary"><i class="fa fa-plus"><i class="fa fa-book"></i></i></a>

                            <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#del{{$row->department_id}}">
                                Delete
                            </button>
                            <div class="modal fade" id="del{{$row->department_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation?</h5>
                                            {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                                            {{--<span aria-hidden="true">&times;</span>--}}
                                            {{--</button>--}}
                                        </div>
                                        <form method="post" action="/delete-department/{{$row->department_id}}">
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