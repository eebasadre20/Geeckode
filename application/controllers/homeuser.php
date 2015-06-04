<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Homeuser extends CI_Controller {

 public function __construct()
 {
   parent::__construct();
   $this->load->model('challenge_model');
   $this->load->model('geeckode_model');
 }

public function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $challenges_solved = (object) $this->challenge_model->getAllProblemSolved($session_data['id']);
     $user_points = (object)$this->challenge_model->getUserPoints($session_data['id']);
     $notice_challenge = false;
     $notice_points = false;
      foreach ($challenges_solved as $key) {
          if (!isset($key->userId)) {
               $notice_challenge = false;
            } else { $notice_challenge = true; }
        }

      foreach ($user_points as $key) {
           if(!isset($key->totalPoints)) {
            $notice_points = false;
          } else {$notice_points = true;}
        }


     $data = array(
      'id'=> $session_data['id'],
      'firstName'=> $session_data['firstName'],
      'lastName'=> $session_data['lastName'],
      'middleName'=> $session_data['middleName'],
      'gender'=> $session_data['gender'],
      'dob'=> $session_data['dob'],
      'address'=> $session_data['address'],
      'username'=> $session_data['username'],
      'password'=> $session_data['password'],
      'path'      => $session_data['path'],
      'challenges' => $challenges_solved,
      'user_points' => $user_points,
      'notice_challenge' => $notice_challenge,
      'notice_points' => $notice_points
      );
     $this->load->view('layouts/header',array(
                      'title' => "Geeckode"
                      ));

     $this->load->view('user/home_user', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('main', 'refresh');
   }
 }

 public function usrlead()
 {
  $a = $this->geeckode_model->getLead();
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data = array(
      'id'=> $session_data['id'],
      'firstName'=> $session_data['firstName'],
      'lastName'=> $session_data['lastName'],
      'middleName'=> $session_data['middleName'],
      'gender'=> $session_data['gender'],
      'dob'=> $session_data['dob'],
      'address'=> $session_data['address'],
      'username'=> $session_data['username'],
      'password'=> $session_data['password'],
      'path'      => $session_data['path'],
      'aa' => $a
      );
     $fullname = $data['firstName']." ".$data['middleName']." ".$data['lastName'];

     $this->load->view('layouts/header',array(
                      'title' => $fullname
                      ));
     $this->load->view('user/leaderboard', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('main', 'refresh');
   }
 }

 public function aboutUs()
 {
  $a = $this->geeckode_model->getLead();
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data = array(
      'id'=> $session_data['id'],
      'firstName'=> $session_data['firstName'],
      'lastName'=> $session_data['lastName'],
      'middleName'=> $session_data['middleName'],
      'gender'=> $session_data['gender'],
      'dob'=> $session_data['dob'],
      'address'=> $session_data['address'],
      'username'=> $session_data['username'],
      'password'=> $session_data['password'],
      'path'      => $session_data['path'],
      'aa' => $a
      );
     $fullname = $data['firstName']." ".$data['middleName']." ".$data['lastName'];

     $this->load->view('layouts/header',array(
                      'title' => $fullname
                      ));
     $this->load->view('user/team_user', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('main', 'refresh');
   }
 }
public function prof()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data = array(
      'id'=> $session_data['id'],
      'firstName'=> $session_data['firstName'],
      'lastName'=> $session_data['lastName'],
      'middleName'=> $session_data['middleName'],
      'gender'=> $session_data['gender'],
      'dob'=> $session_data['dob'],
      'address'=> $session_data['address'],
      'username'=> $session_data['username'],
      'password'=> $session_data['password'],
      'path'      => $session_data['path']
      );
     $fullname = $data['firstName']." ".$data['middleName']." ".$data['lastName'];

     $this->load->view('layouts/header',array(
                      'title' => $fullname
                      ));
     $this->load->view('user/userProfile', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('main', 'refresh');
   }
 }

 public function userChallenges() {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $challenges = (object)$this->challenge_model->getChallenges();
     $data = array(
      'id'=> $session_data['id'],
      'firstName'=> $session_data['firstName'],
      'lastName'=> $session_data['lastName'],
      'middleName'=> $session_data['middleName'],
      'gender'=> $session_data['gender'],
      'dob'=> $session_data['dob'],
      'address'=> $session_data['address'],
      'username'=> $session_data['username'],
      'password'=> $session_data['password'],
      'path'      => $session_data['path'],
      'challenges' => $challenges
      );
     $this->load->view('layouts/header',array(
                      'title' => "Geeckode"
                      ));

     $this->load->view('user/challenges_menu', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('main', 'refresh');
   }
 }

 public function userChallenge($id) {
  if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data = array(
      'id'=> $session_data['id'],
      'firstName'=> $session_data['firstName'],
      'lastName'=> $session_data['lastName'],
      'middleName'=> $session_data['middleName'],
      'gender'=> $session_data['gender'],
      'dob'=> $session_data['dob'],
      'address'=> $session_data['address'],
      'username'=> $session_data['username'],
      'password'=> $session_data['password'],
      'path'      => $session_data['path']
      );
     $fullname = $data['firstName']." ".$data['middleName']." ".$data['lastName'];

     $challenge_info = (object)$this->challenge_model->getUserChallenge($id);

       $this->load->view('layouts/header',array(
                      'title' => 'Challenge'
                      ));
     foreach($challenge_info as $challenge) {
     $this->load->view('editor/compiler-editor', array(
                    'challenge_id'          => $challenge->idProblem,
                    'challenge_name'        => $challenge->problemName,
                    'challenge_file_name'   => $challenge->problemFileName,
                    'challenge_desc'        => $challenge->problemDesc,
                    'challenge_input'       => $challenge->problemInput,
                    'challenge_output'      => $challenge->problemOutput,
                    'challenge_points'      => $challenge->problemPoints,
                    'id'                    => $session_data['id'],
                    'firstName'             => $session_data['firstName'],
                    'path'                  => $session_data['path']
                    ));
     }

     $this->load->view('layouts/footer');
   }
   else
   {
     //If no session, redirect to login page
     redirect('main', 'refresh');
   }
 }

 public function checkProblem () {
      error_reporting(0);

    $user = 'imraven';
    $pass = '2314970';
    $code = '';
    $input = '';
    $run = true;
    $private = false;

    $subStatus = array(
        0 => 'Success',
        1 => 'Compiled',
        3 => 'Running',
        11 => 'Compilation Error',
        12 => 'Runtime Error',
        13 => 'Timelimit exceeded',
        15 => 'Success',
        17 => 'memory limit exceeded',
        19 => 'illegal system call',
        20 => 'internal error'
    );

    $error = array(
        'status' => 'error',
        'output' => 'Something went wrong :('
    );

    //echo json_encode( array( 'hi', 1 ) ); exit;
    //print_r( $_POST ); exit;
   $challenge_id   = $this->input->post('challenge_id');
   $challenge_name   = $this->input->post('challenge_name');
   $challenge_file   = $this->input->post('challenge_file');
   $challenge_points   = $this->input->post('challenge_points');
           $user_id   = $this->input->post('id');
              $lang   = $this->input->post('lang');
              $code   = $this->input->post('source');
              $input  = $this->input->post('input');

  $points_data = array('userId' => $user_id,
                  'totalPoints' => $challenge_points);

  $problemSolved_data = array(
                          'userId'      => $user_id,
                          'problemId'   => $challenge_id,
                          'problemName'   => $challenge_name,
                          'language'    => $lang,
                          'points'      => $challenge_points,
                          'problemDateSolved' => Date('Y-m-d h:i:s')
                    );


        $client = new SoapClient( "http://ideone.com/api/1/service.wsdl" );

        //create new submission
        $result = $client->createSubmission( $user, $pass, $code, $lang, $input, $run, $private );

        //if submission is OK, get the status
        if ( $result['error'] == 'OK' ) {
            $status = $client->getSubmissionStatus( $user, $pass, $result['link'] );
            if ( $status['error'] == 'OK' ) {

                //check if the status is 0, otherwise getSubmissionStatus again
                while ( $status['status'] != 0 ) {
                    sleep( 3 ); //sleep 3 seconds
                    $status = $client->getSubmissionStatus( $user, $pass, $result['link'] );
                }

                //finally get the submission results
                $details = $client->getSubmissionDetails( $user, $pass, $result['link'], true, true, true, true, true );
                if ( $details['error'] == 'OK' ) {
                    //print_r( $details );
                    if ( $details['status'] < 0 ) {
                        $status = 'waiting for compilation';
                    } else {
                        $status = $subStatus[$details['status']];
                    }

                    $data = array(
                        'status' => 'success',
                        'meta' => "Status: $status | Memory: {$details['memory']} | Returned value: {$details['status']} | Time: {$details['time']}s",
                        'output' => htmlspecialchars( $details['output'] ),
                        'raw' => $details
                    );

                    if( $details['cmpinfo'] ) {
                        $data['cmpinfo'] = $details['cmpinfo'];
                    }

              //$flag = $this->checkResult($data['output'], $challenge_name);

                  $flag =  $this->checkResult($data['output'], $challenge_file);
             if($flag == true) {
                 $confirm = $this->challenge_model->userPoints($user_id,$points_data);

                if($confirm) {

                   $this->insertProblemSolved($problemSolved_data);

                   $data['challenge'] = $challenge_name;
                   $data['points']    = $challenge_points;
                   $data['confirm'] = "Congratulations!";
                   echo json_encode( $data );
                }
             } else {
                $data['confirm'] = "Something wrong in your code!";
                echo json_encode( $data );
             }
            /* echo $data['output'];
                      $name = file_get_contents('assets/problem/name.txt');
                      $name = $this->checkResult($data['output']);

              echo $name;

              if($name === $data['output']) {
                 echo "You got it!";
              }  else {
                echo "There's something wrong with your code";
              }
                */
            /* echo json_encode( $data );*/
            //if($result === true) {
                      /*echo json_encode( $data );*/
                //} else {
                //  echo json_encode( $data );
                //}
                } else {
                    //we got some error :(
                    //print_r( $details );
                    echo json_encode( $error );
                }
            } else {
                //we got some error :(
                //print_r( $status );
                echo json_encode( $error );
            }
        } else {
            //we got some error :(
            //print_r( $result );
            echo json_encode( $error );
        }
    /*}*/

  }

   public function insertProblemSolved($data) {
     $result = $this->challenge_model->userProblemSolved($data);
  }

  public function checkResult($output, $name) {
     $filename = "assets/problem/".$name.".txt";
     $result = explode(PHP_EOL, file_get_contents($filename));
     $problem_output = explode(PHP_EOL,$output);
     /*$problem_results = array_intersect($result, $problem_output);

   var_dump($result);*/
     if($problem_output === $result) {
      return true;
     } else {
      return false;
     }


  }

public function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('main', 'refresh');
 }

}

?>