<?php get_header(); ?>
	<div class="row">
		<?php get_sidebar(); ?>
		<div id="content" class="post-content">
			<?php if(have_post()) : while(have_post()) : the_post();?>
				<h1 class="post-title"> <?php the_title(); ?> </h1>
				<?php
                if(has_post_thumbnail()) {
                	the_post_thumbnail();
                }
                the_content();
                ?>
			<?php endwhile; endif; ?>
		</div>
	</div>
<?php get_footer(); ?>