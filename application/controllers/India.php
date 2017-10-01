<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class India extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Alpha Regular Controller
     * Small Changed
	 */
	public function index()
	{
        // The following should be a relative link to your image file above
        $source = '../data/HappyFace.jpg';
        // note that we could have referenced an image anywhere on our system

        // set the mime type for that image (jpeg, png, etc)
        // FYI. If you set this to jpeg it'll download the pic instead of
        // showing it on the screen
        header("Content-type: image/png");
        header('Content-Disposition: inline');
        readfile($source); // dish it
	}
}
