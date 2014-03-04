<?php get_header(); ?>
<?php get_header('slider'); ?>    
     
<div class="panel featured dropshadow">
  <div class="row">
      <div class="large-12 columns">
      <h1 style="margin-top: 0px; margin-bottom: 1em;">The Lonely Island</h1>
      <div class="row">
        <div class="large-4 columns">
          <h3>Buy our music!</h3>
          <ul class="large-block-grid-2 small-block-grid-4">
            <li><a href="#"><img src="<?php bloginfo('template_directory');?>/images/live1.jpg" alt="album 1"/></a></li>
            <li><a href="#"><img src="<?php bloginfo('template_directory');?>/images/live2.jpg" alt="album 2"/></a></li>
            <li><a href="#"><img src="<?php bloginfo('template_directory');?>/images/live3.jpg" alt="album 3"/></a></li>
            <li><a href="#"><img src="<?php bloginfo('template_directory');?>/images/live4.jpg" alt="album 4"/></a></li>
        </div>
        <div class="large-8 columns">
          <h3>Come see us live!</h3>
          <table>
            <thead>
              <tr>
                <th>Dates</th>
                <th>City</th>
                <th>Venue</th>
                <th>Pre-sale</th>
                <th>On Sale</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>06/19/14</td>
                <td>Dover, DE</td>
                <td>Firefly Music Festival</td>
                <td>02/19/14</td>
                <td>03/19/14</td>
                <td><button class="button tiny nomargin">Buy Tickets!</button></td>
              </tr>
              <tr>
                <td>07/09/14</td>
                <td>Madrid, Spain</td>
                <td>La Riviera</td>
                <td>02/19/14</td>
                <td>03/19/14</td>
                <td><button class="button tiny nomargin">Buy Tickets!</button></td>
              </tr>
              <tr>
                <td>07/10/14</td>
                <td>Rome, Italy</td>
                <td>Rock in Roma Festival</td>
                <td>02/19/14</td>
                <td>03/19/14</td>
                <td><button class="button tiny nomargin">Buy Tickets!</button></td>
              </tr>
              <tr>
                <td>07/15/14</td>
                <td>Paris, France</td>
                <td>La Belle Rieve</td>
                <td>02/19/14</td>
                <td>03/19/14</td>
                <td><button class="button tiny nomargin">Buy Tickets!</button></td>
              </tr>
              <tr>
                <td>07/18/14</td>
                <td>Los Angeles, CA</td>
                <td>Staples Center</td>
                <td>02/19/14</td>
                <td>03/19/14</td>
                <td><button class="button tiny nomargin">Buy Tickets!</button></td>
              </tr>
              <tr>
                <td>07/20/14</td>
                <td>Boston, MA</td>
                <td>The House of Blues</td>
                <td>02/19/14</td>
                <td>03/19/14</td>
                <td><button class="button tiny nomargin">Buy Tickets!</button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>        
    </div>
  </div>
</div>

    

       

    <div class="row">
      <!-- Recent Blog posts -->
      <div class="large-7 columns">
      <dl class="tabs" data-tab>
        <dd><h2><b>The Latest:</b></h2></dd>
        <dd style="float: right;"><a href="#panel2-2">Music</a></dd>
        <dd class="active" style="float: right;"><a href="#panel2-1">News</a></dd>
      </dl>
      <div class="tabs-content">
        <div class="content active" id="panel2-1">
          <?php
            $sticky = get_option( 'sticky_posts' );
            $args = array(
              'category_name' => 'news',
              'ignore_sticky_posts' => 1,
              'post__not_in' => $sticky,
            );
            $query = new WP_Query( $args );
          ?>
          <?php if ( have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
            <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
            <h6 class="subheader">Written by <?php the_author(); ?> on <?php the_time('F j, Y'); ?></h6>
            <?php the_excerpt();?>
            <p><a class="button nomargin"href="<?php the_permalink();?>">Read more <i class="fi-arrow-right large"></i></a></p>

          <?php endwhile; endif; ?>
        </div>
        <div class="content" id="panel2-2">
          <?php
            $sticky = get_option( 'sticky_posts' );
            $args = array(
              'category_name' => 'music',
              'ignore_sticky_posts' => 1,
              'post__not_in' => $sticky,
            );
            $query = new WP_Query( $args );
          ?>
          <?php if ( have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
            <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
            <h6 class="subheader">Released on <?php the_time('F j, Y'); ?></h6>
            <?php the_content();?>
          <?php endwhile; endif; ?>
        </div>
      </div>
      
      </div>
      <div class="large-5 columns">
        <?php 
          $sticky = get_option( 'sticky_posts' );
          $args = array(
            'category_name' => 'news',
            'posts_per_page' => 1,
            'post__in'  => $sticky,
            'ignore_sticky_posts' => 1
          );
          $query = new WP_Query( $args );
        ?>
        <?php if ( have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
          <h3><b><?php the_title();?></b></h3>
          <?php the_content();?>

        <?php endwhile; endif; ?>  
      </div>
        
       
                
      




 
<?php get_footer(); ?>