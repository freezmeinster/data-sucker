		
	</div>
</div>
<div id="main">
<script type="text/javascript">

$().ready(function() {
	
	// validate signup form on keyup and submit
	$("#signup").validate({
		rules: {
			url: "required",
		},
		messages: {
			url: "<?php echo $this->lang->line('download_error_url');?>",

		}
	});
	
});
</script>

<style type="text/css">
#signup { width: 900px; }
#signup label.error {
	margin-left: 100px;
	width: auto;
        display: inline;
}
</style>
	<div id="main_inner" class="fixed">

		<div id="primaryContent_columnless">

			<div id="columnA_columnless">
		

			
				<div class="post">
				<?php echo $this->lang->line('download_message');?>
				
				  <form class="cmxform" id="signup" action="<?php echo site_url();?>/admin/reg_url" method="POST" >
				  <fieldset>
				  <p>
				  <label for="url"><?php echo $this->lang->line('download_url');?></label>
				  <input type="text" name="url" id="url" class="text" size = "60"/>
				  </p>
				  <p align = "center">
				  <input type="submit" class="button" value="<?php echo $this->lang->line('download');?>">
                                  </p>
                                </fieldset>
				 </form>
				</div>
		
			</div>
	
		</div>
		
		