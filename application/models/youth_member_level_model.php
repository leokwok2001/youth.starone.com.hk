<?php

class Youth_member_level_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_member_level($member_id = FALSE, $level = FALSE) {
        $this->db->select('youth_member_level.seq,
		youth_member_level.level, 
		youth_member_level.cat, 
		youth_member_level.code, 
		youth_member_level.desc, 
		youth_member_level.version, 
		youth_member_level.indate, 
		youth_member_level.member_id, 
		youth_member_level.isfinish, 
		youth_member_level_det.seq as seq2,
		youth_member_level_det.code AS code2, 
		youth_member_level_det.desc AS desc2, 
		youth_member_level_det.isfinish AS isfinish2,
		youth_member_level_det.in_date AS in_date2');
        $this->db->from('youth_member_level');
        $this->db->join('youth_member_level_det', 'youth_member_level.code = youth_member_level_det.code and youth_member_level.member_id = youth_member_level_det.member_id', 'left outer');
        $this->db->where('youth_member_level.member_id', urldecode($member_id));
        $this->db->where('youth_member_level.level', urldecode($level));
        $this->db->order_by('youth_member_level.code');
        return $this->db->get()->result_array();
    }

    public function clone_member_level($member_id = FALSE, $level = FALSE) {

        $this->db->select("level,cat,code,desc,version,indate");
        $this->db->from('youth_level');
        $this->db->where('level', urldecode($level));
        $data['youth_level'] = $this->db->get()->result_array();


        foreach ($data['youth_level'] as $youth_level_item) {
            $row = array(
                'level' => $youth_level_item['level'],
                'cat' => $youth_level_item['cat'],
                'code' => $youth_level_item['code'],
                'desc' => $youth_level_item['desc'],
                'version' => $youth_level_item['version'],
                'indate' => NULL,
                'member_id' => $member_id,
                'isfinish' => 0
            );

            $this->db->insert('youth_member_level', $row);
        }
    }

    public function set_member_level() {

        $this->load->helper('url');
        $member_id = $this->input->post('member_id');
        $level = $this->input->post('level');
        $check1 = $this->input->post('isfinish');
        $indate1 = $this->input->post('indate');
        $seq1 = $this->input->post('seq');

        $check2 = $this->input->post('isfinish2');
        $indate2 = $this->input->post('indate2');
        $seq2 = $this->input->post('seq2');



        if (!empty($check1)) {
            // handle member_level table 
            foreach ($check1 as $check) {
                $key = array_search($check, $seq1);
                $indate_row = $indate1[$key];
                $data = array('indate' => $indate_row, 'isfinish' => 1);
                $this->db->where('seq', $check);
                $this->db->where('member_id', $member_id);
                $this->db->update('youth_member_level', $data);
            }
            $data = array('indate' => NULL, 'isfinish' => 0);
            $this->db->where('member_id', $member_id);
            $this->db->where('level', $level);
            $this->db->where_not_in('seq', $check1);
            $this->db->update('youth_member_level', $data);
        } else {
            $data = array('indate' => NULL, 'isfinish' => 0);
            $this->db->where('member_id', $member_id);
            $this->db->where('level', $level);
            $this->db->update('youth_member_level', $data);
        }

        if (!empty($check2)) {
            // handle member_level_det table
            foreach ($check2 as $check) {
                $key = array_search($check, $seq2);
                $indate_row = $indate2[$key];
                $data = array('in_date' => $indate_row, 'isfinish' => 1);
                $this->db->where('seq', $check);
                $this->db->where('member_id', $member_id);
                $this->db->update('youth_member_level_det', $data);
            }
            $data = array('in_date' => NULL, 'isfinish' => 0);
            $this->db->where('member_id', $member_id);
            $this->db->where('level', $level);
            $this->db->where_not_in('seq', $check2);
            $this->db->update('youth_member_level_det', $data);
        } else {

            $data = array('in_date' => NULL, 'isfinish' => 0);
            $this->db->where('member_id', $member_id);
            $this->db->where('level', $level);
            $this->db->update('youth_member_level_det', $data);
        }
    }

}
