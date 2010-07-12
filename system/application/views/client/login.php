		
	</div>
</div>
<div id="main">
<script type="text/javascript">

$().ready(function() {
	
	// validate signup form on keyup and submit
	$("#signup").validate({
		rules: {
			username: {
				required: true,
				minlength: 2
			},
			password: {
				required: true,
				minlength: 5
			},

			email: {
				required: true,
				email: true
			},
		},
		messages: {
			username: {
				required: "<?php echo $this->lang->line('register_error_user');?>",
				minlength: "<?php echo $this->lang->line('register_error_usermin');?>"
			},
			password: {
				required: "<?php echo $this->lang->line('register_error_pass');?>",
				minlength: "<?php echo $this->lang->line('register_error_passmin');?>"
			},
			email: "<?php echo $this->lang->line('register_error_email');?>",
		}
	});
	
});
</script>

<style type="text/css">
#signup { width: 670px; }
#signup label.error {
	margin-left: 100px;
	width: auto;
        display: inline;
}
</style>

	<div id="main_inner" class="fixed">

		<div id="primaryContent_3columns">

			<div id="columnA_3columns">
		

			
				<div class="post">
				 </div>
				  <div align="center">
				  <p>
				  <?php echo $this->lang->line('login_message');?>
				  </p>
				  <form class="cmxform" id="signup" action="<?php echo site_url();?>/user/user_login" method="POST" >
				  <fieldset>
                                  <p>
 				  <label for="username"><?php echo $this->lang->line('login_user');?></label>
				  <input type="text" name="username"  id="username" class="text"/>
				  </p>
				  <p>
				  <label for="email"><?php echo $this->lang->line('login_email');?></label>
				  <input type="text" name="email"  id="email" class="text"/>
				  </p>
				  <p>
				  <label for="password"><?php echo $this->lang->line('login_password');?></label>
				  <input type="password" name="password" id="password" class="text"/>
				  </p>
				  <p>
				  <p>
				  <input type="reset" class="button" value="<?php echo $this->lang->line('reset');?>"> &nbsp &nbsp <input type="submit" class="button" value="<?php echo $this->lang->line('login');?>">
                                  </p>
                                </fieldset>
				 </form>
				  </p>
				</div>
		
			</div>
	
		</div>
		
		