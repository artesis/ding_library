(function ($) {
  "use strict";
   $(document).ready(function () {
     // Convert all notices to Tipsy tooltips.
    $('.ding-library-opened-today .library .hours .notice').each(function () {
      var $notice = $(this),
          message = $notice.text();

      if (message) {
        // Replace the notice with a star, and add a class for
        // styling that.
        $notice.text('*');
        $notice.addClass('notice-star');

        $notice.parent('.hours').attr('title', message).tipsy({
          fade: true
        });
      }
      else {
        $notice.remove();
      }
    });
  });
}(jQuery));