<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * HOME USER MAX SIZE
 *
 * Returns the "Home User Maximum capacity " item from your config file
 *
 * @access	public
 * @return	string
 * @param	string
 */
if ( ! function_exists('home_max_size'))
{
	function home_max_size($param=''){
          $CI =& get_instance();
	  $size = $CI->config->item('home_user_max_size');
          if ($param == ""){
          return $size;
         }else if ($size / 1000 < 1){
	     if($param == "value"){
	       $finalsize = $size;
	     }else if ($param == "text"){
	       $finalsize = "$size Mb";
	     }
	  }else if($size / 1000 >= 1){
	    if($param == "value"){
	       $finalsize = $size / 1000;
	     }else if ($param == "text"){
	       $val = $size / 1000;
	       $finalsize = "$val Gb";
	     } 
	  }
         return $finalsize;
	}
}

// ------------------------------------------------------------------------
/**
 * USER Max per day Download 
 *
 * Returns the "User Maximum per day maximum capacity" item from your config file
 *
 * @access	public
 * @return	string
 * @param	string
 */
if ( ! function_exists('user_max_download'))
{
	function user_max_download($param=''){
          $CI =& get_instance();
	  $size = $CI->config->item('user_max_download');
         if ($param == ""){
          return $size;
         }else if ($size / 1000 < 1){
	     if($param == "value"){
	       $finalsize = $size;
	     }else if ($param == "text"){
	       $finalsize = "$size Mb";
	     } 
	  }else if($size / 1000 >= 1){
	    if($param == "value"){
	       $finalsize = $size / 1000;
	     }else if ($param == "text"){
	       $val = $size / 1000;
	       $finalsize = "$val Gb";
	     }  
	  }
         return $finalsize;
	}
}

// ------------------------------------------------------------------------

/* End of file url_helper.php */
/* Location: ./system/helpers/url_helper.php */