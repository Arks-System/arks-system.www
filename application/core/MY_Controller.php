<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	protected $_data = [];

	public function __construct()
	{
		parent::__construct();

		if ($this->config->item("no_cache") === true)
			$this->load->driver('cache', array('adapter' => 'dummy', 'backup' => 'file'));
		else
			$this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));
	}
}
