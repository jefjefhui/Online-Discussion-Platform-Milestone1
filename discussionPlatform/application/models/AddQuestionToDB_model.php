<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 //put your code here
 class AddQuestionToDB_model extends CI_Model{

    
    public function addQuestion($data){

        $this->db->insert("questions",$data);


    }

}
?>