$(document).ready(function(){
  $('#left').css('padding','0px,5px,0px,0px');
  $('#left').css('float','left');
  $('#left').css('padding-right','40px');

  $('#left h1').css('font-family','Arial,Helvetica,sans-serif');
  $('#left h1').css('font-size','20px');
  $('#left h1').css('padding-left','40px');


  $('#left ul').css('font-family','Arial,Helvetica,sans-serif');
  $('#left ul').css('font-size','20px');
  $('#left ul').css('color','#FFF');
  $('#left ul').css('list-style','none');
  $('#left ul').css('text-indent','15px');
  $('#left ul').css('padding-left','10px');

  $('#left ul li').css('text-align','left');
  $('#left ul li').css('height','60px');
  $('#left ul li').css('line-height','28px');

  $('#left ul li a').css('color','black');
  $('#left ul li a').mouseover(function(){
    $(this).css('color','dimgray');
  });
  $('#left ul li a').mouseout(function(){
    $(this).css('color','black');
  });

  $('#left ul li a').mousedown(function(){
    $(this).css('color','red');
  });

  $('#left ul li a').mouseup(function(){
    $(this).css('color','black');
  });
});
