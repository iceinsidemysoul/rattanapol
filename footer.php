		<div class="row">
		<div class="col-md-12">
			<footer class="site-footer">
				<nav class="site-nav">
					<div class="row">
						<?php
							$args=array(
								'theme_location'=>'footer'
							);
						?>
						<?php wp_nav_menu($args); ?>
					</div>
				</nav>		
				<p><a href="http://localhost/wordpress"><?php bloginfo('name'); ?></a> - &copy; <?php echo date('Y'); ?></p>
			</footer>
		</div>
		</div>
	</div><!-- container-->
	
	<?php wp_footer(); ?>
</body>
</html>