<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {
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
		$data['account']=$this->get_data->get_all_accounts();
    $this->load->view('account/amount_recieved.php',$data);
    $this->load->view('footer.php');
  }
}

?>
