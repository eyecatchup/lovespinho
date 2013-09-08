<?php echo form_open("comments/create/{$module}", 'id="create-comment"') ?>
	
	<div data-alert class="alert-box">
	  <!-- Your content goes here -->
	  Relembramos que qualquer comentário terá que ser aprovado pelo os administradores da página. Para mais informações leiam os 
	  termos e condições.
	  <a href="#" class="close">&times;</a>
	</div>

	<fieldset>

		<legend><?php echo lang('comments:your_comment') ?></legend>

		<noscript><?php echo form_input('d0ntf1llth1s1n', '', 'style="display:none"') ?></noscript>

		<?php echo form_hidden('entry', $entry_hash) ?>

	<?php if ( ! is_logged_in()): ?>

		<div class="row">
			<div class="large-6 small-12 columns">
				<label><?php echo lang('comments:name_label') ?></label>
				<input type="text" name="name" id="name" maxlength="40" value="<?php echo $comment['name'] ?>" />
			</div>
			<div class="large-6 small-12 columns">
				<label><?php echo lang('global:email') ?></label>
				<input type="text" name="email" maxlength="40" value="<?php echo $comment['email'] ?>" />
			</div>
		</div>

		<div class="row">
			<div class="large-12 small-12 columns">
				<label><?php echo lang('comments:website_label') ?></label>
				<input type="text" name="website" maxlength="40" value="<?php echo $comment['website'] ?>" />
			</div>
		</div>

	<?php endif ?>

	


		<div class="row">
			<div class="large-12 small-12 columns">
				<label><?php echo lang('comments:message_label') ?></label>
				<textarea name="comment" id="comment" rows="5" cols="30" class="width-full"><?php echo $comment['comment'] ?></textarea>
			</div>
		</div>

		<div class="row">
			<div class="large-3 small-12 columns">
				<input type="submit" class="button small success radius" name="submit" value="<?php echo  lang('comments:send_label'); ?>">
				
			</div>
		</div>


	</fieldset>

<?php echo form_close() ?>