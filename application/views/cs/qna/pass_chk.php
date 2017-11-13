
<div class="img_div picture_top" style="background-image: url('/images/restaurant/top_bg.jpg');"></div>
<section class="sub_top_section section">
    <div class="main_text_box align_center">
        <img class="text" src="/images/qna/qna.png" alt="">
        <h6>
            작성시 입력한 비밀번호를 입력하세요. <br>
        </h6>
    </div>
    <div class="login_area_contain pw_chk_area">
        <label>
            <h6 class="login_title"><b>비밀번호</b></h6>
            <input type="password" id="pwd" class="login_form_ipt form-control" name="pwd">
        </label>
        <button class="login_bottom_btn" type="button" id="del_btn" value="<?= $this->uri->segment(3) ?>"><h6>게시글 삭제</h6></button>
        <button class="login_bottom_btn" type="button" id="chk_btn" value="<?= $this->uri->segment(3) ?>"><h6>확인</h6></button>
    </div>

    <div class="board_link_btn">
        <a href="/index/qna">
            <img src="/images/qna/golist.png" alt="리스트 가기">
        </a>
    </div>
</section>

<script type="text/javascript">
    $(document).ready(function () {
        $("#chk_btn").click(function () {
            var data = {idx: $(this).val(), pwd: $("#pwd").val()};
            $.ajax({
                dataType: 'text',
                url: '/index.php/dataFunction/qnaPassChk',
                data: data,
                type: 'POST',
                success: function (data, status, xhr) {
                    if (data === 'SUCCESS') {
                        location.href = '/index/qna_modify/' + $("#chk_btn").val() + '';
                    } else if (data === 'NO_MATCH') {
                        alert('비밀번호를 확인해주세요.');
                        return false;
                    } else {
                        alert('처리오류');
                        return false;
                    }
                }
            });
        });

        $("#del_btn").click(function () {
            var data = {idx: $(this).val(), pwd: $("#pwd").val()};

            $.ajax({
                dataType: 'text',
                url: '/index.php/dataFunction/qnaPassChk',
                data: data,
                type: 'POST',
                success: function (data, status, xhr) {
                    if (data === 'SUCCESS') {
                        if (confirm("삭제 하시겠습니까?") == true) {    //확인
                            data = {idx: $(this).val()};
                            $.ajax({
                                dataType: 'text',
                                url: '/index.php/dataFunction/delQna',
                                data: data,
                                type: 'POST',
                                success: function (data, status, xhr) {
                                    if (data == 'SUCCESS') {
                                        alert('삭제 되었습니다.');
                                        location.href = '/index/qna';
                                    } else {
                                        alert('처리오류');
                                        return false;
                                    }
                                }
                            });
                        } else {
                            return false;
                        }
                    } else if (data === 'NO_MATCH') {
                        alert('비밀번호를 확인해주세요.');
                        return false;
                    } else {
                        alert('처리오류');
                        return false;
                    }
                }
            });
        });
    });
</script>