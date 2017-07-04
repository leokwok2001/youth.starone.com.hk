<?php
class Level_det extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this -> load -> model('youth_level_det_model');
		$this -> load -> helper('url');
		$this -> load -> helper('html');
	}



	public function create($code=FALSE,$level=FALSE)
	{
			$data['title'] = 'SDA title';
			$data['code'] = $code;
			$data['level'] =  urldecode($level);
			
			$this->load->helper('form');
			$this->load->library('form_validation');
		
			if ($this->session->userdata('islogin')== FALSE) {
				      redirect('/user/login/', 'refresh');
			}
			$this->form_validation->set_rules('desc', '明細項', 'required');
			$this->form_validation->set_rules('in_date', '日期', 'required');
			if ($this->form_validation->run() === FALSE)
			{
			$this->load->view('templates/header', $data);	
			$this->load->view('level_det/create', $data);
			$this->load->view('templates/footer');
			}
			else
			{
			$this->youth_level_det_model->set_level_det();
			  redirect('/level/edit/'.$code,'refresh');
			}
	}
	
			
}
