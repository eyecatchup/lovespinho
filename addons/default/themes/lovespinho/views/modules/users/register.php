	<div class="alert-box" data-alert>
		
		Avisa-se a todos os utilizadores, que o registo é ativado
		 pelo os administradores da página. Pode demorar 2h a 72h, pedimos paciência.

		<a href="#" class="close">&times;</a>
	</div>
	
	<div class="large-12 small-12 columns">
		<h2 class="page-title" id="page_title"><?php echo lang('user:register_header') ?></h2>
		<h4 class="subheader"> Faça parte da nossa familía!</h4>

		<p>Ao registar-se no nosso site estará aceitar os 
			<a href="{{ url:site }}inicial/termos-e-condicoes">termos e condições </a></p>
	</div>

	<div class="large-12 small-12 columns margin">
		<nav class="breadcrumbs">
		  <a href="#"> <?php echo lang('user:register_step1') ?> </a> 
		  	<i class="global foundicon-right-arrow"> </i>
		  <a href="#"> <?php echo lang('user:register_step2') ?> </a>
		</nav>
	</div>

	<?php if ( ! empty($error_string)):?>

		<div data-alert class="alert-box alert">
		  <?php echo $error_string;?>
		  <a href="#" class="close">&times;</a>
		</div>
	<?php endif;?>


	
	<div class="large-12 small-12 columns">
	<?php echo form_open('register', array('id' => 'register')) ?>

		
		<?php if ( ! Settings::get('auto_username')): ?>
		<div class="row">
			
			<div class="large-12 small-12 columns">
				<label for="username"><?php echo lang('user:username') ?></label>
				<input type="text" name="username" maxlength="100" value="<?php echo $_user->username ?>" />
			</div>
			
		</div>
		<?php endif; ?>

		<div class="row">
			<div class="large-12 small-12 columns">
				<label for="email"><?php echo lang('global:email') ?></label>
				<input type="text" name="email" maxlength="100" value="<?php echo $_user->email ?>" />
				<?php echo form_input('d0ntf1llth1s1n', ' ', 'class="default-form" style="display:none"') ?>
			</div>
		</div>

		<div class="row">
			<div class="large-12 small-12 columns">
				<label for="password"><?php echo lang('global:password') ?></label>
				<input type="password" name="password" maxlength="100" />
			</div>
		</div>

		<?php foreach($profile_fields as $field) { if($field['required'] and $field['field_slug'] != 'display_name') { ?>
		<div class="row">
			<div class="large-12 small-12 columns">
				<label for="<?php echo $field['field_slug'] ?>"><?php echo (lang($field['field_name'])) ? lang($field['field_name']) : $field['field_name'];  ?></label>
				<?php echo $field['input'] ?>
			</div>
		</div>
		<?php } } ?>

		<div class="row">
			<div class="large-4 small-4 columns">
				
				<input type="submit" class="button" class="button" name="btnSubmit" value="<?php echo lang('user:register_btn'); ?>" />
			</div>
		</div>


	<?php echo form_close(); ?>
</div>



