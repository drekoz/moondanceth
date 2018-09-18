<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
            $this->load->helper('url');            
            $this->load->helper('form');
            $this->load->helper('file');

            $this->load->model('guest_model');
          
            $data['guestData'] = $this->guest_model->getGuestInfos();
            
            $this->load->view('Register_view',$data);
	}
        
        public function guestEventRegister()
        {
           $this->load->helper('url');            
           $this->load->helper('form');
           $this->load->helper('file');
           
           $this->load->model('guest_model');
           
           
           $id = $this->input->post('Id');
           $status = $this->input->post('Status');
           
           echo 'Id ->'.$id;
           echo 'Status ->'.$status;
           
           $this->guest_model->updateGuestStatus($id, $status);
        }
        
        public function getAllGuest()
        {
          $this->load->helper('url');            
          $this->load->helper('form');
          $this->load->helper('file');
           
          $this->load->model('guest_model');
          
          $guestsData = $this->guest_model->getGuestInfos();
          
          echo json_encode($guestsData);
        }
        
        public function addNewGuest()
        {
          $config['upload_path'] = './assets/img/guests/';
          $path  = $config['upload_path'];
          $config['allowed_types'] = 'jpg|png';
          $config['overwrite']     = false;
          $this->load->library('upload', $config);
            
          $this->load->helper('url');            
          $this->load->helper('form');
          $this->load->helper('file');
           
          $this->load->model('guest_model');
          
          $name = $this->input->post('Name');
          $lastname = $this->input->post('LastName');
          $tel = $this->input->post('Tel');
          $email = $this->input->post('Email');
          $company = $this->input->post('Company'); 
          $checkInCode = $this->input->post('CheckInCode'); 
          $registerStatus = $this->input->post('RegisterStatus');
          $note = $this->input->post('Note');
          $referralId = $this->input->post('ReferralId');
          
          $upload_filename = $this->upload->data('file_name');
          //echo "Uploading...".$upload_filename;
          //echo "Upload file to -> ".$path;
          
          $imgfilename;
          
          $result;
          $canupload = false;
          foreach ($_FILES as $fieldname => $fileObject)  //fieldname is the form field name
          {
            if (!empty($fileObject['name']))
            {
              $path_info = pathinfo($fileObject['name']);
              $extension = $path_info['extension'];
              
              $time = microtime(true);
              $fileName = $this->cleanString(date("Ymd_His").$time);
              $config['file_name'] = $fileName;

              $imgfilename = $fileName.".".$extension;

              //echo "<br>fieldname ->".$fieldname;
              //echo "<br>filename ->".$fileName;
              
              $this->upload->initialize($config);
              if (!$this->upload->do_upload($fieldname))
              {
                $canupload = false;
                $errors = $this->upload->display_errors();
                //echo "<br>Upload failed";
                //echo "<br>Errors..".$errors;
                $result = $errors;
              }else{
                //echo "<br>Upload done!!";
                $canupload = true;
                $result = $this->guest_model->insertToGuest($name, $lastname, $tel, $email, $company, $checkInCode, $registerStatus, $note, $referralId, $imgfilename);
              }
            }   
          }
          
          if(!$canupload){
                $result = $this->guest_model->insertToGuest($name, $lastname, $tel, $email, $company, $checkInCode, $registerStatus, $note, $referralId, "");
          }
          
          $data['success'] = false;
          if($result)
          {$data['success'] = true;
          }else
           {$data['success'] = false;
          }   
          
          echo json_encode($data);
    }
    
    public function updateGuestInfo()
        {
          $config['upload_path'] = './assets/img/guests/';
          $path  = $config['upload_path'];
          $config['allowed_types'] = 'jpg|png';
          $config['overwrite']     = false;
          $this->load->library('upload', $config);
            
          $this->load->helper('url');            
          $this->load->helper('form');
          $this->load->helper('file');
           
          $this->load->model('guest_model');
          
          $name = $this->input->post('Name');
          $lastname = $this->input->post('LastName');
          $tel = $this->input->post('Tel');
          $email = $this->input->post('Email');
          $company = $this->input->post('Company'); 
          $checkInCode = $this->input->post('CheckInCode'); 
          $registerStatus = $this->input->post('RegisterStatus');
          $note = $this->input->post('Note');
          $referralId = $this->input->post('ReferralId');
          $id = $this->input->post('Id');
          
          $upload_filename = $this->upload->data('file_name');
          //echo "Uploading...".$upload_filename;
          //echo "Upload file to -> ".$path;
          
          $imgfilename;
          
          $result;
          $canupload = false;
          foreach ($_FILES as $fieldname => $fileObject)  //fieldname is the form field name
          {
            if (!empty($fileObject['name']))
            {
              $path_info = pathinfo($fileObject['name']);
              $extension = $path_info['extension'];
              
              $time = microtime(true);
              $fileName = $this->cleanString(date("Ymd_His")."".$time);
              $config['file_name'] = $fileName;

              $imgfilename = $fileName.".".$extension;

              //echo "<br>fieldname ->".$fieldname;
              //echo "<br>filename ->".$fileName;
              //echo "<br>imgfilename ->".$imgfilename;
              
              $this->upload->initialize($config);
              if (!$this->upload->do_upload($fieldname))
              {
                $canupload = false;
                $errors = $this->upload->display_errors();
                //echo "<br>Upload failed";
                //echo "<br>Errors..".$errors;
                $result = $errors;
              }else{
                $canupload = true;
                //echo "<br>Upload done!!";
                $result = $this->guest_model->updateGuestInfo($name, $lastname, $tel, $email, $company, $checkInCode, $registerStatus, $note, $referralId, $imgfilename, $id);
              }
            }   
          }
          
          if(!$canupload){
              //echo "cannot";
              $result = $this->guest_model->updateGuestInfo($name, $lastname, $tel, $email, $company, $checkInCode, $registerStatus, $note, $referralId, "", $id);
          }
          
          $data['success'] = false;
          if($result)
          {$data['success'] = true;
          }else
           {$data['success'] = false;
          }   
          
          echo json_encode($data);
    }
        

    function cleanString($string)
    {
        $str = str_replace(array(' ','&','.'), '-', $string); 
        return str_replace(array('\'', '"'), '', $str); 
    }
}
