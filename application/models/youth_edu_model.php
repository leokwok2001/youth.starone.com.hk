<?php
class Youth_edu_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	

	public function get_edu($id = FALSE)
	{
		if ($id === FALSE)
		{
			
			$search_cat=$this->input->post('search_cat');
			$search_level=$this->input->post('search_level');
			
			
			if (empty($search_cat) and empty($search_level)){
				
				//$query = $this->db->get('youth_edu');
				//return $query->result_array();
				$this->db->select('*');
				$this->db->from('youth_edu');
				
			} else {
				$this->db->select('*');
				$this->db->from('youth_edu');
				if (!empty($search_cat))
					{$this->db->where('cat',$search_cat);}
				if (!empty($search_level))
					{$this->db->where('level',$search_level);}
					
					
			}
			
			$this->db->order_by("cat,level");
			return $this->db->get()->result_array();
		
		}
		
		$this->db->order_by("cat,level");
		$query = $this->db->get_where('youth_edu', array('id' => $id));
		
		return $query->row_array();
	}

	
	public function set_edu($filename=NULL)
	{
	$this->load->helper('url');	
	
	$filen=$this->input->post('filen');


	
	$data = array(
		'indate' => $this->input->post('indate'),
		'cat' => $this->input->post('cat'),
		'level' => $this->input->post('level'),
		'subject' => $this->input->post('subject'),
		'context' => $this->input->post('context'),
		'videopath'=> $this->input->post('videopath'),
		'filen'  => $filen[0],'filename' => 'uploads/'.str_replace(".pdf","_.pdf",$filename[0]),
		'filen2' => $filen[1],'filename2' => 'uploads/'.str_replace(".pdf","_.pdf",$filename[1]),
		'filen3' => $filen[2],'filename3' => 'uploads/'.str_replace(".pdf","_.pdf",$filename[2]),
		'filen4' => $filen[3],'filename4' => 'uploads/'.str_replace(".pdf","_.pdf",$filename[3]),
		'filen5' => $filen[4],'filename5' => 'uploads/'.str_replace(".pdf","_.pdf",$filename[4])
	);
	
	//echo $filename[1];
		 $this->db->insert('youth_edu', $data);
    }

}
