<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Force extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Shows the Delta/Force controller page
	 */
	public function index() {
            $this->show(4);
        }

}
