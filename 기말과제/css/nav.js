$(document).ready(function(){
  $(".nav").css({
    "width" : "100%",
    "height" : "20%"
  });

  $(".mainslide").css({
    "text-align":"center",
    "background-color" : "#828282",
    "padding" : "10px",
    "border-radius" : "30px"
  });

  $(".mainslide li").css({
    "display" : "inline-block",
    "width" : "12%",
    "font-size" : "30px",
    "text-align" : "center",
    "padding" : "10px",
    "border-radius" : "30px"
  });

  $(".mainslide li").mouseover(function(){
    $(this).css("background-color","#aaaaaa");
  });

  $(".mainslide li").mouseout(function(){
    $(this).css("background-color","#828282");
  });

  $(".apple").click(function(){
    var maker = "apple";
    location.replace("./Product/apple.php?maker="+maker);
  });

  $(".apple2").click(function(){
    var maker = "apple";
    location.replace("../Product/apple.php?maker="+maker);
  });

  $(".samsung").click(function(){
    var maker = "samsung";
    location.replace("./Product/samsung.php?maker="+maker);
  });

  $(".samsung2").click(function(){
    var maker = "samsung";
    location.replace("../Product/samsung.php?maker="+maker);
  });

  $(".lg").click(function(){
    var maker = "lg";
    location.replace("./Product/lg.php?maker="+maker);
  });

  $(".lg2").click(function(){
    var maker = "lg";
    location.replace("../Product/lg.php?maker="+maker);
  });

  $(".dell").click(function(){
    var maker = "dell";
    location.replace("./Product/dell.php?maker="+maker);
  });

  $(".dell2").click(function(){
    var maker = "dell";
    location.replace("../Product/dell.php?maker="+maker);
  });

  $(".navmove").click(function(){
    location.replace("./MessageBoard/list.php");
  });

  $(".navmove2").click(function(){
    location.replace("../MessageBoard/list.php");
  });

  $(".cart").click(function(){
    location.replace("./Buy/Buylist_show.php");
  });

  $(".cart2").click(function(){
    location.replace("../Buy/Buylist_show.php");
  });
});
