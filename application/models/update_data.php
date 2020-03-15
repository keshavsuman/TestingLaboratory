<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class update_data extends CI_Model
{
  public function update_customer($data)
  {
    $com=0;
    $this->db->trans_start();
    $address=array('city_id' => $data['customercity'],
      'lane1' => $data['addressline1'],
      'lane2' => $data['addressline2'],
      'pincode' => $data['pincode'],
      'state_id' => $data['state'],
   );
   $this->db->where('address_id', $data['address_id']);
   $this->db->update('address_info', $address);
   $d = array('customer_name' => $data['customername'],
     'customer_phone_number'=>$data['mobilenumber'],
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
  $this->db->where('customer_id', $data['customer_id']);
  $this->db->update('customer_master', $d);
  // $contact_person=array(
  //   'contact_person_name' => $data['contactpersonname'],
  //   'customer_id'=>$this->db->insert_id()
  // );
  // $this->db->where('contact_person_id', $data['contact_person_id']);
  // $this->db->update('contact_person', $contact_person);
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
}
