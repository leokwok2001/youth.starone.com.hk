<?php

class Member extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('youth_member_model');
        $this->load->model('youth_member_honor_model');

        $this->load->helper('url');
        $this->load->helper('html');
    }

    public function edit($id) {

        if ($this->session->userdata('islogin') == FALSE) {
            redirect('/user/login/', 'refresh');
        }

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('english_name', '英文名', 'required');
        $this->form_validation->set_rules('HKID', '身份證', 'required');
        $this->form_validation->set_rules('date_of_birth', '出生日期', 'required');
        $this->form_validation->set_rules('createdate', '註冊日期', 'required');

        $data['member'] = $this->youth_member_model->get_member($id);
        $data['member_honor'] = $this->youth_member_honor_model->get_member_honor($id);

        if (empty($data['member'])) {
            show_404();
        }

        $data['title'] = 'SDA title';

        $this->load->view('templates/header', $data);
        $this->load->view('member/edit', $data);
        $this->load->view('templates/footer');
    }

    public function view() {


        $this->load->helper('form');
        $this->load->library('form_validation');

        if ($this->session->userdata('islogin') == FALSE) {

            //$this->load->view('user/success');
            redirect('/user/login/', 'refresh');
        }

        $data['member'] = $this->youth_member_model->get_member();
        $data['title'] = 'SDA title';
        $this->load->view('templates/header', $data);  // header page
        $this->load->view('member/view', $data);
        $this->load->view('templates/footer');  // footer page
    }

    public function memberHonorDelete($member_id, $honor_code) {
        if ($this->session->userdata('islogin') == FALSE) {
            redirect('/user/login/', 'refresh');
        }
        $this->db->delete('youth_member_honor', array('member_id' => $member_id, 'honor_code' => $honor_code));
        //redirect('/member/view/', 'refresh');
        redirect('/member/edit/' . $member_id, 'refresh');
    }

    public function delete($id) {
        if ($this->session->userdata('islogin') == FALSE) {
            redirect('/user/login/', 'refresh');
        }

        $this->db->delete('youth_member', array('member_id' => $id));
        redirect('/member/view/', 'refresh');
    }

    public function create() {
        $data['title'] = 'SDA title';
        $this->load->helper('form');
        $this->load->library('form_validation');

        if ($this->session->userdata('islogin') == FALSE) {
            redirect('/user/login/', 'refresh');
        }

        $this->form_validation->set_rules('english_name', '英文名', 'required');
        $this->form_validation->set_rules('HKID', '身份證', 'required');
        $this->form_validation->set_rules('date_of_birth', '出生日期', 'required');
        //	$this->form_validation->set_rules('createdate', '註冊日期', 'required');



        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('member/create');
            $this->load->view('templates/footer');
        } else {
        //    echo $_FILES['userfile']['name'];
            if (!empty($_FILES['userfile']['name'])) {
                        $aa = $this->upload_files();
                    } else {
                        $aa = "";
                    }

            $this->youth_member_model->set_member($aa);
            redirect('/member/view/', 'refresh');
        }
    }

    private function upload_files() {

        $config['upload_path'] = 'uploads';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['overwrite'] = 1;
        $config['file_name'] = uniqid('youth', true) . '.jpg';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
        }

        return URL . $config['upload_path'] . "/" . str_replace(".jpg", "_.jpg", $config['file_name']);
    }

    public function update() {


        if ($this->session->userdata('islogin') == FALSE) {
            redirect('/user/login/', 'refresh');
        }

        if (!empty($_FILES['userfile']['name'])) {
                    $aa = $this->upload_files();
                } else {
                    $aa = "";
                }

        $this->youth_member_model->update_member($aa);
        redirect('/member/view/', 'refresh');
    }

}
