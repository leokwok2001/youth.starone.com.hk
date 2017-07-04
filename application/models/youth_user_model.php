<?php
class Youth_user_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	

	public function check_login()
	{
	
	$tmp_username= $this->input->post('username');
	$tmp_password= $this->input->post('password');
	
	
	$query = $this->db->get_where('youth_user', array('username' =>$tmp_username,'password' =>$tmp_password ));
	return $query->row_array();
	}




	public function get_user($username = FALSE)
{
	if ($username === FALSE)
	{
		
		//$this->session->set_userdata('islogin', 'YES');
		$user_right=$this->session->userdata('user_right');
		$cat=$this->session->userdata('cat');
		$club_code=$this->session->userdata('club_code');
		$username2=$this->session->userdata('username');
		
		if ($user_right==1 or $user_right==2)
		{	
		$this->db->select('*');
		$this->db->from('youth_user');
		$this->db->where('username !=','root');
		return $this->db->get()->result_array();
		} else {
		$this->db->select('*');
		$this->db->from('youth_user');
		$this->db->where('username',$username2);
		return $this->db->get()->result_array();
		}
	}
	
	$query = $this->db->get_where('youth_user', array('username' => $username));
	return $query->row_array();
	
	
	
}

	
	
	
	public function set_user()
{
	$this->load->helper('url');
	
	
	
	$data = array(
		'username' => $this->input->post('username'),
		'password' => $this->input->post('password'),
		'club_code' => $this->input->post('club_code'),
		'cat' => $this->input->post('cat'),
		'fullname' => $this->input->post('fullname'),
		'mobile' => $this->input->post('mobile')
		
	);
	
	return $this->db->insert('youth_user', $data);
}


public function update_user(){
	
	$username = $this->input->post('username');
	
	$data = array(
		'password' => $this->input->post('password'),
		'club_code' => $this->input->post('club_code'),
		'cat' => $this->input->post('cat'),
		'fullname' => $this->input->post('fullname'),
		'mobile' => $this->input->post('mobile'),
		'user_right' =>0
	);

	$username = $this->input->post('username');
 $this->db->where('username', $username);
 $this->db->update('youth_user', $data); 
}


}
