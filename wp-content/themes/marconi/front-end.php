

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="container"><?php the_content(); ?></div>
	

<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>