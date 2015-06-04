<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
     {
       parent::__construct();
       $this->load->model('geeckode_model');
     }
    public function index()
    {
        $this->load->helper(array('form'));
        $this->load->view('layouts/header',array(
                'title' => "Geeckode"
            ));
        $this->load->view('body/home_view');
        $this->load->view('layouts/footer');
    }

    public function lead()
    {
        $a = $this->geeckode_model->getLead();
        $this->load->helper(array('form'));
        $this->load->view('layouts/header',array(
                'title' => "Leaderboard"
            ));
        $this->load->view('body/leaderboard',array(
                'aa' => $a
          ));
        $this->load->view('layouts/footer');
    }
     public function about()
    {
        $this->load->view('layouts/header',array(
                'title' => "Team Geeckode"
                ));
        $this->load->view('body/teamGeeckode');
        $this->load->view('layouts/footer');
    }
}
