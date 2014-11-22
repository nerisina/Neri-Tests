<?php get_header(); ?>

<div class="mc-about-content">
	<div class="container">

		<div class="mc-content-about center-block">
			<h1><?php the_title(); ?></h1>
			<?php
			while ( have_posts() ) : the_post();
			?>
			<div class="mc-about-block"><p><?php the_content(); ?></p></div>
			<?php 
			endwhile;
			?>
		</div>
	</div>

</div>

<?php get_footer(); ?>