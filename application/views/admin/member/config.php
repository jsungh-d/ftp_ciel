<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>회원 관리</h3>
        </div>

        <div class="title_right">
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <select name="gubun" id="gubun" class="form-control">
                    <option value="title" <?php if ($gubun == 'title') echo "selected" ?>>성명</option>
                    <option value="contents" <?php if ($gubun == 'contents') echo "selected" ?>>아이디</option>
                </select>
                <div class="input-group">
                    <input type="text" id="txtInput" class="form-control" placeholder="Search for..." value="<?= $text ?>">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">검색</button>
                    </span>
                    <!-- /input-group -->

                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>회원 관리</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <!-- start project list -->
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th>번호</th>
                                <th>아이디</th>
                                <th>이름</th>
                                <th>삭제</th>
                                <th>가입일</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!$lists) { ?>
                                <tr>
                                    <td colspan="7" style="text-align: center;">
                                        회원이 없습니다.
                                    </td>
                                </tr>
                            <?php } ?>
                            <?php
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
                                    <td>
                                        <?= $num ?>
                                    </td>
                                    <td>
                                        <?php
                                        if ($row['TODAY'] == 'Y') {
                                            echo"<span class='newBadge'>New</span>";
                                        } else {
                                            
                                        }
                                        ?>
                                        <!--<a href="/admin/contactView/<?= $row['MEMBER_IDX'] ?>/<?= $gubun ?>/<?= $title ?>/<?= $page ?>"><?= $row['ID'] ?></a>-->
                                        <?= $row['ID'] ?>
                                    </td>
                                    <td>
                                        <?= $row['NAME'] ?>
                                    </td>
                                    <td>
                                        <button class="btn btn-danger del_row_btn" type="button" value="<?= $row['MEMBER_IDX'] ?>">삭제</button>
                                    </td>
                                    <td>
                                        <?= $row['TIMESTAMP'] ?>
                                    </td>
                                </tr>
                                <?php
                                $num --;
                            }
                            ?>
                        </tbody>
                    </table>
                    <!-- end project list -->
                    <?php echo $pagination ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function () {
        $("#txtInput").keydown(function (key) {
            var gubun = $("#gubun").select().val();
            var text = $("#txtInput").val();
            if (key.keyCode == 13) {
                if (text) {
                    location.href = '/admin/memberConfig/q/gubun/' + gubun + '/text/' + text + '';
                } else {
                    location.href = '/admin/memberConfig';
                }
            }
        });

        $(".del_row_btn").click(function () {
            var data = {idx: $(this).val()};
            $.ajax({
                dataType: 'text',
                url: '/index.php/dataFunction/delMember',
                data: data,
                type: 'POST',
                success: function (data, status, xhr) {
                    if (data == 'SUCCESS') {
                        alert('삭제 되었습니다.');
                        location.reload();
                    } else {
                        alert('처리오류');
                        return false;
                    }
                }
            });
        });

    });
</script>