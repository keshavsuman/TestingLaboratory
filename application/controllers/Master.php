<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {
	function __construct()
	{
	    parent:: __construct();
			$this->load->helper(array('url','date'));
			$this->load->model(array('get_data','insert_data'));
			$this->load->library('session');
      $this->load->view('header.php');
      $this->load->view('sidebar.php');
	}

  // Main Test Master
  public function mainTestMaster()
  {
    $data['test']=$this->get_data->get_all_mainTest();
    $data['department']=$this->get_data->get_all_department();
    $this->load->view('masters/mainTestMaster.php',$data);
    $this->load->view('footer.php');
  }
  public function add_mainTest()
  {
      $data=$this->input->post();
      if($this->insert_data->insertMainTest($data))
      {
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
      redirect(base_url('master/mainTestMaster'));
    }
    else {
      // code...
    }
  }
  public function update_mainTest()
  {

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
    $department=$this->input->post()['department'];
    if($this->db->insert('department_master',array("department_name"=>$department)))
    {
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
		$data['testform	']=$this->get_data->get_all_subTest();
		$this->load->view('masters/subTestMaster.php',$data);
		$this->load->view('footer.php');
	}
	public function add_subTestMaster()
	{
		$data=$this->input->post();
		if($this->insert_data->insert_subtest($data))
		{
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
	public function commonmaster_insert()
	{
		if($this->insert_data->new_title($this->input->post()))
		{
			$data['title']=$this->get_data->all_common_master();
			$this->load->view('customer/commonmaster.php',$data);
			$this->load->view('footer.php');
		}
		else {
			//
		}

	}
	public function common_delete()
	{
		$d=$this->input->post()['customer_id'];
		if($this->db->delete('common_master',array('record_id' =>$d)))
		{
			$this->common_master();
		}
		else {
			// code...
		}
	}
	public function update_commonMaster()
	{
		$record_id=$this->input->post()['record_id'];
		$record=$this->input->post()['record'];
		$this->db->where("record_id",$record_id);
		if($this->db->update('common_master',array('record'=>$record)))
		{
			redirect(base_url('master/common_master'));
		}
		else {
			// code...
		}
	}
	// City Master
	public function add_city()
	{
		$city=$this->input->post()['city'];
		if($this->db->insert('city_master',array("city_name"=>$city)))
		{
			$this->city_master();
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
			$this->city_master();
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
			redirect(base_url('master/testMethodMaster'));
		}
		else {
			// code...
		}
	}
	// Element master
	public function elementMaster()
	{
		$this->load->view('masters/elementmaster.php');
		$this->load->view('footer.php');
	}
	public function add_elementMaster()
	{

	}
	public function delete_elementMaster()
	{

	}
	public function update_elementMaster()
	{

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
      redirect(base_url('master/elementTypeMaster'));
    }
    else {
      // code...
    }
	}
	public function update_elementTypeMaster()
	{

	}
}
