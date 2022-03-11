(function($) {

  /**
   * Copyright 2012, Digital Fusion
   * Licensed under the MIT license.
   * http://teamdf.com/jquery-plugins/license/
   *
   * @author Sam Sehnert
   * @desc A small plugin that checks whether elements are within
   *     the user visible viewport of a web browser.
   *     only accounts for vertical position, not horizontal.
   */

  $.fn.visible = function(partial) {

      var $t            = $(this),
          $w            = $(window),
          viewTop       = $w.scrollTop(),
          viewBottom    = viewTop + $w.height(),
          _top          = $t.offset().top,
          _bottom       = _top + $t.height(),
          compareTop    = partial === true ? _bottom : _top,
          compareBottom = partial === true ? _top : _bottom;

    return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

  };

})(jQuery);

$(window).on('scroll', function() {

  $(".about__icons__wrap li:nth-child(1), .about__icons__wrap li:nth-child(2), .about__icons__wrap li:nth-child(3), .about__icons__wrap li:nth-child(5), .about__icons__wrap li:nth-child(6), .about__icons__wrap li:nth-child(7), .partner__logo__wrap li:nth-child(1), .partner__logo__wrap li:nth-child(2), .partner__logo__wrap li:nth-child(3), .partner__logo__wrap li:nth-child(5), .partner__logo__wrap li:nth-child(6), .testimonial__avatar__img li:nth-child(1), .testimonial__avatar__img li:nth-child(2), .testimonial__avatar__img li:nth-child(3), .testimonial__avatar__img li:nth-child(5), .testimonial__avatar__img li:nth-child(6), .testimonial__avatar__img li:nth-child(7)").each(function(i, el) {
    var el = $(el);
    if (el.visible(true)) {
      el.addClass("now-in-view");
    } else {
      el.removeClass("now-in-view");
    }
  });

});