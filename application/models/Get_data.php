<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Get_data extends CI_Model
{
  public function recent_customers()
  {
    $query="SELECT * FROM `customer_master` WHERE `customer_status`=1 ORDER BY `customer_reg_date` DESC LIMIT 10";
    return $this->db->query($query)->result();
  }
  public function get_all_customers()
  {
    $data=$this->db->get_where('customer_master',array("customer_status"=>'1'))->result();
    return $data;
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
  public function get_all_accounts()
  {
    $data=$this->db->get_where('account_master',array("status"=>'1'))->result();
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
    $query="SELECT * FROM `employee_registration`,`address_info`,`role_permissions`,`department_master` WHERE `employee_registration`.employee_address_id=`address_info`.address_id AND `employee_registration`.employee_status=1 AND `employee_registration`.employee_role_id=`role_permissions`.role_id AND `department_master`.department_id=`employee_registration`.employee_department_id";
    return $this->db->query($query)->result();
  }
  public function get_all_mainTest()
  {
    $data=$this->db->get_where('main_test_master',array("status"=>'1'))->result();
    return $data;
  }
  public function get_all_supplier()
  {
    $data=$this->db->get_where('supplier_master',array("status"=>'1'))->result();
    return $data;
  }
  public function get_all_vendor()
  {
    $data=$this->db->get_where('vendor_master',array("status"=>'1'))->result();
    return $data;
  }

  public function get_all_subTest()
  {
    $data=$this->db->get_where('sub_test_master',array("status"=>'1'))->result();
    return $data;
  }
  public function get_all_testMethod()
  {
    $data=$this->db->get_where('test_method_master',array("status"=>'1'))->result();
    return $data;
  }
  public function get_all_material()
  {
    $data=$this->db->get_where('material_master',array("status"=>'1'))->result();
    return $data;
  }
  public function get_all_product()
  {
    $data=$this->db->get_where('product_master',array("status"=>'1'))->result();
    return $data;
  }
  public function get_all_elementType()
  {
    $data=$this->db->get_where('element_type_master',array("status"=>'1'))->result();
    return $data;
  }
  public function get_all_element()
  {
    $data=$this->db->get_where('element_master',array("status"=>'1'))->result();
    return $data;
  }
  public function get_all_testForm()
  {
    $data=$this->db->get_where('testform_master',array("status"=>'1'))->result();
    return $data;
  }
}
// select city_name from (Select city_name from city_master,(select city_id from address_info ,
//(SELECT Customer_address_id,customer_name from customer_master) as x where x.customer_address_id
//=address_info.address_id) as y where y.city_id=city_master.city_id ) as z;
?>
