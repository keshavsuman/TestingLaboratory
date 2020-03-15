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
        $this->mainTestMaster();
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
      $this->mainTestMaster();
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
      $this->department_master();
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
      $this->department_master();
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
      $this->department_master();
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
		$this->load->view('masters/subTestMaster.php',$data);
		$this->load->view('footer.php');
	}
	public function add_subTestMaster()
	{

	}
	public function delete_subTestMaster()
	{

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
			$this->city_master();
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
		$this->load->view('masters/testmethodmaster.php');
		$this->load->view('footer.php');
	}
	public function add_testMethodMaster()
	{

	}
	public function delete_testMethodMaster()
	{

	}
	public function update_testMethodMaster()
	{

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
		$this->load->view('masters/materialmaster.php');
		$this->load->view('footer.php');
	}
	public function add_materialMaster()
	{

	}
	public function delete_materialMaster()
	{

	}
	public function update_materialMaster()
	{

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
}
