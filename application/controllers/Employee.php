<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
	function __construct()
	{
	    parent:: __construct();
			$this->load->helper(array('url','date'));
			$this->load->model(array('get_data','insert_data'));
			$this->load->library('session');
			$this->load->view('header.php');
			$this->load->view('sidebar.php');
			if(!$this->session->islogin)
			{
				redirect(base_url());
			}
	}
  public function index()
  {
    $data['employee']=$this->get_data->get_all_employee();
		$this->load->view('employee/employee.php',$data);
		$this->load->view('footer.php');
  }
  public function add_employee()
  {
		$data['roles']=$this->get_data->get_all_roles();
		$data['departments']=$this->get_data->get_all_department();
		$data['cities']=$this->get_data->get_all_cities();
		$data['state']=$this->get_data->get_all_state();
    $this->load->view('employee/employee_registration.php',$data);
    $this->load->view('footer.php');
  }
	public function new_employee()
	{
		$d=$this->input->post();
		if($this->insert_data->new_employee($d))
		{
			redirect(base_url('employee/'));
		}
		else {
			// code...
		}
	}
  public function deleteEmployee()
  {
    $employee_id=$this->input->post()['employee_id'];
    $query="UPDATE `employee_registration` SET `employee_status`='0' WHERE `employee_id`=$employee_id;";
    if($this->db->query($query))
    {
    $this->index();
    }
    else {
			//code..
    }
  }
	public function updateEmployee($id)
	{
		$data['employee']=$this->db->get_where('employee_registration',array("employee_id"=>$id))->result()[0];
		$data['state']=$this->get_data->get_all_state();
		$data['cities']=$this->get_data->get_all_cities();
		$data['roles']=$this->get_data->get_all_roles();
		$data['departments']=$this->get_data->get_all_department();
		$this->load->view('employee/employee_edit.php',$data);
	}
}
?>
