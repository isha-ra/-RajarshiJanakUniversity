@extends('frontend.layout')
@section('content')


    <div class="container-fluid roboto-font">
        <div class="container pt-5 pb-5">
            <div class="mt-2">
                <i class="fa fa-home"></i>Upcoming Events> Events
            </div>
        </div>
    </div>
    <div class="container-fluid " style="height: 300px; width: 100%; background-image: url('{{asset('images/background.jpg')}}'); ">
    </div>
    <div class="container-fluid m-0" style="">
        <div class="container">
            <div class="container p-3" style="margin-top: -250px; min-height: 500px;">
                <div class="p-5 theme-light-blue-background " style="height: 150px;">
                    <h3 class="theme-white-color text-capitalize">Fusce nunc purus, commodo sit amet tristique sit amet, congue vitae leo. </h3>
                </div>
                <div class=" theme-white-background p-5 shadow">
                    <div class="row">
                        <div class="col-md-8 pr-5">
                                    {{--<div>--}}
                                        <img class="img-fluid" src="{{asset('images/janaki.jpg')}}" style="display:block; height: 300px; object-fit: scale-down;">
                                    {{--</div>--}}

                            <div class="pt-5 text-justify">
                                <p>Aenean at ultricies sem. Donec a urna quis leo tempor sollicitudin. Aenean lacinia, quam eu accumsan tincidunt, ligula enim congue velit, non sodales nisi lectus ac nisl. Donec ornare elit ac lacus venenatis malesuada. Duis at nunc in elit ultrices mattis. Aenean bibendum, eros placerat bibendum gravida, lectus lacus lobortis lorem, ac euismod tortor lacus vitae ante. Ut ultrices eros sit amet ullamcorper molestie. Mauris blandit et ligula at aliquam.</p>
                                <p>
                                    Proin pulvinar sodales fringilla. Fusce tincidunt vestibulum aliquet. In id interdum enim. Nunc pulvinar justo id risus vehicula, aliquam congue enim molestie. Fusce mollis eros in tellus varius, eu malesuada ante aliquam. Vestibulum maximus, est at maximus tempor, lacus ex sagittis velit, vel egestas lectus metus quis nisl. Pellentesque lacus arcu, ultricies sit amet luctus vitae, varius sed orci. Maecenas sagittis odio eget congue fringilla. Etiam fringilla nibh eu aliquet lobortis. Nulla volutpat ante in quam sodales, eu dapibus dolor dictum. Morbi arcu magna, mollis id vulputate vitae, consequat vitae neque. Maecenas id augue ultrices, rutrum urna vel, ultrices arcu. Donec vitae tellus mauris. Pellentesque vitae nulla nisi. Curabitur ac aliquam odio, vitae posuere massa.
                                </p>
                                <p>
                                    Suspendisse eleifend dui eu tellus tincidunt, et mattis turpis interdum. Sed vitae nunc tincidunt nisl dictum ultrices. Nam blandit et velit id rutrum. Proin commodo ex at sollicitudin interdum. Fusce sed orci ac lectus rutrum laoreet sed ac diam. Cras eget convallis velit. Duis bibendum sapien pellentesque nisi egestas, nec luctus orci fringilla. Sed ac laoreet neque, at ullamcorper dolor. Morbi volutpat, ante ut pharetra dapibus, massa nisi viverra massa, a pellentesque orci augue in metus. Fusce elit nisi, interdum ac dui at, placerat dignissim ligula. Etiam vitae cursus purus, vitae tempus quam. Nam porta finibus justo, sed egestas arcu sollicitudin vitae. Nunc congue facilisis gravida. Proin diam lacus, auctor sed nibh id, tristique mollis tellus. Integer eros leo, hendrerit eget enim nec, sagittis suscipit leo.
                                </p>
                                <p>
                                    Fusce nunc purus, commodo sit amet tristique sit amet, congue vitae leo. Ut sagittis facilisis justo nec volutpat. Mauris pellentesque, ante vel porta aliquet, eros velit tristique orci, ut sodales ipsum ipsum sagittis quam. Nulla vestibulum aliquam volutpat. Suspendisse potenti. Donec ex mi, posuere tincidunt ligula sit amet, mollis fringilla neque. Cras volutpat, metus in molestie varius, enim metus varius lacus, quis molestie turpis arcu vitae sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 border-left">
                            <h4 class="text-center pb-4">Previous Events </h4>
                          <ul class="list-unstyled">
                              <li>
                                  <a href="#" class="theme-black-color">
                                      <div class="card border-0 text-left">
                                          <img src="{{asset('images/book.jpg')}}" class="card-img-top" style="display: block; height: 170px; width: auto; ">
                                          <div class="card-body m-0 p-0">
                                              <p>Fusce nunc purus, commodo sit amet tristique sit amet, congue vitae leo.</p>
                                          </div>
                                      </div>
                                  </a>
                              </li>
                              <li>
                                  <a href="#" class="theme-black-color">
                                      <div class="card border-0 text-left">
                                          <img src="{{asset('images/book.jpg')}}" class="card-img-top" style="display: block; height: 170px; width: auto; ">
                                          <div class="card-body m-0 p-0">
                                              <p>Fusce nunc purus, commodo sit amet tristique sit amet, congue vitae leo.</p>
                                          </div>
                                      </div>
                                  </a>
                              </li>
                              <li>
                                  <a href="#" class="theme-black-color">
                                      <div class="card border-0 text-left">
                                          <img src="{{asset('images/book.jpg')}}" class="card-img-top" style="display: block; height: 170px; width: auto; ">
                                          <div class="card-body m-0 p-0">
                                              <p>Fusce nunc purus, commodo sit amet tristique sit amet, congue vitae leo.</p>
                                          </div>
                                      </div>
                                  </a>
                              </li>
                              <li>
                                  <a href="#" class="theme-black-color">
                                      <div class="card border-0 text-left">
                                          <img src="{{asset('images/book.jpg')}}" class="card-img-top" style="display: block; height: 170px; width: auto; ">
                                          <div class="card-body m-0 p-0">
                                              <p>Fusce nunc purus, commodo sit amet tristique sit amet, congue vitae leo.</p>
                                          </div>
                                      </div>
                                  </a>
                              </li>


                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection