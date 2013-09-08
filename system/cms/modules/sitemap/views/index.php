
	<div class="large-12 small-12 columns">
		<h1>Sitemap</h1>
		<ul class="circle">
		<?php

		foreach($links as $k => $link) {
			if (isset($link['link']) && isset($link['title'])) {
				echo '<li>'.anchor($link['link'], $link['title']).'</li>';
			} elseif (isset($link['category'])) {
			
				foreach($link['category'] as $cat){
					
					echo '<li class="sub-1">'.anchor($cat[0]['link'], $cat[0]['title']);
					
					if( ! isset($cat['posts']) OR count($cat['posts']<=0))
					{
						echo '</li>';
						continue;
					}
					
					if (isset($cat['posts']))
					{
						
						echo '<ul>';
						foreach($cat['posts'] as $post) {
							echo '<li class="sub-2">'.anchor($post['link'], $post['title']).'</li>';
						}
						echo '</ul>';
					}
					
					echo '</li>';
				}
			}
		}
		?>
		</ul>
	</div>

