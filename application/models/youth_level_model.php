<?php
class Youth_level_model extends CI_Model {

	public function __construct() {
		$this -> load -> database();
	}

	public function get_level($code = FALSE) {
		
		
		if ($code === FALSE) {
		$user_right = $this -> session -> userdata('user_right');
		$cat = $this -> session -> userdata('cat');
		$club_code = $this -> session -> userdata('club_code');
		$username2 = $this -> session -> userdata('username');
		$search_level = $this -> input -> post('search_level');
		$this -> db -> select('*');
		$this -> db -> from('youth_level');
		$this -> db -> where('level', $search_level);
		$this -> db -> order_by('code');
		return $this -> db -> get() -> result_array();
		}
		$query = $this->db->get_where('youth_level', array('code' => $code));
		return $query->row_array();	
	}
	
	

	public function create_level() {
		
		$this -> load -> helper('url');
		$data = array(
		'level' => $this -> input -> post('level'), 
		'cat' => $this -> input -> post('cat'), 
		'code' => $this -> input -> post('code'), 
		'desc' => $this -> input -> post('desc'), 
		'version' => $this -> input -> post('version'), 
		'indate' => $this -> input -> post('indate'));
		return $this -> db -> insert('youth_level', $data);
	}
	
	
	public function update_level(){
		$data = array(
		'level' => $this->input->post('level'),
		'cat' => $this->input->post('cat'),
		'code' => $this->input->post('code'),
		'desc' => $this->input->post('desc'),
		'version' => $this->input->post('version'),
		'indate' => $this -> input -> post('indate'));
		$seq = $this->input->post('seq');
		$this->db->where('seq', $seq);
		$this->db->update('youth_level', $data); 
	}

}
