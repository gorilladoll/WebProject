$(document).ready(function(){
  $('nav').css('margin','10px');

  $('nav ul').css('list-style','none');
  $('nav ul').css('text-align','center');
  $('nav ul').css('border-top','1px solid white');
  $('nav ul').css('border-bottom','1px solid white');
  $('nav ul').css('padding','10px 0');

  $('nav ul li').css('display','inline-block');
  $('nav ul li').css('padding','0 25px');
  $('nav ul li').css('letter-spacing','10px');

  $('nav ul li a').css('color','black');
  $('nav ul li a').css('font-size','15px');


  $('nav ul li a').mouseover(function(){
    $(this).css('font-size','20px');
  });
  $('nav ul li a').mouseout(function(){
    $(this).css('font-size','15px');
  });

  $('nav ul li a').mousedown(function(){
    $(this).css('color','red');
    $(this).css('font-size','20px');
  });

  $('nav ul li a').mouseup(function(){
    $(this).css('color','black');
  });
});
