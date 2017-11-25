<?php /* Template Name: Coding */

get_header();

if (have_posts()) :
  while (have_posts()) : the_post(); /* anything between here and ___, gets repeated for each post*/ ?>

  <article class="post-page">
    <nav class="site-nav child-links clearfix">
      <span class="parent-link"><a href="<?php echo get_the_permalink(get_top_ancestor_id()); ?>"><?php echo get_the_title(get_top_ancestor_id()); ?></a></span>
      <ul>
        <?php 
          $args = array(
            'child_of' => get_top_ancestor_id(), 'title_li' => ''
          );
        ?>
        <?php wp_list_pages($args/*function '$args' in head/footer do NOT carry over*/); ?>
      </ul>
    </nav>
    <div class="column-container clearfix">

      <div class="info-box">
      <h4>Disclaimer Title</h4>
      <p>test</p>
    </div>

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