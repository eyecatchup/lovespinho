<div class="large-12 small-12 columns">
	
	<h2> <?php echo lang('user:login_header') ?> </h2>
	
	<h4 class="subheader"> Bem vindo! </h4>
	
	<?php if (validation_errors()): ?>
	<div data-alert class="alert-box alert">
	  <?php echo $error_string;?>
	  <a href="#" class="close">&times;</a>
	</div>
	<?php endif; ?>
	
	<?php echo form_open('users/login', array('id'=>'login','class'=>'custom'), array('redirect_to' => $redirect_to)) ?>
		
	<div class="row">
		<div class="large-12 small-12 columns">
			<label for="email"><?php echo lang('global:email') ?></label>
			<?php echo form_input('email', $this->input->post('email') ? $this->input->post('email') : '')?>
		</div>
	</div>

	<div class="row">
		<div class="large-12 small-12 columns">
			<label for="password"><?php echo lang('global:password') ?></label>
			<input type="password" id="password" name="password" maxlength="20" />
		</div>
	</div>
	
	

	<div class="row">
		<div class="large-6 small-6 columns text-left">
			<label for="radio1">
				<?php echo form_checkbox('remember', '1', false) ?>
				<?php echo lang('user:remember') ?> 
			</label>
		</div>
		<div class="large-6 small-6 columns text-right">
			<?php echo anchor('register', lang('user:register_btn'));?>
		</div>
	</div>

	<div class="row">
		<div class="large-4 small-4 columns margin">
			<input type="submit" value="<?php echo lang('user:login_btn') ?>" name="btnLogin" class="button" /> 
		</div>
	</div>

	<?php echo form_close(); ?>
	

</div>