<?php
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="vi" xml:lang="vi">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Assignment - About Us</title>
<link rel="stylesheet" type="text/css" href="../css/index.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
  .navbar, #footer {
    background-color: #880000;
  }
  #bodypage h4 {
  	color: red;
  }
  #bodypage h1{
  	font-size: 80px;
  	padding-top: 130px;
  	text-align: center;
  }
</style>
<script src="../js/jquery.min.js"></script>
<script src="../js/js-button.js"></script>
<script src="../js/js-banner.js"></script>
<script src="../js/js-show.js"></script>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
</head>
<body>
  <div id="container">
    <header id="header">
      <!--Banner-->
      <div id="banner">
        <a href="https://www.w3schools.com/" title="w3schools"><i class="fa fa-optin-monster img-logo"></i></a>
        <div class="w3-content w3-section" style="max-width:100%; max-height:350px;">
          <img class="mySlides w3-animate-left" src="../images/img_01.jpg" alt="">
          <img class="mySlides w3-animate-left" src="../images/img_02.jpg" alt="">
          <img class="mySlides w3-animate-left" src="../images/img_03.jpg" alt="">
          <img class="mySlides w3-animate-left" src="../images/img_04.jpg" alt="">
          <img class="mySlides w3-animate-left" src="../images/img_05.jpg" alt="">
          <img class="mySlides w3-animate-left" src="../images/img_06.jpg" alt="">
          <img class="mySlides w3-animate-left" src="../images/img_07.jpg" alt="">
          <img class="mySlides w3-animate-left" src="../images/img_08.jpg" alt="">
          <img class="mySlides w3-animate-left" src="../images/img_09.jpg" alt="">
          <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%;">
            <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
            <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(5)"></span>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(6)"></span>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(7)"></span>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(8)"></span>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(9)"></span>
          </div>
        </div>
        <script>
          showDivs();
        </script>
      </div> 
      <!--Top Navigation Bar-->
      <div class="navbar stick-top">
        <a href="../php/indexmain.php"><i class="fa fa-arrow-circle-o-left icon-bar" style="font-size:23px; text-shadow:2px 2px 4px #000000;"></i>BACK</a>
      </div>
      <div style="clear:both"></div>
    </header>
    <!--Body Page-->
    <div id="bodypage">
      <div id="main" class="row">
        <div class="col-sm">
        <h1><b>ABOUT US</b></h1>
		</div>
        <div class="col-sm">
        	<p><br><i>Website started in 2018. After many years in the sales industry, we realized that it is almost impossible for customers to have more time to view many items to find their favorite items. We create websites so customers can find the item that is most suitable for them. They will buy easily and do not waste time.</i></p>
        	<p><br><i>We create templates to support the maximum user. It is our responsibility to provide the best service to our customers</i></p>
        	<p><br><i>The work and power point pages are created very lively in many topics, giving customers more choices and imagination.</i></p>
        	<p><br><i>That is how we bring our customers many gadgets, thoughtful service and create the success of the website.</i></p>
        	<p><br><i>We work on the criteria: "Customer is God".</i></p><br>
        	<h4>HOTLINE: 0898910195</h4>
        </div>
      </div>
      <div style="clear:both"></div>
    </div>
    <!--Footer-->
    <footer id="footer">
      <div class="footer-left">
        <a href="../php/about.php">Contact Us</a> 
        <a>&copy; 2018 Topic 4 - Group L02. All Rights Reserved.</a>
      </div>
      <div class="footer-right">
        <a href="https://www.facebook.com/phuongnam09071997" title="Facebook">
          <i class="fa fa-facebook-square fa-2x icon-bar-footer"></i></a>
        <a href="https://youtu.be/FERRGoSJ6Uo" title="YouTube">
          <i class="fa fa-twitter-square fa-2x icon-bar-footer"></i></a>
        <a href="https://mail.google.com/mail/" style="top:6px;" title="Gmail">
          <i class="material-icons icon-bar-footer" style="font-size:28px">mail</i></a>
      </div>
      <div style="clear:both"></div>
    </footer>
  </div>
  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-chevron-up fa-2x"></i></button> 
  <div class="listdropmenu">
    <button class="dropmenu" style="top: 30%;" onclick="location.href='../php/indexmain.php'"><i class="fa fa-home"></i></button> 
    <!-- <button class="dropmenu" style="top: 37%;" onclick="location.href='../php/powerpoint.php'"><i class="fa fa-file-powerpoint-o"></i></button> 
    <button class="dropmenu" style="top: 44%;" onclick="location.href='../php/word.php'"><i class="fa fa-file-word-o"></i></button> 
    <button class="dropmenu" style="top: 51%;" onclick="location.href='../php/web.php'"><i class="fa fa-firefox"></i></button> 
    <button class="dropmenu" style="top: 58%;" onclick="location.href='../php/more.php'"><i class="fa fa-ellipsis-h"></i></button> 
    <button class="dropmenu" style="top: 65%;" onclick="location.href='../php/about.php'"><i class="fa fa-info-circle"></i></button>
    <button class="dropmenu" style="top: 72%;" onclick="location.href='../php/signin.php'"><i class="fa fa-user-circle-o"></i></button>  -->
  </div>
  <script src="../js/js-show.js"></script>
</body>
</html>
