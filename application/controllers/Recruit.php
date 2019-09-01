<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recruit extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->_data["title"] .= " - Recrutement";
	}

	public function index()
	{
		$this->_data["canon"] = base_url("recrutement");

		$this->load->view('base/head', $this->_data);
		$this->load->view('recruit/index', $this->_data);
		$this->load->view('base/footer', $this->_data);
	}
}
