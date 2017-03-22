<article id="post-<?php the_ID(); ?>" class="post">
	<div class="row">
		<div class="col-md-4"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('custom-size'); ?></div>
		<div class="col-md-8"><h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2><?php the_excerpt();?></div>
	</div>
</article>