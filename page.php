<?php get_header();?>
<?php get_sidebar('left'); ?>
	<div class="col-md-8">
	<?php	
		if(have_posts()):
		while(have_posts()): the_post(); ?>
		<article class="paged">
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</article>
		
	<?php 
		endwhile;
		
		else:
			echo '<p>No Content found</p>';
		endif; ?>
	</div>
<?php get_sidebar('right'); ?>
<?php get_footer(); ?>