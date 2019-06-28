<?php 

class Movie extends CI_Controller{

	function __construct(){
		parent::__construct();
	}

	function xman(){
		$this->load->view('Client/xman');
	}

	function mib(){
		$this->load->view('Client/mib');
	}

	function toystory(){
		$this->load->view('Client/toystory');
	}
}