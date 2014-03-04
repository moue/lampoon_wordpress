<?php
  $query = new WP_Query( 'category_name=news' );
?>

<?php if ( have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<hr>
<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
<h6 class="subheader">Written by <?php the_author(); ?> on <?php the_time('F j, Y'); ?></h6>
<article>
<?php the_excerpt();?>
<p><a class="button"href="<?php the_permalink();?>">Read more <i class="fi-arrow-right large"></i></a></p>
</article>

<?php endwhile; endif; ?>