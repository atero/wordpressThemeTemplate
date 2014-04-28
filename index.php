<?php get_header(); ?>
	<div class="row">
		<?php get_sidebar(); ?>
		<div id="content">
			<?php if(have_post()) : while(have_post()) : the_post();?>
				<!-- 
					the theme specific content here..
				 -->
			<?php endwhile; endif; ?>
		</div>
	</div>
<?php get_footer(); ?>
