<?php 
class Edu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->model('youth_edu_model');

	}
	
	public function view($id=NULL){
		
		
	if ($this->session->userdata('islogin')== FALSE) {
			redirect('/user/login/', 'refresh');
		}
			$data['title'] = 'SDA title';			
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->view('templates/header',$data);  // header page			
			
			
			if ($id===NULL ){		
				$data['edu'] = $this->youth_edu_model->get_edu();
				$this->load->view('edu/view',$data);
			} else {
				$data['edu'] = $this->youth_edu_model->get_edu($id);
				$this->load->view('edu/edit',$data);
			}		

			
			
			$this->load->view('templates/footer');  // footer page
	}
	
	
	public function create()
	{
			if ($this->session->userdata('islogin')== FALSE) {
				      redirect('/user/login/', 'refresh');
			}
	
			$data['title'] = 'SDA title';
			$this->load->helper('form');
			$this->load->library('form_validation');		
			$this->form_validation->set_rules('indate', '日期', 'required');
			$this->form_validation->set_rules('subject', '主題', 'required');		
			if ($this->form_validation->run() === FALSE)
			{
					$this->load->view('templates/header', $data);	
					$this->load->view('edu/create');
					$this->load->view('templates/footer');
			}
			else
			{		
		
					$aa=$this->upload_files($_FILES['userfile']);
					//print_r($aa);
		
				
				$this->youth_edu_model->set_edu($aa);
				redirect('/edu/view/', 'refresh');
			}
	}
	
	public function delete($id)
	{
			if ($this->session->userdata('islogin')== FALSE) {
				      redirect('/user/login/', 'refresh');
			}
			
			$this->db->delete('youth_edu', array('id' => $id)); 	
			 redirect('/edu/view/', 'refresh');		
	}
	
	private function upload_files($files)
	{
		$config = array(
				'upload_path'   => 'uploads',
				'allowed_types' => 'pdf',
				'overwrite'     => 1
		);
		$filename_out=array();
	
		$this->load->library('upload', $config);
		$i=0;
		foreach ($files['name'] as $key => $image) {
			$_FILES['userfile[]']['name']= $files['name'][$key];
			$_FILES['userfile[]']['type']= $files['type'][$key];
			$_FILES['userfile[]']['tmp_name']= $files['tmp_name'][$key];
			$_FILES['userfile[]']['error']= $files['error'][$key];
			$_FILES['userfile[]']['size']= $files['size'][$key];
			
			$i=$i+1;	
			
			$config['file_name'] = uniqid('MyApp', true) . '.pdf';
			
	
			
			$this->upload->initialize($config);
	
			if ($this->upload->do_upload('userfile[]')) {
				$this->upload->data();
				$filename_out[] =$config['file_name'];
				
			} else {
				//echo $i."error!</br>";
				$filename_out[]="";
			//	return false;
			}
		}
	
		return $filename_out ;//$filename_out;
	}
	
	
} 
?>