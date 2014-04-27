<?php get_header(); ?>
<div class="continer">
	<div class="row">
		<?php 
		//uncomment next line to enable sidebar for category pages
		//get_sidebar();
		?>
		<div id="content">
			<?php if(have_post()) : while(have_post()) : the_post();?>
				<div class="cat">
					<h2 class="cat-post-title">	<?php the_title(); ?> </h2>
				</div>
				
			<?php endwhile; endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>