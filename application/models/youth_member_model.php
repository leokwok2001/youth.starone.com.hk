<?php

class Youth_member_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function set_member($photo1) {
        $this->load->helper('url');


        $data = array(
            'english_name' => $this->input->post('english_name'),
            'chinese_name' => $this->input->post('chinese_name'),
            'date_of_birth' => $this->input->post('date_of_birth'),
            'gender' => $this->input->post('gender'),
            'club_code' => $this->input->post('club_code'),
            'cat' => $this->input->post('cat'),
            'HKID' => $this->input->post('HKID'),
            'tel' => $this->input->post('tel'),
            'email' => $this->input->post('email'),
            'addr1' => $this->input->post('addr1'),
            'addr2' => $this->input->post('addr2'),
            'addr3' => $this->input->post('addr3'),
            'level' => $this->input->post('level'),
            'position' => $this->input->post('position'),
            'isactive' => $this->input->post('isactive'),
            'skill1' => $this->input->post('skill1'),
            'skill2' => $this->input->post('skill2'),
            'skill3' => $this->input->post('skill3'),
            'skill4' => $this->input->post('skill4'),
            'skill5' => $this->input->post('skill5'),
            'skill6' => $this->input->post('skill6'),
            'skill7' => $this->input->post('skill7'),
            'skill8' => $this->input->post('skill8'),
            'skill9' => $this->input->post('skill9'),
            'skill10' => $this->input->post('skill10'),
            'skill11' => $this->input->post('skill11'),
            'skill12' => $this->input->post('skill12'),
            'skill13' => $this->input->post('skill13'),
            'skill14' => $this->input->post('skill14'),
            'cert' => $this->input->post('cert'),
            'baptism' => $this->input->post('baptism'),
            'goodper' => $this->input->post('goodper'),
            'photo1' => $photo1,
            'createdate' => date("Y-m-d")
                //'createdate' => $this->input->post('createdate')
        );


        return $this->db->insert('youth_member', $data);
    }

    public function get_member_uplevel_date($member_id = FALSE) {
        $this->db->select('date1,date2,date3');


        $query = $this->db->get_where('youth_member', array('member_id' => $member_id));
        return $query->row_array();
    }

    public function get_member($member_id = FALSE) {

        if ($member_id === FALSE) {
            $user_right = $this->session->userdata('user_right');
            $club_code = $this->session->userdata('club_code');
            $cat = $this->session->userdata('cat');

            $search_english_name = $this->input->post('search_english_name');
            $search_chinese_name = $this->input->post('search_chinese_name');

            $search_createdate = $this->input->post('search_createdate');
            $search_isactive = $this->input->post('search_isactive');
            $search_club_code = $this->input->post('search_club_code');
            $search_level = $this->input->post('search_level');
            $search_position = $this->input->post('search_position');
            $search_gender = $this->input->post('search_gender');


            $search_honor_ename = $this->input->post('search_honor_ename');
            $search_honor_cname = $this->input->post('search_honor_cname');
            $search_skill = $this->input->post('search_skill');

            if (empty($search_english_name) and
                    empty($search_chinese_name) and
                    empty($search_honor_ename) and
                    empty($search_honor_cname) and
                    empty($search_createdate) and
                    empty($search_isactive) and
                    empty($search_position) and
                    empty($search_level) and
                    empty($search_club_code) and
                    empty($search_gender) and
                    empty($search_skill)) {
                $this->db->distinct();
                $this->db->select('*');
                $this->db->from('youth_member');
            } else {
                $this->db->distinct();
                $this->db->select('youth_member.*');
                $this->db->from('youth_member');
                $this->db->join('youth_member_honor', 'youth_member.member_id = youth_member_honor.member_id', 'left outer');

                if (!empty($search_english_name)) {
                    $this->db->like('youth_member.english_name', $search_english_name);
                }

                if (!empty($search_chinese_name)) {
                    $this->db->like('youth_member.chinese_name', $search_chinese_name);
                }

                if (!empty($search_createdate)) {
                    $this->db->like('youth_member.createdate', $search_createdate);
                }
                if (!empty($search_isactive)) {
                    $this->db->like('youth_member.isactive', $search_isactive);
                }
                if (!empty($search_club_code)) {
                    $this->db->like('youth_member.club_code', $search_club_code);
                }
                if (!empty($search_level)) {
                    $this->db->like('youth_member.level', $search_level);
                }
                if (!empty($search_position)) {
                    $this->db->like('youth_member.position', $search_position);
                }
                if (!empty($search_gender)) {
                    $this->db->like('youth_member.gender', $search_gender);
                }


                if (!empty($search_honor_ename)) {
                    $this->db->like('youth_member_honor.honor_ename', $search_honor_ename);
                }
                if (!empty($search_honor_cname)) {
                    $this->db->like('youth_member_honor.honor_cname', $search_honor_cname);
                }
                if (!empty($search_skill)) {
                    $this->db->like('CONCAT(youth_member.skill1,youth_member.skill2,youth_member.skill3,
										youth_member.skill4,youth_member.skill5,youth_member.skill6,
										youth_member.skill7,youth_member.skill8,youth_member.skill9,
										youth_member.skill10,youth_member.skill11,youth_member.skill12,youth_member.skill13,youth_member.skill14)', $search_skill);
                }
            }


            if ($user_right == 0) {
                $this->db->where('youth_member.club_code', $club_code);
                $this->db->where('youth_member.cat', $cat);
            }
            return $this->db->get()->result_array();
        }



        $query = $this->db->get_where('youth_member', array('member_id' => $member_id));
        return $query->row_array();
    }

    public function update_member() {

        $member_id = $this->input->post('member_id');

        $data = array(
            'english_name' => $this->input->post('english_name'),
            'chinese_name' => $this->input->post('chinese_name'),
            'date_of_birth' => $this->input->post('date_of_birth'),
            'gender' => $this->input->post('gender'),
            'club_code' => $this->input->post('club_code'),
            'cat' => $this->input->post('cat'),
            'HKID' => $this->input->post('HKID'),
            'tel' => $this->input->post('tel'),
            'email' => $this->input->post('email'),
            'addr1' => $this->input->post('addr1'),
            'addr2' => $this->input->post('addr2'),
            'addr3' => $this->input->post('addr3'),
            'level' => $this->input->post('level'),
            'position' => $this->input->post('position'),
            'isactive' => $this->input->post('isactive'),
            'skill1' => $this->input->post('skill1'),
            'skill2' => $this->input->post('skill2'),
            'skill3' => $this->input->post('skill3'),
            'skill4' => $this->input->post('skill4'),
            'skill5' => $this->input->post('skill5'),
            'skill6' => $this->input->post('skill6'),
            'skill7' => $this->input->post('skill7'),
            'skill8' => $this->input->post('skill8'),
            'skill9' => $this->input->post('skill9'),
            'skill10' => $this->input->post('skill10'),
            'skill11' => $this->input->post('skill11'),
            'skill12' => $this->input->post('skill12'),
            'skill13' => $this->input->post('skill13'),
            'skill14' => $this->input->post('skill14'),
            'cert' => $this->input->post('cert'),
            'baptism' => $this->input->post('baptism'),
            'goodper' => $this->input->post('goodper')
                // 'createdate' => $this->input->post('createdate')
        );


        $this->db->where('member_id', $member_id);
        $this->db->update('youth_member', $data);
    }

    public function set_member_level($member_id, $level) {

        $delevel = $level;
        $today = date("Y-m-d");

        if ($delevel == '團師MG') {

            $data = array('level' => $level, 'date1' => $today);
        } elseif ($delevel == '領袖勳章PLA') {

            $data = array('level' => $level, 'date2' => $today);
        } elseif ($delevel == '高級領袖勳章APLA') {
            $data = array('level' => $level, 'date3' => $today);
        } else {

            $data = array('level' => $level);
        }

        $this->db->where('member_id', $member_id);
        $this->db->update('youth_member', $data);
    }

}
