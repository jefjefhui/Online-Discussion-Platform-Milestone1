<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 //put your code here
 class CreateAC_model extends CI_Model{

    //validations and check if the username exist or not 
    public function UsernameValidate($username){
        // Validate
        $this->db->where('username', $username);
        $result = $this->db->get('users');

        if($result->num_rows() == 1){
            return false;
        } else {
            return true;
        }
    }
    public function EmailValidate($email){
        // Validate
        $this->db->where('Email', $email);
        $result = $this->db->get('users');

        if($result->num_rows() == 1){
            return false;
        } else {
            return true;
        }
    }
    //Insertion of new account infomration if the inputs are valid
    public function InsertDB($data){
        
     

        $this->db->insert("users",$data);


        
        
        

    }
}
?>