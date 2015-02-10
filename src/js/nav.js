jQuery(document).ready(function($) {

  // Make header sticky
  $(function(){

    createSticky($("#site-navigation"));

  });

  function createSticky(sticky) {

    if (typeof sticky != "undefined") {

      var	pos = sticky.offset().top,
        win = $(window);

      win.on("scroll", function() {

        if( win.scrollTop() > pos ) {
          sticky.addClass("fixed");
        } else {
          sticky.removeClass("fixed");
        }
      });
    }
  }

});
