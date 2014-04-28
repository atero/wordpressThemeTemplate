<?php get_header(); ?>
<div class="continer">
	<div class="row">
		<?php 
		//uncomment next line to enable sidebar for category pages
		//get_sidebar();
		?>
		<div id="content">
			<?php if(have_post()) : while(have_post()) : the_post();?>
				<div class="cat-post">
					<h2 class="cat-post-title">	<?php the_title(); ?> </h2>
					<?php
                if(has_post_thumbnail()) {
                	the_post_thumbnail();
                }                  
           		else { ?>
              <img src="<?php bloginfo('template_url'); ?>/images/no-img.jpg" alt="" />
            <?php } 
            the_excerpt();?> 
				</div>				
			<?php endwhile; endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>