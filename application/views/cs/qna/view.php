
<div class="img_div picture_top" style="background-image: url('/images/restaurant/top_bg.jpg');"></div>
<section class="sub_top_section section">
    <div class="main_text_box align_center">
        <img class="text" src="/images/qna/qna.png" alt="">
        <h6>
            다양한 문의사항을 자유롭게 작성하세요 <br>
        </h6>
    </div>
    <div class="board_table view_table">
        <table>
            <thead>
                <tr>
                    <th class="no"></th>
                    <th class="title"><?= $info->TITLE ?></th>
                    <th class="writer"><?= $info->WRITER ?></th>
                    <th class="reg"><?= $info->INS_DATE ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="4" class="detail">
                        <div>
                            <?= nl2br($info->CONTENTS) ?>
                        </div>
                        <?php if ($info->ANSWER) { ?>
                        <!-- 답변 부분 -->
                        <div class="answer_div">
                            <?= $info->ANSWER ?>
                        </div>
                        <?php } ?>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <?php if ($nextIdx) { ?>
                    <tr>
                        <th class="no">다음글 ▲</th>
                        <td colspan="2" class="title"><a href="/index/qna_view<?= $nextIdx->QNA_IDX ?>"><?= $nextIdx->TITLE ?></a></td>
                        <td class="reg"><?= $nextIdx->QNA_IDX ?></td>
                    </tr>
                <?php } ?>
                <?php if ($prevIdx) { ?>
                    <tr>
                        <th class="no">이전글 ▼</th>
                        <td colspan="2" class="title"><a href="/index/qna_view<?= $prevIdx->QNA_IDX ?>"><?= $prevIdx->TITLE ?></a></td>
                        <td class="reg"><?= $prevIdx->INS_DATE ?></td>
                    </tr>
                <?php } ?>
            </tfoot>
        </table>
        <div class="write_btn">
            <a href="/index/pass_chk/<?= $info->QNA_IDX?>">수정하기</a>
        </div>
    </div>
    <div class="board_link_btn">
        <a href="/index/qna">
            <img src="/images/qna/golist.png" alt="리스트 가기">
        </a>
    </div>
</section>

<script type="text/javascript">
    $(document).ready(function () {
    });
</script>
