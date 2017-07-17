<?php

class Member_level extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('youth_level_model');
        $this->load->model('youth_member_model');
        $this->load->model('youth_member_level_model');
        $this->load->model('youth_member_level_det_model');

        $this->load->helper('url');
        $this->load->helper('html');
    }

    public function view($member_id = false, $level = false) {
        if ($this->session->userdata('islogin') == FALSE) {
            redirect('/user/login/', 'refresh');
        }
        $oldlevel = urldecode($level);
        $clonelevel = '';

        if ($oldlevel == '團彥') {
            $clonelevel = '團師MG';
        } elseif ($oldlevel == '準團師') {
            $clonelevel = '團師MG';
        } elseif ($oldlevel == '團師MG') {
            $clonelevel = '領袖勳章PLA';
        } elseif ($oldlevel == '領袖勳章PLA') {
            $clonelevel = '高級領袖勳章APLA';
        } elseif ($oldlevel == '高級領袖勳章APLA') {
            $clonelevel = '高級領袖勳章APLA';
        }






        $this->load->helper('form');
// auto check the member level update information 
        $this->youth_level_model->push_members_level($member_id,$clonelevel);
        $data['member_level'] = $this->youth_member_level_model->get_member_level($member_id, $clonelevel);
        $data['member_date'] = $this->youth_member_model->get_member_uplevel_date($member_id);
        $data['level'] = $clonelevel;
        $data['oldlevel'] = $oldlevel;
        $data['member_id'] = $member_id;

        //	print_r($data['member_date']);

        $this->load->view('member_level/view', $data);
        $this->load->view('templates/footer');  // footer page
    }

    public function levelup($member_id, $level) {
        $member_id2 = urldecode($member_id);
        $level2 = urldecode($level);
        if ($this->session->userdata('islogin') == FALSE) {
            redirect('/user/login/', 'refresh');
        }

        $old_level = $level2;
        $uplevel = '';
        $clonelevel = '';

        if ($old_level == '團彥') {
            $uplevel = '準團師';
            $clonelevel = '團師MG';
        } elseif ($old_level == '準團師') {
            $uplevel = '團師MG';
            $clonelevel = '領袖勳章PLA';
        } elseif ($old_level == '團師MG') {
            $uplevel = '領袖勳章PLA';
            $clonelevel = '高級領袖勳章APLA';
        } elseif ($old_level == '領袖勳章PLA') {
            $uplevel = '高級領袖勳章APLA';
            $clonelevel = '';
        }
        $this->youth_member_model->set_member_level($member_id2, $uplevel);
        $this->youth_member_level_model->clone_member_level($member_id2, $clonelevel);
        $this->youth_member_level_det_model->clone_member_level_det($member_id2, $clonelevel);
        redirect('member/edit/' . $member_id2, 'refresh');
    }

    public function update() {
        if ($this->session->userdata('islogin') == FALSE) {
            redirect('/user/login/', 'refresh');
        }
        $this->youth_member_level_model->set_member_level();



        $member_id = $this->input->post('member_id');
        $oldlevel = $this->input->post('oldlevel');


        if ($oldlevel == '團彥') {
            $clonelevel = '團師MG';
        } elseif ($oldlevel == '準團師') {
            $clonelevel = '團師MG';
        } elseif ($oldlevel == '團師MG') {
            $clonelevel = '領袖勳章PLA';
        } elseif ($oldlevel == '領袖勳章PLA') {
            $clonelevel = '高級領袖勳章APLA';
        } elseif ($oldlevel == '高級領袖勳章APLA') {
            $clonelevel = '高級領袖勳章APLA';
        }


        $this->load->helper('form');
        $data['member_level'] = $this->youth_member_level_model->get_member_level($member_id, $clonelevel);

        $data['member_date'] = $this->youth_member_model->get_member_uplevel_date($member_id);
        $data['level'] = $clonelevel;
        $data['oldlevel'] = $oldlevel;
        $data['member_id'] = $member_id;
        $this->load->view('member_level/view', $data);
        $this->load->view('templates/footer');  // footer page
    }

}
