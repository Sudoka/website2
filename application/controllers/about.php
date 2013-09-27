<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$data = array(
			'page'=>'about'
		);
		$this->load->view('header', $data);
		$this->load->view('bodyAbout');
		$this->load->view('footer');
	}
}

