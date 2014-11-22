<?php get_header(); ?>
<div id="mc-map-canvas"></div>
<div class="mc-mts">
  
<div class="container">
  <div class="row mc-meet-shcolars">

  <h1><?php the_title(); ?></h1>
  <div class="center-block">
    <ul class="mc-grid">
      <?php 
      $args = array ( 'category' => 2, 'posts_per_page' => -1);
      $myposts = get_posts( $args );
      foreach( $myposts as $post ) : setup_postdata($post);
      $post_categories = wp_get_post_categories( $post->ID );
      $categories = get_the_category($post->ID);
      $name = get_cat_name( $cat_id );
      
      ?>
      <li>
        <a href="#" class="mc-modal-href" data-toggle="modal" data-target="#<?php echo $slug = basename(get_permalink());?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail(); ?>
        <div><h3><?php  echo the_title(); ?></h3></div></a>
      </li>
      
      
      <?php 
        endforeach; 
      ?>
    </ul>
  </div>

    </div><!-- end  row mc-meet-shcolars-->
</div><!-- end container -->
</div>

<?php 
  $args = array ( 'category' => 2, 'posts_per_page' => -1);   
  $myposts = get_posts( $args );
  foreach( $myposts as $post ) : setup_postdata($post);
  $post_categories = wp_get_post_categories( $post->ID );
  $categories = get_the_category($post->ID);   
  $name = get_cat_name( $cat_id );
?>
  <div class="modal fade mc-modal" id="<?php echo $slugModal= basename(get_permalink()); ?>" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <?php the_post_thumbnail(); ?>
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h1><?php  echo the_title();   ?></h1>
          <p><?php  echo the_content();  ?></p>
        </div>
      </div>
    </div>
  </div>
 

<?php endforeach; ?>


<?php get_footer(); ?>