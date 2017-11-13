<?php
if ($this->uri->segment(4) != 'none') {
    $url = "/admin/contactConfig/q/gubun/" . $this->uri->segment(4) . "/text/" . $this->uri->segment(5) . "/page/" . $this->uri->segment(6) . "";
} else {
    $url = "/admin/contactConfig/page/" . $this->uri->segment(6) . "";
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
                        <a data-toggle="tooltip" title="삭제" onclick="delContents('<?= $info->CONTACT_IDX ?>')">
                            <i class="fa fa-trash"></i>
                        </a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                <h2>CONTACT정보</h2>
                <br>
                <div class="col-xs-12">
                    <label class="col-md-1 col-sm-3 col-xs-12">성명</label>
                    <div class="col-md-11 col-sm-9 col-xs-12">
                        <?= $info->NAME ?>
                    </div>
                </div>
                <div class="col-xs-12">
                    <label class="col-md-1 col-sm-3 col-xs-12">연락처</label>
                    <div class="col-md-11 col-sm-9 col-xs-12">
                        <?= $info->PHONE ?>
                    </div>
                </div>
                <div class="col-xs-12">
                    <label class="col-md-1 col-sm-3 col-xs-12">이메일</label>
                    <div class="col-md-11 col-sm-9 col-xs-12">
                        <?= $info->EMAIL ?>
                    </div>
                </div>
                <div class="col-xs-12">
                    <label class="col-md-1 col-sm-3 col-xs-12">내용</label>
                    <div class="col-md-11 col-sm-9 col-xs-12">
                        <?= nl2br($info->CONTENTS) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function delContents(idx) {
        if (confirm("삭제 하시겠습니까?") == true) {    //확인
            var data = {idx: idx};
            $.ajax({
                dataType: 'text',
                url: '/index.php/dataFunction/delContact',
                data: data,
                type: 'POST',
                success: function (data, status, xhr) {
                    if (data == 'SUCCESS') {
                        alert('삭제 되었습니다.');
                        location.href = '/admin/contactConfig';
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