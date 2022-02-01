<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Memorial extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->_data["canon"] = base_url("memorial");

		$this->load->view('base/head', $this->_data);
		$this->load->view('memorial/index', $this->_data);
		$this->load->view('base/footer', $this->_data);
	}
}
