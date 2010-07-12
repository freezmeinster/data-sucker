<div id="menu">
			<ul>    <?php $current = $this->uri->segment('2');?>
			
				<li><a href="<?php echo site_url();?>/data/home"<?php if($current == "home"){ echo "class=\"active\"";}?>><?php echo $this->lang->line('menu_home');?></a></li>
				<li><a href="<?php echo site_url();?>/data/download" <?php if($current == "download"){ echo "class=\"active\"";}?>><?php echo $this->lang->line('menu_download');?></a></li>
				<li><a href="<?php echo site_url();?>/data/filemanager" <?php if($current == "filemanager"){ echo "class=\"active\"";}?>><?php echo $this->lang->line('menu_filemanager');?></a></li>
				<li><a href="<?php echo site_url();?>/data/setting"<?php if($current == "setting"){ echo "class=\"active\"";}?>><?php echo $this->lang->line('menu_setting');?></a></li>
				<li><a href="<?php echo site_url();?>/data/about" <?php if($current == "about"){ echo "class=\"active\"";}?>><?php echo $this->lang->line('menu_about');?></a></li>
				<li><a href="<?php echo site_url();?>/data/logout"><?php echo $this->lang->line('menu_logout');?></a></li>
			</ul>
		</div>

