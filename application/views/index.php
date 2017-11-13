<!-- 깃헙 테스트 -->
<section>
    <div class="swiper-container top_swiper">
        <div class="swiper-wrapper">
            <!-- <div class="swiper-slide slide_bg_01" style="background-image:url(/images/main/slide_bg_01.jpg)">
            </div>
            <div class="swiper-slide slide_bg_02" style="background-image:url(/images/main/slide_bg_02.jpg)">
            </div>
            <div class="swiper-slide slide_bg_02" style="background-image:url(/images/main/slide_bg_03.jpg)">
            </div> -->
            <div class="swiper-slide slide_bg_01 position_custom_slide swiper-slide-active" style="background-image: url(/images/introduce/1920_1.jpg);">
            </div>
            <div class="swiper-slide slide_bg_02" style="background-image:url(/images/main/slide_bg_01.jpg)">
            </div>
            <div class="swiper-slide slide_bg_02" style="background-image:url(/images/main/slide_bg_02.jpg)">
            </div>
        </div>
        <div class="swiper-pagination top_pagination"></div>
        <div class="swiper-button-next top_swiper_next"></div>
        <div class="swiper-button-prev top_swiper_prev"></div>
    </div>
    <script>
        var swiper = new Swiper('.top_swiper', {
            pagination: '.swiper-pagination',
            nextButton: '.top_swiper_next',
            prevButton: '.top_swiper_prev',
            paginationClickable: true,
            speed: 1200
        });
    </script>
</section>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="offset-sm-1 col-sm-7 col-12">
                <div class="main_text_box">
                    <img class="index_main_text" src="/images/main/main_text.jpg" alt="">
                    <h2><b>Accommodation</b></h2>
                    <h5>
                        스탠다드 더블 - <b>Standard Double</b><br>
                        스탠다드 트윈 -  <b>Standard Twin</b><br>
                        디럭스 더블 -  <b>Deluxe Double</b><br>
                        스위트룸 -  <b>Suite</b><br>
                        약자전용실 - <b>Handicapped Room</b><br>
                        전통실 - <b>Korean Traditional Room</b><br>
                    </h5>
                </div>
            </div>
            <div class="hidden-sm-down col-3 align-self-center">
                <a class="reserv_wrapper" href="https://booking.naver.com/booking/3/bizes/109623"  target="_blank">
                    <div class="hover_reserv">
                        <span class="italic hover_on">RESERVATION</span>
                        <img class="hover_on" src="/images/common/right_arrow65.png" alt="">
                        <div class="plus_deg  hover_off">
                            <span class="bar1"></span>
                            <span class="bar2"></span>
                            <span class="bar3"></span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="pic_box">
        <div class="swiper-container main_swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="full_img_wrapper">
                        <a href="/index/room1">
                            <div class="overlay_black"></div>
                        </a>
                        <img class="more_img" src="/images/main/more.png" alt="">
                        <img src="/images/rooms/room1.jpg" alt="">
                    </div>
                    <div class="pic_text_box">
                        <h5><strong>Standard Double</strong></h5>
                        <p>편안하고 깔끔한<br>스탠다드 더블룸 입니다.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="full_img_wrapper">
                        <a href="/index/room2">
                            <div class="overlay_black"></div>
                        </a>
                        <img class="more_img" src="/images/main/more.png" alt="">
                        <img src="/images/rooms/room2.jpg" alt="">
                    </div>
                    <div class="pic_text_box">
                        <h5><strong>Standard Twin</strong></h5>
                        <p>실용적인<br>스탠다드 트윈룸 입니다.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="full_img_wrapper">
                        <a href="/index/room3">
                            <div class="overlay_black"></div>
                        </a>
                        <img class="more_img" src="/images/main/more.png" alt="">
                        <img src="/images/rooms/room3.jpg" alt="">
                    </div>
                    <div class="pic_text_box">
                        <h5><strong>Deluxe Double</strong></h5>
                        <p>세련되고 현대적인<br>디럭스 더블룸 입니다.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="full_img_wrapper">
                        <a href="/index/room4">
                            <div class="overlay_black"></div>
                        </a>
                        <img class="more_img" src="/images/main/more.png" alt="">
                        <img src="/images/rooms/room4.jpg" alt="">
                    </div>
                    <div class="pic_text_box">
                        <h5><strong>Suite</strong></h5>
                        <p>고급스러운 프리미엄<br>스위트룸 입니다.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="full_img_wrapper">
                        <a href="/index/room5">
                            <div class="overlay_black"></div>
                        </a>
                        <img class="more_img" src="/images/main/more.png" alt="">
                        <img src="/images/rooms/room5.jpg" alt="">
                    </div>
                    <div class="pic_text_box">
                        <h5><strong>Handicapped Room</strong></h5>
                        <p>장애인, 노약자 등을 위한<br>전용실 입니다.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="full_img_wrapper">
                        <a href="/index/room6">
                            <div class="overlay_black"></div>
                        </a>
                        <img class="more_img" src="/images/main/more.png" alt="">
                        <img src="/images/rooms/room6.jpg" alt="">
                    </div>
                    <div class="pic_text_box">
                        <h5><strong>Korean Traditional Room</strong></h5>
                        <p>온돌취침을 위한<br>트레디셔널룸 입니다.</p>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
<script>
    var swiper = new Swiper('.main_swiper', {
        paginationClickable: true,
        speed: 1000,
        spaceBetween: 30,
        slidesPerView: 4.5,
        breakpoints: {
            768: {
                slidesPerView: 2.5,
                spaceBetween: 15
            }
        }
    });
</script>


<section class="bg_swiper_section" style="background-image:url(/images/main/slide_bg.jpg)">
    <div class="wrapper">
        <div class="swiper-container bg_swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide_bg_01 hover_reserv">
                    <div class="side_img_box">
                     <div class="side_img_image_wrapper">
                         <div class="side_img_image" style="background-image:url(/images/main/pic_slide1.jpg)">
                         </div>
                     </div>
                     <div class="side_img_text">
                        <div class="pd_div">
                            <div class="align_right hidden-sm-down">
                                <a class="reserv_wrapper" href="">
                                    <div class="">
                                        <span class="italic hover_on">MORE</span>
                                        <img class="hover_on" src="/images/common/right_arrow65.png" alt="">
                                        <img class="hover_off" src="/images/common/plus.png" alt="">
                                    </div>
                                </a>
                                
                            </div>
                            <div class="text_img">
                                <img class="text" src="/images/main/dining.png" alt="">
                            </div>
                            <p>
                                비즈니스 호텔에서 맛볼 수 있는 고급요리.
                                편안하고 맛있는 식사를 제공하는 호텔씨엘의
                                레스토랑에서 품위있는 중식을 제공합니다.<br>
                                (2017.11.1 GRAND OPENING)
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide slide_bg_02 hover_reserv">
                <div class="side_img_box">
                 <div class="side_img_image_wrapper">
                     <div class="side_img_image" style="background-image:url(/images/restaurant/top_bg.jpg)">
                     </div>
                 </div>
                 <div class="side_img_text">
                    <div class="pd_div">
                        <div class="align_right hidden-sm-down">
                            <a class="reserv_wrapper" href="">
                                <div class="">
                                    <span class="italic hover_on">MORE</span>
                                    <img class="hover_on" src="/images/common/right_arrow65.png" alt="">
                                    <img class="hover_off" src="/images/common/plus.png" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="text_img">
                            <img class="text" src="/images/main/dining.png" alt="">
                        </div>
                        <p>
                            상쾌한 아침을 위한,<br>
                            부담없고 신선한 요리를 제공하기위해
                            노력합니다.<br>
                            (2017.11.1 GRAND OPENING)
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-button-next bg_swiper_next1"></div>
    <div class="swiper-button-prev bg_swiper_prev1"></div>
</div>
<div class="swiper-button-next bg_swiper_next"></div>
<div class="swiper-button-prev bg_swiper_prev"></div>
</div>
<script>
    var swiper = new Swiper('.bg_swiper', {
        nextButton: '.bg_swiper_next1',
        prevButton: '.bg_swiper_prev1',
        paginationClickable: true,
        speed: 1000,
        spaceBetween: 30,
        effect: 'fade'
    });
</script>
</section>

<section class="section facilities">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 scroll_show scroll_show1">
                <div class="pd_div">
                    <img class="text" src="/images/main/facilities.png" alt="">
                    <p>
                        고객 편안한 휴식, 성공적인 비즈니스를 위해<br>
                        각종 부대시설을 이용할 수 있습니다.<br>
                    </p>
                    <p>세탁실 &nbsp; <span class="div_bar">|</span> &nbsp; 컨퍼런스 룸 &nbsp; <span class="div_bar">|</span> &nbsp; 비즈니스 센터 &nbsp; <span class="div_bar">|</span>&nbsp; 피트니스&nbsp;(준비중) </p>
                </div>
            </div>
            <div class="col-sm-6 scroll_show scroll_show2">
                <a href="/index/conference">
                    <div class="img_div_wrapper">
                        <div class="img_div full_img_wrapper mt0" style="background-image: url('/images/main/picture1.jpg')"></div>
                        <div class="full_img_wrapper">
                            <div class="overlay_black"></div>
                            <h4>FACILITIES<br>CONFERENCE ROOM</h4>
                            <h6>CLICK TO ENLARGE</h6>
                            <img src="/images/common/plus_white.png" alt="">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 scroll_show scroll_show3">
                <a href="/index/laundry">
                    <div class="img_div_wrapper">
                        <div class="img_div full_img_wrapper" style="background-image: url('/images/main/picture2.jpg')"></div>
                        <div class="full_img_wrapper">
                            <div class="overlay_black"></div>
                            <h4>FACILITIES<br>LAUNDRY</h4>
                            <h6>CLICK TO ENLARGE</h6>
                            <img src="/images/common/plus_white.png" alt="">
                        </div>
                    </div>
                </a>
            </div>
<!-- 
            <div class="col-sm-6 scroll_show scroll_show4">
                <a href="/index/fitness">
                    <div class="img_div_wrapper">
                        <div class="img_div full_img_wrapper" style="background-image: url('/images/main/picture2.jpg')"></div>
                        <div class="full_img_wrapper">
                            <div class="overlay_black"></div>
                            <h4>FACILITIES<br>FITNESS</h4>
                            <h6>CLICK TO ENLARGE</h6>
                            <img src="/images/common/plus_white.png" alt="">
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 scroll_show scroll_show5">
                <div class="img_div_wrapper">
                    <div class="img_div full_img_wrapper" style="background-image: url('/images/main/picture2.jpg')"></div>
                    <div class="full_img_wrapper">
                        <div class="overlay_black"></div>
                        <h4>STANDARD<br>DOUBLE</h4>
                        <h6>CLICK TO ENLARGE</h6>
                        <img src="/images/common/plus_white.png" alt="">
                    </div>
                </div>
            </div>

            <div class="col-sm-4 scroll_show scroll_show6">
                <div class="img_div_wrapper">
                    <div class="img_div full_img_wrapper" style="background-image: url('/images/main/picture2.jpg')"></div>
                    <div class="full_img_wrapper">
                        <div class="overlay_black"></div>
                        <h4>STANDARD<br>DOUBLE</h4>
                        <h6>CLICK TO ENLARGE</h6>
                        <img src="/images/common/plus_white.png" alt="">
                    </div>
                </div>
            </div>

            <div class="col-sm-8 scroll_show scroll_show7">
                <div class="img_div_wrapper">
                    <div class="img_div full_img_wrapper" style="background-image: url('/images/main/picture2.jpg')"></div>
                    <div class="full_img_wrapper">
                        <div class="overlay_black"></div>
                        <h4>STANDARD<br>DOUBLE</h4>
                        <h6>CLICK TO ENLARGE</h6>
                        <img src="/images/common/plus_white.png" alt="">
                    </div>
                </div>
            </div>

            <div class="col-sm-12 scroll_show scroll_show8">
                <div class="img_div_wrapper">
                    <div class="img_div full_img_wrapper" style="background-image: url('/images/main/picture2.jpg')"></div>
                    <div class="full_img_wrapper">
                        <div class="overlay_black"></div>
                        <h4>STANDARD<br>DOUBLE</h4>
                        <h6>CLICK TO ENLARGE</h6>
                        <img src="/images/common/plus_white.png" alt="">
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>

<section class="section about_section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-6">
                <div class="pd_div">
                    <img class="text" src="/images/main/about.png" alt="">
                    <p class="division_line">|</p>
                    <img class="text_hotel" src="/images/main/hotel.png" alt="">
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="about_desc">
                    <p>고객센터 : 00:00 - 00:00(24시간)</p>
                    <p>휴무안내 : 연중무휴</p>
                </div>
                <div class="about_desc">
                    <p>경기도 화성시 동탄중심상가2길 12 6층-10층</p> 
                    <p>6F, 12, Dongtanjungsimsangga 2-gil, Hwaseong-si, Gyeonggi-do</p>
                </div>
                <div class="about_desc">
                    <p>TEL 031-869-7100</p>
                    <p>FAX 031-869-7102</p>
                    <p>hotelciel@staynhome.co.kr</p>
                </div>
            </div>
            <div class="col-lg-5 col-md-12">
                <div class="img_div full_img_wrapper map_img" style="">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3087.3626985514616!2d127.07168117968186!3d37.204283493692785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b4437702d2251%3A0x57b676ff21fab3fb!2z7Zi47YWUIOyUqOyXmA!5e0!3m2!1sko!2skr!4v1505988042412" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    $(document).ready(function(){

        $(window).scroll(function(e){
            parallax();
        });

        function parallax(){
            var scrolled = $(window).scrollTop();
            var bg_top = $(".bg_swiper_section").offset().top;
            
            $('.bg_swiper_section').css('background-position-y',-(scrolled+$(window).height() - bg_top)*0.2+'px');
        }

    }); 
</script>
