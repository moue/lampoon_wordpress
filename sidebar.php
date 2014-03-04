
<div class="large-4 hide-for-small-only columns highlight"> <!-- Sidebar right -->
            

   <div class="panel">
    <h4>Recent Posts</h4>
    <hr>
    <ul style="list-style: none; padding: 0; margin: 0;">
    <?php
    $myposts = get_posts('numberposts=-1&offset=0');
    foreach($myposts as $post) :
    ?>
    <li><h6><?php the_time('d.m.y') ?></h6><p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p></li>

    <?php endforeach; ?>
    </ul>
            
  </div>

  <!--<div class="panel radius">
  <?php
  $page_id = "7187318041";
  $xml = @simplexml_load_file("http://api.facebook.com/restserver.php?method=facebook.fql.query&query=SELECT%20fan_count%20FROM%20page%20WHERE%20page_id=".$page_id."") or die ("a lot");
  $fans = $xml->page->fan_count;
  echo $fans;
  ?>


  </div>-->
<div class="wb-twitter-wrapper">
    <div class="wb-overlay-line"></div>
    <a 
        class="twitter-timeline"
        href="https://twitter.com/thelonelyisland" 
        data-widget-id="438144626155724800"
        data-chrome="noborders">Tweets by @thelonelyisland</a>
</div>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

            


   

    
   
     


        
  
</div> <!--End Sidebar right -->