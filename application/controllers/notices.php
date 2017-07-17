<?php
class Notices extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

			$this->load->model('youth_notices_model');
		$this->load->helper('url');
		$this->load->helper('html');

		$this->load->model('youth_calendar_model');

	}

	public function view($id=NULL,$year=NULL,$month=NULL)
	{
			if ($this->session->userdata('islogin')== FALSE) {
				      redirect('/user/login/', 'refresh');
			}


			$data['title'] = TITLE;
			$data['year'] = $year;
			$data['month'] = $month;

			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->view('templates/header',$data);  // header page

			if ($id===NULL or $year!==NULL ){

			if (!$year) {

				$year = date('Y');
			}
			if (!$month) {

				$month = date('m');
			}



			if ($day = $this->input->post('day')) {
				$this->youth_calendar_model->add_calendar_data(
					"$year-$month-$day",
					$this->input->post('data')
				);
			}
				$data['calendar']= $this->youth_calendar_model->generate($year,$month);
				$data['notices'] = $this->youth_notices_model->get_notices();
				$this->load->view('notices/view',$data);
			} else {
				$data['notices'] = $this->youth_notices_model->get_notices($id);
				$this->load->view('notices/edit',$data);
			}


			$this->load->view('templates/footer');  // footer page


	}



			public function create()
	{
			$data['title'] =TITLE;
			$this->load->helper('form');
			$this->load->library('form_validation');

			if ($this->session->userdata('islogin')== FALSE) {
				      redirect('/user/login/', 'refresh');
			}

			$this->form_validation->set_rules('indate', '日期', 'required');
			$this->form_validation->set_rules('subject', '主題', 'required');

			if ($this->form_validation->run() === FALSE)
			{
			$this->load->view('templates/header', $data);
			$this->load->view('notices/create');
			$this->load->view('templates/footer');
			}
			else
			{


					$config['upload_path'] = 'uploads';
					$filename = uniqid('MyApp', true) . '.pdf';
			        $config['allowed_types'] = 'pdf';
			        $config['max_size']    = '1000000';
			        $config['file_name'] = $filename;

					$filename2="";

					$this->load->library('upload',$config);
					if ( !$this->upload->do_upload())
					{
						//$error = array('error' => $this->upload->display_errors());


					//	$this->load->view('templates/header', $data);
					//	$this->load->view('notices/create',$error);
					//	$this->load->view('templates/footer');

						$filename2="";
						$this->youth_notices_model->set_notices();
					}
					else
					{
						$data = array('upload_data' => $this->upload->data());
						$filename2 =$data['upload_data']['file_name'];
						$this->youth_notices_model->set_notices('uploads/'.$filename2);

				    }


				   // $data = array('upload_data' => $this->upload->data());
				  //  $filename2 =$data['upload_data']['file_name'];
				 //   $this->youth_notices_model->set_notices('uploads/'.$filename2);
				    redirect('/notices/view/', 'refresh');

			}
	}


	public function delete($id)
	{
			if ($this->session->userdata('islogin')== FALSE) {
				      redirect('/user/login/', 'refresh');
			}

			$this->db->delete('youth_notices', array('id' => $id));
			 redirect('/notices/view/', 'refresh');
	}

}
