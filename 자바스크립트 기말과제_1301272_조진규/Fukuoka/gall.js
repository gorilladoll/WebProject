$(document).ready(function(){
  $('body').css('background-color','skyblue');
  $('h1').css('text-align','center');
  $('#button').css('margin-left','500px');
  $('#button').css('width','100');
  $('#button').css('height','50');

  var button = $('#button');
  var count = 1;
  button.click(function(){
    var input = prompt("입력하시오","");
    var el = $('#body');
    el.append('<hr><div class=text>'+count+'번째 댓글<br>'+input+'</br>'+
    '<div/>');
    count++;
  });
});
