<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
require(APPPATH.'config/config'.EXT);
$path = $config['base_url'];
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<title><?php echo $heading; ?></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<script type="text/javascript" src="<?php echo $path;?>asset/client/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $path;?>/asset/client/js/facebox.js"></script>
<script type="text/javascript" src="<?php echo $path;?>/asset/client/js/jquery-progressbar.js"></script>
<script type="text/javascript" src="<?php echo $path;?>/asset/client/js/jquery-ui.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo $path;?>/asset/client/style/facebox.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $path;?>/asset/client/style/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $path;?>/asset/client/style/style.css" />
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loading_image : 'http://localhost/data-sucker/asset/images/loading.gif',
        close_image   : 'http://localhost/data-sucker/asset/images/closelabel.gif'
      }) 
    })
  </script>
</head>
<body>

<div id="header">

	<div id="header_inner" class="fixed">

		<div id="logo">

			<h1><span>Data Sucker</span></h1>
			<h2>Suck all your data</h2>
		</div>
		
			
	</div>
</div>
<div id="main">

	<div id="main_inner" class="fixed">

		<div>

			<div>
		

			
				<div align="center">
				<h1><?php echo $message;?></h1>
				</div>
		
			</div>
	
		</div>

		</div>

		<br class="clear" />

	</div>

</div>
<div id="footer" class="fixed">
	Copyright &copy; 2010 Data Sucker. All rights reserved. Design By <a href="http://www.nodethirtythree.com/">NodeThirtyThree</a> + <a href="http://www.freecsstemplates.org">Free CSS Templates</a> || Made By <a href="http://bramandityo.com">Bramandityo Prabowo</a>.

</div>

</body>
</html>
