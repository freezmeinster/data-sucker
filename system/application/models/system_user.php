<?php

class System_user extends Model {

	function System_user()
	{
		parent::Model();	
	}
	function user_reg($user,$pass,$name,$email,$phone,$address){
	$encpass = sha1($pass);
	$this->db->reconnect();
	$query = $this->db->query("select * from user where user like '$user' or email like '$email'");
	if ($query->num_rows() > 0)
	  {
	    return 0;
	  }else if($query->num_rows() == 0){
	    $this->db->reconnect();
	    $this->db->query("insert into user (user,password,email,date_created,phone,address,fullname) values('$user','$encpass','$email',datetime('now'),'$phone','$address','$name')");
	    $query = $this->db->query("select id from user where user like '$user' and email like '$email'");
	    $row = $query->row_array();
	    $id = $row['id'];
            $home_user = $this->config->item('home_user'); 
	    shell_exec("mkdir $home_user/$id");
	    return 1;
	   }
	}
	
	function user_login($user,$pass,$email){
	$encpass = sha1($pass);
	$this->db->reconnect();
	$query = $this->db->query("select * from user where user like '$user' and email like '$email' and password like '$encpass'");
	if ($query->num_rows() > 0){ 
	    $row = $query->row_array();
	    if ($row['user'] == $user && $row['email'] == $email && $row['password'] == $encpass){
	    $login = array(
                   'username'  => $user,
                   'password'  => $encpass,
                   'email'     => $email,
                   'id'	       => $row['id']
                        );
            $this->session->set_userdata($login);
            return 1;
	    }else if ($row['user'] != $user){ 
	    return 2;
            }
        }else if ($query->num_rows() == 0){
            return 0;
        }
      }
      
    function check_session($before){
      $user = $this->session->userdata('username');
      $password = $this->session->userdata('password');
      $email = $this->session->userdata('email');
      $id = $this->session->userdata('id');
      if ($user != "" && $password != "" && $email != "" && $id != ""){
          $this->db->reconnect();
          $query = $this->db->query("select * from user where user like '$user' and email like '$email' and password like '$password' and id = $id");
          if ($query->num_rows() > 0){
             $now = $this->uri->segment(2);
             if ($now != $before){
	     redirect("data/$before");
	     }
          }else if ($query->num_rows() == 0){
	     redirect('data/login/');
          }
      }else redirect('data/login');
    }
    
    function user_detail($param=''){
    $user = $this->session->userdata('username');
    $password = $this->session->userdata('password');
    $email = $this->session->userdata('email');
    $id = $this->session->userdata('id');
    $this->db->reconnect();
    $this->db->query("select * from user where user like '$user' and email like '$email' and password like '$password' and id = $id");
    return $user;
    }
       
}   
?>