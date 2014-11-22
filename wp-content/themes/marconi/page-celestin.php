<?php get_header(); ?>

<div class="mc-celestin-content">
	<div class="container">

		<div class="mc-photo-banner-content center-block">
			<h1><?php the_title(); ?></h1>
			<?php
			while ( have_posts() ) : the_post();
			?>
			<div class="mc-celestin-block"><p><?php the_content(); ?></p></div>
			<?php 
			endwhile;
			?>
		</div>
	</div>

	<div class="mc-block-description-celestin">

		<div class="container mc-description-celestin center-block">
			
			<?php
				$the_query = new WP_Query(array('category_name' => 'celestin'));
			    while ( $the_query->have_posts() ) :
			    $the_query->the_post();
			?>
			<h1><?php the_title();?></h1>
			<h2>Inspiring and Supporting Innovation Everywhere</h2>
			<div><p><?php the_content();?></p></div>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>
		
	</div>
</div>

<?php get_footer(); ?>