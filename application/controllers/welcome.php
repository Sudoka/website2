<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		//$data['title'] = 'Home';
		$this->load->view('header', $data);
		$this->load->view('footer');
	}
}

