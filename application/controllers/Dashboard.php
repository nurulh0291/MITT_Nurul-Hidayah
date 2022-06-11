<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Author : nurul
	 * Project : MITT
	 */
	public function index()
	{
		$this->load->view('dashboard');
	}


}
