@extends('backend.includes.layout')
@section('content')
    <div class="container">
        {{--<a href="/export" class="btn btn-outline-primary">Export to excel</a>--}}
        <div class="container">
            <table class="table table-hover">
                <tr>
                    <th>S.N</th>
                    <th>Staff name</th>
                    <th>Staff image</th>
                    <th>Address</th>
                    <th>Designation</th>
                    <th>Contact</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>
                @php $i=1; @endphp
                @foreach($staff as $row)
                    <tr>
                        <td href="/single-staff" >{{$i++}}</td>
                        <td>{{$row->name}}</td>
                        <td><img src="{{asset('images/staffImage').'/'.$row->staff_img}}" style="height: 150px; width:auto"> </td>
                        <td>{{$row->address}}</td>
                        <td>{{$row->designation}}</td>
                        <td>{{$row->contact}}</td>
                        <td>{{$row->gender}}</td>

                        <td>

                            <a href="/staff/{{$row->staff_id}}/edit" class="btn btn-outline-primary my-1"><i class="fa fa-edit"></i>
                            </a>



                            <a href="/staff/{{$row->staff_id}}/addexperience" class="btn btn-outline-secondary my-1">
                                <i class="fa fa-plus"></i><i class="fa fa-business-time"></i> </a>


                            <a href="/staff/{{$row->staff_id}}/addeducation" class="btn btn-outline-secondary my-1">
                                Add Education</a>


                            <a href="/staff/{{$row->staff_id}}/staff-index" class="btn btn-outline-secondary my-1"><i class="fa fa-eye"></i></a>
                            <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#del{{$row->staff_id}}">
                                Delete
                            </button>

                            <div class="modal fade" id="del{{$row->staff_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation?</h5>
                                            {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                                            {{--<span aria-hidden="true">&times;</span>--}}
                                            {{--</button>--}}
                                        </div>
                                        <form method="post" action="/delete-staff/{{$row->staff_id}}">
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