<div class="large-8 small-12 columns">

{{ post }}

<article class="single_post">	
	<div class="row">
		<div class="large-8 small-8 columns">
			<h5> 
				{{ title }} <br><small>por {{ created_by.display_name}}</small>
			</h5>
		</div>
		<div class="large-2 small-2 columns">

			<a href="{{ url:site }}blog" title="Voltar ao Blog" title="voltar ao Blog">
				<i class="global foundicon-left-arrow"> &nbsp; </i> voltar
			</a>
		</div>
	</div>
			
	<div class="post_date">
		<span class="date">
			<i class="global foundicon-calendar"> </i>
			{{ helper:date timestamp=created_on }} - 
			{{ if user:group == 'admin' || user:group == 'equipa-gestor' }}
				<a href="{{ url:site }}admin/blog/edit/{{ id }}">editar</a>
			{{ endif }}
		</span>
	</div>
			
	<hr>
	
	<div class="post_body">
		{{ body }}

		
		
		{{ widgets:area slug="footer-post" }}
	</div>




	
	<?php if (Settings::get('enable_comments')): ?>	
		
		<div id="existing-comments">
			<h4><?php echo lang('comments:title') ?></h4>
			<?php echo $this->comments->display() ?>
		</div>		

		
		<?php if ($form_display): ?>
			<?php echo $this->comments->form() ?>
		<?php else: ?>
			<div data-alert class="alert-box alert">
	  
	 
			<?php echo sprintf('Não é permetido comentar por momento', strtolower(lang('global:duration:'.str_replace(' ', '-', $post[0]['comments_enabled'])))) ?>
			 

			 <a href="#" class="close">&times;</a>
			</div>
		<?php endif ?>
	
	<?php endif; ?>
</article>

{{ /post }}



</div>

<div class="large-4 small-12 columns">
	<div class="row">
		{{ theme:partial name="aside" }}
	</div>
</div>