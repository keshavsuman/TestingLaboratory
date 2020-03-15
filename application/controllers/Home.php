<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
	{
	    parent:: __construct();
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->model('authenticate');

	}
	public function index()
	{
		if($this->session->islogin)
		{
			$this->load->view('header.php');
			$this->load->view('sidebar.php');
			$this->load->view('content.php');
			$this->load->view('footer.php');
		}
		else{
			$this->load->view('login.php');
		}
	}
	public function login()
	{
		if(isset($_POST['username']) and isset($_POST['password']))
		{
			$data=$this->input->post();
			if($this->authenticate->login($data))
			{
				$this->session->set_userdata('islogin',TRUE);
				redirect(base_url());
			}
			else {
				redirect(base_url());
			}
		}
		else {
			redirect(base_url(),"refresh");
		}
	}
	public function logout()
	{
			$user_data = $this->session->all_userdata();
					foreach ($user_data as $key => $value) {
					$this->session->unset_userdata($key);
					}
				 $this->session->sess_destroy();
			redirect(base_url());
	}
	public function database_backup()
	{
		$this->load->view('header.php');
		$this->load->view('sidebar.php');
		$this->load->view('databasebackup.php');
		$this->load->view('footer.php');
	}
	public function bill_report(){
		$this->load->model('unpaid_report');
		$data['user']=$this->unpaid_report->getdata();
		// $this->load->view('unpaid report',$data);
		$this->load->view('header.php');
		$this->load->view('sidebar.php');
		$this->load->view('invoice.php');
		$this->load->view('footer.php');
	}
	public function customerreport()
	{
		$this->load->view('header.php');
		$this->load->view('sidebar.php');
		$this->load->view('customer/customerreport.php');
		$this->load->view('footer.php');
	}
	public function invoice()
	{$this->load->view('header.php');
	$this->load->view('sidebar.php');
		$this->load->view('invoice.php');
		$this->load->view('footer.php');
	}
}

?>
