$(document).ready(function(){
  $(".section").css({
    "width" : "100%",
    "height" : "60%"
  });

  $(".board_title h1").css("font-size","30px");

  $(".board_subtitle h3").css("font-size","20px");

  $(".board_main table").css({
    "width" : "100%",
    "height" : "5%",
    "text-align" : "center"
  });

  $("[name=msg_show] a").css({
    "text-decoration" : "none",
    "color" : "black"
  });

  $("[name=board_num]").css("width","10%");

  $("[name=board_writer]").css("width","10%");

  $("[name=board_subject]").css("width","60%");

  $("[name=board_date]").css("width","20%");

  $(".board_write").css({
    "background-color" : "#CEBEE1",
    "width" : "100px",
    "height" : "30px",
    "text-align" : "center",
    "font-size" : "20px"
  });

  $(".for_define").mouseover(function(){
    $(this).css({
      "background-color" : "#d2d2d2"
    });
  });

  $(".for_define").mouseout(function(){
    $(this).css({
      "background-color" : "ivory"
    });
  });

  $(".board_write").click(function(){
    location.replace("../MessageBoard/input.php");
  });
});
