<section class="title">
    <h4><?php echo lang('facebook:user_list'); ?></h4>
</section>

<section class="item">
    <section class="content">
    <?php 
    if( isset($user) && count( $user ) > 0 )
    {

    	foreach ( $user as $u )
   		{
   		?>
	
   		<?php
   		}
   	}else
   	{
   		echo '<div class="no_data">';
   		echo lang('facebook:no_item');
   		echo '</div>';
   	}
   	?>
    </section>
</section>