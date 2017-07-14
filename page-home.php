<?php
/*
Template Name: Home Page 
 */
get_header(); ?>

<div class="foo">
	
	<?php while ( have_posts() ) : the_post(); ?>
					
		<?php the_content(); ?>
		
	<?php endwhile; ?> 
	
</div>



<?php get_footer(); ?>