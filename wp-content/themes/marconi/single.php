<?php get_header(); ?>
<div class="mc-single-post">
<div class="container mc-single">
  <div class="main single row">
  <div class=" col-md-8 mc-post-single">
  	<?php if (have_posts()) : ?>
   	<?php while (have_posts()) : the_post(); ?>
      <div class="post">
        <h1 class="post-title">
        <?php 
        the_title(); 
        ?></h1>
        <p class="post-info">
          Post date <?php the_date(); ?> by <?php the_author(); ?>.
        </p>
        <div class="post-content">
          <?php the_content(); ?>
        </div>
        <div class="post-comments">
          <?php comments_template(); ?>
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div><!--  End class main single -->
<div class="col-md-1"></div>
<div class="col-md-3">
  <div class="mc-lastest-post">
  <h3>Lastest News</h3>
    <ul>
      <?php $the_query = new WP_Query( 'showposts=10' ); ?>

      <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
      <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
      <?php endwhile;?>
    </ul>
  </div>
  <div class="mc-share">
    <a href="https://www.facebook.com/MarconiSociety" class="mc-fb" target="_blank">Facebook</a>
    <a href="https://twitter.com/marconisociety" class="mc-tw" target="_blank">Twitter</a>
    <a href="https://twitter.com/marconisociety" class="mc-gg" target="_blank">Google +</a>
    <a href="https://twitter.com/marconisociety" class="mc-lk" target="_blank">Linkedin</a>
  </div>
</div><!--  End class mc-lastest-post -->

</div><!--  End class row -->
</div><!--  End class container mc-single -->
</div><!--  End class mc-single-post -->

<?php get_footer(); ?>