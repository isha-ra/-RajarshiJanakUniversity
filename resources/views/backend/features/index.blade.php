@extends('backend.includes.layout')
@section('content')
    <div class="container">
        <div class="container">
            <table class="table table-hover table-striped">
                <tr>
                    <th>S.N</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Priority</th>
                    <th>Action</th>



                </tr>
                @php $i=1; @endphp
                @foreach($features as $row)
                    <tr>
                        <td data-toggle="modal" data-target="#exampleModal{{$row->feature_id}}">{{$i++}}</td>
                        <td><a href="{{asset('images/featureImage').'/'.$row->img_ur}}" data-lightbox="feature"><img class="table-thumbnail-img" src="{{ asset('images/featureImage/'. $row->img_ur) }}"></a></td>

                        <td data-toggle="modal" data-target="#exampleModal{{$row->feature_id}}">{{$row->title}}</td>
                        <td data-toggle="modal" data-target="#exampleModal{{$row->feature_id}}">{!! $row->description !!}</td>
                        <td data-toggle="modal" data-target="#exampleModal{{$row->feature_id}}">{{$row->priority}}</td>

                        <td>

                            <a href="/features/{{$row->feature_id}}/edit" class="btn btn-success my-1"><i class="fa fa-edit"></i></a>
                            {{--<a href="" class="btn btn-danger my-1"><i class="fa fa-trash"></i></a>--}}

                        </td>
                    </tr>

                    <div class="modal fade" id="exampleModal{{$row->feature_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{$row->title}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container p-5">
                                        <a href="{{asset('images/featureImage').'/'.$row->img_ur}}" data-lightbox="feature"><img src="{{asset('images/featureImage').'/'.$row->img_ur}}" class="table-thumbnail-img" ></a>
                                        <br/>
                                        {!! $row->description !!}
                                        <br/>
                                        Tag: {{$row->priority}}

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </table>
        </div>
    </div>
@endsection