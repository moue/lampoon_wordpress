<!--     </div>
      <a href="#" class="exit-off-canvas"></a>

  END OFF CANVAS FOUNDATION NAVIGATION -->
    </div>

  </div>   



    
 <footer>
    <div class="row">
      <div class="large-8 columns">

   <?php
    $arg = array(
      'theme_location' => 'off-canvas',
      'menu_class'=>'inline-list'    
    );

    wp_nav_menu($arg);
  ?>  

        <p>The Lonely Island are Andy Samberg, Jorma Taccone and Akiva Schaffer. They've been making videos together since September of 2000. They met in Junior High. Nice, right?</p>
        <button class="button" data-reveal-id="formModal">Join the Mailing List</button>
        <p>Copyright © 2014 thelonelyisland.com all rights reserved.</p>


      </div>
        
      <div class="large-4 columns">
      <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fthelonelyisland&amp;width&amp;height=238&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=true&amp;appId=446971292049644" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:238px; background-color: white; opacity:0.95; margin-bottom: 1em;" allowTransparency="false"></iframe>
      </div>
    </div>
</footer>

  <!-- MODAL WINDOW -->
           
              <div id="formModal" class="reveal-modal medium" data-reveal>
                <form data-abide method="post" action="index.php">
                  

                  <h3>Please enter your email to join the mailing list.</h3>
                  <fieldset>
                  
                      <div class="email-field">
                        <label for="email">Email <small>required</small></label>
                          <input type="email" name="email" id="email" required>
                        <small class="error">An email address is required.</small>
                      </div>


                      <button class="success radius" type="submit" value="send">Submit</button>

                   
                  </fieldset> 
                </form>

                <a class="close-reveal-modal">&#215;</a>
              </div>
            <!-- MODAL WINDOW END -->








    <?php wp_footer(); ?>

  </body>


</html>
