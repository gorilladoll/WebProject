$(document).ready(function(){
  var count = 0;
  $('html').css('background','ivory');

  $('h1').css('text-align','center');

  $('p').css('float','15px');

  $('#thumbnale img').css('opacity','0.5');
  $('#thumbnale img').css('z-index','0');

  $('#thumbnale img').mouseout(function(){
    $(this).css('opacity','0.5');
  });

  $('#thumbnale img').mouseover(function(){
    $(this).css('opacity','1.0');
  });
  $('#thumbnale img').click(function(){
    if(count % 2 == 0)
    {
      $(this).css('width','1100');
      $(this).css('height','650');
      $(this).css('position','absolute');
      $(this).css('z-index','100');
      $(this).css('top','0');
      $(this).css('left','0');
      count++;
    }
    else
    {
      $(this).css('width','210');
      $(this).css('height','180');
      $(this).css('position','static');
      $(this).css('z-index','0');
      count++;
    }
  });

});
