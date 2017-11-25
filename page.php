<?php /*This powers ALL pages*/

get_header(); 

if (have_posts()):
  while (have_posts()) : the_post(); /* anything between here and ___, gets repeated for each post*/ ?>

  <article class="post-page">

    <span class="parent-link"><a href="#"></a></span>
     <?php 
      $args=array (
        'child_of' => get_top_ancestor_id(), 'title-li' => ' '
      );
    ?>

    <?php wp_list_pages($args/*function '$args' in head/footer do NOT carry over*/); ?>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
  </article>

  <?php endwhile; /* here, stops repeating*/

  else : echo '<p> No content found</p>';

  endif;

  get_footer();

?>