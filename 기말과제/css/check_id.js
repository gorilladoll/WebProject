$(document).ready(function(){
  $("body").css({
    "width" : $(window).width("200"),
    "height" : $(window).height("60"),
    "background-color" : "ivory"
  });

  $("button").click(function(){
    window.close();
  });
});
