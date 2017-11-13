<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Index
 *
 * @author dev_piljae
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Index extends CI_Controller {

    //put your code here
    function __construct() {
        parent::__construct();

        $this->CIEL = $this->load->database('CIEL', TRUE);

        $this->load->helper(array('url', 'date', 'form', 'alert'));
        $this->load->model('Db_m');

        $this->load->library('session');
    }

    function _remap($method) {
        $this->load->view('inc/header');

        if (method_exists($this, $method)) {
            $this->{"{$method}"}();
        }

        $this->load->view('inc/footer');
    }

    function segment_explode($seg) {
        //세크먼트 앞뒤 '/' 제거후 uri를 배열로 반환
        $len = strlen($seg);
        if (substr($seg, 0, 1) == '/') {
            $seg = substr($seg, 1, $len);
        }

        $len = strlen($seg);
        if (substr($seg, -1) == '/') {
            $seg = substr($seg, 0, $len - 1);
        }

        $seg_exp = explode("/", $seg);
        return $seg_exp;
    }

    function url_explode($url, $key) {
        for ($i = 0; count($url) > $i; $i++) {
            if ($url[$i] == $key) {
                $k = $i + 1;
                return $url[$k];
            }
        }
    }

    function index() {
        $this->load->view('index');
    }

    function laundry() {
        $this->load->view('facilities/laundry');
    }

    function conference() {
        $this->load->view('facilities/conference');
    }

    function fitness() {
        $this->load->view('facilities/fitness');
    }

function businesscenter() {
        $this->load->view('facilities/businesscenter');
    }

    function gallery() {
        $this->load->view('gallery');
    }

    function introduce() {
        $this->load->view('introduce');
    }

    function restaurant() {
        $this->load->view('restaurant');
    }

    function room1() {
        $this->load->view('rooms/room1');
    }

function room2() {
        $this->load->view('rooms/room2');
    }
    function room3() {
        $this->load->view('rooms/room3');
    }
    function room4() {
        $this->load->view('rooms/room4');
    }
    function room5() {
        $this->load->view('rooms/room5');
    }
    function room6() {
        $this->load->view('rooms/room6');
    }

    function login() {
        $this->load->view('login/login');
    }

    function join() {
        $this->load->view('login/join');
    }

    function my_info() {

        if (!$this->session->userdata('MEMBER_IDX')) {
            alert('로그인이 필요합니다.', '/index/login');
            exit;
        }

        $sql = "SELECT
                    MEMBER_IDX, 
                    ID, 
                    NAME 
                FROM 
                    MEMBER 
                WHERE 
                    MEMBER_IDX = '" . $this->session->userdata('MEMBER_IDX') . "'";

        $data['info'] = $this->Db_m->getInfo($sql, 'CIEL');

        $this->load->view('login/my_info', $data);
    }

    function qna() {

        $add_where = "";
        $data['gubun'] = "";
        $data['text'] = "";

        //검색어 초기화
        $search_word = $page_url = '';
        $uri_segment = 4;

        //주소중에서 q(검색어) 세그먼트가 있는지 검사하기 위해 주소를 배열로 변환 
        $uri_array = $this->segment_explode($this->uri->uri_string());

        if (in_array('q', $uri_array)) {
            //주소에 검색어가 있을 경우의 처리. 즉 검색시 
            $text = urldecode($this->url_explode($uri_array, 'text'));
            //페이지네이션용 주소 
            $page_url = '/q/text/' . $text;
            $uri_segment = 7;

            if ($text != 'none') {
                $add_where .= "AND MATCH(TITLE, CONTENTS) AGAINST('" . urldecode($text) . "' IN BOOLEAN MODE) ";
                $data['text'] = urldecode($text);
            }
        }

        //페이지네이션 라이브러리 로딩 추가
        $this->load->library('pagination');

        //페이지네이션 설정 '.$page_url.'
        $config['base_url'] = '/index/qna/' . $page_url . '/page/'; //페이징 주소
        //게시물의 전체 갯수
        $count_sql = "SELECT
                         COUNT(*) CNT
                      FROM
                         QNA
                      WHERE 
                         QNA_IDX <> ''";
        $count_sql .= $add_where;

        $count_res = $this->Db_m->getInfo($count_sql, 'CIEL');

        $config['total_rows'] = $count_res->CNT;
        $data['total_rows'] = $count_res->CNT;

        $config['per_page'] = 15; //한 페이지에 표시할 게시물 수
        $config['uri_segment'] = $uri_segment; //페이지 번호가 위치한 세그먼트
        //$config['num_links'] = 2; //페이지 링크 갯수 설정
        $config['use_fixed_page'] = TRUE;
        $config['fixed_page_num'] = 10;

        $config['display_first_always'] = TRUE;
        $config['disable_first_link'] = TRUE;
        $config['display_last_always'] = TRUE;
        $config['disable_last_link'] = TRUE;
        $config['display_prev_always'] = TRUE;
        $config['display_next_always'] = TRUE;
        $config['disable_prev_link'] = TRUE;
        $config['disable_next_link'] = TRUE;

        //페이지네이션 전체 감싸는 태그추가
        $config['full_tag_open'] = '<div class="boardPaging">';
        $config['full_tag_close'] = '</div>';

        //항상나오는 처음으로 버튼 태그추가
        $config['disabled_first_tag_open'] = "<span class='disableBtnFirst'>";
        $config['disabled_first_tag_close'] = "</span>";

        //처음으로버튼 감싸는 태그추가
        $config['first_tag_open'] = '<span class="btnFirst">';
        $config['first_tag_close'] = '</span>';

        //항상나오는 마지막으로 버튼 태그추가
        $config['disabled_last_tag_open'] = "<span class='disableBtnLast'>";
        $config['disabled_last_tag_close'] = "</span>";

        //마지막으로버튼 감싸는 태그추가
        $config['last_tag_open'] = '<span class="btnLast">';
        $config['last_tag_close'] = '</span>';

        //항상나오는 다음버튼 감싸는 태그추가
        $config['disabled_next_tag_open'] = '<span class="disableBtnNext">';
        $config['disabled_next_tag_close'] = '</span>';

        //다음버튼 감싸는 태그추가
        $config['next_tag_open'] = '<span class="btnNext">';
        $config['next_tag_close'] = '</span>';

        //항상나오는 이전버튼 태그추가
        $config['disabled_prev_tag_open'] = "<span class='disableBtnPrev'>";
        $config['disabled_prev_tag_close'] = "</span>";

        //이전버튼 감싸는 태그추가
        $config['prev_tag_open'] = '<span class="btnPrev">';
        $config['prev_tag_close'] = '</span>';

        //현재페이지번호 감싸는 태그추가
        $config['cur_tag_open'] = '<span class="on">';
        $config['cur_tag_close'] = '</span>';

        //페이지번호 감싸는 태그추가
        $config['num_tag_open'] = '<span>';
        $config['num_tag_close'] = '</span>';

        //페이지네이션 초기화
        $this->pagination->initialize($config);

        //페이징 링크를 생성하여 view에서 사용할 변수에 할당
        $data['pagination'] = $this->pagination->create_links();

        //게시판 목록을 불러오기 위한 offset, limit 값 가져오기
        $data['page'] = $page = $this->uri->segment($uri_segment, 1);

        if ($page > 1) {
            $start = (($page / $config['per_page'])) * $config['per_page'];
        } else {
            $start = ($page - 1) * $config['per_page'];
        }

        $limit = $config['per_page'];

        $lists_sql = "SELECT
                          QNA_IDX,
                          TITLE,
                          WRITER,
                          ANSWER,
                          DATE_FORMAT(TIMESTAMP, '%Y-%m-%d') INS_DATE
                      FROM 
                          QNA
                      WHERE 
                          QNA_IDX <> '' ";
        $lists_sql .= $add_where;
        $lists_sql .= "ORDER BY TIMESTAMP DESC LIMIT $start, $limit";

        $data['lists'] = $this->Db_m->getList($lists_sql, 'CIEL');

        $this->load->view('cs/qna/list', $data);
    }

    function qna_view() {

        $sql = "SELECT
                    QNA_IDX, 
                    TITLE, 
                    CONTENTS, 
                    WRITER, 
                    ANSWER,
                    DATE_FORMAT(TIMESTAMP, '%Y-%m-%d') INS_DATE
                FROM 
                    QNA 
                WHERE 
                    QNA_IDX = '" . $this->uri->segment(3) . "'";

        $data['info'] = $this->Db_m->getInfo($sql, 'CIEL');

        $prevSql = "SELECT
                        QNA_IDX,
                        TITLE,
                        DATE_FORMAT(TIMESTAMP, '%Y-%m-%d') INS_DATE
                    FROM
                        QNA
                    WHERE
                        QNA_IDX < " . $this->uri->segment(3) . "
                        ORDER BY QNA_IDX DESC LIMIT 0, 1";

        $data['prevIdx'] = $this->Db_m->getInfo($prevSql, 'CIEL');

        $nextSql = "SELECT
                        QNA_IDX,
                        TITLE,
                        DATE_FORMAT(TIMESTAMP, '%Y-%m-%d') INS_DATE
                    FROM
                        QNA
                    WHERE
                        QNA_IDX > " . $this->uri->segment(3) . "
                        ORDER BY QNA_IDX ASC LIMIT 0, 1";

        $data['nextIdx'] = $this->Db_m->getInfo($nextSql, 'CIEL');

        $this->load->view('cs/qna/view', $data);
    }

    function qna_write() {
        $this->load->view('cs/qna/write');
    }

    function pass_chk() {
        $this->load->view('cs/qna/pass_chk');
    }

    function qna_modify() {

        $sql = "SELECT
                    QNA_IDX, 
                    TITLE, 
                    CONTENTS, 
                    WRITER, 
                    ANSWER,
                    DATE_FORMAT(TIMESTAMP, '%Y-%m-%d') INS_DATE
                FROM 
                    QNA 
                WHERE 
                    QNA_IDX = '" . $this->uri->segment(3) . "'";

        $data['info'] = $this->Db_m->getInfo($sql, 'CIEL');

        $this->load->view('cs/qna/modify', $data);
    }

    function contact() {
        $this->load->view('cs/contact');
    }

}
