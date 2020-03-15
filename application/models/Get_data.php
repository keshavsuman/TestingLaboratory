<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Get_data extends CI_Model
{
  public function recent_customers()
  {
    $query="SELECT * FROM `customer_master` WHERE `customer_status`=1 ORDER BY `customer_reg_date` DESC LIMIT 10";
    return $this->db->query($query)->result();
  }
  public function get_all_cities()
  {
    $data=$this->db->get_where('city_master',array("status"=>'1'))->result();
    return $data;
  }
  public function get_all_roles()
  {
    $data=$this->db->get('role_permissions')->result();
    return $data;
  }
  public function get_all_department()
  {
    $data=$this->db->get_where('department_master',array("status"=>'1'))->result();
    return $data;
  }
  public function get_all_state()
  {
    $data=$this->db->get('state_master')->result();
    return $data;
  }
  public function get_discount_info()
  {
    $data=$this->db->get('discount_info')->result();
    return $data;
  }
  public function all_common_master()
  {
    $query="SELECT * FROM `common_master`;";
    $data=$this->db->query($query)->result();
    return $data;
  }
  public function get_all_employee()
  {
    $query="SELECT * FROM `employee_registration` WHERE `employee_status`='1'";
    return $this->db->query($query)->result();
  }
  public function get_all_mainTest()
  {
    $data=$this->db->get_where('main_test_master',array("status"=>'1'))->result();
    return $data;
  }
  public function get_all_subTest()
  {
    $data=$this->db->get_where('sub_test_master',array("status"=>'1'))->result();
    return $data;
  }
}
?>
