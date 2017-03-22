<?php get_header();?>
<div class="row"> <!-- main-area -->
	<div class="col-md-9"> <!-- post content area -->
	
		<?php if(have_posts()):
			while(have_posts()): the_post(); 
				get_template_part ('template-parts/content', get_post_format() );
		?>
			
			<?php endwhile;?>
			<div class="nav-previous"><?php next_posts_link( '<<ก่อนหน้า' ); ?></div>	 
			<div class="nav-next"><?php previous_posts_link( 'ถัดไป>>' ); ?></div>
			
		<?php
			else:
				echo '<p>No contents found</p>';
			endif;
		?>
	</div> <!-- end of post content area -->
<?php get_sidebar('right'); ?>
<?php get_footer(); ?>
