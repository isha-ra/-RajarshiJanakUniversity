@extends('backend.includes.layout')
@section('content')

    <div class="container">
        <div class="container">
<input type="submit" class="button btn-outline-primary">

            <table class="table table-hover">
                <tr>
                    <th>S.N</th>
                    <th>Program id</th>
                    <th>Title</th>
                    <th>staff id</th>
                    <th>Action</th>

                </tr>
                @php $i=1; @endphp
                @foreach($program_researches as $row)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$row->program_id}}</td>
                        <td>{{$row->title}}</td>

                        <td>{{$row->staff_id}}</td>


                        <td>




                            <a href="/department/{{$row->program_id}}/editresearch" class="btn btn-outline-primary">
                                Edit Programs Research</a>


                            {{--<a href="/department/{{$row->program_id}}/viewresearch" class="btn btn-outline-primary">View Program Research</a>--}}
                            {{--<a href="/department/{{$row->program_id}}/programedit" class="btn btn-outline-primary">Edit Program</a>--}}



                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>
@endsection