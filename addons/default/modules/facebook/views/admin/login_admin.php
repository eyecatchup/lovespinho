<section class="title">
    <h4><?php echo lang('facebook:login'); ?></h4>
</section>

<section class="item">
		<section class="content">
			<?php 
			if( isset($url_login) && $url_login != '' )
			{
				echo $url_login;
			}else
			{
				echo '<pre>';
				var_dump($facebook_profile);
				echo '</pre>';
			}?>
		</section>
</section>