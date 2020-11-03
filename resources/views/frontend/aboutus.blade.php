@extends('frontend.layout')
@section('content')
    <div class="container-fluid p-0">
        <img class="img-fluid" src="{{asset('images/janaki.jpg')}}" style="height: 400px; width: 100%;">
    </div>
    <div class="container-fluid blue-grad pt-3">
        <div class="container">
            <ul class="nav justify-content-center" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active theme-white-color pb-4" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-home"></i></a>
                    <span class="arrow" id="home-id"></span>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link theme-white-color pb-4" id="history-tab" data-toggle="tab" href="#history" role="tab" aria-controls="history" aria-selected="false">History</a>
                    <span class="arrow"></span>
                </li>
                <li class="nav-item">
                    <a class="nav-link theme-white-color pb-4" id="principalVoice-tab" data-toggle="tab" href="#principalVoice" role="tab" aria-controls="principalVoice" aria-selected="false">Principal's Voice</a>
                    <span class="arrow"></span>
                </li>
                <li class="nav-item">
                    <a class="nav-link theme-white-color pb-4" id="feature-tab" data-toggle="tab" href="#feature" role="tab" aria-controls="feature" aria-selected="false">Features</a>
                    <span class="arrow"></span>
                </li>
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link theme-white-color pb-4" id="projectResearch-tab" data-toggle="tab" href="#projectResearch" role="tab" aria-controls="projectResearch" aria-selected="false">Project Research</a>--}}
                    {{--<span class="arrow"></span>--}}
                {{--</li>--}}
            </ul>
        </div>
    </div>
    <div class="container-fluid" style="min-height: 500px;">
        <div class="container pl-5 pr-5">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="list-title py-1">Introduction</h3>
                    <p>Aenean at ultricies sem. Donec a urna quis leo tempor sollicitudin. Aenean lacinia, quam eu accumsan tincidunt,
                        ligula enim congue velit, non sodales nisi lectus ac nisl. Donec ornare elit ac lacus venenatis malesuada.
                        Duis at nunc in elit ultrices mattis. Aenean bibendum, eros placerat bibendum gravida.</p>

                    <p>Lectus lacus lobortis lorem, ac euismod tortor lacus vitae ante.
                        Ut ultrices eros sit amet ullamcorper molestie. Mauris blandit et ligula at aliquam.
                        ligula enim congue velit, non sodales nisi lectus ac nisl.
                    </p>
                    <p>Lectus lacus lobortis lorem, ac euismod tortor lacus vitae ante.
                        Ut ultrices eros sit amet ullamcorper molestie. Mauris blandit et ligula at aliquam.
                        ligula enim congue velit, non sodales nisi lectus ac nisl.
                    </p>

                </div>


                <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="history-tab">
                    <h3 class="list-title py-1">History</h3>
                    <p>Aenean at ultricies sem. Donec a urna quis leo tempor sollicitudin. Aenean lacinia, quam eu accumsan tincidunt,
                        ligula enim congue velit, non sodales nisi lectus ac nisl. Donec ornare elit ac lacus venenatis malesuada.
                        Duis at nunc in elit ultrices mattis. Aenean bibendum, eros placerat bibendum gravida.</p>

                    <p>Lectus lacus lobortis lorem, ac euismod tortor lacus vitae ante.
                        Ut ultrices eros sit amet ullamcorper molestie. Mauris blandit et ligula at aliquam.
                        ligula enim congue velit, non sodales nisi lectus ac nisl.
                    </p>
                    <p>Lectus lacus lobortis lorem, ac euismod tortor lacus vitae ante.
                        Ut ultrices eros sit amet ullamcorper molestie. Mauris blandit et ligula at aliquam.
                        ligula enim congue velit, non sodales nisi lectus ac nisl.
                    </p>
                </div>


                <div class="tab-pane fade" id="principalVoice" role="tabpanel" aria-labelledby="principalVoice-tab">
                    <div class="row">
                        <div class="col-md-8">
                                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pulvinar scelerisque eros, in tincidunt eros pretium id. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur et mi vitae dui convallis sollicitudin eu eu dolor. Curabitur nec purus at arcu dapibus tristique. Cras iaculis blandit bibendum. In lacinia lectus tempus nulla tempor, id fringilla eros tincidunt. In hendrerit id erat in tempus. Sed laoreet dapibus rhoncus. Praesent quis venenatis libero. Duis eget nisi eu ipsum varius viverra eget a enim. Vestibulum sed hendrerit nisi. Praesent quam massa, porta semper hendrerit in, mollis sit amet orci.</p>

                            <p class="text-justify">Proin ac ligula leo. Praesent in auctor justo, eget condimentum risus. Nullam consectetur blandit iaculis. Etiam ac molestie erat, et elementum purus. Aliquam velit dolor, tempus nec nulla ut, molestie pellentesque est. Sed nec interdum sapien, vitae efficitur augue. Vestibulum hendrerit mollis tortor, sit amet tincidunt enim tristique facilisis. Sed neque augue, rhoncus nec lectus in, efficitur posuere turpis. Sed scelerisque hendrerit mauris nec ullamcorper. Etiam ac augue ut libero dictum ullamcorper.</p>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 mt-5">
                                <div class="card-img-top ">
                                    <img src="{{asset('images/img2.jpg')}}" style="height: 300px; width: auto;" alt="Principal's photo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="tab-pane fade" id="feature" role="tabpanel" aria-labelledby="feature-tab">
                    <div class="row">
                        <div class="col-md-8">
                            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                            <p class="text-justify">Proin ac ligula leo. Praesent in auctor justo, eget condimentum risus. Nullam consectetur blandit iaculis. Etiam ac molestie erat, et elementum purus. Aliquam velit dolor, tempus nec nulla ut, molestie pellentesque est. Sed nec interdum sapien, vitae efficitur augue. Vestibulum hendrerit mollis tortor, sit amet tincidunt enim tristique facilisis. Sed neque augue, rhoncus nec lectus in, efficitur posuere turpis. Sed scelerisque hendrerit mauris nec ullamcorper. Etiam ac augue ut libero dictum ullamcorper.</p>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 mt-5">
                                <div class="card-img-top ">
                                    <img src="{{asset('images/img2.jpg')}}" style="height: 300px; width: auto;" alt="Principal's photo">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                            <p class="text-justify">Proin ac ligula leo. Praesent in auctor justo, eget condimentum risus. Nullam consectetur blandit iaculis. Etiam ac molestie erat, et elementum purus. Aliquam velit dolor, tempus nec nulla ut, molestie pellentesque est. Sed nec interdum sapien, vitae efficitur augue. Vestibulum hendrerit mollis tortor, sit amet tincidunt enim tristique facilisis. Sed neque augue, rhoncus nec lectus in, efficitur posuere turpis. Sed scelerisque hendrerit mauris nec ullamcorper. Etiam ac augue ut libero dictum ullamcorper.</p>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 mt-5">
                                <div class="card-img-top ">
                                    <img src="{{asset('images/img2.jpg')}}" style="height: 300px; width: auto;" alt="Principal's photo">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                            <p class="text-justify">Proin ac ligula leo. Praesent in auctor justo, eget condimentum risus. Nullam consectetur blandit iaculis. Etiam ac molestie erat, et elementum purus. Aliquam velit dolor, tempus nec nulla ut, molestie pellentesque est. Sed nec interdum sapien, vitae efficitur augue. Vestibulum hendrerit mollis tortor, sit amet tincidunt enim tristique facilisis. Sed neque augue, rhoncus nec lectus in, efficitur posuere turpis. Sed scelerisque hendrerit mauris nec ullamcorper. Etiam ac augue ut libero dictum ullamcorper.</p>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 mt-5">
                                <div class="card-img-top ">
                                    <img src="{{asset('images/img2.jpg')}}" style="height: 300px; width: auto;" alt="Principal's photo">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                            <p class="text-justify">Proin ac ligula leo. Praesent in auctor justo, eget condimentum risus. Nullam consectetur blandit iaculis. Etiam ac molestie erat, et elementum purus. Aliquam velit dolor, tempus nec nulla ut, molestie pellentesque est. Sed nec interdum sapien, vitae efficitur augue. Vestibulum hendrerit mollis tortor, sit amet tincidunt enim tristique facilisis. Sed neque augue, rhoncus nec lectus in, efficitur posuere turpis. Sed scelerisque hendrerit mauris nec ullamcorper. Etiam ac augue ut libero dictum ullamcorper.</p>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 mt-5">
                                <div class="card-img-top ">
                                    <img src="{{asset('images/img2.jpg')}}" style="height: 300px; width: auto;" alt="Principal's photo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{--<div class="tab-pane fade" id="projectResearch" role="tabpanel" aria-labelledby="projectResearch-tab">--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
@endsection