

@extends('backend.includes.layout')
@section('content')

    <div class="container ">
        <div class="row"><h3 class="mx-auto mt-3">Add Research</h3></div>
        <div class="container">
            <div class="row m-5">
                <div class="col-md-9 mx-auto shadow p-5">
                    <form method="post" action="/department/inst" enctype="multipart/form-data">
            {{@csrf_field()}}
            <div class="form-group">

                <input type="hidden" name="program_id"  readonly class="form-control" value="{{$programs->program_id}}">
            </div>
                        <div class="form-row">
                            <label>Program name</label>
                            <input type="text" name=" "  readonly class="form-control" value="{{$programs->name}}">
                        </div>
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title"  class="form-control" placeholder="Add name">
            </div>
            @php
                $staff = App\Model\StaffModel\Staff::get();
            @endphp
            <div class="form-group">
                <label>Staff type</label>
                <select class="form-control"  name="staff_id" >
                    @foreach($staff as $row)
                        <option value="{{$row->staff_id}}"> {{$row->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <button class="btn btn-outline-info btn-lg" type="submit">Add Program Research</button>
            </div>
        </form>
                </div>
            </div>
        </div>
    </div>
@endsection