<?php get_header(); ?>
 
   

  <div class="row">
    <div class="large-8 medium-12 columns"> <!-- Main Content Left -->
    <h1>News</h1>
      <!-- Recent Blog posts -->

     
    <div class="row">
    <div class="large-12 columns" role="content">

      <?php get_template_part('content', 'news');?>
      
    </div>
  </div>
      
     
              
    
</div>    <!-- Main Content Left END--> 
<?php get_sidebar();?>





<?php get_footer(); ?>