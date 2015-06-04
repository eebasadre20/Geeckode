<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Update extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('geeckode_model','',TRUE);
        $this->load->library('form_validation');
        $this->load->library('session');

    }

    public function update_pic()
    {
        //load the helper
        $this->load->helper('form');

        //Configure
        //set the path where the files uploaded will be copied. NOTE if using linux, set the folder to permission 777
        $config['upload_path'] = 'assets/upload';

    // set the filter image types
        $config['allowed_types'] = 'gif|jpg|png';

        //load the upload library
        $this->load->library('upload', $config);

        $this->upload->initialize($config);

        $this->upload->set_allowed_types('*');

        $data['upload_data'] = '';

        //if not successful, set the error message
        if (!$this->upload->do_upload('userfile')) {
            $data = array('msg' => $this->upload->display_errors());

        } else { //else, set the success message
            $data1 = $this->upload->data();
            $filepath = $data1['full_path'];
            $data = array(
                'image' => $filepath,
            );
            $id = $this->input->post('userId');
            $this->geeckode_model->updatePic($id,$data);
            }
            $password = $this->input->post('password');
            $res = $this->check_database($password);

           if($res)
           {
              redirect('profile', 'refresh');
           }
           else
           {
             $this->load->helper(array('form'));
              $this->load->view('layouts/header',array(
                        'title' => "Geeckode"
                    ));
              $this->load->view('body/home_view');
              $this->load->view('layouts/footer');
           }

    }

     public function check_database($password)
     {
       //Field validation succeeded.  Validate against database
       $username = $this->input->post('username');

       //query the database
       $result1 = $this->geeckode_model->login($username, $password);

       if($result1)
       {
         $sess_array = array();
         foreach($result1 as $row)
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

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */