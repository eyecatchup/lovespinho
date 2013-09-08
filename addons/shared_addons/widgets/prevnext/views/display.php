<div style="padding-top: 50px;padding-bottom: 50px;">
<?php if( ( $this->uri->segment(1) == 'blog' ) && ( $id != 0 )  ) {?>
	<div style="float:left;">
		<?php 
		if($prev_url != '') 
		{
		?>
		<a href='<?php echo $prev_url ?>'>
		<span class="success label">
			<i class="general foundicon-left-arrow"> &nbsp; </i>
			<?php echo $prev_title?>
		</span>
	</a>
		<?php 
		}
		?>
	</div>
	<div style="float:right;">
		
		<?php if($next_url != '') 
		{
		?>
		<a href='<?php echo $next_url?>'>
		<span class="success label">
			<?php echo $next_title?>
			<i class="general foundicon-right-arrow"> &nbsp; </i>
		</span>
	</a>
		<?php
		}
		?>
	</div>
<?php ; } ?>
</div>