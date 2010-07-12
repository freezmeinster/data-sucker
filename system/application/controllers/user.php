<?php

class User extends Controller {

	function User()
	{
		parent::Controller();	
	}
	function user_reg(){
	 $data['user'] = $this->input->post('username');
	 $data['pass'] = $this->input->post('password');
	 $data['email'] = $this->input->post('email');
	 $data['phone'] = $this->input->post('phone');
	 $data['name'] = $this->input->post('fullname');
	 $data['address'] = $this->input->post('address');
	 $insert = $this->system_user->user_reg($data['user'],$data['pass'],$data['name'],$data['email'],$data['phone'],$data['address']);
	 if ($insert == 0){
	 $this->load->view('client/header');
	 $this->load->view('client/register_unsuccess');
	 $this->load->view('client/footer');
	 }else if ($insert == 1){
	 $this->load->view('client/header');
         $this->load->view('client/register_success',$data);
         $this->load->view('client/footer');
         }
	}
	
	function user_login(){
	$data['user'] = $this->input->post('username');
	$data['pass'] = $this->input->post('password');
	$data['email'] = $this->input->post('email');
	$login_valid = $this->system_user->user_login($data['user'],$data['pass'],$data['email']);
	  if ($login_valid == "0"){
	       echo "User nggak ada tuh di system";
	   }else if ($login_valid == "1"){
	       redirect('data/home');
	   }else if ($login_valid == "2"){
	       echo "eh  jangan coba2 macam ama system ane deh ";
	   }else echo "ada apa ini $login_valid?";
	}
}	
?>