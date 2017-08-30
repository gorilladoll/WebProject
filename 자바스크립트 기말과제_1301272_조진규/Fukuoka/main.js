$(document).ready(function(){
  $('html').css('background-image','url("Fukuoka.jpg")')
  $('#main').css('font-family','arial,helvetica,sans-serif');
  $('#main').css('font-size','12px');
  $('#main').css('color','#464646');
  $('#main').css('overflow','auto');
  $('#main').css('float','left');

  $('#main iframe').css('width','1100');
  $('#main iframe').css('height','650');

  $('#main button').click(function(){
    $('#audio').toggle();
  });
});

function confirmresult(){
  if(confirm('현재 회원가입을 지원하지 않습니다 접속 하시겠습니까?') == true){
    window.open('signin.html');
  }
  else {
    return;
  }
}
