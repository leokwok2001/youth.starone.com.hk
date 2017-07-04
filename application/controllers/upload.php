<?php

class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	function index()
	{
		$this->load->view('upload/upload_form', array('error' => ' ' ));
	}

	function do_upload()
	{
		$config['upload_path'] = 'uploads';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$this->load->library('upload',$config);
		if ( !$this->upload->do_upload())
		{
			
			$error = array('error' => $this->upload->display_errors());
			
		
			$this->load->view('upload/upload_form',$error);
		}
		else
		{
			echo "2";
			$data = array('upload_data' => $this->upload->data());
			$this->load->view('upload/upload_success',$data);
		}

//		$config['upload_path'] = './uploads/'; // set allowed file types 
//		$config['allowed_types'] = 'pdf'; // set upload limit, set 0 for no limit 
//		$config['max_size'] = 0; 
//		$this->load->library('upload', $config);
		// if upload failed , display errors
/*
if (!$this->upload->do_upload())
{
		$this->data['error'] = $this->upload->display_errors();
	     $this->data['page_data'] = 'admin/upload_view';
	     $this->load->view('upload/upload_form', $this->data);
		//$this->load->view('upload/upload_form', $error);
}
else
{
	  print_r($this->upload->data());
}
*/		
	}
	

}
?>