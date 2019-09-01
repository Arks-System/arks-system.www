<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Discord extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->_data["title"] .= " - Discord";
	}

	public function index()
	{
		$this->_data["canon"] = base_url("discord");

		$this->load->view('base/head', $this->_data);
		$this->load->view('discord/index', $this->_data);
		$this->load->view('base/footer', $this->_data);
	}
}
