// makes the flash msg go away

setTimeout(function(){
  $('#flash').hide();
}, 4000);


// img carousel slider

$(document).ready(function() {
  $('.carousel-control-prev').on('click', function(e) {
    e.preventDefault();
    $('#carouselExampleIndicators').carousel('prev');
  });

  $('.carousel-control-next').on('click', function(e) {
    e.preventDefault();
    $('#carouselExampleIndicators').carousel('next');
  });

  $('#carouselExampleIndicators').on('slide.bs.carousel', function (e) {
    var slideTo = $(e.relatedTarget).index();
    $('.carousel-indicators li').removeClass('active');
    $('.carousel-indicators li:eq(' + slideTo + ')').addClass('active');
  });

  $(window).focus(function() {
    $('.carousel').carousel('pause');
  });
  $(window).blur(function() {
    $('.carousel').carousel('pause');
  });
});
