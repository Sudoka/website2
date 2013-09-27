<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Partners extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$data = array(
			'page'=>'partners'
		);
		$this->load->view('header', $data);
		$this->load->view('bodyPartners');
		$this->load->view('footer');
	}
}

