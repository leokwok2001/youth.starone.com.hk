<?php
class Youth_level_det_model extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	}
	public function set_level_det()
	{
		$this->load->helper('url');	
		$code=$this->input->post('code');
		$desc = $this->input->post('desc');
		$in_date=$this->input->post('in_date'); 
		$level=$this->input->post('level');
		$data = array(
		'code' => $code,
		'desc' => $desc,
		'in_date' => $in_date,
		'level' => $level);
		 $this->db->insert('youth_level_det', $data);	
  	}
	public function get_level_det($code = FALSE)
	{
	//	$query = $this->db->get_where('youth_level_det', array('code' => $code));
	
	$query = $this->db->from('youth_level_det')->where('code',$code)->order_by('seq', 'ASC')->get();

		return $query->result_array();
	}
}
