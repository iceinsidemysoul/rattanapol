<?php get_header();?>
<?php get_sidebar('left'); ?>
	<div class="col-md-8">
	<?php if(have_posts()):
		while(have_posts()): the_post(); ?>
		<article class="post">
			<div class="row">
				<div class="col-md-4"><?php the_post_thumbnail('custom-size'); ?></div>
				<div class="col-md-8"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
			</div>
		</article>
		<?php endwhile;?>
		<div class="nav-previous"><?php next_posts_link( 'Older posts' ); ?></div>
 
 
 
		<div class="nav-next"><?php previous_posts_link( 'Newer posts' ); ?></div>
 
	<?php
		else:
			echo '<p>No contents found</p>';
		endif;?>
	</div>
<?php get_sidebar('right'); ?>
<?php get_footer(); ?>


