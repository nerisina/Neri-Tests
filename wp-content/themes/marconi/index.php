<?php get_header(); ?>
	<div class="container">
	<div class="mc-index">
	<h1>All Posts</h1>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<h2><?php the_title(); ?></h2>
	  	<?php the_content(); ?>

	<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>

	</div><!-- end container -->
	</div>


<?php get_footer(); ?>