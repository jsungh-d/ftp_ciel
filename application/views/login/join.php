<section class="sub_top_section section">
    <div class="main_text_box align_center">
        <img class="text_hotel" src="/images/login/join.png" alt="">
        <h6>
            내용입니다 내용입니다 내용입니다<br>
            내용입니다 내용입니다 내용입니다 내용입니다 <br>
        </h6>
    </div>
</section>
<section class="login_section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="login_area_contain">
                    <div class="login_area sign_area">
                        <form action="/index.php/dataFunction/insMember" onsubmit="chkForm(this); return false;" method="post">
                            <div class="login_input_area">
                                <ul>
                                    <li class="id_input_li email_input_li">
                                        <h6 class="login_title">
                                            <b>아이디<br>(e-mail)</b>
                                        </h6>
                                        <input class="vertical_top login_form_ipt form-control" id="email" type="email" name="email" placeholder="아이디(e-mail)" required>
                                    </li>
                                    <li class="id_input_li">
                                        <h6 class="login_title"><b>비밀번호</b></h6>
                                        <input class="login_form_ipt form-control" type="password" name="pwd" placeholder="비밀번호" required>
                                    </li>
                                    <li class="id_input_li">
                                        <h6 class="login_title"><b>이름</b></h6>
                                        <input class="login_form_ipt form-control" type="text" name="name" placeholder="이름" required>
                                    </li>
                                </ul>
                            </div>
                            <button type="submit" class="login_btn join_btn">
                                <img src="/images/login/join_white.png" alt="">
                            </button>
                        </form>
                        <div class="sns_login_box">
                            <img class="text" src="/images/login/sns.png" alt="">
                            <div class="sns_icon_box">
                                <button type="button" >
                                    <img src="/images/common/facebook.png" alt="">
                                </button>
                                <button type="button" >
                                    <img src="/images/common/twitter.png" alt="">
                                </button>
                                <button type="button" >
                                    <img src="/images/common/twitter.png" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                    <a href="/index/login" class="login_bottom_btn">
                        <h6>로그인하기</h6>
                    </a>
                    <a href="" class="login_bottom_btn">
                        <h6>아이디/비밀번호 찾기</h6>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    function chkForm(obj) {
        var email = $("#email").val();
        if (!$.trim(email)) {
            alert("이메일을 입력해주세요.");
            $(this).focus();
            return false;
        } else {
            var data = {email: email};
            $.ajax({
                dataType: 'text',
                url: '/index.php/dataFunction/memberChk',
                data: data,
                type: 'POST',
                success: function (data, status, xhr) {
                    if (data === 'DUPLE') {
                        alert("이미 가입된 이메일 입니다.");
                        $("#email").val('');
                        return false;
                    } else {
                        obj.submit();
                    }
                }
            });
        }
    }
</script>