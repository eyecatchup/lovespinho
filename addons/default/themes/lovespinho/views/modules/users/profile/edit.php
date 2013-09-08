<div class="large-12 small-12 columns">
	
	<h2><?php echo ($this->current_user->id !== $_user->id) ?
					sprintf(lang('user:edit_title'), $_user->display_name) :
					lang('profile_edit') ?></h2>
	
	<?php
	if( validation_errors())
	{
	?>
		<div data-alert class="alert-box alert">
		  <?php echo $error_string;?>
		  <a href="#" class="close"> &times; </a>
		</div>
	<?php
	}
	?>

	<?php echo form_open_multipart('', array('id'=>'user_edit'));?>
	<fieldset>
		
		<legend><?php echo lang('user:details_section') ?></legend>
		
		<div class="row">
			<div class="large-12 small-12 columns">
				<label for="display_name"><?php echo lang('profile_display_name') ?></label>
				<?php echo form_input(array('name' => 'display_name', 'id' => 'display_name', 'value' => set_value('display_name', $display_name))) ?>
			</div>
			
		</div>

		
		<div class="row">
			<div class="large-6 small-6 columns">
				<label for="email"><?php echo lang('global:email') ?></label>
				<?php echo form_input('email', $_user->email) ?>
			</div>
			<div class="large-6 small-6 columns">
				<label for="password"><?php echo lang('user:password_section') ?></label>
				<?php echo form_password('password', '', 'autocomplete="off"') ?>
			</div>
		</div>
		
		
		<?php foreach($profile_fields as $field): ?>
				<?php if($field['input']): ?>
				<div class="row">
					<?php if( $field['field_slug'] == 'dob' )
					{
					?>
					<div class="large-4 small-12 columns">
					<?php
					}else
					{
					?>
					<div class="large-12 small-12 columns">
					<?php
					}
					?>
						<label for="<?php echo $field['field_slug'] ?>"> <?php echo (lang($field['field_name'])) ? lang($field['field_name']) : $field['field_name'];  ?> </label>
						<?php echo $field['input'] ?>
						<small><?php if($field['instructions']) echo $field['instructions']; ?></small>
					</div>
				</div>
			<?php endif ?>
		<?php endforeach ?>
		
		<div class="row">
			<div class="large-4 small-6 columns margin">
				
				<input type="submit" class="button" name="" value="<?php echo lang('profile_save_btn'); ?>" />
			</div>
		</div>
		

	</fieldset>
	<?php echo form_close(); ?>


</div>




	<?php if (Settings::get('api_enabled') and Settings::get('api_user_keys')): ?>
		
	<script>
	jQuery(function($) {
		
		$('input#generate_api_key').click(function(){
			
			var url = "<?php echo site_url('api/ajax/generate_key') ?>",
				$button = $(this);
			
			$.post(url, function(data) {
				$button.prop('disabled', true);
				$('span#api_key').text(data.api_key).parent('li').show();
			}, 'json');
			
		});
		
	});
	</script>
		
	<fieldset>
		<legend><?php echo lang('profile_api_section') ?></legend>
		
		<ul>
			<li <?php $api_key or print('style="display:none"') ?>><?php echo sprintf(lang('api:key_message'), '<span id="api_key">'.$api_key.'</span>') ?></li>
			<li>
				<input type="button" id="generate_api_key" value="<?php echo lang('api:generate_key') ?>" />
			</li>
		</ul>
	
	</fieldset>
	<?php endif ?>