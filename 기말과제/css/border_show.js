$(document).ready(function(){
  $(".hidden").hide();

  $(".show_message_content").css({
    "width" : "1000px",
    "height" : "60%"
  });

  $(".border_input_table").css({
    "text-align" : "left",
    "border" : "1px solid black"
  });

  $(".for_input").css({
    "text-align" : "center",
    "width" : "200px",
    "font-size" : "20px"
  });

  $(".show_nick").css({
    "width" : "600px",
    "font-size" : "20px"
  });

  $(".show_subject").css({
    "width" : "600px",
    "font-size" : "20px"
  });

  $(".show_content").css({
    "width" : "90%",
    "font-size" : "20px",
    "resize" : "none"
  });

  $(".move_list").css({
    "display" : "inline-block",
    "width" : "100px",
    "height" : "30px",
    "margin" : "20px 5px 20px 5px",
    "position" : "relative",
    "left" : "36%",
    "text-align" : "center",
    "background-color" : "#CEBEE1",
    "font-size" : "20px"
  });

  $(".move_delete").css({
    "display" : "inline-block",
    "width" : "100px",
    "height" : "30px",
    "margin" : "20px 5px 20px 5px",
    "position" : "relative",
    "left" : "36%",
    "text-align" : "center",
    "background-color" : "#CEBEE1",
    "font-size" : "20px"
  });

  $(".move_list").click(function(){
    location.replace("../MessageBoard/list.php");
  });

  $(".move_delete").click(function(){
    var num = $(".move_delete").val();
    location.replace("../MessageBoard/delete.php?num="+num);
  });
});
