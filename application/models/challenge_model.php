<?php

class Challenge_model extends CI_Model {

	 public function __construct() {
        parent::__construct();
    }

    public function getChallenges() {

    	$query = $this->db->select("idProblem, problemName, problemFileName, problemDesc, problemInput, problemOutput, problemPoints")
                          ->from('problem')
                          ->order_by('idProblem', 'asc')
                          ->get();

        if($query->num_rows() > 0) {
            return $query->result(); //if data is true
        } else {
            return false; //if data is wrong
        }
    }

    public function getUserChallenge($id) {
        $query = $this->db->select("idProblem, problemName,  problemFileName, problemDesc, problemInput, problemOutput, problemPoints")
                          ->from('problem')
                          ->where('idProblem', $id)
                          ->limit(1)
                          ->get();

        if($query->num_rows() > 0) {
            return $query->result(); //if data is true
        } else {
            return false;
        }

    }

    public function userPoints($user_id, $data) {
        $query = $this->db->select("totalPoints")
                          ->from('userpointsinfo')
                          ->where('userId', $user_id)
                          ->limit(1)
                          ->get();


         if($query->num_rows() == 0 ) {
            $confirm = $this->newUserPoints($data);
               if($confirm) {
                 return true;
               } else {
                 return false;
               }
         } else {
            foreach ($query->result() as $value) {
                $user_points =  $value->totalPoints;
            }

            $user_points += $data['totalPoints'];
            $data_points = array('totalPoints' => $user_points);
            $confirm = $this->updateUserPoints($user_id, $data_points);

                if($confirm) {
                     return true;
                } else {
                     return false;
                }
         }

    }

    public function getAllProblemSolved($user_id) {
        $query = $this->db->select("*")
                          ->from('userproblemsolved')
                          ->where('userId', $user_id)
                          ->get();

        if($query->num_rows() > 0) {
            
            return $query->result(); //if data is true
        } else {
           return false; //if data is //if data is wrong
        }

    }

    public function getUserPoints($user_id) {
          $query = $this->db->select("totalPoints")
                          ->from('userpointsinfo')
                          ->where('userId', $user_id)
                          ->limit(1)
                          ->get();

           if($query->num_rows() > 0) {
            return $query->result(); //if data is true
        } else {
            return false; //if data is wrong
        }
    }

    public function userProblemSolved($data) {
        $this->db->insert('userproblemsolved', $data);

        if ($this->db->affected_rows() > 0) {
                return TRUE;
         } else {
                return FALSE;
        }
    }

    private function newUserPoints($data) {
        $this->db->insert('userpointsinfo', $data);

         if ($this->db->affected_rows() > 0) {
                return TRUE;
         } else {
                return FALSE;
        }
    }

    private function updateUserPoints($user_id,$user_points) {

        $this->db->where('userId', $user_id);
        $this->db->update('userpointsinfo', $user_points);

         if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }

    }
}
