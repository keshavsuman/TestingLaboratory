<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {
	function __construct()
	{
	    parent:: __construct();
			$this->load->helper(array('url','date'));
			$this->load->model(array('get_data','insert_data','update_data'));
			$this->load->library('session');
      $this->load->view('header.php');
      $this->load->view('sidebar.php');
			if(!$this->session->islogin)
			{
				redirect(base_url());
			}
	}

  // Main Test Master
  public function mainTestMaster()
  {
    $data['test']=$this->get_data->get_all_mainTest();
    $data['department']=$this->get_data->get_all_department();
		$query="SELECT * FROM `main_test_master`,`department_master` WHERE `department_master`.department_id=`main_test_master`.department_id AND `main_test_master`.status=1";
		$data['maintestdata']=$this->db->query($query)->result();
    $this->load->view('masters/mainTestMaster.php',$data);
    $this->load->view('footer.php');
  }
  public function add_mainTest()
  {
      $data=$this->input->post();
      if($this->insert_data->insertMainTest($data))
      {
				$this->session->set_userdata('success','Main Test Added Succesfully');
        redirect(base_url('master/mainTestMaster'));
      }
      else {

      }
  }
  public function delete_mainTest()
  {
    $main_test_id=$this->input->post()['main_test_id'];
    $this->db->where("main_test_id",$main_test_id);
    if($this->db->update('main_test_master',array("status"=>'0')))
    {
			$this->session->set_userdata('success','Main Test Entry Deleted Succesfully');
      redirect(base_url('master/mainTestMaster'));
    }
    else {
      // code...
    }
  }
  public function update_mainTestMaster()
  {
		$main_test_id=$this->input->post()['main_test_id'];
		$main_test_name=$this->input->post()['maintestname'];
    $department_id=$this->input->post()['department_id'];
    $this->db->where("main_test_id",$main_test_id);
    if($this->db->update('main_test_master',array('main_test_name'=>$main_test_name,'department_id'=>$department_id)))
    {
			$this->session->set_userdata('success','Main Test Entry Updated Succesfully');
      redirect(base_url('master/maintestMaster'));
    }
    else {
      // code...
    }
  }
	// Main Test Master
	public function testFormMaster()
	{
		$data['testform']=$this->get_data->get_all_testForm();
		$this->load->view('masters/testformmaster.php',$data);
		$this->load->view('footer.php');
	}
	public function add_testFormMaster()
	{
			$data=$this->input->post();
			if($this->insert_data->new_testForm($data))
			{
				$this->session->set_userdata('success','Test Form Entry Added Succesfully');
				redirect(base_url('master/testFormMaster'));
			}
			else {
				// code...
			}
	}
	public function delete_testFormMaster()
	{
		$testform_id=$this->input->post()['testform_id'];
		$this->db->where("testform_id",$test_id);
		if($this->db->update('testform_master',array("status"=>'0')))
		{
			$this->session->set_userdata('success','Test Form Entry Deleted Succesfully');
			redirect(base_url('master/testFormMaster'));
		}
		else {
			// code...
		}
	}
	public function update_testFormMaster()
	{
		$testform_id=$this->input->post()['testform_id'];
		$testform_name=$this->input->post()['testformname'];
		$this->db->where("testform_id",$testform_id);
		if($this->db->update('testform_master',array('testform_name'=>$testform_name)))
		{
			$this->session->set_userdata('success','Test Form Entry Updated Succesfully');
			redirect(base_url('master/testFormMaster'));
		}
		else {
			// code...
		}
	}
  // Department Master
  public function department_master()
  {
    $data['departments']=$this->get_data->get_all_department();
    $this->load->view('masters/departmentmaster.php',$data);
    $this->load->view('footer.php');
  }
  public function department_add()
  {
    $department=strtoupper($this->input->post()['department']);
    if($this->db->insert('department_master',array("department_name"=>$department)))
    {
			$this->session->set_userdata('success','Department Added Succesfully');
      redirect(base_url('master/department_master'));
    }
    else {
      // code...
    }
  }
  public function department_delete()
  {
    $department_id=$this->input->post()['department_id'];
    $this->db->where("department_id",$department_id);
    if($this->db->update('department_master',array("status"=>'0')))
    {
			$this->session->set_userdata('success','Department Deleted Succesfully');
      redirect(base_url('master/department_master'));
    }
    else {
      // code...
    }
  }
  public function update_department()
  {
    $department_id=$this->input->post()['department_id'];
    $department=$this->input->post()['department'];
    $this->db->where("department_id",$department_id);
    if($this->db->update('department_master',array('department_name'=>$department)))
    {
			$this->session->set_userdata('success','Department Updated Succesfully');
      redirect(base_url('master/department_master'));
    }
    else {
      // code...
    }
  }
	// Sub Test Master
	public function subTestMaster()
	{
		$data['maintest']=$this->get_data->get_all_mainTest();
		$data['subtest']=$this->get_data->get_all_subTest();
		$data['testform']=$this->get_data->get_all_testForm();
		$query="SELECT * FROM (SELECT main_test_name,main_test_id FROM `main_test_master`) AS x,`sub_test_master`,`testform_master` WHERE `sub_test_master`.main_test_id=x.main_test_id AND `sub_test_master`.status=1 AND `testform_master`.testform_id=`sub_test_master`.testform_id";
		$data['subtestdata']=$this->db->query($query)->result();
		$this->load->view('masters/subTestMaster.php',$data);
		$this->load->view('footer.php');
	}
	public function add_subTestMaster()
	{
		$data=$this->input->post();
		if($this->insert_data->new_subTest($data))
		{
			$this->session->set_userdata('success','Sub Test Added Succesfully');
			redirect(base_url('master/subTestMaster'));
		}
		else {
			// code...
		}
	}
	public function delete_subTestMaster()
	{
		$sub_test_id=$this->input->post()['sub_test_id'];
    $this->db->where("sub_test_id",$sub_test_id);
    if($this->db->update('sub_test_master',array("status"=>'0')))
    {
			$this->session->set_userdata('success','Sub Test Deleted Succesfully');
      redirect(base_url('master/subTestMaster'));
    }
    else {
      // code...
    }
	}
	public function update_subTestMaster()
	{

	}
	// Common Master
	public function common_master()
	{
		$data['title']=$this->get_data->all_common_master();
		$this->load->view('customer/commonmaster.php',$data);
		$this->load->view('footer.php');
	}
	// public function commonmaster_insert()
	// {
	// 	if($this->insert_data->new_title($this->input->post()))
	// 	{
	// 		$data['title']=$this->get_data->all_common_master();
	// 		$this->load->view('customer/commonmaster.php',$data);
	// 		$this->load->view('footer.php');
	// 	}
	// 	else {
	// 		//
	// 	}
	//
	// }
	// public function common_delete()
	// {
	// 	$d=$this->input->post()['customer_id'];
	// 	if($this->db->delete('common_master',array('record_id' =>$d)))
	// 	{
	// 		$this->common_master();
	// 	}
	// 	else {
	// 		// code...
	// 	}
	// }
	public function update_commonMaster()
	{
		$record_id=$this->input->post()['record_id'];
		$record=$this->input->post()['record'];
		$this->db->where("record_id",$record_id);
		if($this->db->update('common_master',array('record'=>$record)))
		{
			$this->session->set_userdata('success',' Entry Updated Succesfully');
			redirect(base_url('master/common_master'));
		}
		else {
			// code...
		}
	}
	// City Master
	public function add_city()
	{
		$city=strtoupper($this->input->post()['city']);
		if($this->db->insert('city_master',array("city_name"=>$city)))
		{
			$this->session->set_userdata('success','City Added Succesfully');
			redirect(base_url('master/city_master'));
		}
		else {
			// code...
		}
	}
	public function delete_city()
	{
		$city_id=$this->input->post()['city_id'];
		$this->db->where("city_id",$city_id);
		if($this->db->update('city_master',array("status"=>'0')))
		{
			$this->session->set_userdata('success','City Deleted Succesfully');
			redirect(base_url('master/city_master'));
		}
		else {
			// code...
		}
	}
	public function update_city()
	{
		$city_id=$this->input->post()['city_id'];
		$city=$this->input->post()['city'];
		$this->db->where("city_id",$city_id);
		if($this->db->update('city_master',array('city_name'=>$city)))
		{
			$this->session->set_userdata('success','City Updated Succesfully');
			redirect(base_url('master/city_master'));
		}
		else {
			// code...
		}
	}

	public function city_master()
	{
		$data['cities']=$this->get_data->get_all_cities();
		$this->load->view('customer/citymaster.php',$data);
		$this->load->view('footer.php');
	}
	// City Master
	public function add_account()
	{
		$account=$this->input->post()['account'];
		if($this->db->insert('account_master',array("account_name"=>$account)))
		{
			$this->session->set_userdata('success','Account Added Succesfully');
			redirect(base_url('Master/accountmaster'));
		}
		else {
			// code...
		}
	}
	public function delete_account()
	{
		$account_id=$this->input->post()['account_id'];
		$this->db->where("account_id",$account_id);
		if($this->db->update('account_master',array("status"=>'0')))
		{
			$this->session->set_userdata('success','Account Deleted Succesfully');
			redirect(base_url('Master/accountmaster'));
		}
		else {
			// code...
		}
	}
	public function update_Account()
	{
		$account_id=$this->input->post()['account_id'];
		$account=$this->input->post()['account'];
		$this->db->where("account_id",$account_id);
		if($this->db->update('account_master',array('account_name'=>$account)))
		{
			$this->session->set_userdata('success','Account Updated Succesfully');
			redirect(base_url('Master/accountmaster'));
		}
		else {
			// code...
		}
	}

	public function accountMaster()
	{
		$data['accounts']=$this->get_data->get_all_accounts();
		$this->load->view('Masters/accountmaster.php',$data);
		$this->load->view('footer.php');
	}
	// Test Method master
	public function testMethodMaster()
	{
		$data['subtest']=$this->get_data->get_all_subTest();
		$data['testmethod']=$this->get_data->get_all_testMethod();
		$this->load->view('masters/testmethodmaster.php',$data);
		$this->load->view('footer.php');
	}
	public function add_testMethodMaster()
	{
		$data=$this->input->post();
		if($this->insert_data->new_testMethod($data))
		{
			$this->session->set_userdata('success','Test Method Added Succesfully');
			redirect(base_url('master/testMethodMaster'));
		}
		else {
			// code...
		}
	}
	public function delete_testMethodMaster()
	{
		$test_method_id=$this->input->post()['test_method_id'];
    $this->db->where("test_method_id",$test_method_id);
    if($this->db->update('test_method_master',array("status"=>'0')))
    {
			$this->session->set_userdata('success','Test Method Deleted Succesfully');
      redirect(base_url('master/testMethodMaster'));
    }
    else {
      // code...
    }
	}
	public function update_testMethodMaster()
	{
		$test_method_id=$this->input->post()['test_method_id'];
		$testmethod=$this->input->post()['testmethod'];
		$this->db->where("test_method_id",$test_method_id);
		if($this->db->update('test_method_master',array('test_method'=>$testmethod)))
		{
			$this->session->set_userdata('success','Test Method Updated Succesfully');
			redirect(base_url('master/testMethodMaster'));
		}
		else {
			// code...
		}
	}
	// Element master
	public function elementMaster()
	{
		$data['elementtype']=$this->get_data->get_all_elementType();
		$data['element']=$this->get_data->get_all_element();
		$this->load->view('masters/elementmaster.php',$data);
		$this->load->view('footer.php');
	}
	public function add_elementMaster()
	{
		$data=$this->input->post();
		if($this->insert_data->new_element($data))
		{
			$this->session->set_userdata('success','Element Added Succesfully');
			redirect(base_url('master/elementMaster'));
		}
		else {
			// code...
		}
	}
	public function delete_elementMaster()
	{
		$element_id=$this->input->post()['element_id'];
    $this->db->where("element_id",$element_id);
    if($this->db->update('element_master',array("status"=>'0')))
    {
			$this->session->set_userdata('success','Element Deleted Succesfully');
      redirect(base_url('master/elementMaster'));
    }
    else {
      // code...
    }
	}
	public function update_elementMaster()
	{
		$element_id=$this->input->post()['element_id'];
		$elementname=$this->input->post()['elementname'];
		$this->db->where("element_id",$element_id);
		if($this->db->update('element_master',array('element_name'=>$elementname)))
		{
			$this->session->set_userdata('success','Element Updated Succesfully');
			redirect(base_url('master/elementMaster'));
		}
		else {
			// code...
		}
	}
	// Material master
	public function materialMaster()
	{
		$data['material']=$this->get_data->get_all_material();
		$this->load->view('masters/materialmaster.php',$data);
		$this->load->view('footer.php');
	}
	public function add_materialMaster()
	{
		$data=$this->input->post();
		if($this->insert_data->new_material($data))
		{
			$this->session->set_userdata('success','Material  Added Succesfully');
			redirect(base_url('master/materialMaster'));
		}
		else {
			// code...
		}
	}
	public function delete_materialMaster()
	{
		$material_id=$this->input->post()['material_id'];
    $this->db->where("material_id",$material_id);
    if($this->db->update('material_master',array("status"=>'0')))
    {
			$this->session->set_userdata('success','Material Deleted Succesfully');
      redirect(base_url('master/materialMaster'));
    }
    else {
      // code...
    }
	}
	public function update_materialMaster()
	{
		$material_id=$this->input->post()['material_id'];
		$materialname=$this->input->post()['materialname'];
		$this->db->where("material_id",$material_id);
		if($this->db->update('material_master',array('material_name'=>$materialname)))
		{
			$this->session->set_userdata('success','Material Updated Succesfully');
			redirect(base_url('master/materialMaster'));
		}
		else {
			// code...
		}
	}
	// Rate Card master
	public function rateCardMaster()
	{
		$this->load->view('masters/ratecardmaster.php');
		$this->load->view('footer.php');
	}
	public function add_rateCardMaster()
	{

	}
	public function delete_rateCardMaster()
	{

	}
	public function update_rateCardMaster()
	{

	}
	// Renewal master
	public function renewalMaster()
	{
		$this->load->view('masters/renewalmaster.php');
		$this->load->view('footer.php');
	}
	public function add_renewalMaster()
	{

	}
	public function delete_renewalMaster()
	{

	}
	public function update_renewalMaster()
	{

	}
	// Specification master
	public function specificationMaster()
	{
		$this->load->view('masters/specificationmaster.php');
		$this->load->view('footer.php');
	}
	public function add_specificationMaster()
	{

	}
	public function delete_specificationMaster()
	{

	}
	public function update_specificationMaster()
	{

	}
	// Product master
	public function productMaster()
	{
		$data['product']=$this->get_data->get_all_product();
		$this->load->view('masters/productMaster.php',$data);
		$this->load->view('footer.php');
	}
	public function add_productMaster()
	{
		$data=$this->input->post();
		if($this->insert_data->new_product($data))
		{
			$this->session->set_userdata('success','Product Added Succesfully');
			redirect(base_url('master/productMaster'));
		}
		else{
			// Code...
		}
	}
	public function delete_productMaster()
	{
		$product_id=$this->input->post()['product_id'];
    $this->db->where("product_id",$product_id);
    if($this->db->update('product_master',array("status"=>'0')))
    {
			$this->session->set_userdata('success','Product Deleted Succesfully');
      redirect(base_url('master/productMaster'));
    }
    else {
      // code...
    }
	}
	public function update_productMaster()
	{

	}
	// Element Type master
	public function elementTypeMaster()
	{
		$data['elementtype']=$this->get_data->get_all_elementType();
		$this->load->view('masters/elementtypemaster.php',$data);
		$this->load->view('footer.php');
	}
	public function add_elementTypeMaster()
	{
		$data=$this->input->post();
		if($this->insert_data->new_elementType($data))
		{
			$this->session->set_userdata('success','Element Type Added Succesfully');
			redirect(base_url('master/elementTypeMaster'));
		}
		else{
			// Code...
		}
	}
	public function delete_elementTypeMaster()
	{
		$element_type_id=$this->input->post()['element_type_id'];
    $this->db->where("element_type_id",$element_type_id);
    if($this->db->update('element_type_master',array("status"=>'0')))
    {
			$this->session->set_userdata('success','Element Type Deleted Succesfully');
      redirect(base_url('master/elementTypeMaster'));
    }
    else {
      // code...
    }
	}
	public function update_elementTypeMaster()
	{
		$element_type_id=$this->input->post()['element_type_id'];
		$elementtype=$this->input->post()['elementtype'];
		$this->db->where("element_type_id",$element_type_id);
		if($this->db->update('element_type_master',array('element_type'=>$elementtype)))
		{
			$this->session->set_userdata('success','Element Type Updated Succesfully');
			redirect(base_url('master/elementTypeMaster'));
		}
		else {
			// code...
		}
	}
	// Serial No
	public function serialno()
	{
		$data['material']=$this->get_data->get_all_material();
		$this->load->view('masters/serialno.php',$data);
		$this->load->view('footer.php');
	}
	public function add_serialno()
	{
		$data=$this->input->post();
		if($this->insert_data->new_material($data))
		{
			$this->session->set_userdata('success','Serial Number Added Succesfully');
			redirect(base_url('master/materialMaster'));
		}
		else {
			// code...
		}
	}
	public function delete_serialno()
	{
		$material_id=$this->input->post()['material_id'];
    $this->db->where("material_id",$material_id);
    if($this->db->update('material_master',array("status"=>'0')))
    {
			$this->session->set_userdata('success','Serial No Deleted Succesfully');
      redirect(base_url('master/materialMaster'));
    }
    else {
      // code...
    }
	}
	public function update_serialno()
	{
		$material_id=$this->input->post()['material_id'];
		$materialname=$this->input->post()['materialname'];
		$this->db->where("material_id",$material_id);
		if($this->db->update('material_master',array('material_name'=>$materialname)))
		{
			$this->session->set_userdata('success','Serial No Updated Succesfully');
			redirect(base_url('master/materialMaster'));
		}
		else {
			// code...
		}
	}
	// Observation Master
	public function observationMaster()
	{
		$this->load->view('masters/observationmaster.php',$data);
		$this->load->view('footer.php');
	}
	public function add_observationMaster()
	{
		$data=$this->input->post();
		if($this->insert_data->new_material($data))
		{
			$this->session->set_userdata('success','Observation Master Added Succesfully');
			redirect(base_url('master/materialMaster'));
		}
		else {
			// code...
		}
	}
	public function delete_observationMaster()
	{
		$material_id=$this->input->post()['material_id'];
    $this->db->where("material_id",$material_id);
    if($this->db->update('material_master',array("status"=>'0')))
    {
			$this->session->set_userdata('success','Observation Master Deleted Succesfully');
      redirect(base_url('master/materialMaster'));
    }
    else {
      // code...
    }
	}
	public function update_observationMaster()
	{
		$material_id=$this->input->post()['material_id'];
		$materialname=$this->input->post()['materialname'];
		$this->db->where("material_id",$material_id);
		if($this->db->update('material_master',array('material_name'=>$materialname)))
		{
			$this->session->set_userdata('success','Observation Master Updated Succesfully');
			redirect(base_url('master/materialMaster'));
		}
		else {
			// code...
		}
	}
	// Vendor
	public function vendor()
	{
		$data['vendor']=$this->get_data->get_all_vendor();
		$data['cities']=$this->get_data->get_all_cities();
		$data['state']=$this->get_data->get_all_state();
		$this->load->view('masters/vendor.php',$data);
		$this->load->view('footer.php');
	}
	public function editvendor($vendor_id)
	{
		$query="SELECT * FROM `vendor_master`,`address_info` Where `vendor_master`.vendor_address_id=`address_info`.address_id AND status=1";
		$data['vendor']=$this->db->query($query)->result()[0];
		$data['cities']=$this->get_data->get_all_cities();
		$data['state']=$this->get_data->get_all_state();
		$this->load->view('masters/editvendor.php',$data);
		$this->load->view('footer.php');
	}
	public function add_vendor()
	{
		$data=$this->input->post();
		if($this->insert_data->new_vendor($data))
		{
			$this->session->set_userdata('success','Vendor Added Succesfully');
			redirect(base_url('master/vendor'));
		}
		else {
			// code...
		}
	}
	public function delete_vendor()
	{
		$vendor_id=$this->input->post()['vendor_id'];
		$this->db->where("vendor_id",$vendor_id);
		if($this->db->update('vendor_master',array("status"=>'0')))
		{
			$this->session->set_userdata('success','Vendor Deleted Succesfully');
			redirect(base_url('master/vendor'));
		}
		else {
			// code...
		}
	}
	public function update_vendor()
	{
		$data=$this->input->post();
		if($this->update_data->update_vendor($data))
		{
			$this->session->set_userdata('success','Vendor Updated Succesfully');
			redirect(base_url('master/vendor'));
		}
		else {
			// code...
		}
	}
	// Supplier
	public function supplier()
	{
		$data['supplier']=$this->get_data->get_all_supplier();
		$data['cities']=$this->get_data->get_all_cities();
		$data['state']=$this->get_data->get_all_state();
		$this->load->view('masters/supplier.php',$data);
		$this->load->view('footer.php');
	}
	public function add_supplier()
	{
		$data=$this->input->post();
		if($this->insert_data->new_supplier($data))
		{
			$this->session->set_userdata('success','Supplier Added Succesfully');
			redirect(base_url('master/supplier'));
		}
		else {
			// code...
		}
	}
	public function editsupplier($supplier_id)
	{
		$query="SELECT * FROM `supplier_master`,`address_info` Where `supplier_master`.supplier_address_id=`address_info`.address_id AND status=1";
		$data['supplier']=$this->db->query($query)->result()[0];
		$data['cities']=$this->get_data->get_all_cities();
		$data['state']=$this->get_data->get_all_state();
		$this->load->view('masters/editsupplier',$data);
		$this->load->view('footer.php');
	}
	public function delete_supplier()
	{
		$material_id=$this->input->post()['material_id'];
		$this->db->where("material_id",$material_id);
		if($this->db->update('material_master',array("status"=>'0')))
		{
			$this->session->set_userdata('success','Supplier Deleted Succesfully');
			redirect(base_url('master/supplier'));
		}
		else {
			// code...
		}
	}
	public function update_supplier()
	{
		$data=$this->input->post();
		if($this->update_data->update_supplier($data))
		{
			$this->session->set_userdata('success','Supplier Updated Succesfully');
			redirect(base_url('master/supplier'));
		}
		else {
			// code...
		}
	}
}
