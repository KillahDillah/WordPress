<!DOCTYPE html>
<html <?php language_attributes(); /* which language is being used*/?>> 
  <head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); /*if plugin are added, wordpress can add any other code needed*/?> 
</head>

<body <?php body_class(); /* target different pages with CSS easily*/?>>

  <header class="site-header">
    <h1><?php bloginfo('name'); ?></h1>

