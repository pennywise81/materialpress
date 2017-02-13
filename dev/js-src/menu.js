(function($) {
  $('.menu-main .menu-items').slideToggle(0);

  $('.menu-main .menu-title a').on('click', function(e) {
    $('.menu-main .menu-items').slideToggle(100);
    e.preventDefault();
  });
})(jQuery);