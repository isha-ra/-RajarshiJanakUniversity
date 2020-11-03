@extends('backend.includes.layout')
@section('content')
    <div class="container">
        <div class="row"><h3 class="mx-auto mt-3">Add New Department</h3></div>
        <div class="container">
            <div class="row m-5">
                <div class="col-md-8 mx-auto shadow p-5">

                    <form method="post" action="/department/insert" enctype="multipart/form-data">
                        {{@csrf_field()}}
                        <div class="form-row py-2">
                            <label for="name" class="label">Department Title</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Department title">
                        </div>

                        <div class="form-row py-2">
                            <label for="established_date" class="label">Established Date</label>
                            <input type="date" class="form-control" id="name" name="established_date">
                        </div>
                        @php
                            $staff = App\Model\StaffModel\Staff::get();
                        @endphp
                        <div class="form-group">
                            <label>Head Of Department</label>
                            <select class="form-control"  name="staff_id" >
                                @foreach($staff as $row)
                                    <option value="{{$row->staff_id}}"> {{$row->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-row py-2">
                            <button class="btn theme-blue-background theme-white-color" type="submit">Add Department</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection