jQuery(document).ready(function($) {
  // Banners
  $('.bannerHome').slick({
    dots: false,
    arrows:true,
    autoplay:true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear'
  });

  // gera navegação fluida
  var $doc = $('html, body');
  $('a').click(function() {
      $doc.animate({
          scrollTop: $( $.attr(this, 'href') ).offset().top
      }, 500);
      return false;
  });
});
