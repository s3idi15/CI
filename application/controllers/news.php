<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
        
        public function goarab()
        {
            echo 'go arab';
        }
}
