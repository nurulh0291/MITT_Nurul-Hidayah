<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MasterSkill extends CI_Controller {

	/**
	 * Author : nurul
	 * Project : MITT
	 */
	public function index()
	{
		$this->load->view('master_skill');
	}

	public function skill_level()
	{
		$this->load->view('master_skill_level');
	}


}
