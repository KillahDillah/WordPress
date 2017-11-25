<?php /* Template Name: Multi */

get_header(); 

if (have_posts()):
  while (have_posts()) : the_post(); /* anything between here and ___, gets repeated for each post*/ ?>

  <article class="post-page">
    <h2><?php the_title(); ?></h2>

    <div class="info-box">
      <h4>Disclaimer Title</h4>
      <p>test</p>
    </div>

    <?php the_content(); ?>
  </article>

  <?php endwhile; /* here, stops repeating*/

  else : echo '<p> No content found</p>';

  endif;

  get_footer();

?>