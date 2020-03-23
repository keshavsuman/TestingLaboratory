<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class customer extends CI_Controller {
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

  public function index()
  {}
	public function insert_new_customer()
	{
		if($this->insert_data->new_customer($this->input->post()))
		{
			redirect(base_url('customer/customer_master'));
		}
		else {
			$this->session->set_userdata("error","There is Some Error in Creating New Customer");
			$this->createnewcustomer();
		}
	}
	public function customer_master()
	{
		$data['row']=$this->get_data->recent_customers();
		$data['cities']=$this->get_data->get_all_cities();
		$data['customers']=$this->db->get_where('customer_master',array("customer_status"=>1))->result();
		$this->load->view('customer/customermaster.php',$data);
		$this->load->view('footer.php');
	}
	public function customer_test_rate()
	{
		$data['customer']=$this->get_data->get_all_customers();
		$data['subtest']=$this->get_data->get_all_subTest();
		$this->load->view('customer/customertestrate.php',$data);
		$this->load->view('footer.php');
	}
	public function working_order()
	{
		$this->load->view('customer/workingorder.php');
		$this->load->view('footer.php');
	}
	public function working_notification()
	{
		$this->load->view('customer/workingnotification.php');
		$this->load->view('footer.php');
	}
	public function customer_report()
	{
		$this->load->view('customer/customerreport.php');
		$this->load->view('footer.php');
	}
	public function createnewcustomer()
	{
		$data['cities']=$this->get_data->get_all_cities();
		$data['state']=$this->get_data->get_all_state();
		$data['discount']=$this->get_data->get_discount_info();
		$data['credit_limit']=$this->db->get_where('common_master',array("title"=>'default_customer_creditlimit'))->result()[0]->record;
		$data['overdue_day_limit']=$this->db->get_where('common_master',array("title"=>'default_overdue_days_limit'))->result()[0]->record;
		$data['opening_balance']=$this->db->get_where('common_master',array("title"=>'default_opening_balance'))->result()[0]->record;
		$this->load->view('customer/createnewcustomer.php',$data);
		$this->load->view('footer.php');
	}
	public function customer_delete()
	{
		$customer_id=$this->input->post()['customer_id'];
		$query="UPDATE `customer_master` SET `customer_status`='0' WHERE `customer_id`=$customer_id;";
		if($this->db->query($query))
		{
		redirect(base_url('customer/customer_master'));
		}
		else {

		}
	}
	public function edit_customer($customer_id)
	{
		$query="SELECT * FROM `customer_master`,`address_info` WHERE `customer_id`=$customer_id AND `customer_master`.customer_address_id=`address_info`.address_id";
		$data['customer']=$this->db->query($query)->result()[0];
		$data['cities']=$this->get_data->get_all_cities();
		$data['states']=$this->get_data->get_all_state();
		$data['discount']=$this->get_data->get_discount_info();
		$this->load->view('customer/edit_customer.php',$data);
		$this->load->view('footer.php');
	}
	public function update_customer()
	{
		$data=$this->input->post();
		if($this->update_data->update_customer($data))
		{
			$this->customer_master();
		}
		else {
			// code...
		}
	}
}
?>
