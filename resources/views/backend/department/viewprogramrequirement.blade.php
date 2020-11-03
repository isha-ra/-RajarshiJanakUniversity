@extends('backend.includes.layout')
@section('content')
    <div class="container">
        <div class="container">
            <table class="table table-hover">
                <tr>
                    <th>S.N</th>
                    <th>Program name</th>
                    <th>Program requirement</th>
                    <th>Program Description</th>
                    <th>Action</th>
                </tr>
                @php $i=1; @endphp
                @foreach($program_requirements as $row)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$row->program_id}}</td>
                        <td>{{$row->requirement_name}}</td>
                        <td>{{$row->description}}</td>

                        <td>



                            <a href="#"><button class="btn btn-outline-danger ">
                                    Delete
                                </button> </a>
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>
@endsection