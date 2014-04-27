<?php get_header(); ?>
<div class="continer">
	<div class="row">
		<?php get_sidebar(); ?>
		<div id="content" class="column">
			<?php if(have_post()) : while(have_post()) : the_post();?>
				<!-- 
					the theme specific content
				 -->
			<?php endwhile; endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>