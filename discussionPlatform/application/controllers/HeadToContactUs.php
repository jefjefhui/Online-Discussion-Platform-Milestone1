<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HeadToContactUs extends CI_Controller {

	public function index()
	{
		$data['error']="";
        $this->load->helper('form');
		$this->load->helper('url');
		$this->load->view('/template/header');
        $this->load->view('ContactUs',$data);
        $this->load->view('/template/footer');

	}
	public function upload(){
		$user_ip = getenv('REMOTE_ADDR');
$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
$country = $geo["geoplugin_countryName"];
$city = $geo["geoplugin_city"];
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('MultipleFiles_model');
		$topic = $this->input->post('topic');
		$concerns = $this->input->post('concerns');
		$location = $city;
		
		
		$config['upload_path'] = './uploads/';
		$config['allowed_types']='jpg|mp4|mkv|png|jpeg';
		$config['max_size'] = 20000;
		$this->load->library('upload',$config);
		

        

        		
		if($this->upload->do_upload('file')){
			$data["error"]="";



			$this->MultipleFiles_model->insertToDB($this->upload->data('file_name'),$this->upload->data('full_path'),$topic,$concerns,$location);
			$this->load->view('template/header');
			$this->load->view('ContactUs',$data);
			$this->load->view('template/footer');

		}else{
			$data["error"]="";
			$this->load->view('template/header');
			$this->load->view('ContactUs',$data);
			$this->load->view('template/footer');


		}
		
	
	}
	/*public function upload(){
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('MultipleFiles_model');
		$topic = $this->input->post('topic');
		$concerns = $this->input->post('concerns');
		$location = "";

		$config['upload_path']='./uploads/';
		$config['allowed_types'] = 'jpg|mp4|mkv|png';
		$config['max_size']=10000;
		$this->load->library('upload',$config);
		if(!$this->upload->do_upload('userfile')){
			$this->load->view('template/header');
			$data= array('error'=> $this->upload->display_errors());
			$this->load->view('ContactUs,$data');
			$this->load->view('template/footer');
		}else{
			$this->MultipleFiles_model->insertToDB($this->upload->data('file_name'),$this->upload->data('full_path'),$topic,$concerns,$location);
			$this->load->view('template/header');
			$this->load->view('ContactUs',array('error'=>'File upload success.<br/>'));
			$this->load->view('template/footer');
		}

		
	}*/
}