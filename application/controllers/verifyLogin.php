<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

 public function __construct()
 {
   parent::__construct();
   $this->load->model('geeckode_model','',TRUE);
 }

 public function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');

   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
      $this->load->helper(array('form'));
      $this->load->view('layouts/header',array(
                'title' => "Geeckode"
            ));
      $this->load->view('body/home_view');
      $this->load->view('layouts/footer');
   }
   else
   {
     //Go to private area
     redirect('home', 'refresh');
   }

 }

 public function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');

   //query the database
   $result = $this->geeckode_model->login($username, md5($password));

   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
      $path = $this->geeckode_model->retrievePic($row->userId);
      $img = explode('C:/wamp/www/',$path);
      $path_url = "http://localhost/".$img[1];
       $sess_array = array(
         'id' => $row->userId,
         'firstName' => $row->firstName,
         'lastName' => $row->lastName,
         'middleName' => $row->middleName,
         'gender'      => $row->gender,
         'dob'      => $row->dateOfBirth,
         'address' => $row->address,
         'username' => $row->username,
         'password' => $row->password,
         'path'     => $path_url
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
 }
}
?>