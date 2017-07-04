<?php
class Youth_notices_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	

	public function get_notices($id = FALSE)
{
	if ($id === FALSE)
	{
		$query = $this->db->get('youth_notices');
		return $query->result_array();
	}
	
	$query = $this->db->get_where('youth_notices', array('id' => $id));
	return $query->row_array();
}

	
	public function set_notices($filename=NULL)
	{
	$this->load->helper('url');	
	$data = array(
		'indate' => $this->input->post('indate'),
		'cat' => $this->input->post('cat'),
		'event' => $this->input->post('event'),
		'subject' => $this->input->post('subject'),
		'context' => $this->input->post('context'),
		'filename' => $filename
		
	);
		 $this->db->insert('youth_notices', $data);
    }
	
	


}
