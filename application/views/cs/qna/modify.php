
<div class="img_div picture_top" style="background-image: url('/images/restaurant/top_bg.jpg');"></div>
<section class="sub_top_section section">
    <div class="main_text_box align_center">
        <img class="text" src="/images/qna/qna.png" alt="">
        <h6>
            다양한 문의사항을 자유롭게 작성하세요 <br>
        </h6>
    </div>
    <form action="/index.php/dataFunction/modQna" method="post">
        <input type="hidden" name="idx" value="<?= $info->QNA_IDX ?>">
        <div class="board_table write_table">
            <table>
                <thead>
                    <tr>
                        <th class="title"><input type="text" name="title" placeholder="제목을 적어주세요" maxlength="100" value="<?= $info->TITLE ?>" required></th>
                        <th class="writer"><input type="text" name="writer" placeholder="이름" maxlength="20" value="<?= $info->WRITER ?>" required></th>
                        <!--<th class="reg"><input type="password" name="" placeholder="비밀번호"></th>-->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="3" class="detail">
                            <textarea name="contents" placeholder="내용을 적어주세요" required><?= $info->CONTENTS?></textarea>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="board_link_btn">
            <a href="/index/qna">
                <img src="/images/qna/cancel.png" alt="리스트 가기">
            </a>
            <button type="submit">
                <img src="/images/qna/ok.png" alt="수정하기">
            </button>
        </div>
    </form>
</section>
