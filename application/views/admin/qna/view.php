<?php
if ($this->uri->segment(4) != 'none') {
    $url = "/admin/qnaConfig/q/gubun/" . $this->uri->segment(4) . "/text/" . $this->uri->segment(5) . "/page/" . $this->uri->segment(6) . "";
} else {
    $url = "/admin/qnaConfig/page/" . $this->uri->segment(6) . "";
}
?>

<div class="row">
    <div class="col-md-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>상세정보</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li>
                        <a href="<?= $url ?>" data-toggle="tooltip" title="리스트">
                            <i class="fa fa-list"></i>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tooltip" title="삭제" onclick="delContents('<?= $info->QNA_IDX ?>')">
                            <i class="fa fa-trash"></i>
                        </a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                <h2>QNA</h2>
                <br>
                <div class="col-xs-12">
                    <label class="col-md-1 col-sm-3 col-xs-12">제목</label>
                    <div class="col-md-11 col-sm-9 col-xs-12">
                        <?= $info->TITLE ?>
                    </div>
                </div>
                <div class="col-xs-12">
                    <label class="col-md-1 col-sm-3 col-xs-12">작성자</label>
                    <div class="col-md-11 col-sm-9 col-xs-12">
                        <?= $info->WRITER ?>
                    </div>
                </div>
                <div class="col-xs-12">
                    <label class="col-md-1 col-sm-3 col-xs-12">내용</label>
                    <div class="col-md-11 col-sm-9 col-xs-12">
                        <?= nl2br($info->CONTENTS) ?>
                    </div>
                </div>
                <div class="col-xs-12">
                    <label class="col-md-1 col-sm-3 col-xs-12">답변</label>
                    <div class="col-md-11 col-sm-9 col-xs-12">
                        <textarea class="form-control" id="answer"><?= $info->ANSWER ?></textarea>
                        <button type="button" class="btn btn-default" id="submitBtn" value="<?= $info->QNA_IDX ?>">답변등록</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $("#submitBtn").click(function () {
            var answer = $("#answer").val();
            var idx = $(this).val();

            if (!$.trim(answer)) {
                alert("답변 내용을 입력해주세요.");
                $("#answer").val('');
                $("#answer").focus();
                return false;
            } else {
                var data = {idx: idx, answer: answer};
                $.ajax({
                    dataType: 'text',
                    url: '/index.php/dataFunction/insAnswer',
                    data: data,
                    type: 'POST',
                    success: function (data, status, xhr) {
                        if (data == 'SUCCESS') {
                            alert('답변 등록 되었습니다.');
                            return false;
                        } else {
                            alert('처리오류');
                            return false;
                        }
                    }
                });
            }
        });
    });

    function delContents(idx) {
        if (confirm("삭제 하시겠습니까?") == true) {    //확인
            var data = {idx: idx};
            $.ajax({
                dataType: 'text',
                url: '/index.php/dataFunction/delQna',
                data: data,
                type: 'POST',
                success: function (data, status, xhr) {
                    if (data == 'SUCCESS') {
                        alert('삭제 되었습니다.');
                        location.href = '/admin/qnaConfig';
                    } else {
                        alert('처리오류');
                        return false;
                    }
                }
            });
        } else {
            return false;
        }
    }
</script>