<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
	{
	    parent:: __construct();
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->model(array('authenticate','get_data'));
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
	{
		$this->load->view('header.php');
		$this->load->view('sidebar.php');
		$this->load->view('invoice.php');
		$this->load->view('footer.php');
	}
	public function sampleRegistrationEntery()
	{
		$data['customers']=$this->get_data->get_all_customers();
		$this->load->view('header.php');
		$this->load->view('sidebar.php');
		$this->load->view('sampleregistrationentry',$data);
		$this->load->view('footer');
	}
	public function addnewsample()
	{
		$this->load->view('header.php');
		$this->load->view('sidebar.php');
		$this->load->view('addnewsample');
		$this->load->view('footer');
	}
	public function inward()
	{
		$data['supplier']=$this->get_data->get_all_supplier();
		$data['product']=$this->get_data->get_all_product();
		$this->load->view('header.php');
		$this->load->view('sidebar.php');
		$this->load->view('inward',$data);
		$this->load->view('footer');
	}
	public function add_inward()
	{
		$data=$this->input->post();
		if($this->insert_data->new_inward($data))
		{
			$this->session->set_userdata('Success','Inward Entry is Done');
			redirect(base_url('home/inward'));
		}
		else {
			$this->session->set_userdata('error','Something Went Worng');		}
	}
	public function outward()
	{
		$data['employee']=$this->get_data->get_all_employee();
		$data['product']=$this->get_data->get_all_product();
		$this->load->view('header.php');
		$this->load->view('sidebar.php');
		$this->load->view('outward',$data);
		$this->load->view('footer');
	}
	public function databasebackup()
	{
		$prefs = array(
        'tables'        => array(),   									// Array of tables to backup.
        'ignore'        => array(),                     // List of tables to omit from the backup
        'format'        => 'txt',                       // gzip, zip, txt
        'filename'      => 'mybackup.sql',              // File name - NEEDED ONLY WITH ZIP FILES
        'add_drop'      => TRUE,                        // Whether to add DROP TABLE statements to backup file
        'add_insert'    => TRUE,                        // Whether to add INSERT data to backup file
        'newline'       => "\n"                         // Newline character used in backup file
);
		$this->load->dbutil();
		$backup = $this->dbutil->backup($prefs);
		$this->load->helper('file');
		write_file('C:\Users\hp\Desktop/mybackup.sql', $backup);
		$this->load->helper('download');
		force_download('mybackup.sql', $backup);
	}
}

?>
