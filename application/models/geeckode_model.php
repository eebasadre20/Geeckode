<?php
Class Geeckode_model extends CI_Model
{


public function getLead(){

  $this->db->select('userinfo.firstName, userinfo.lastName, userpointsinfo.totalPoints ');
  $this->db->from('userpointsinfo , userinfo');
  $this->db->where('userpointsinfo.userId = userinfo.userId');
  $this->db->order_by('totalPoints', 'DESC');
  $query = $this->db->get();

  return $query->result();
}
public function getId()
    {
        $query = $this->db->select('*')
                          ->from('userInfo')
                          ->order_by('userId', 'desc')
                          ->limit(1)
                          ->get();
        foreach ($query->result() as $row)
       {
            $data = array(
                        'id1' => $row->userId,
                        'fname1' => $row->firstName,
                        'user1' => $row->username,
                        'pass1' => $row->password
                        );

       }return $data;
    }

 public function login($username, $password)
 {
   $this -> db -> select('userId, firstName, lastName, middleName, gender, dateOfBirth, address, username, password');
   $this -> db -> from('userinfo');
   $this -> db -> where('username', $username);
   $this -> db -> where('password', $password);
   $this -> db -> limit(1);

   $query = $this -> db -> get();

   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }

 public function createRecords($data)
    {
        $this->db->insert('userinfo', $data);

        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function uploadPic($data)
    {
        $this->db->insert('photos', $data);

        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function updatePic($id,$data)
    {
        $this->db->where('userId', $id);
        $this->db->update('photos', $data);

        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function retrievePic($id)
    {
        $this->db->where('userId', $id);
        $query = $this->db->get('photos');

        foreach ($query->result() as $row)
       {
            return $row->image;
       }
    }
}

