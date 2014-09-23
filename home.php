<?php get_header();?>
<!--home-->
<h2>Home.php</h2>

<?php 
  //Used default WP function to list categories taxonomy
  //depth=1 shows only parent categories
  //if custom markup is needed, may need to create new custom function
  wp_list_categories('depth=1' );
?>

<hr>
<h3>This is just simply a default WP loop to show what the loop is returning</h3>
<ul>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <li><?php the_title();?></li>

<?php endwhile; else : ?>
  <li><?php _e( 'Sorry, no posts matched your criteria.' ); ?></li>
<?php endif; ?>
</ul>

<?php get_footer();?>