$.get('json.json', function(data) {
  console.log(data);
  var goal= data.goal;
  var table=$('#goal');
  for(var i in goal){
    var sub = goal[i];
    var cnt=0;
    for(var prop in sub){
      var text=sub[prop];
      var tr=table.find('tr').eq(parseInt(i)+1);
      var td=tr.find('>td').eq(cnt+1);
      td.text(text);
      cnt++;
    }
  }
}, 'json');

$(document).ready(function(){
  $('table').css('background-image','url("tablebg.jpg")');
  $('table').css('width','1000');
  $('table').css('height','600');
  $('table').css('text-align','center');

  $('.head td').css('color','#EA80FC');
  $('.head td').css('font-size','30px');

  $('.sub_1').css('color','#FFECB3');
  $('.sub_1').css('font-size','30px');
  $('.sub_1 td').css('color','#FFECB3');
  $('.sub_1 td').css('font-size','30px');

  $('.sub_2').css('color','#69F0AE');
  $('.sub_2').css('font-size','30px');
  $('.sub_2 td').css('color','#69F0AE');
  $('.sub_2 td').css('font-size','30px');

  $('.sub_3').css('color','#80DEEA');
  $('.sub_3').css('font-size','30px');
  $('.sub_3 td').css('color','#80DEEA ');
  $('.sub_3 td').css('font-size','30px');

  $('.sub_4').css('color','#BDBDBD');
  $('.sub_4').css('font-size','30px');
  $('.sub_4 td').css('color','#BDBDBD');
  $('.sub_4 td').css('font-size','30px');
});
