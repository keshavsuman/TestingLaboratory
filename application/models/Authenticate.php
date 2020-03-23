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
        $employee=$this->db->get_where('employee_registration',array("employee_id"=>$d[0]->employee_id))->result()[0];
        $employee_name=$employee->employee_name;
        if($employee->employee_status)
        {
          $this->session->set_userdata("employee_id",$d[0]->employee_id);
          $this->session->set_userdata('employee_name',$employee_name);
          return TRUE;
        }
        else{
          return FALSE;
        }
      }
      else {
        $this->session->set_userdata("error",'Wrong Password');
        return FALSE;
      }
    }
    else {
      $this->session->set_userdata("error",'Wrong Username');
      return FALSE;
    }
  }

}
