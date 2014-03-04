<?php 

/*
  Template Name: Music Gallery
*/

get_header(); ?>
 

  <div class="row">
    <div class="large-8 medium-12 columns"> <!-- Main Content Left -->
    <h1>Music</h1>
      <!-- Recent Blog posts -->

     
    <div class="row">
    <div class="large-12 columns" role="content">

      <?php get_template_part('content', 'music');?>
      
    </div>
  </div>
      
     
              
    
</div>    <!-- Main Content Left END--> 
<?php get_sidebar();?>





<?php get_footer(); ?>