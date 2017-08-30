$(document).ready(function(){
  $(".header").css({
    "width" : "100%",
    "height" : "100px"
  });
  $("#homeicon").css({
    "display" : "inline-block",
    "width" : "30%",
    "height" : "100px",
    "padding-left" : "5%",
    "float" : "left"
  });

  $("#homeicon img").css({
    "width" : "100px",
    "height" : "100px"
  });

  $("#main_title").css({
    "display" : "inline-block",
    "width" : "30%",
    "height" : "100px"
  });

  $("#main_title h1").css({
    "text-align" : "center",
    "color" : "gray"
  });

  $("#main_title h1").mouseover(function(){
    $("#main_title h1").css("color","black");
  });

  $("#main_title h1").mouseout(function(){
    $("#main_title h1").css("color","gray");
  });

  $(".main_login").css({
    "display" : "inline-block",
    "width" : "25%",
    "height" : "100px",
    "text-align" : "right"
  });

  $("#login").css({
    "display" : "inline-block",
    "width" : "15%",
    "height" : "100px",
    "text-align" : "center",
    "font-size" : "15px",
    "color" : "gray"
  });

  $("#signin").css({
    "display" : "inline-block",
    "width" : "15%",
    "height" : "100px",
    "text-align" : "center",
    "font-size" : "15px",
    "color" : "gray"
  });

  $("#login_success").css({
    "display" : "inline-block",
    "width" : "20%",
    "height" : "100px",
    "text-align" : "center",
    "font-size" : "15px"
  });

  $("#logout").css({
    "display" : "inline-block",
    "width" : "20%",
    "height" : "100px",
    "text-align" : "center",
    "font-size" : "15px",
    "color" : "gray"
  });

  $("#login2").css({
    "display" : "inline-block",
    "width" : "15%",
    "height" : "100px",
    "text-align" : "center",
    "font-size" : "15px",
    "color" : "gray"
  });

  $("#signin2").css({
    "display" : "inline-block",
    "width" : "15%",
    "height" : "100px",
    "text-align" : "center",
    "font-size" : "15px",
    "color" : "gray"
  });

  $("#login_success2").css({
    "display" : "inline-block",
    "width" : "20%",
    "height" : "100px",
    "text-align" : "center",
    "font-size" : "15px"
  });

  $("#logout2").css({
    "display" : "inline-block",
    "width" : "20%",
    "height" : "100px",
    "text-align" : "center",
    "font-size" : "15px",
    "color" : "gray"
  });

  $("#login").mouseover(function(){
    $("#login").css("color","black");
  });

  $("#signin").mouseover(function(){
    $("#signin").css("color","black");
  });

  $("#login").mouseout(function(){
    $("#login").css("color","gray");
  });

  $("#signin").mouseout(function(){
    $("#signin").css("color","gray");
  });

  $("#logout").mouseover(function(){
    $("#logout").css("color","black");
  });

  $("#logout").mouseout(function(){
    $("#logout").css("color","gray");
  });

  $("#login").mouseover(function(){
    $("#login").css("color","black");
  });

  $("#signin").mouseover(function(){
    $("#signin").css("color","black");
  });

  $("#login2").mouseout(function(){
    $("#login2").css("color","gray");
  });

  $("#signin2").mouseout(function(){
    $("#signin2").css("color","gray");
  });

  $("#logout2").mouseover(function(){
    $("#logout2").css("color","black");
  });

  $("#logout2").mouseout(function(){
    $("#logout2").css("color","gray");
  });

  $("#login").click(function(){
    window.open("./login/login_form.php");
  });

  $("#signin").click(function(){
    window.open("./signin/signin_form.php");
  });

  $("#logout").click(function(){
    location.replace("./login/logout.php");
  });

  $("#login2").click(function(){
    window.open("../login/login_form.php");
  });

  $("#signin2").click(function(){
    window.open("../signin/signin_form.php");
  });

  $("#logout2").click(function(){
    location.replace("../login/logout.php");
  });
});
