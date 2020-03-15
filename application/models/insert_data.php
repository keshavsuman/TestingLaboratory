<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Insert_data extends CI_Model
{
  public function new_title($data)
  {
    if(  $d=$this->db->insert('common_master',array("title"=>$data['title'],"record"=>$data['record'])))
    {
      return TRUE;
    }
    else {
      return FALSE;
    }
  }
  public function new_customer($data)
  {
    $com=0;
    $address=array('city_id' => $data['customercity'],
      'lane1' => $data['addressline1'],
      'lane2' => $data['addressline2'],
      'pincode' => $data['pincode'],
      'state_id' => $data['state'],
   );
   $this->db->trans_start();
   $this->db->insert('address_info',$address);
    $d = array('customer_name' => $data['customername'],
      'customer_phone_number'=>$data['mobilenumber'],
      'customer_address_id'=>$this->db->insert_id(),
      'customer_email_id'=>$data['emailid'],
      'customer_reg_date'=>unix_to_human(now('Asia/kolkata')),
      'customer_discount_id'=>$data['discount'],
      'customer_registration_employee_id'=>$this->session->employee_id,
      'customer_credit_limit'=>$data['creditlimit'],
      'customer_overdue_day'=>$data['overduedayslimit'],
      'customer_gst_no'=>$data['gstno'],
      'customer_pan_no'=>$data['panno'],
      'customer_opening_balance'=>$data['openingbalance'],
      'customer_group'=>$data['group'],
      'party_po_no'=>$data['partypono'],
      'party_po_date'=>$data['partypodate'],
      'customer_landline'=>$data['landlinephoneno']
   );
   $this->db->insert('customer_master',$d);
   $contact_person=array(
     'contact_person_name' => $data['contactpersonname'],
     'customer_id'=>$this->db->insert_id()
   );
   $this->db->insert('contact_person',$contact_person);
   // update customer_master(for contact_perswon_id)
   $com=1;
   $this->db->trans_complete();
    if($com)
    {
      return TRUE;
    }
    else {
      return FALSE;
    }
  }
  public function new_employee($data)
  {
    $com=0;
    $address = array(
      'lane1'=>$data['lane1'],
      'lane2'=>$data['lane2'],
      'city_id'=>$data['employeecity'],
      'state_id'=>$data['employeestate'],
      'pincode'=>$data['pincode'],
   );
      $this->db->trans_start();
      $this->db->insert('address_info',$address);
      $d = array('employee_name' => $data['employeename'],
        'employee_mobile_no'=>$data['mobilenumber'],
        'employee_email_id'=>$data['emailid'],
        'employee_reg_date'=>unix_to_human(now('Asia/kolkata')),
        'employee_dob'=>$data['dob'],
        'employee_department_id'=>$data['employeedepartment'],
        'employee_role_id'=>$data['role'],
        'employee_address_id'=>$this->db->insert_id(),
        'employee_registeredby_employee_id'=>$this->session->employee_id);
      $this->db->insert('employee_registration',$d);
      $com=1;
      $this->db->trans_complete();
      if($com)
      {
        return TRUE;
      }
      else {
        return FALSE;
      }
  }
  public function insertMainTest($data)
  {
    $d = array(
      'department_id' => $data['department'],
      'main_test_name'=>$data['maintest']
   );
    if($this->db->insert("main_test_master",$d))
    {
      return TRUE;
    }
    else {
      return FALSE;
    }
  }
  public function new_testMethod($data)
  {
    $d = array('sub_test_id' =>$data['subtest_id'] ,
    'test_method'=>$data['testmethodname']
   );
   if($this->db->insert('test_method_master',$d))
   {
     return TRUE;
   }
   else {
     return FALSE;
   }

  }
  public function new_material($data)
  {
    $d = array('material_name' => $data['materialname']);
    if($this->db->insert('material_master',$d))
    {
      return TRUE;
    }
    else
    {
      return FALSE;
    }
  }
  public function new_product($data)
  {
    $d = array(
      'product_name' => $data['productname'],
      'description' => $data['description'],
      'reorder_quantity' => $data['reorderquantity']
    );
    if($this->db->insert('product_master',$d))
    {
      return TRUE;
    }
    else
    {
      return FALSE;
    }
  }
  public function new_elementType($data)
  {
    $d = array(
      'element_type' => $data['elementtype'],
    );
    if($this->db->insert('element_type_master',$d))
    {
      return TRUE;
    }
    else
    {
      return FALSE;
    }
  }
}
?>
