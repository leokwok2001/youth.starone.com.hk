<?php
class Level extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this -> load -> model('youth_level_model');
		$this -> load -> model('youth_level_det_model');

	//	$this -> load -> model('youth_member_level_model');
//		$this -> load -> model('youth_member_level_det_model');

		$this -> load -> helper('url');
		$this -> load -> helper('html');
	}

	public function view() {
		if ($this -> session -> userdata('islogin') == FALSE) {
			redirect('/user/login/', 'refresh');
		}

		$this -> load -> helper('form');
		$data['level'] = $this -> youth_level_model -> get_level();
		$data['title'] =TITLE;
		$this -> load -> view('templates/header', $data);
		// header page
		$this -> load -> view('level/view', $data);
		$this -> load -> view('templates/footer');
		// footer page
	}

	public function edit($code)
	{
		if ($this->session->userdata('islogin')== FALSE) {
			redirect('/user/login/', 'refresh');
		}

		$this->load->helper('form');

		$data['level'] = $this->youth_level_model->get_level($code);
		$data['level_det'] = $this->youth_level_det_model->get_level_det($code);


		if (empty($data['level']))
		{
			show_404();
		}

		$data['title'] = TITLE;

		$this->load->view('templates/header', $data);
		$this->load->view('level/edit', $data);
		$this->load->view('templates/footer');
	}

	public function leveldetDelete($code,$seq)
	{
		if ($this->session->userdata('islogin')== FALSE) {
			redirect('/user/login/', 'refresh');
		}
		$this->db->delete('youth_level_det', array('code' => $code,'seq' => $seq));
		//redirect('/member/view/', 'refresh');
		redirect('/level/edit/'.$code,'refresh');
	}


	public function delete($seq)
	{

		if ($this->session->userdata('islogin')== FALSE) {
			redirect('/user/login/', 'refresh');
		}

		$this->db->delete('youth_level', array('seq' => $seq));
		redirect('/level/view/', 'refresh');

	}

	public function create()
	{
		$data['title'] = TITLE;
		$this->load->helper('form');
		$this->load->library('form_validation');

		if ($this->session->userdata('islogin')== FALSE) {
			redirect('/user/login/', 'refresh');
		}

		$this->form_validation->set_rules('level', 'level', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('level/create');
			$this->load->view('templates/footer');
		}
		else
		{
			$this->youth_level_model->create_level();
			redirect('/level/view/', 'refresh');
		}
	}

	public function update()
	{


		if ($this->session->userdata('islogin')== FALSE) {
			redirect('/user/login/', 'refresh');
		}


		$this->youth_level_model->update_level();
		redirect('/level/view/', 'refresh');


	}

}
