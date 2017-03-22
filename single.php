<?php get_header(); ?>
<div class="row"> <!-- main-area -->
	<div class="col-md-9">
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