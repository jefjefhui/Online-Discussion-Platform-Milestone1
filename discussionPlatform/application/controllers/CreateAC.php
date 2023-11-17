<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CreateAC extends CI_Controller {
	
	public function index()
	{
		$data['error']= "";
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->view('template/header');
		$this->load->view('createAccount',$data);
		$this->load->view('template/footer');
	}

	public function genAC(){
		
		$this->load->model('CreateAC_model');
		$data['error']= "<div class=\"alert alert-danger\" role=\"alert\"> Both username and emails address are used by other user, pick another one!! </div> ";
		//$data3['error']="";
		$data2['error']="<div class=\"alert alert-danger\" role=\"alert\"> Email address is already registered, pick another one!! </div> ";
		$data3['error']="<div class=\"alert alert-danger\" role=\"alert\">  Username is already registered, pick another one!! </div> ";
		$data4['error']="<div class=\"alert alert-danger\" role=\"alert\"> Your password need to have at least 5 characters, includes lowercase, uppercase and special characters.</div> ";
		$data5['error']="<div class=\"alert alert-danger\" role=\"alert\"> Your password is too short, it must have at least 5 characters.</div> ";
		$data6['error']="<div class=\"alert alert-danger\" role=\"alert\"> Your password need to have at least one uppercase character</div> ";
		$data7['error']="<div class=\"alert alert-danger\" role=\"alert\"> Your password need to have at least one lowercase character</div> ";
		$data8['error']="<div class=\"alert alert-danger\" role=\"alert\"> Your password need to have at least one special character</div> ";
		$data9['error']="<div class=\"alert alert-danger\" role=\"alert\"> Your password need to have at least one number</div> ";
		$this->load->helper('form');
		$this->load->helper('url');
		$username = $this->input->post('username'); //obtain the username from the createAccount form 
		$password = $this->input->post('password');//obtain the password from the createAccount form 
		$fName = $this->input->post('firstname');//obtain the first name from the createAccount form 
		$lName = $this->input->post('lastname');//obtain the last name from the createrAccount form 
		$email = $this->input->post('Email'); //obtain the last name from the createAccount form 
		$UsernamevalidationResult = $this->CreateAC_model->UsernameValidate($username);
        $EmailvalidationResult = $this->CreateAC_model->EmailValidate($email);
		$passwordValidation;

        	// The check password code will start in the next line
			//function checkPassword($passwordPara){
				$lenghCheck = strlen($password);
				$checkUpper=0;
				$checkLower=0;
				$checkLen=0;
				$checkSpecialC=0;
				$checkNumbers=0;
				if($lenghCheck>=5){
				   $checkLen=1;
				}
				if(preg_match('/[A-Z]/', $password)){
					$checkUpper=1;
				   }
				if (preg_match('/[a-z]/', $password)){
				   $checkLower=1;
				}
				if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $password))
					{
					 $checkSpecialC=1;
					}
				if (preg_match('~[0-9]+~', $password)) {
						$checkNumbers=1;
					}
				if($checkLen==1 and $checkUpper==1 and $checkLower==1 and $checkSpecialC==1){
					//return true;
					$passwordValidation=1; 
				}else{
					$passwordValidation=0; 
				}
		
			//}
        
		//checkPassword($password);
		
		
		if ($UsernamevalidationResult==false and $EmailvalidationResult==false){
		   $this->load->view('template/header');
           $this->load->view('createAccount',$data);
		   $this->load->view('template/footer');
		}
		elseif($UsernamevalidationResult==true and $EmailvalidationResult==false){
			
			$this->load->view('template/header');
			$this->load->view('createAccount',$data2);
			$this->load->view('template/footer');
		}
		elseif($UsernamevalidationResult==false and $EmailvalidationResult==true){
			
			$this->load->view('template/header');
			$this->load->view('createAccount',$data3);
			$this->load->view('template/footer');
		}
		//elseif($passwordValidation==0)
		//{
            //$this->load->view('template/header');
		//	$this->load->view('createAccount',$data4);
		//	$this->load->view('template/footer');
		//}
		elseif($checkLen==0){
			$this->load->view('template/header');
			$this->load->view('createAccount',$data5);
			$this->load->view('template/footer');

		}elseif($checkUpper==0){
			$this->load->view('template/header');
			$this->load->view('createAccount',$data6);
			$this->load->view('template/footer');

		}
		elseif($checkLower==0){
			$this->load->view('template/header');
			$this->load->view('createAccount',$data7);
			$this->load->view('template/footer');

		}elseif($checkSpecialC==0){
			$this->load->view('template/header');
			$this->load->view('createAccount',$data8);
			$this->load->view('template/footer');
		}elseif($checkNumbers==0){
			$this->load->view('template/header');
			$this->load->view('createAccount',$data9);
			$this->load->view('template/footer');

		}else{
			$qdata["username"]=$username;
			$qdata["password"]=$password;
			$qdata["firstname"]=$fName;
			$qdata["lastname"]=$lName;
			$qdata["email"]=$email;
			$this->CreateAC_model->InsertDB($qdata);
			$this->load->view('template/header');
			$this->load->view('createSuccess');
			$this->load->view('template/footer');



		}


	}
	
}
?>