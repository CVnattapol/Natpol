<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mild extends CI_Controller {


	public function index()
	{	
		//$this->load->view('YEE');
		$this->load->view('main');
	}

	public function activity()
	{
		//$this->load->view('YEE');
		$this->load->view('activity');
	}

	public function image()
	{	
		//$this->load->view('YEE');
		$this->load->view('image');
	}

	public function video()
	{	
		//$this->load->view('YEE');
		$this->load->view('video');
	}
	
}

