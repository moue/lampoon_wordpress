<aside class="left-off-canvas-menu">
  <ul class="off-canvas-list">
   <?php
    $arg = array(
      'theme_location' => 'off-canvas',
      'items_wrap' => '%3$s',
      'container' => '' 
    );

    wp_nav_menu($arg);
  ?>  
  </ul>
</aside>
