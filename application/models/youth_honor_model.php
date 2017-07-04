<?php
class Youth_honor_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_honor($offset)
	{
	// get public variable session cat type 
	$cat=$this->session->userdata('cat');
	$user_right=$this->session->userdata('user_right');
	
	// $member_id2  = $this->input->post('member_id2');
	 $honor_ccat2 = $this->input->post('honor_ccat2');
	 $honor_code2 = $this->input->post('honor_code2');
	 $honor_cname2= $this->input->post('honor_cname2');
	 $honor_ename2= $this->input->post('honor_ename2');
	

	$this->db->select('*');
	$this->db->from('youth_honor');
	
	if ($user_right != 1 and $user_right !=2){		
		$this->db->where('cat',$cat);
	}

	$limit=20;
	
//echo $cat;
//echo $honor_ccat2;
//$this->db->where('honor_ccat',$honor_ccat2);

	if ( !empty($honor_code2))
		{ 		
			$this->db->like('honor_code',$honor_code2);
		}

	if ( !empty($honor_cname2))
		{ 
			$this->db->like('honor_cname',$honor_cname2);
		}
	
	if ( !empty($honor_ename2))
		{ 	
			$this->db->like('honor_ename',$honor_ename2);
		}
		

	$this->db->limit($limit, $offset);
		
	return $this->db->get()->result_array();
}


}
