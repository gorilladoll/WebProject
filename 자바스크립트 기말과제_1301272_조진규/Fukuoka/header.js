$(document).ready(function(){
  $('header').css('text-align','center');
  $('header').css('font-size','10px');

  $('header form').css('text-align','right');

  $('header a').css('font-size','30px');
  $('header a').css('color','black');

  $('header a').mousedown(function(){
    $('header a').css('color','red');
  });

  $('header a').mouseup(function(){
    $('header a').css('color','black')
  });

  $('header a').mouseover(function(){
    $('header a').css('color','black');
    $('header a').css('font-size','35px');
  });

  $('header a').mouseout(function(){
    $('header a').css('color','black');
    $('header a').css('font-size','30px');
  });
});
