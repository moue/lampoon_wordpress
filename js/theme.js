jQuery(document).ready(function($) {
  // Inside of this function, $() will work as an alias for jQuery()
  // and other libraries also using $ will not be accessible under this shortcut
  $(document).foundation();

    $(".toggle-nav").click(function(e) {
      if ($(this).attr("href") == "#")
          e.preventDefault();
      
      $("#page").toggleClass("navigating");
      $("#top-bar").toggleClass("expanded");
	});
});

