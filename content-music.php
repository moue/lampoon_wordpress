
<?php
  $query = new WP_Query( 'category_name=music' );
?>

<?php if ( have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<hr>
<h3><?php the_title();?></h3>
<h6 class="subheader">Released on <?php the_time('F j, Y'); ?></h6>
<?php the_content();?>

<?php endwhile; endif; ?>