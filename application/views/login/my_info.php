<section class="sub_top_section section">
    <div class="main_text_box align_center">
        <img class="text_hotel" src="/images/login/info.png" alt="">
        <h6>
           안녕하세요. 호텔 씨엘의 고객이 된 것을 환영합니다<br>
           나의 정보를 확인하세요</h6>
    </div>
</section>
<section class="login_section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="/index.php/dataFunction/modMember" method="post">
                    <input type="hidden" name="idx" value="<?= $info->MEMBER_IDX ?>">
                    <div class="login_area_contain">
                        <div class="login_area sign_area myinfo_area">

                            <div class="login_input_area">
                                <ul>
                                    <li class="id_input_li">
                                        <h6 class="login_title"><b>이름</b></h6>
                                        <h6 class="info_text"><?= $info->NAME ?></h6>
                                    </li>
                                    <li class="id_input_li">
                                        <h6 class="login_title">
                                            <b>아이디</b>
                                        </h6>
                                        <h6 class="info_text"><?= $info->ID ?></h6>
                                    </li>
                                    <li class="id_input_li">
                                        <h6 class="login_title vertical_middle"><b>새로운<br>비밀번호</b></h6>
                                        <input class="login_form_ipt form-control vertical_middle" type="password" name="pwd" placeholder="새로운 비밀번호" required>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="ok_btn_area">
                        <button type="submit" class="ok_btn">
                            <img src="/images/login/ok.png" alt="ok">
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


