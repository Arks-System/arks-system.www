<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PSO2Global extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->_data["canon"] = base_url("global");

		$this->load->view('base/head', $this->_data);
		$this->load->view('pso2global/index', $this->_data);
		$this->load->view('base/footer', $this->_data);
	}
}
