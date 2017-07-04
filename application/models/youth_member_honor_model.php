<?php
class Youth_member_honor_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	
	public function set_member_honor()
	{
	$this->load->helper('url');	


	$member_id=$this->input->post('member_id');
	$cat = $this->input->post('cat');
	$honor_ecat=$this->input->post('honor_ecat');
	$honor_ccat=$this->input->post('honor_ccat');
	$honor_code=$this->input->post('honor_code');
	$honor_cname=$this->input->post('honor_cname');
	$honor_ename=$this->input->post('honor_ename');	 
	$check1 = $this->input->post('check1');
 
	  	foreach($check1 as $check) {
		
		$key=array_search($check,$honor_code);
		
		$member_id_row=$member_id[$key];
		$cat_row=$cat[$key];
		$honor_ecat_row=$honor_ecat[$key];
		$honor_ccat_row=$honor_ccat[$key];
		$honor_code_row=$honor_code[$key];
		$honor_cname_row=$honor_cname[$key];
		$honor_ename_row=$honor_ename[$key];	

		
		$data = array(
		'member_id' => $member_id_row,
		'cat' => $cat_row,
		'honor_ecat' => $honor_ecat_row,
		'honor_ccat' => $honor_ccat_row,
		'honor_code' => $honor_code_row,
		'honor_cname'=>$honor_cname_row,
		'honor_ename' => $honor_ename_row);
		 $this->db->insert('youth_member_honor', $data);	
		}
  	}
	


	public function get_member_honor($member_id = FALSE)
	{
	
	$query = $this->db->get_where('youth_member_honor', array('member_id' => $member_id));
	return $query->result_array();
	}
}
