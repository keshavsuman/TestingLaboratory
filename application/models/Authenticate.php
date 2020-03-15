<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Authenticate extends CI_Model
{
  private function hash_password($password)
  {
   return password_hash($password, PASSWORD_BCRYPT);
  }

  public function login($data)
  {
    $d=$this->db->get_where('login_data',array("username"=>$data['username']))->result_object();
    if(count($d)==1)
    {
      if(password_verify($data['password'],$d[0]->password))
      {
        $this->session->set_userdata("employee_id",$d[0]->employee_id);
        return TRUE;
      }
      else {
        // return "Password Not correct";
        return FALSE;
      }
    }
    else {
      // return "Username is Not correct";
      return FALSE;
    }
  }

}
