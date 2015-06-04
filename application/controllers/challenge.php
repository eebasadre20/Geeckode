<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Challenge extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('challenge_model');

    }

    public function displayEditor () {
    	$this->load->view('layouts/header',array(
                'title' => "Geeckode Challenge"
                ));
    	$this->load->view('challenge/ace-editor.php');
    	$this->load->view('layouts/footer');
    }

    public function displayChallenges() {
    	$result = (object)$this->challenge_model->getChallenges();

    	if($result) {
             $this->load->view('layouts/header',array(
                'title' => "Geeckode Home User"
                ));
            $this->load->view('challenge/display-challenges',array(
                'challenge_list' => $result
                ));
            $this->load->view('layouts/footer');
          } else {
                echo 'Fail lang sa !';
              return FALSE;
          }
    }

    public function userChallenge($id) {
    	$result = (object)$this->challenge_model->userChallenge($id);

    	if($result) {
             $this->load->view('layouts/header',array(
                'title' => "Geeckode Challenge"
                ));
    		$this->load->view('challenge/editor.php',array(
    			'problem_info' => $result
    			));
    		$this->load->view('layouts/footer');
          } else {
                echo 'Fail lang sa !';
              return FALSE;
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
	  $challenge_id   = $this->input->post('problem-id');
	  		  $lang   = $this->input->post('lang');
	  		  $code   = $this->input->post('source');
	  		  $input  =	$this->input->post('input');

	  /*echo $lang . "<br>";
	  echo $code . "<br>";
	  echo $input . "<br>";
*/
		/*if ( isset( $_POST['process'] ) && $_POST['process'] == 1 ) {
		    $lang = isset( $_POST['lang'] ) ? intval( $_POST['lang'] ) : 1;
		    $input = trim( $_POST['input'] );
		    $code = trim( $_POST['source'] );*/

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

						 $flag = $this->checkResult($data['output'], $challenge_id);


						 //echo json_encode( $data );
						/* if($flag == true) {
						 	echo json_encode( $data );
						 } else {
						 	$data['status'] = 'Something your in your output';
						 	echo json_encode( $data );
						 }	 	*/

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
		       			//	echo json_encode( $data );
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

	private function checkResult($output, $problem_id) {
		 $filename = "assets/problem/".$problem_id.".txt";
		 $result = file_get_contents($filename);
		 if($result === $output) {
		 	return true;
		 } else {
		 	return false;
		 }


	}
}