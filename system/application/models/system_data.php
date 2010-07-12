<?php

class System_data extends Model {

	function System_data()
	{
		parent::Model();	
	}
	function register_url($id,$url){
	$this->db->reconnect();
	$link = $this->db->query("select * from link where id_user = $id and link like '$url'");
	if ($link->num_rows() > 0 ){
	  return 0;
	}else if ($link->num_rows() == 0 ){
	  $this->db->query("insert into link (id_user,link,date_created,status) values($id,'$url',datetime('now'),'0')");
	  return 1;
	}
	
	}
	
}
?>