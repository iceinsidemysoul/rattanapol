<?php get_header();?>
<?php get_sidebar('left'); ?>
	<div class="col-md-8"> <!-- post content area -->
	
		<?php if(have_posts()):
			while(have_posts()): the_post(); 
		?>
			<article class="post">
				<div class="row">
					<div class="col-md-4"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('custom-size'); ?></div>
					<div class="col-md-8"><h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2><?php the_excerpt();?></div>
				</div>
			</article>
			<?php endwhile;?>
			<div class="nav-previous"><?php next_posts_link( 'ข่าวก่อนหน้า' ); ?></div>	 
			<div class="nav-next"><?php previous_posts_link( 'ข่าวถัดไป' ); ?></div>
			
		<?php
			else:
				echo '<p>No contents found</p>';
			endif;
		?>
	</div> <!-- end of post content area -->
<?php get_sidebar('right'); ?>
<?php get_footer(); ?>


