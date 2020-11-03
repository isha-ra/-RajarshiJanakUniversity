@extends('backend.includes.layout')
@section('content')
    <div class="container">


        <div class="container">
            <table class="table table-hover">
                <tr>
                    <th>S.N</th>
                    <th>Staff type</th>

                    <th>Action</th>
                </tr>
                @php $i=1; @endphp
                @foreach($stafftypes as $row)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$row->title}}</td>

                        <td>

                            <a href="/stafftype/{{$row->type_id}}/edit" class="btn btn-primary">Edit</a>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#del{{$row->type_id}}">
                                Delete
                            </button>

                            <div class="modal fade" id="del{{$row->type_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation?</h5>
                                            {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                                                {{--<span aria-hidden="true">&times;</span>--}}
                                            {{--</button>--}}
                                        </div>
                                        <form method="post" action="/delete-stafftype/{{$row->type_id}}">
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
                            {{--<a href="#"><button class="btn btn-outline-danger ">--}}
                                    {{--Delete--}}
                                {{--</button> </a>--}}
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>
@endsection