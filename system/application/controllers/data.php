<?php

class Data extends Controller {

	function Date()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$this->system_user->check_session('home');
	}
	
	function home()
	{
	        $this->system_user->check_session('home');
		$this->load->view('client/header');
		$this->load->view('client/menu');
		$this->load->view('client/main');
		$this->load->view('client/sidebar');
		$this->load->view('client/footer');
	}
	
	function download()
	{
	        $this->system_user->check_session('download');
		$this->load->view('client/header');
		$this->load->view('client/menu');
		$this->load->view('client/download');
		$this->load->view('client/footer');
	}
	
	function filemanager()
	{      
	        $this->system_user->check_session('filemanager');
		$this->load->view('client/header');
		$this->load->view('client/menu');
		$this->load->view('client/main');
		$this->load->view('client/sidebar');
		$this->load->view('client/footer');
	}
	
	function setting()
	{
	        $this->system_user->check_session('setting');
		$this->load->view('client/header');
		$this->load->view('client/menu');
		$this->load->view('client/main');
		$this->load->view('client/sidebar');
		$this->load->view('client/footer');
	}
	
	function about()
	{
	        $this->system_user->check_session('about');
		$this->load->view('client/header');
		$this->load->view('client/menu');
		$this->load->view('client/about');
		$this->load->view('client/footer');
	}
	
	function logout()
	{      
	       $this->session->sess_destroy();
	       redirect('data');
	}
	

	function login()
	{
		$this->load->view('client/header');
		$this->load->view('client/login');
		$this->load->view('client/footer');
	}
	
	function register()
	{
	        $this->load->view('client/header');
		$this->load->view('client/register');
		$this->load->view('client/footer');
	}
}
