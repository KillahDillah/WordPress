<!DOCTYPE html>
<html <?php language_attributes(); /* which language is being used*/?>> 
  <head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); /*if plugin are added, wordpress can add any other code needed*/?> 
</head>

<body <?php body_class(); /* target different pages with CSS easily*/?>>
  
  <div class="container">

    <header class="site-header">
      <h1><a href="<?php echo home_url(); /*adds link to homepage*/?>"><?php bloginfo('name'); ?></a></h1>
      <h5><?php bloginfo('description'); ?><?php if (is_page(recipes/*page number/title*/)) { ?>
        - Yum!
      <?php }?><?php if (is_page(coding)) { ?>
       - All things code!
      <?php } ?></h5>

      
      
      <nav class="site-nav">
        <?php $args=array(
            'theme_location' => 'primary'
          );

          ?>
        <?php wp_nav_menu($args); /*adds all Pages as links and <li> under <ul>*/ ?>

      

      </nav>

    </header>

