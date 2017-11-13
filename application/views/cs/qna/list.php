
<div class="img_div picture_top" style="background-image: url('/images/restaurant/top_bg.jpg');"></div>
<section class="sub_top_section section">
    <div class="main_text_box align_center">
        <img class="text" src="/images/qna/qna.png" alt="">
        <h6>
            다양한 문의사항을 자유롭게 작성하세요
        </h6>
    </div>
    <div class="board_table list_table">
        <table>
            <thead>
                <tr>
                    <th class="no">번호</th>
                    <th class="title">제목</th>
                    <th class="status">답변상태</th>
                    <th class="writer">작성자</th>
                    <th class="reg">날짜</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!$lists) { ?>
                    <tr>
                        <td colspan="5">
                            등록된 내용이 없습니다.
                        </td>
                    </tr>
                    <?php
                } else {

                    if ($this->uri->segment(3) == 'q') {
                        $num = $total_rows - $this->uri->segment(9);
                        $page = $this->uri->segment(9);
                        $gubun = $this->uri->segment(5);
                        $title = $this->uri->segment(7);
                    } else {
                        $num = $total_rows - $this->uri->segment(4);
                        $page = $this->uri->segment(4);
                        $gubun = "none";
                        $title = "none";
                    }

                    foreach ($lists as $row) {
                        ?>
                        <tr>
                            <td class="no">
                                <?= $num ?>
                            </td>
                            <td class="title">
                                <a href="/index/qna_view/<?= $row['QNA_IDX'] ?>">
                                    <?= $row['TITLE'] ?>
                                </a>
                            </td>
                            <td class="status">
                                <?php if ($row['ANSWER']) { ?>
                                답변완료
                                <?php } else { ?>
                                답변대기
                                <?php } ?>
                            </td>
                            <td class="writer">
                                <?= $row['WRITER'] ?>
                            </td>
                            <td class="reg">
                                <?= $row['INS_DATE'] ?>
                            </td>
                        </tr>
                        <?php
                        $num --;
                    }
                }
                ?>
            </tbody>
        </table>
        <?= $pagination ?>
        <div class="write_btn">
            <a href="/index/qna_write">글쓰기</a>
        </div>
    </div>
    <div class="search_box_contain">
        <div class="search_box">
            <input type="text" class="form-control" name="search_text" id="search_text" value="<?= $text ?>">
            <button type="button" id="search_btn"></button>
        </div>
    </div>
</section>

<script type="text/javascript">
    $(document).ready(function () {
        $(".search_box input").focus(function () {
            $(".search_box button").css("left", "100%");
            if ($(window).width() > 768) {
                $(".search_box button").css("margin-left", "-40px");
            } else {
                $(".search_box button").css("margin-left", "-28px");
            }
        });

        $(".search_box input").blur(function () {
            if (!$(this).val()) {
                if ($(window).width() > 768) {
                    $(".search_box button").css("left", "50%");
                    $(".search_box button").css("margin-left", "-17px");
                } else {
                    $(".search_box button").css("left", "50%");
                    $(".search_box button").css("margin-left", "-12px");
                }
            }
        });

        $("#search_btn").click(function () {
            var text = $("#search_text").val();
            if (!$.trim(text)) {
                text = 'none';
            }

            location.href = '/index/qna/q/text/' + text + '';
        });

        $("#search_text").keydown(function (key) {
            if (key.keyCode == 13) {
                var text = $("#search_text").val();
                if (!$.trim(text)) {
                    text = 'none';
                }

                location.href = '/index/qna/q/text/' + text + '';
            }
        });

    });
</script>
