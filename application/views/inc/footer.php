
<footer>
    <div class="footer_nav hidden-lg-down">
        <div class="container">
            <ul>
                <h6>
                    ABOUT
                </h6>
                <li>
                    <a href="/index/introduce">
                        CIEL HOTEL
                    </a>
                </li>
                <li>
                    <a href="/index/gallery">
                        GALLERY
                    </a>
                </li>
            </ul>
            <ul>
                <h6>
                    ROOM
                </h6>
                <li>
                    <a href="/index/room1">
                        Standard Double
                    </a>
                </li>
                <li>
                    <a href="/index/room2">
                       Standard Twin
                    </a>
                </li>
                <li>
                    <a href="/index/room3">
                        Deluxe Double
                    </a>
                </li>
                <li>
                    <a href="/index/room4">
                        Suite
                    </a>
                </li>
                <li>
                    <a href="/index/room5">
                        Handicapped Room
                    </a>
                </li>
                <li>
                    <a href="/index/room6">
                        Korean Traditional Room
                    </a>
                </li>
            </ul>
            <ul>
                <h6>
                    RESTAURANT
                </h6>
                <li>
                    <a href="/index/restaurant">
                        DINING(준비중)
                    </a>
                </li>
            </ul>
            <ul>
                <h6>
                    FACILITIES
                </h6>
                <li>
                    <a href="/index/laundry">
                        LAUNDRY
                    </a>
                </li>
                <li>
                    <a href="/index/conference">
                        CONFERENCE
                    </a>
                </li>
                <li>
                    <a href="/index/businesscenter">
                        BUSINESS CENTER
                    </a>
                </li>
                <li>
                    <a href="/index/fitness">
                        FITNESS
                    </a>
                </li>
                <li>
                    <a href="#">
                        (준비중)
                    </a>
                </li>
            </ul>
            <ul>
                <h6>
                    CS CENTER
                </h6>
                <li>
                    <a href="/index/qna">
                        Q&A
                    </a>
                </li>
                <li>
                    <a href="/index/contact">
                        CONTACT
                    </a>
                </li>
            </ul>
            <div class="footer_btn_area">
                <button type="button" value="ko">KR</button>
                <button type="button" value="en">EN</button>
                <button type="button" value="ja">JP</button>
                <button type="button" value="ja">CN</button>
                <div class="round_btn_area">
                    <a href="">
                        <img src="images/footer/facebook.png" alt="">
                    </a>
                    <a href="">
                        <img src="images/footer/facebook.png" alt="">
                    </a>
                    <a href="">
                        <img src="images/footer/facebook.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <p>호텔씨엘 / 경기도 화성시 동탄중심상가2길 12 6층-10층 /
            <span class="footer_bottom_br"> T : 031-869-7100 (24시간) </span> / hotelciel@staynhome.co.kr</p>
        <p>ALL Rights Reserved.</p>
    </div>
</footer>

<script type="text/javascript">
    $(document).ready(function(){
        window.gambitScrollWheelAmount = 14;
        window.gambitScrollKeyAmount = 10;
        window.gambitScrollDecompositionRate = 0.95;
        window.gambitUseRequestAnimationFrame = true;

        $(window).scroll(function(){
                // 현재창의 height 크기를 변수에 담는다.
                var windowHeight = $(window).height();

                // scroll_show 클래스가 화면에 노출 될때 애니메이트를 실행
                for(var i = 1 ; i <= $(".scroll_show").length ; i++){
                    if($(window).scrollTop()+(windowHeight/1.2) >= $(".scroll_show"+i).offset().top){
                        $(".scroll_show"+i).css({"transform":"translateY(0px)","opacity":"1"});
                    }    
                }
            });

        $(".bg_swiper_next").click(function(){
            $(".bg_swiper_next1").click();
        });

        $(".bg_swiper_prev").click(function(){
            $(".bg_swiper_prev1").click();
        });

    });
</script>
</body>
</html>