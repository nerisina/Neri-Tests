<?php get_header(); ?>
<?php
	if ( is_front_page() ) {
    	get_header( 'home' );
?>
    <?php
} elseif ( is_page( 'About' ) ) {
    get_header( 'about' );
} else {
    get_header();
}
?>

<?php
	the_post();
	the_content();
?>


<?php get_footer(); ?>