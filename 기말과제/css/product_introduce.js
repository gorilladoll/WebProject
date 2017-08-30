$(document).ready(function(){
  $(".Product_introduce").css({
    "width" : "100%",
    "height" : "100%"
  });

  $(".Product_introduce table").css({
    "width" : "800px",
    "height" : "600px",
    "font-weight" : "bold",
    "font-size" : "30px",
    "text-align" : "left"
  });

  $(".Product_introduce table tr th").css({
    "background-color":"#ACFFEF",
    "border-radius" : "20px",
    "text-align" : "center"
  });


  $(".Product_introduce table tr td img").css({
    "width" : "400px",
    "height" : "400px"
  });

  $(".Product_introduce table tr td button").css({
    "width" : "150px",
    "height" : "50px",
    "border-radius" : "15px",
    "font-size" : "20px",
    "background-color" : "#F0B6B6",
    "position" : "relative",
    "left" : "43%"
   });

  $(".for_buy").click(function(){
    var serial = $(".for_buy").val();
    location.replace("../Buy/Buylist.php?serial="+serial);
  });
});
