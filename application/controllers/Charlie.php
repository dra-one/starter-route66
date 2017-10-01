<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Charlie extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Charlie Controller
         */
	public function brown()
	{
		$this->show(3);
	}

}
