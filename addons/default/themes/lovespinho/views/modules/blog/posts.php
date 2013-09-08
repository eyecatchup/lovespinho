
<div class="large-8 small-12 columns">
	
	<h3> Blog </h3>
	<h4 class="subheader"> Esteja ao par da notícia! Ou das gafes da rádio...</h4>

	

{{ if posts }}
	<div class="row">
	{{ posts }}
		
		<div class="large-12 small-12 columns">
			<div class="">
				<article class="post">

					

						<h3><a href="{{ url }}"> {{ title }} </a>  </h3>
						<h6 class="subheader"> 
								<i class="global foundicon-calendar">&nbsp;</i>
								
								{{ helper:date timestamp=created_on }}  - Criado por <a href="{{ url:site }}user/{{ created_by.username }}">{{ created_by.display_name}}</a>
								
								
						</h6>
					
					
						
						<p class="text-justify">{{ intro }}</p>



						<div class="post_meta">
							<ul class="inline-list">
							{{ keywords }}
								<li><a href="blog/tagged/{{ keyword }}"> {{ keyword }} </a></li>
							{{ /keywords }}
							</ul>
						</div>

						
					
				</article>
			</div>
			<hr />
		</div>

	{{ /posts }}

	

	{{ pagination }}
	</div>

{{ else }}
	
	<div class="row">
		<div class="large-12 small-12 columns text-center">
			
			<h3>{{ helper:lang line="blog:currently_no_posts" }}</h3>

			<i class="global foundicon-inbox i-special-big">  </i>

		</div>

		<div class="row">
			<div class="large-4 large-offset-4 small-12 columns margin text-center">
				<p > Não se perca, faça-nos chegar novidades até nós. Use o formulário de contacto em baixo. Nós queremos ouvir tudo o que tem para nós dizer. O que acha enviar-nos a sua história de sucesso ? </p>
			</div>
		</div>
	</div>

{{ endif }}
	
</div>

<div class="large-4 small-12 columns">
	<div class="row">
		{{ theme:partial name="aside" }}
	</div>
</div>