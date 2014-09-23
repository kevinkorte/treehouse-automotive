<?php get_header();?>
<!--single.php-->
<h2>Single.php</h2>

<hr>

<h3>This is just simply a default WP loop to show what the loop is returning</h3>
<p>Being a single.php page, you can now use whatever functions neccessary to bring in the data you need.</p>
<p>Options could be the_content(), the_author(), the_date(), the_post_thumbnail, or any custom field or function desired.</p>

<ul>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <li>
    <ul>
      <li>Title: <?php the_title();?></li>
      <li>Date: <?php the_date();?></li>
      <li>Author: <?php the_author();?></li>
    </ul>
  </li>

<?php endwhile; else : ?>
  <li><?php _e( 'Sorry, no posts matched your criteria.' ); ?></li>
<?php endif; ?>
</ul>

<?php get_footer();?>