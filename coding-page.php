<?php

get_header();

if (have_posts()):
  while (have_posts()) : the_post(); /* anything between here and ___, gets repeated for each post*/ ?>

  <article class="post-page">

    <div class="colum-container clearfix">

      <div class="title-column">
        <h2><?php the_title(); ?></h2>
      </div>
      <div class="text-column">
        <?php the_content(); ?>
      </div>

    </div>

    
    
  </article>

  <?php endwhile; /* here, stops repeating*/

  else : echo '<p> No content found</p>';

  endif;

  get_footer();

?>