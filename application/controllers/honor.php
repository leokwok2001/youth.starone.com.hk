<?php
class Honor extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('youth_honor_model');
		$this->load->model('youth_member_honor_model');
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->library('pagination');
	}

	public function view($member_id=FALSE,$offset=FALSE)
	{
			if ($this->session->userdata('islogin')== FALSE) {
				      redirect('/user/login/', 'refresh');
			}
			if ($member_id!=FALSE)
			{$data['id'] = $member_id;}
			if ($this->input->post('member_id2')!=FALSE)
			{$data['id'] = $this->input->post('member_id2');}

			$data['title'] = TITLE;
			$this->load->helper('form');
			$this->load->library('form_validation');

			if ($this->uri->segment(4)!=FALSE)
			{
				$offset = $this->uri->segment(4);
			}else{
				$offset = 0;
			}

			$data['honor'] = $this->youth_honor_model->get_honor($offset);
			//define('URL','http://youth.starone.com.hk/');
			$config2['base_url']=URL.'index.php/honor/view/'.$data['id'] ;
			$config2['total_rows']= $this->db->get('youth_honor')->num_rows();

			$config2['per_page']=20;
			$config2['num_links']=20;
			$config2['uri_segment'] = 4;
			$config2['full_tag_open'] ='<div id="pagination">';
			$config2['full_tag_close'] ='</div>';
			$this->pagination->initialize($config2);
			$this->load->view('honor/view',$data);

	}

	public function pickhonor()
	{
	 	if ($this->session->userdata('islogin')== FALSE) {
				      redirect('/user/login/', 'refresh');
			}
		  $this->youth_member_honor_model->set_member_honor();
		  $member_id=$this->input->post('member_id');
	   	  redirect('/member/edit/'.$member_id[0]);
    }


}
