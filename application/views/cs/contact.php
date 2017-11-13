
<div class="img_div picture_top" style="background-image: url('/images/restaurant/top_bg.jpg');"></div>
<!-- <section>
    <div class="swiper-container top_swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide_bg_01">

            </div>
            <div class="swiper-slide slide_bg_02">

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
            paginationClickable: true
        });
    </script>
</section> -->
<section class="section intro_top">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="main_text_box align_center">
                    <img class="text" src="/images/contact/contact.png" alt="">
                    <h6><br><br>
                        24시간 고객센터 운영중입니다.<br>
                        언제든지 문의주세요
                    </h6>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section location_section contact_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <img class="text" src="/images/facilities/information.png" alt="">
                <div class="contain">
                    <div class="about_desc">
                        <div class="desc_box">
                            <h6>ADDRESS</h6>
                            <p>
                            [신] 경기도 화성시 동탄중심상가2길 12. 6층<br>
                            [구] 경기도 화성시 반송동 91-5 6층
                            </p>
                        </div>
                        <div class="desc_box">
                            <h6>CALL</h6>
                            <p class="raleway">T : 031-869-7100</p>
                            <p class="raleway">F : 031-869-7102</p>
                            <p class="raleway">연중무휴(24시간)</p>
                        </div>
                        <div class="desc_box">
                            <h6>E-MAIL</h6>
                            <p class="raleway">hotelciel@staynhome.co.kr</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="offset-lg-1 col-lg-8">
                <div class="contact_ipt_area">
                    <form action="/index.php/dataFunction/insContact" method="post">
                        <div class="row align-items-center">
                            <div class="col-lg-2 col-3">
                                <h6><b>이름</b></h6>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" name="name" minlength="3" maxlength="10" required>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-lg-2 col-3">
                                <h6><b>연락처</b></h6>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" pattern="[0-9]*" name="phone" minlength="10" maxlength="11" required>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-lg-2 col-3">
                                <h6><b>이메일</b></h6>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="email" name="email" maxlength="150" required>
                            </div>
                        </div>

                        <textarea name="contents" placeholder="문의내용을 적어주세요." required></textarea>
                        <div class="contact_ipt_bt">
                            <label class="agree_chk">
                                <input type="checkbox" name="agree" class="agree" required>
                                <h6><b>개인정보보호정책</b>에 동의합니다.</h6>
                            </label>
                            <button type="submit">
                                <img src="/images/qna/ok.png" alt="보내기">
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

