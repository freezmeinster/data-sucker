<?php

class Admin extends Controller {

	function Admin()
	{
		parent::Controller();	
	}
	
	function reg_url(){
	$id = $this->session->userdata('id');
	$url = $this->input->post('url');
	$link = $this->system_data->register_url($id,$url);
	if ($link == 1){
	$data['link_stat'] = "download_reg_success";
	$this->load->view('client/header');
	$this->load->view('client/download_reg',$data);
	$this->load->view('client/footer');
	}else if ($link == 0){
	$data['link_stat'] = "download_reg_error";
	$this->load->view('client/header');
	$this->load->view('client/download_reg',$data);
	$this->load->view('client/footer');
	}
	
	}
}
?>