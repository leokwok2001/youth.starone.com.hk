<?php
class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('youth_user_model');
		$this->load->helper('url');
		$this->load->helper('html');
	}


public function login()
{




	$this->load->helper('form');
	$this->load->library('form_validation');
	$data['title'] = TITLE;
	$this->form_validation->set_rules('username', 'username', 'required');
	$this->form_validation->set_rules('password', 'password', 'required');



		if ($this->session->userdata('islogin')) {
				$this->load->view('templates/header',$data);  // header page
				      redirect('/member/view/', 'refresh');
			}else {


	if ($this->form_validation->run() === FALSE)
	{
			$this->load->view('templates/header',$data);  // header page
			$this->load->view('user/login');
	}
	else
	{
			$data['users_item'] = $this->youth_user_model->check_login();


		if (empty($data['users_item']))
			{
			$this->load->view('templates/header',$data);  // header page
			$this->load->view('user/login');
			}else {
			$this->session->set_userdata('islogin', 'YES');
			$this->session->set_userdata('user_right', $data['users_item']['user_right']);
			$this->session->set_userdata('cat', $data['users_item']['cat']);
			$this->session->set_userdata('club_code', $data['users_item']['club_code']);
			$this->session->set_userdata('username', $data['users_item']['username']);


			$this->load->view('templates/header',$data);  // header page
				      redirect('/notices/view/', 'refresh');
			}
	}

			}
			//$this->load->view('templates/footer');  // footer page
}




	public function view()
	{

			if ($this->session->userdata('islogin')== FALSE) {

				      redirect('/user/login/', 'refresh');
			}

			$data['user'] = $this->youth_user_model->get_user();
			$data['title'] = TITLE;

			$this->load->view('templates/header',$data);  // header page
			$this->load->view('user/view',$data);
			$this->load->view('templates/footer');  // footer page
	}


public function edit($username)
{

		if ($this->session->userdata('islogin')== FALSE) {
				      redirect('/user/login/', 'refresh');
			}

			$this->load->helper('form');
			$this->load->library('form_validation');

	$data['user'] = $this->youth_user_model->get_user($username);

	if (empty($data['user']))
	{
		show_404();
	}

	$data['title'] = TITLE;

	$this->load->view('templates/header', $data);
	$this->load->view('user/edit', $data);
	$this->load->view('templates/footer');
}



public function create()
	{
			$data['title'] =TITLE;
			$this->load->helper('form');
			$this->load->library('form_validation');

			if ($this->session->userdata('islogin')== FALSE) {
				      redirect('/user/login/', 'refresh');
			}

				$this->form_validation->set_rules('username', 'username', 'required');
				$this->form_validation->set_rules('password', 'password', 'required');


			if ($this->form_validation->run() === FALSE)
			{
			$this->load->view('templates/header', $data);
			$this->load->view('user/create');
			$this->load->view('templates/footer');
			}
			else
			{
			$this->youth_user_model->set_user();
			redirect('/user/view/', 'refresh');
			}
	}


		public function delete($username)
	{


			if ($this->session->userdata('islogin')== FALSE) {
				      redirect('/user/login/', 'refresh');
			}

			$this->db->delete('youth_user', array('username' => $username));
			 redirect('/user/view/', 'refresh');

	}

		public function update()
	{


			if ($this->session->userdata('islogin')== FALSE) {
				      redirect('/user/login/', 'refresh');
			}


			$this->youth_user_model->update_user();
			redirect('/user/view/', 'refresh');


	}


	public function checkout()
		{

		    $this->session->sess_destroy();
			  redirect('/user/login/', 'refresh');

		}


}
