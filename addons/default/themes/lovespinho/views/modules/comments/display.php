<?php if ($comments): ?>
	
	<?php foreach ($comments as $item): ?>
		


	<div class="panel">
		<div class="row">

			
			<div class="large-2 small-4 columns">
				<?php echo gravatar($item->user_email, 60) ?>
			</div>

			<div class="large-10 small-8 columns">
				<h6><?php echo $item->display_name; ?> <small> <?php echo format_date($item->created_on) ?></small></h6>
				<?php if (Settings::get('comment_markdown') and $item->parsed): ?>
					<?php echo $item->parsed ?>
				<?php else: ?>
					<p><?php echo nl2br($item->comment) ?></p>
				<?php endif ?>
				
			</div>

		</div>
	</div>

		

	<?php endforeach ?>
	
<?php else: ?>
	<p><?php echo lang('comments:no_comments') ?></p>
<?php endif ?>