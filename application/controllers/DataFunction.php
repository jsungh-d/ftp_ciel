<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DataFunction
 *
 * @author dev_piljae
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class DataFunction extends CI_Controller {

    //put your code here

    function __construct() {
        parent::__construct();

        $this->CIEL = $this->load->database('CIEL', TRUE);

        $this->load->helper(array('url', 'date', 'form', 'alert'));
        $this->load->model('Db_m');

        $this->load->library('session');
    }

    function upload_receiver_from_ck() {
        $this->load->library('upload');
        $url_path = "/boardUpFile";
        $upload_config = Array(
            'upload_path' => $_SERVER['DOCUMENT_ROOT'] . $url_path,
            'allowed_types' => 'gif|jpg|jpeg|png|bmp',
            'max_size' => '512000',
            'encrypt_name' => TRUE
        );
        $this->upload->initialize($upload_config);
        if (!$this->upload->do_upload("upload")) {
            echo "<script type='text/javascript'>alert('업로드에 실패 하였습니다. " . $this->upload->display_errors('', '') . "')</script>";
        } else {

            $CKEditorFuncNum = $this->input->get('CKEditorFuncNum');
            $data = $this->upload->data();
            $fileName = $data['file_name'];
            $url = "/boardUpFile/" . $fileName;

            echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction('" . $CKEditorFuncNum . "', '" . $url . "', '전송에 성공 했습니다.')</script>";
        }
    }

    function adminLogin() {
        //sql 인젝션 방지
        $id = $this->CIEL->escape($this->input->post('adminId', TRUE));
        $pwd = $this->CIEL->escape(md5($this->input->post('adminPw', TRUE)));

        $sql = "SELECT
                    ADMIN_IDX,
                    ADMIN_ID 
                FROM 
                    ADMIN 
                WHERE
                    ADMIN_ID = $id AND
                    ADMIN_PW = $pwd";
        $res = $this->Db_m->getInfo($sql, 'CIEL');
        if ($res) {
            //세션 생성
            $newdata = array(
                'ADMIN_IDX' => $res->ADMIN_IDX
            );
            $this->session->set_userdata($newdata);
            alert('로그인 되었습니다.', '/admin/main');
        } else {
            alert('아이디나 비밀번호를 확인해주세요', '/admin');
        }
    }

    function adminModfiy() {
        $updateArray = array(
            'ADMIN_PW' => md5($this->input->post('admin_pwd', true))
        );

        $updateWhere = array(
            'ADMIN_ID' => $this->input->post('admin_id', true)
        );

        $this->CIEL->trans_start(); // Query will be rolled back

        $this->Db_m->update('ADMIN', $updateArray, $updateWhere, 'CIEL');

        $this->CIEL->trans_complete();

        if ($this->CIEL->trans_status() === FALSE) {
            alert('데이터 처리오류!!', '/admin/main');
        } else {
            alert('수정 되었습니다.', '/admin/main');
        }
    }

    function adminLogout() {
        $this->session->sess_destroy();
        echo "<script language='javascript'>";
        echo "alert('로그아웃 되었습니다.');";
        echo "location.href='/admin'";
        echo "</script>";
    }

    function insContact() {
        $insArray = array(
            'NAME' => $this->input->post('name', true),
            'PHONE' => $this->input->post('phone', true),
            'EMAIL' => $this->input->post('email', true),
            'CONTENTS' => $this->input->post('contents', true)
        );

        $this->CIEL->trans_start(); // Query will be rolled back

        $this->Db_m->insData('CONTACT', $insArray, 'CIEL');

        $this->CIEL->trans_complete();

        if ($this->CIEL->trans_status() === FALSE) {
            alert('데이터 처리오류!!', '/index/contact');
        } else {
            alert('등록 되었습니다.', '/index/contact');
        }
    }

    function delContact() {
        $delWhere = array(
            'CONTACT_IDX' => $this->input->post('idx', true)
        );

        $this->CIEL->trans_start(); // Query will be rolled back

        $this->Db_m->delete('CONTACT', $delWhere, 'CIEL');

        $this->CIEL->trans_complete();

        if ($this->CIEL->trans_status() === FALSE) {
            echo 'FAILED';
        } else {
            echo 'SUCCESS';
        }
    }

    function memberChk() {
        $sql = "SELECT
                    COUNT(*) CNT 
                FROM 
                    MEMBER 
                WHERE 
                    ID = '" . $this->input->post('email', true) . "'";

        $res = $this->Db_m->getInfo($sql, 'CIEL');

        if ($res->CNT > 0) {
            echo 'DUPLE';
        }
    }

    function insMember() {

        $sql = "SELECT
                    COUNT(*) CNT 
                FROM 
                    MEMBER 
                WHERE 
                    ID = '" . $this->input->post('email', true) . "'";

        $res = $this->Db_m->getInfo($sql, 'CIEL');

        if ($res->CNT > 0) {
            alert('이미 가입된 이메일 입니다.', '/index/join');
            exit;
        }

        $insArray = array(
            'ID' => $this->input->post('email', true),
            'PWD' => md5($this->input->post('pwd', true)),
            'NAME' => $this->input->post('name', true)
        );

        $this->CIEL->trans_start(); // Query will be rolled back

        $this->Db_m->insData('MEMBER', $insArray, 'CIEL');

        $this->CIEL->trans_complete();

        if ($this->CIEL->trans_status() === FALSE) {
            alert('가입에 실패하였습니다.', '/index/join');
        } else {
            alert('가입 되었습니다.', '/index/login');
        }
    }

    function modMember() {
        $updateArray = array(
            'PWD' => md5($this->input->post('pwd', true))
        );

        $updateWhere = array(
            'MEMBER_IDX' => $this->input->post('idx', true)
        );

        $this->CIEL->trans_start(); // Query will be rolled back

        $this->Db_m->update('MEMBER', $updateArray, $updateWhere, 'CIEL');

        $this->CIEL->trans_complete();

        if ($this->CIEL->trans_status() === FALSE) {
            alert('데이터 처리오류!!', '/index/my_info');
        } else {
            alert('수정 되었습니다.', '/index/my_info');
        }
    }

    function login() {
        //sql 인젝션 방지
        $id = $this->CIEL->escape($this->input->post('id', TRUE));
        $pwd = $this->CIEL->escape(md5($this->input->post('pwd', TRUE)));

        $sql = "SELECT
                    MEMBER_IDX,
                    ID 
                FROM 
                    MEMBER 
                WHERE
                    ID = $id AND
                    PWD = $pwd";
        $res = $this->Db_m->getInfo($sql, 'CIEL');
        if ($res) {
            //세션 생성
            $newdata = array(
                'MEMBER_IDX' => $res->MEMBER_IDX
            );
            $this->session->set_userdata($newdata);
            alert('로그인 되었습니다.', '/');
        } else {
            alert('아이디나 비밀번호를 확인해주세요', '/index/login');
        }
    }

    function memberLogout() {
        $this->session->sess_destroy();
        echo "<script language='javascript'>";
        echo "alert('로그아웃 되었습니다.');";
        echo "location.href='/'";
        echo "</script>";
    }

    function delMember() {
        $delWhere = array(
            'MEMBER_IDX' => $this->input->post('idx', true)
        );

        $this->CIEL->trans_start(); // Query will be rolled back

        $this->Db_m->delete('MEMBER', $delWhere, 'CIEL');

        $this->CIEL->trans_complete();

        if ($this->CIEL->trans_status() === FALSE) {
            echo 'FAILED';
        } else {
            echo 'SUCCESS';
        }
    }

    function insQna() {
        $insArray = array(
            'TITLE' => $this->input->post('title', true),
            'CONTENTS' => $this->input->post('contents', true),
            'WRITER' => $this->input->post('writer', true),
            'PWD' => md5($this->input->post('pwd', true))
        );

        $this->CIEL->trans_start(); // Query will be rolled back

        $this->Db_m->insData('QNA', $insArray, 'CIEL');

        $this->CIEL->trans_complete();

        if ($this->CIEL->trans_status() === FALSE) {
            alert("데이터 처리오류!!", '/index/qna_write');
        } else {
            alert("등록 되었습니다.", '/index/qna');
        }
    }

    function insAnswer() {
        $modArray = array(
            'ANSWER' => $this->input->post('answer', true)
        );

        $modWhere = array(
            'QNA_IDX' => $this->input->post('idx', true)
        );

        $this->CIEL->trans_start(); // Query will be rolled back

        $this->Db_m->update('QNA', $modArray, $modWhere, 'CIEL');

        $this->CIEL->trans_complete();

        if ($this->CIEL->trans_status() === FALSE) {
            echo 'FAILED';
        } else {
            echo 'SUCCESS';
        }
    }

    function delQna() {
        $delWhere = array(
            'QNA_IDX' => $this->input->post('idx', true)
        );

        $this->CIEL->trans_start(); // Query will be rolled back

        $this->Db_m->delete('QNA', $delWhere, 'CIEL');

        $this->CIEL->trans_complete();

        if ($this->CIEL->trans_status() === FALSE) {
            echo 'FAILED';
        } else {
            echo 'SUCCESS';
        }
    }

    function qnaPassChk() {
        $sql = "SELECT
                    COUNT(*) CNT 
                FROM 
                    QNA 
                WHERE 
                    QNA_IDX = '" . $this->input->post('idx', true) . "' AND 
                    PWD = '" . md5($this->input->post('pwd', true)) . "'";

        $res = $this->Db_m->getInfo($sql, 'CIEL');

        if ($res->CNT == 0) {
            echo 'NO_MATCH';
        } else if ($res->CNT == 1) {
            echo 'SUCCESS';
        } else {
            echo 'FAILED';
        }
    }

    function modQna() {
        $updateArray = array(
            'TITLE' => $this->input->post('title', true),
            'CONTENTS' => $this->input->post('contents', true),
            'WRITER' => $this->input->post('writer', true)
        );

        $updateWhere = array(
            'QNA_IDX' => $this->input->post('idx', true)
        );

        $this->CIEL->trans_start(); // Query will be rolled back

        $this->Db_m->update('QNA', $updateArray, $updateWhere, 'CIEL');

        $this->CIEL->trans_complete();

        if ($this->CIEL->trans_status() === FALSE) {
            alert('데이터 처리오류!!', '/index/qna_modify/' . $this->input->post('idx', true) . '');
        } else {
            alert('수정 되었습니다.', '/index/qna_view/' . $this->input->post('idx', true) . '');
        }
    }

}
