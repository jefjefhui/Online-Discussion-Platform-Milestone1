<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class questionDetails extends CI_Controller {

	
	public function index()
	{
		$this->load->view('welcome_message');
	}

    //When user click on the link, it will lead to the details of the question 
    public function showRelatedInfo($info){
        $this->session->set_userdata('currentQID',$info);
        $this->load->model('GrabClickedQDetails_model');
        $this->load->model('LoadReplyForQuestion_model');
        $this->load->model('AttachFilesToCResponse_model');
        $this->load->helper('form');
		$this->load->helper('url');
        $data['qid']=$info;
        $qInfo["info"] = $this->GrabClickedQDetails_model->getTheInfo($info);
        $qInfo["response"] = $this->LoadReplyForQuestion_model->grabReply($_SESSION['currentQID']);
        $qInfo["error"]="";
        $qInfo["testing"]="";
        $qInfo["join"]=$this->AttachFilesToCResponse_model->joinDataResult($info);
        //$question = qInfo["question"]
        $this->load->view('template/header');
        $this->load->view('DetailedInfoQuestion',$qInfo);
        $this->load->view('template/footer');

    }

    //when you try to reply a question, it will jump to this function 
    public function replyQuestion(){
        $this->load->helper('form');
		$this->load->helper('url');
        $this->load->model('GrabClickedQDetails_model');
        $this->load->model('ReplyQuestionAddToDB_model');
        $this->load->model('LoadReplyForQuestion_model');
        $this->load->model('UploadFile_model');
        $this->load->model('AttachFilesToCResponse_model');


        


       

        $responseContents = $this->input->post('reply');
        $questionID = $_SESSION['currentQID'];
        $responseUser = $_SESSION['username'];
        $responseInfo["response"]=$responseContents;
        $responseInfo["questionID"]=$questionID;
        $responseInfo["responseUserName"]=$responseUser;
        //The following codes is grabbing the addReplyToDB method from ReplyQuestionAddToDB_model. The purpose of this code is to insert response data to the DB
       // $this->ReplyQuestionAddToDB_model->addReplyToDB($responseInfo);


       //This block is to check if the input text field is empty or not, if it is empty, it will exexute the if block. Otherwise, if it is not empty, it will exexute the else block
       if ($_FILES['userFileUpload']['size']==0)
        {
            $this->ReplyQuestionAddToDB_model->addReplyToDB($responseInfo);
            // upload is empty (and not an error)
                //The following codes is to make the array. The array includes all the data which will be used in the DetailedInfoQuestion view in the later stage.
        $qInfo["info"] = $this->GrabClickedQDetails_model->getTheInfo($questionID);
        $qInfo["response"] = $this->LoadReplyForQuestion_model->grabReply($questionID);
        $qInfo["error"]="";
        $qInfo["testing"]="You'didn't upload file, so no file to upload, but your text response is recorded.";
        $qInfo["join"]=$this->AttachFilesToCResponse_model->joinDataResult($questionID);
        //$getQuestionData =$this->GrabClickedQDetails_model->getTheInfo($questionID);
        //$getResponseData = $this->LoadReplyForQuestion_model->grabReply($questionID);
        //$data[] = array($catagory => $question);
        //$qInfo = array("response"=>$getResponseData);
        $this->load->view('template/header');
        $this->load->view('DetailedInfoQuestion',$qInfo);
        $this->load->view('template/footer');







        }

        if($_FILES['userFileUpload']['size']>0){
            $config['upload_path'] = './uploads/';
            $config['allowed_types']='jpg|mp4|mkv|png';
            $config['max_size'] = 10000;
            $config['max_width'] =2000;
            $config['max_height']=1000;
            $this->load->library('upload',$config);
            

        //The following code is for the upload file 
        //If it falls into the if block, it means upload fail.
        //If it falls into the else block, it means file upload success 
        
            if(!$this->upload->do_upload('userFileUpload')){
                $qInfo["info"] = $this->GrabClickedQDetails_model->getTheInfo($questionID);
        $qInfo["response"] = $this->LoadReplyForQuestion_model->grabReply($questionID);
        $qInfo["error"]=$this->upload->display_errors();
        $qInfo["testing"]="You have selected something to upload, but it fails to upload to the database.Try again";
        $qInfo["join"]=$this->AttachFilesToCResponse_model->joinDataResult($questionID);
                $this->load->view('template/header');
                $this->load->view('DetailedInfoQuestion',$qInfo);
                $this->load->view('template/footer');



                
            }else{
                $this->ReplyQuestionAddToDB_model->addReplyToDB($responseInfo);
                $theFileName =$this->upload->data('file_name');
                $thePath = $this->upload->data('full_path');
                $correspondingResponseID = $this->UploadFile_model->getResponseIDForReplyFiles();
                //$correspondingResponseIDValues =$correspondingResponseID["responseID"];
                $this->UploadFile_model->upload($theFileName,$thePath,$correspondingResponseID);
                $this->load->view('template/header');
                $qInfo["info"] = $this->GrabClickedQDetails_model->getTheInfo($questionID);
                $qInfo["response"] = $this->LoadReplyForQuestion_model->grabReply($questionID);
                $qInfo["error"]="File upload success.";
                $qInfo["testing"]="You have uploaded your selected file successfully";
                $qInfo["join"]=$this->AttachFilesToCResponse_model->joinDataResult($questionID);
                $this->load->view('DetailedInfoQuestion',$qInfo);
                $this->load->view('template/footer');

                




            }

        }

    


        
    }


}