<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width">
    <meta name="description" content="동탄 비지니스의 중심, 호텔 씨엘">
    <link rel="canonical" href="http://www.hotelciel.co.kr">
    <!--openGraph-->
    <meta property="og:type" content="website">
    <meta property="og:title" content="동탄 비즈니스의 중심, 호텔 씨엘">
    <meta property="og:description" content="동탄 비즈니스 호텔의 대표, 호텔 씨엘입니다.">
    <meta property="og:image" content="/images/header/logo.png">
    <meta property="og:url" content="www.hotelciel.co.kr">
    <!--openGraph-->
    <meta name="naver-site-verification" content="9df2f28a6b380384ae39cd8564079d42aee20adf"/>

    <title>호텔 씨엘</title>

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.8.18/themes/base/jquery-ui.css" type="text/css" />   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/css/swiper.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/responsive.css">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script> 
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.8.18/jquery-ui.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="/js/swiper.min.js"></script>
    <script src="/js/gambit-smoothscroll-min.js"></script>
    
</head>
<body>
    <header class="hidden-lg-down">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-3">
                    <a href="/">
                        <img src="/images/header/logo.png">
                    </a>
                </div>
                <div class="col-9">
                    <div class="header_nav_contain raleway">
                        <div class="header_nav_wrapper">
                            <ul class="header_nav header_nav1">
                                <li>
                                    ABOUT
                                    <ul class="depth_2">
                                        <li class="under_line"></li>
                                        <li><a href="/index/introduce">HOTEL CIEL</a></li>
                                        <li><a href="/index/gallery">GALLERY</a></li>
                                    </ul>
                                </li>
                                <li>
                                    ROOM
                                    <ul class="depth_2">
                                        <li class="under_line"></li>
                                        <li><a href="/index/room1">Standard Double</a></li>
                                        <li><a href="/index/room2">Standard Twin</a></li>
                                        <li><a href="/index/room3">Deluxe Double</a></li>
                                        <li><a href="/index/room4">Suite</a></li>
                                        <li><a href="/index/room5">Handicapped Room</a></li>
                                        <li><a href="/index/room6">Korean Traditional Room</a></li>
                                    </ul>
                                </li>
                                <li>
                                    RESTAURANT
                                    <ul class="depth_2">
                                        <li class="under_line"></li>
                                        <li><a href="/index/restaurant">DINING(준비중)</a></li>
                                    </ul>
                                </li>
                                <li>
                                    FACILITIES
                                    <ul class="depth_2">
                                        <li class="under_line"></li>
                                        <li><a href="/index/laundry">LAUNDRY</a></li>
                                        <li><a href="/index/conference">CONFERENCE</a></li>
                                        <!-- <li><a href="/index/businesscenter">BUSINESS CENTER</a></li> -->
                                        <li><a href="/index/fitness">FITNESS</a></li>
                                        <li><a href="#">(준비중)</a></li>
                                    </ul>
                                </li>
                                <li>
                                    CS CENTER
                                    <ul class="depth_2">
                                        <li class="under_line"></li>
                                        <li><a href="/index/qna">Q&A</a></li>
                                        <li><a href="/index/contact">CONTACT</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="header_nav header_nav2">
                                <?php if (!$this->session->userdata('MEMBER_IDX')) { ?>
                                <li class="login"><a href="/index/login">로그인</a></li>
                                <?php } else { ?>
                                <li><a href="/index/my_info">마이페이지</a></li>
                                <li class="logout"><a href="/index.php/dataFunction/memberLogout">로그아웃</a></li>
                                <?php } ?>
                                <li><a href="https://booking.naver.com/booking/3/bizes/109623" target="_blank">예약하기</a></li>
                            </ul>
                            <ul class="header_nav header_nav3">
                                <li class="lang_target">
                                    <img class="more_triangle" src="/images/common/triangle.png" alt="">
                                    <ul class="depth_2">
                                        <li class="on"><button type="button">KR</button></li>
                                        <li><button type="button">EN</button></li>
                                        <li><button type="button">JP</button></li>
                                        <li><button type="button">CN</button></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_sub">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <h6>
                            동탄 중심,<br>
                            최적의 비즈니스 호텔<br>
                            HOTEL CIEL 입니다.<br><br>

                            감사합니다.
                        </h6>
                    </div>
                    <div class="col-9">
                            <!-- <div class="header_nav_contain raleway">
                                <div class="header_nav_wrapper">
                                    <ul class="header_nav">
                                        <li><a href="/index/introduce">ABOUT</a></li>
                                        <li><a href="/index/gallery">ROOM</a></li>
                                        <li><a href="/index/restaurant">RESTAURANT</a></li>
                                        <li><a href="/index/facilities">FACILITIES</a></li>
                                        <li><a href="">CS CENTER</a></li>
                                    </ul>
                                    <ul class="header_nav header_nav2">
                                        <li class="login"><a href="/index/login">로그인</a></li>
                                        <li class="logout" style="display: none;"><a href="">로그아웃</a></li>
                                        <li><a href="">예약하기</a></li>
                                    </ul>
                                    <ul class="header_nav header_nav3">
                                        <li><button class="on" type="button">KR</button></li>
                                        <li><button type="button">EN</button></li>
                                        <li><button type="button">CN</button></li>
                                    </ul>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="mobile_header hidden-xl-up">
            <div class="va_container">
                <div class="va_row pl15">
                    <a href="/">
                        <img class="mobile_header_logo" src="/images/header/logo.png" alt="">
                    </a>
                </div>
                <div class="va_row mobile_hamburger">
                    <img class="menu_link" src="/images/header/ic_menu_white.png" alt="">
                </div>
            </div>
        </div>

        <div class="right_hamburger_menu">
            <ul class="right_menu1">
                <li class="hamburger solid_bottom">
                    <h4><strong>MENU</strong></h4>
                </li>
                <li class="hamburger solid_bottom">
                    <h5>ABOUT</h5>
                    <ul class="dp2">
                        <li><a href="/index/introduce"><h6>HOTEL CIEL</h6></a></li>
                        <li><a href="/index/gallery"><h6>GALLERY</h6></a></li>
                    </ul>
                </li>
                <li class="hamburger solid_bottom">
                    <h5>ROOM</h5>
                    <ul class="dp2">
                        <li><a href="/index/room1"><h6>Standard Room</h6></a></li>
                        <li><a href="/index/room1"><h6>Business Standard Room</h6></a></li>
                        <li><a href="/index/room1"><h6>Traditional Room</h6></a></li>
                        <li><a href="/index/room1"><h6>VIP Double Room</h6></a></li>
                    </ul>
                </li>
                <li class="hamburger solid_bottom">
                    <h5>RESTAURANT</h5>
                    <ul class="dp2">
                        <li><a href="/index/restaurant"><h6>DINING(준비중)</h6></a></li>
                    </ul>
                </li>
                <li class="hamburger solid_bottom">
                    <h5>FACILITIES</h5>
                    <ul class="dp2">
                        <li><a href="/index/laundry"><h6>LAUNDRY</h6></a></li>
                        <li><a href="/index/conference"><h6>CONFERENCE</h6></a></li>
                        <li><a href="/index/fitness"><h6>FITNESS(준비중)</h6></a></li>
                    </ul>
                </li>
                <li class="hamburger solid_bottom">
                    <h5>CS CENTER</h5>
                    <ul class="dp2">
                        <li><a href="/index/qna"><h6>Q&A</h6></a></li>
                        <li><a href="/index/contact"><h6>CONTACT</h6></a></li>
                    </ul>
                </li>
            </ul>
            <ul class="right_menu2">
                <?php if (!$this->session->userdata('MEMBER_IDX')) { ?>
                <a href="/index/login">
                    <li class="login">
                        <h5>로그인</h5>
                    </li>
                </a>
                <?php } else { ?>
                <a href="/index.php/dataFunction/memberLogout">
                    <li class="logout">
                        <h5>로그아웃</h5>
                    </li>
                </a>
                <a href="/index/my_info">
                    <li>
                        <h5>마이페이지</h5>
                    </li>
                </a>
                <?php } ?>
                <a href="">
                    <li>
                        <h5>예약하기</h5>
                    </li>
                </a>
            </ul>
            <div class="right_menu3">
                <button type="button" value="ko">KOR</button>
                <button type="button" value="en">ENG</button>
                <button type="button" value="ja">JAP</button>
            </div>
        </div>
        <div class="black_wrapper"></div>
        <script type="text/javascript">
            $(document).ready(function () {
                // $(".menu_link").click(function () {
                //     $(".right_hamburger_menu").animate({"right": "0"}, {duration: 400, queue: false});
                //     $(".black_wrapper").css("display", "block");
                //     $(".black_wrapper").animate({"opacity": "0.7"}, {duration: 100, queue: false});
                // });
                $(".header_nav3 .on").prependTo(".lang_target");


                $(".menu_link").click(function () {
                    $(".right_hamburger_menu").css({"right": "0"});
                    $(".black_wrapper").css("display", "block");
                    $(".black_wrapper").css({"opacity": "0.7"});
                });

                $(".black_wrapper").click(function () {
                    $(".right_hamburger_menu").css({"right": "-100%"});
                    $(".black_wrapper").css({"opacity": "0"});
                    setTimeout(function () {
                        $(".black_wrapper").css("display", "none");
                    }, 355);
                });


                $(".header_nav_wrapper").hover(function () {
                    $('.header_sub').css({"height": "350px"});
                }, function () {
                    $('.header_sub').css({"height": "0px"});
                });

                $(".header_nav > li").hover(function () {
                    $(this).find(".depth_2").css({"opacity": "1"});
                }, function () {
                    $(this).find(".depth_2").css({"opacity": "0"});
                });

                $(".right_hamburger_menu li").click(function () {
                    $(".dp2").css({"height": "0"});
                    if($(this).find(".dp2").css("height")=="auto"){
                        $(this).find(".dp2").css({"height": "0"});    
                    }else {
                        $(this).find(".dp2").css({"height": "auto"});    
                    }
                    
                    // $(this).find(".dp2").slideDown();
                });

            });
        </script>

<!-- Channel Plugin Scripts -->
<script>
  window.channelPluginSettings = {
    "plugin_id": "7b1f12c1-ed0a-4fdb-886f-84d45b80a8a2"
  };
  (function() {
    var node = document.createElement('div');
    node.id = 'ch-plugin';
    document.body.appendChild(node);
    var async_load = function() {
      var s = document.createElement('script');
      s.type = 'text/javascript';
      s.async = true;
      s.src = '//cdn.channel.io/plugin/ch-plugin-web.js';
      s.charset = 'UTF-8';
      var x = document.getElementsByTagName('script')[0];
      x.parentNode.insertBefore(s, x);
    };
    if (window.attachEvent) {
      window.attachEvent('onload', async_load);
    } else {
      window.addEventListener('load', async_load, false);
    }
  })();
</script>
<!-- End Channel Plugin -->

<!-- 회원 연동시킬때 Channel Plugin Scripts -->
<!-- <script>
  window.channelPluginSettings = {
    "plugin_id": "7b1f12c1-ed0a-4fdb-886f-84d45b80a8a2",
    "user": {
      "id": "YOUR_USER_ID",
      "name": "YOUR_USER_NAME",
      "mobileNumber": "YOUR_USER_MOBILE_NUMBER",
      "meta": {
        "CUSTOM_VALUE_1": "VALUE_1",
        "CUSTOM_VALUE_2": "VALUE_2"
      }
    }
  };
  (function() {
    var node = document.createElement('div');
    node.id = 'ch-plugin';
    document.body.appendChild(node);
    var async_load = function() {
      var s = document.createElement('script');
      s.type = 'text/javascript';
      s.async = true;
      s.src = '//cdn.channel.io/plugin/ch-plugin-web.js';
      s.charset = 'UTF-8';
      var x = document.getElementsByTagName('script')[0];
      x.parentNode.insertBefore(s, x);
    };
    if (window.attachEvent) {
      window.attachEvent('onload', async_load);
    } else {
      window.addEventListener('load', async_load, false);
    }
  })();
</script> -->
<!-- End Channel Plugin -->
