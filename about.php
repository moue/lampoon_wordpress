<?php 

/*
  Template Name: About
*/

get_header(); ?>
 

<div class="row">
  <div class="large-8 columns"> <!-- Main Content Left -->
     
    <div class="row">
      <div class="large-12 columns" role="content">
        <?php get_template_part('content');?>
      </div>
    </div>
    
  </div>    <!-- Main Content Left END--> 
  <div class="large-4 columns" style="margin-top:61px;">
    <figure class="wp-caption">
      <img src="<?php bloginfo('template_directory');?>/images/about1.jpg" width=100%/>
      <p class="wp-caption-text">Here’s a picture of us! They are the identical faces we would give in response to someone coming onto this website.</p>
    </figure>
    <figure class="wp-caption">
      <img src="<?php bloginfo('template_directory');?>/images/about2.jpg" width=100%/>
      <p class="wp-caption-text">We're still waiting for our checks from YouTube.</p>
    </figure>
  </div>
</div>




<?php get_footer(); ?>