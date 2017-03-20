<?php get_header(); ?>
<?php get_sidebar('left'); ?>
 
	<div class="col-md-8">
    <?php if(have_posts()):
		while(have_posts()): the_post(); ?>
		<article class="single-post">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php the_content(); ?>
		</article>
		<?php endwhile;
		
		else:
			echo '<p>No contents found</p>';
		endif;?>
	</div>
<?php get_sidebar('right'); ?> 
<?php get_footer(); ?>