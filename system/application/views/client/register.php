		
	</div>
</div>
<div id="main">
<script type="text/javascript">

$().ready(function() {
	
	// validate signup form on keyup and submit
	$("#signup").validate({
		rules: {
			fullname: "required",
			phone: "required",
			address: "required",
			username: {
				required: true,
				minlength: 2
			},
			password: {
				required: true,
				minlength: 5
			},
			password2: {
				required: true,
				minlength: 5,
				equalTo: "#password"
			},
			email: {
				required: true,
				email: true
			},
			agree: "required"
		},
		messages: {
			fullname: "<?php echo $this->lang->line('register_error_name');?>",
			username: {
				required: "<?php echo $this->lang->line('register_error_user');?>",
				minlength: "<?php echo $this->lang->line('register_error_usermin');?>"
			},
			password: {
				required: "<?php echo $this->lang->line('register_error_pass');?>",
				minlength: "<?php echo $this->lang->line('register_error_passmin');?>"
			},
			password2: {
				required: "<?php echo $this->lang->line('register_error_pass');?>",
				minlength: "<?php echo $this->lang->line('register_error_passmin');?>",
				equalTo: "<?php echo $this->lang->line('register_error_passsame');?>"
			},
			email: "<?php echo $this->lang->line('register_error_email');?>",
			phone: "<?php echo $this->lang->line('register_error_phone');?>",
			address: "<?php echo $this->lang->line('register_error_address');?>",
			agree: "<?php echo $this->lang->line('register_error_policy');?>"
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

	<div id="main_inner" >

		<div id="primaryContent_columnless">

			<div id="columnA_columnless">
		
 
			
				<div class="post">
				<div id="policy" style="display:none; width:600px;" ><?php echo $this->lang->line('register_policy');?></div>
				<?php echo $this->lang->line('register_message');?>
				
				  <form class="cmxform" id="signup" action="<?php echo site_url();?>/user/user_reg" method="POST" >
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
				  <label for="password2"><?php echo $this->lang->line('register_password2');?></label>
				  <input type="password" name="password2" id="password2" class="text"/>
				  </p>
				  <p>
				  <label for="fullname"><?php echo $this->lang->line('register_name');?></label>
				  <input type="text" name="fullname"  id="fullname" class="text"/>
				  </p>
				  <p>
				  <label for="phone"><?php echo $this->lang->line('register_phone');?></label>
				  <input type="text" name="phone"  id="phone" class="text">
				  </p>
				  <p>
				  <label for="address"><?php echo $this->lang->line('register_address');?></label>
				  <textarea name="address"  id="address" class="text" cols="30" rows="5"></textarea>
				  </p>
				  <p>
				  <label for="agree"><?php echo $this->lang->line('register_agree');?></label>
				  <input type="checkbox" name="agree" id="agree" class="text"/>
				  </p>
				  <p>
				  <input type="reset" class="button" value="<?php echo $this->lang->line('reset');?>"> &nbsp &nbsp <input type="submit" class="button" value="<?php echo $this->lang->line('register');?>">
                                  </p>
                                </fieldset>
				 </form>