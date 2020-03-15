<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Unpaid_report extends CI_Model
{
public function getdata()
{
  $res =$this->db->get("unpaid_bill_report");
  return($res->result());
}
}
?>
