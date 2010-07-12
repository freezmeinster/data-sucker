<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<title><?php echo $this->lang->line('header');?></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<script type="text/javascript" src="<?php echo base_url();?>asset/client/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/client/js/facebox.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/client/js/jquery-form.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/client/js/jquery-metadata.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/client/js/jquery-validate.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/client/js/jquery-progressbar.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/client/js/jquery-ui.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/client/style/facebox.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/client/style/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/client/style/style.css" />
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loading_image : '<?php echo base_url();?>asset/images/loading.gif',
        close_image   : '<?php echo base_url();?>asset/images/closelabel.gif'
      }) 
    })
  </script>
  
</head>
<body>

<div id="header">

	<div id="header_inner" class="fixed">

		<div id="logo">
			<h1><span><?php echo $this->lang->line('header');?></span></h1>
			<h2></h2>
		</div>
		
		