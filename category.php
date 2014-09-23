<?php get_header();?>
<!--category.php-->
<h2>Category.php</h2>

<?php 
  //Gets us an object based on the parent category selected
  $categories = get_category( get_query_var('cat'));
  //var_dump($categories);
  //Gets us the ID of the category selected from the object
  //We need this ID to feed to our custom showChildCats function below
  $categories_id = $categories->cat_ID;
  //var_dump($categories_id);
?>

<?php 
  //Custom function found in functions.php file
  //feeding it the selected categories ID
  showChildCats($categories_id);
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