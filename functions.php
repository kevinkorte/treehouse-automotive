 <?php

function showChildCats($parent_category) {
  echo "<ul>";
  $categories = get_categories(array('parent' => $parent_category, 'hide_empty' => 0));  
    foreach ($categories as $category) {
      $posts_from_cat = get_posts(array('category' => $category->term_id));
      foreach ( $posts_from_cat as $post_from_cat) {
        //Can't get the post ID needed for the get_permalink function to work
        //without setting up a foreach loop on the get_posts function
        //There may be a better way to do this
      }?>
      <li><a href="<?php echo get_permalink($post_from_cat->ID);?>"><?=$category->cat_name;?></a></li>
    <?php } //ends category foreach loop
  echo "</ul>";
} //ends function