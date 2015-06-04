<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('geeckode_model','',TRUE);
        $this->load->library('form_validation');
        $this->load->library('session');

    }

    public function createCoderForm1()
    {
        $this->load->view('layouts/header',array(
                'title' => "Geeckode Sign Up"
                ));
        $this->load->view('register/register');
        $this->load->view('layouts/footer');
    }
    public function createCoderForm2()
    {
        $result = (object)$this->geeckode_model->getId();
        $this->load->view('layouts/header',array(
                'title' => "Geeckode Sign Up"
                ));
        $this->load->view('register/upload',array(
                'id' => $result->id1,
                'user' => $result->user1,
                'pass' => $result->pass1,
                ));
        $this->load->view('layouts/footer');
    }


    public function createCoder()
    {
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('mname', 'Middle Name', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('year', 'Year', 'required');
        $this->form_validation->set_rules('month', 'Month', 'required');
        $this->form_validation->set_rules('day', 'Day', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() === FALSE){
            $this->createCoderForm1();
        }else{
            $year  = $this->input->post('year', true);
            $month = $this->input->post('month', true);
            $day   = $this->input->post('day', true);

            $data = array(
                'firstName'   =>  ucwords($this->input->post('fname', true)),
                'lastName'    =>  ucwords($this->input->post('lname', true)),
                'middleName'  =>  ucwords($this->input->post('mname', true)),
                'gender'      => $this->input->post('gender', true),
                'dateOfBirth' => $year.'-'.$month.'-'.$day,
                'address'     =>  ucwords($this->input->post('address', true)),
                'username'    => $this->input->post('username', true),
                'password'    => md5($this->input->post('password', true)),
                'createdOn'  => date('Y-m-d H:i:s')
            );

            $confirm = $this->geeckode_model->createRecords($data);
            if ($confirm) {
                $this->createCoderForm2();
            } else {
                $this->showFlasMessage(array(
                    'msg' => 'Can\'t create student record...'
                ));
            }
        }
        }


    public function showFlasMessage($data)
    {
        $this->session->set_flashdata('notify', $data['msg']);
        redirect('users/signup1');
    }

    public function do_upload()
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
            $result = (object)$this->geeckode_model->getId();
            $data1 = $this->upload->data();
            $filepath = $data1['full_path'];
            $data = array(
                'image' => $filepath,
                'userId' => $result->id1
            );

            $this->geeckode_model->uploadPic($data);
            }
            $password = $this->input->post('password');
            $res = $this->check_database($password);

           if($res)
           {
              redirect('home', 'refresh');
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
    public function skip_upload()
    {
        $this->load->helper('form');
        $result = (object)$this->geeckode_model->getId();

            $data = array(
                'image' => 'C:/wamp/www/geeckode/assets/upload/unknown.png',
                'userId' => $result->id1
            );

            $this->geeckode_model->uploadPic($data);

            $password = $this->input->post('password');
            $this->check_database($password);
            redirect('home', 'refresh');
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