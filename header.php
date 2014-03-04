<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Lonely Island Fan Page</title>

    <?php wp_head(); ?>
  </head>

  <body <?body_class();?> >

  <!-- OFF CANVAS FOUNDATION NAVIGATION -->  
  <div class="fixed">
    <nav class="top-bar" data-topbar>
      <ul class="title-area">
        <li class="name">
          <h1 class="title"><a href="<? bloginfo('url'); ?>">The Lonely Island</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
      </ul>

      <section class="top-bar-section">

        <!-- Left Nav Section -->
    
        <!-- Right Nav Section -->
        <ul class="right">
         <?php
          $arg = array(
            'theme_location' => 'off-canvas',
            'items_wrap' => '%3$s',
            'container' => '' 
          );

          wp_nav_menu($arg);
        ?>  
        </ul>
        <ul class="left hide-for-medium-only" style="padding-top: 8px; padding-left: 1em;">
          <a href="#"><i class="fi-social-facebook large"></i></a>
          <a href="#"><i class="fi-social-twitter large"></i></a> 
          <a href="#"><i class="fi-social-instagram large"></i></a> 
          <a href="#"><i class="fi-social-pinterest large"></i></a> 
          <a href="#"><i class="fi-social-reddit large"></i></a>
          <a href="#"><i class="fi-social-tumblr large"></i></a>
        </ul>

      </section>
    </nav>
  </div>

    <!--<div class="off-canvas-wrap"> 

      <div class="inner-wrap">
        <nav class="tab-bar">
          <section class="left-small">
            <a href="#" class="left-off-canvas-toggle menu-icon"><span></span></a>
          </section>

          <section class="middle tab-bar-section">
            <h1 class="title"><a href="<? bloginfo('url'); ?>">The Lonely Island</a></h1>
          </section>
        </nav>
        <?php get_sidebar('off-canvas');?>
    -->   
    
        <?php if(!is_front_page()): ?>
          <div class="panel featured dropshadow banner">
            <div class="row">
                <div class="large-12 columns">
                <h1>The Lonely Island</h1>

              </div>
            </div>

          </div>
        <? endif; ?>