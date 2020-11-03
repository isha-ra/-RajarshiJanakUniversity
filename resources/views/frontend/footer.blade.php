<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" ></script>
<script src="{{asset('js/lightbox.min.js')}}" ></script>


<script>
    $(document).ready(function(){
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items:1,
            loop:true,
            margin:10,
            autoplay:false,
            autoplayTimeout:1000,
            autoplayHoverPause:true,
            nav:true,
            navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
        });
        $('.owl-next').on('click',function(){
            owl.trigger('next.owl.carousel')
        });
        $('.owl-prev').on('click',function(){
            owl.trigger('prev.owl.carousel', [300])
        });

    });
</script>
{{--<script type="text/javascript" href="{{asset('js/bootstrap.min.js')}}"></script>--}}

{{--<script>--}}
    {{--window.onscroll= function () {--}}
        {{--scrollFunction()--}}
    {{--};--}}
    {{--function scrollFunction(){--}}
        {{--if(document.body.scrollTop>20 ||document.documentElement.scrollTop>20){--}}
            {{--document.getElementById("slide-menu").style.top="0px";--}}
        {{--}--}}
        {{--else{--}}
            {{--document.getElementById("slide-menu").style.top="-100px";--}}
        {{--}--}}
    {{--}--}}
{{--</script>--}}
<script>
    $( "#news-down" ).click(function() {
        $( "#news-list" ).scroll();
    });
</script>
<script>
    // $('.arrow').addClass('arrow-down');
    // $('ul a.nav-link.active.show').on('trigger',function(e){
    //     $('#home-tab').trigger('click', function () {
    //         // alert("hhhh")
    //         $('.arrow').addClass('arrow-down');
    //     });
    //
    //
    //     $('.arrow').addClass('arrow-down');
    // })
</script>

{{--<script>--}}
    {{--if($('.nav-link').hasClass('active')){--}}
        {{--$(".arrow").first().addClass('arrow-down');--}}
        {{--// $('.nav-link.active').addClass('a');--}}
        {{--// $(this).next('span').removeClass('arrow').addClass('arrow-down');--}}
    {{--}--}}

    {{--$(".nav-link").on('click', function(){--}}
        {{--// $(".arrow").addClass('arrow-down');--}}
        {{--// if($('.nav-link').hasClass('active')){--}}
            {{--$(".nav-link").removeClass('active');--}}
            {{--$(".arrow-down").removeClass('arrow-down').addClass('arrow');--}}
        {{--// }--}}
        {{--$(this).next().removeClass('arrow').addClass('arrow-down');--}}
    {{--})--}}
    {{--// else{--}}
    {{--//     if($('.nav-link').hasClass('a')){--}}
    {{--//         $('.nav-link.active').removeClass('a');--}}
    {{--//         $(".arrow").removeClass('arrow-down');--}}
    {{--//     }--}}
    {{--// }--}}

{{--</script>--}}



<script>
        window.onscroll= function () {
        scrollFunction()
        };
        function scrollFunction(){
        if(document.body.scrollTop>20 ||document.documentElement.scrollTop>20){
        document.getElementById("slidemenu2").style.backgroundColor="rgba(0,0,0,0.5)";
        }
        else{
        document.getElementById("slidemenu2").style.backgroundColor="#253b80";
        }
        }
</script>
</body>
<footer>
    <div class="pt-5">
        <div class="container-fluid theme-blue-background theme-white-color" style="">
            <div class="container">
               <div class="row">
                   <div class="col-md-3" >
                       <div class="mt-5">
                           <ul class="list-unstyled list-space">
                               <li><a href="/" class="theme-white-color"><i class="fa fa-chevron-right"></i> Home</a></li>
                               <li><a href="/departments" class="theme-white-color"><i class="fa fa-chevron-right"></i> Departments</a></li>
                               <li><a href="#" class="theme-white-color"><i class="fa fa-chevron-right"></i> Faculty Staff</a></li>
                               <li><a href="#" class="theme-white-color"><i class="fa fa-chevron-right"></i> Academic Calendar</a></li>
                           </ul>
                       </div>
                   </div>
                   <div class="col-md-3">
                       <div class="mt-5">
                           <ul class="list-unstyled">
                               <li>Quick Links</li>
                               <li><a class="theme-white-color" href="http://rju.edu.np/"> RAJARSHI JANAK UNIVERSITY</a></li>
                               <li><a class="theme-white-color" href="www.ugcnepal.edu.np/">University Grants Commission Nepal</a></li>
                               <li><a class="theme-white-color" href="https://tribhuvan-university.edu.np/">Tribhuvan University</a></li>
                           </ul>
                       </div>
                   </div>
                   <div class="col-md-3">
                       <div class="mt-5">
                           <span class="theme-white-color">Study With Us</span>
                           <ul class="list-unstyled list-space">
                               <li><a href="/subject" class="theme-white-color">BBA</a></li>
                               <li><a href="/subject" class="theme-white-color">BSc.CSIT</a></li>
                               <li><a href="/subject" class="theme-white-color">BCA</a></li>
                           </ul>

                       </div>
                   </div>
                   <div class="col-md-3">
                       <div class=" mt-5" style="">
                           <ul class="list-unstyled border p-4 theme-white-color">
                               <li style="font-size: 20px; font-weight: bold;" >Contact </li>
                               <li>Email: email@janaki.com.np</li>
                               <li>Telephone: +977 01 1234567 / +977 02 1234567</li>
                               <li>Address: Fusce nunc purus, commodo, Janakpur</li>
                           </ul>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </div>
</footer>
</html>