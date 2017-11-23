
<footer class="site-footer">

  <nav class="site-nav">

    <?php $args=array(
        'theme_location' => 'footer'
      );

      ?>
    <?php wp_nav_menu(); /*adds all Pages as links and <li>*/ ?>
  </nav>

  <p><?php bloginfo('name'); /*name of site*/?> - &copy; <?php echo date('Y'); /*current date*/ ?></p>

</footer>

</div><!-- container --> 

<?php wp_footer(); /*add plugins or widgets later, WP can add additional code if needed*/?>

</body>
</html>