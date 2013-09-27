<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$data = array(
			'page'=>'home'
		);
		$this->load->view('header', $data);
		$this->load->view('bodyHome');
		$this->load->view('footer');
	}
}

