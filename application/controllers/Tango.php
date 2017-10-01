<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		// this is the view we want shown
		$this->show(5);
	}

}
