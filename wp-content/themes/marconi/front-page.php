<?php get_header(); ?>

<!-- Wrapper for slides -->

<div id="carousel-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-generic" data-slide-to="1"></li>
    <li data-target="#carousel-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->

 <div class="carousel-inner">
        <?php
          $the_query = new WP_Query(array('category_name' => 'slider-home', 'posts_per_page' => 1));
         while ( $the_query->have_posts() ) :
         $the_query->the_post();
         ?>
         <div class="item active">
            <?php the_post_thumbnail();?>
            <!-- <div class="container"> -->
              <div class="carousel-caption">
                <h4><?php the_title();?></h4>
                <p><?php the_excerpt();?></p>
              </div>
            <!-- </div> -->
          </div><!-- item active -->
        
        <?php endwhile; wp_reset_postdata(); ?>
        
        <?php
         $the_query = new WP_Query(array('category_name' => 'slider-home', 'offset' => 1));

         while ( $the_query->have_posts() ) :
         $the_query->the_post();
         ?>
         <div class="item">
            <?php the_post_thumbnail();?>
            <div class="carousel-caption">
              <h4><?php the_title();?></h4>
              <p><?php the_excerpt();?></p>
            </div>
         </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>

    <!-- END Wrapper for slides -->

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-generic" role="button" data-slide="prev"><span><i></i></span></a>
  <a class="right carousel-control" href="#carousel-generic" role="button" data-slide="next"><span class="mc-next"><i></i></span></a>
</div>

<!-- end carousel -->


    <div class="container">
    <div class="row mc-title-principal">
      <h1><span>The</span> Young Scholars <span>Paul Baran Marcony Society</span></h1>
      <p class="mc-sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>Donec eu ligula a orci ultricies sagittis non et massa.<br> Mauris enim arcu, fringilla id ornare sit amet.</p>
      <p class="mc-hint">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>Donec eu ligula a orci ultricies sagittis non et massa.</p>
    </div>

    

    <div class="row mc-resume">

    

    <?php
    $the_query_resume = new WP_Query(array('category_name' => 'resume-home', 'posts_per_page' => 3));
    while ( $the_query_resume->have_posts() ) : $the_query_resume->the_post();
    ?>
    
        <div class="col-lg-4 text-center mc-details-resume">
          <?php the_post_thumbnail();?>
          <!-- <img  class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;"> -->
          <h2><?php the_title();?></h2>
          <p><?php the_excerpt();?></p>
          <!-- <p><a class="btn btn-default" href="#" role="button">View details »</a></p> -->
        </div><!-- /.col-lg-4 -->
    <?php endwhile; ?>
        
    </div>

    <div class="row mc-titre-last-news">
        <h4><strong class="bold">THE LASTEST NEWS</strong></h4>
    </div>
    
    </div>

    <section class="mc-news">
      <div class="container">
        <div class="row">
      
      <?php
      global $post;
      $myposts = get_posts('numberposts=6&category=21');
      foreach($myposts as $post) :
      ?>

        <div class="col-xs-6 col-md-4 m-post">
          <div class="mc-post center-block">
            <h3><a class="m-title-post" href="<?php the_permalink() ?>" class="titre-post-home"><?php the_title();?></a></h3>
            <h4><?php the_time('F j, Y'); ?></h4>
            <?php the_excerpt(); ?>
          </div>
        </div>

      <?php endforeach; ?>
	   
	</div><!-- container  -->
  </section><!-- section mc-news  -->
    
   
   <!-- End container -->

<?php get_footer(); ?>