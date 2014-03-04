         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      
      <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
<h6 class="subheader">Written by <?php the_author(); ?> on <?php the_time('F j, Y'); ?></h6>
        <article>
        	
          

          <?php the_content();?>
          
        </article>

        <hr>
        <h2>Comments</h2>

        <?php //comments_template("", true); 

        ob_start(); 
        comment_form($comments_args, $post_id);
        $form = ob_get_clean(); 
        $form = str_replace('class="comment-form"','class="comment-form my-class"', $form);
        echo str_replace('id="submit"','class="button"', $form);?>

      <?php endwhile; endif; ?>