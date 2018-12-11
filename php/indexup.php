<?php
session_start();
include_once 'config.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="vi" xml:lang="vi"> 
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Upload File</title>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="../css/fa-stars.css">

<style>
	.alert {
		border-radius: 10px;
		width: 50%;
	    padding: 15px;
	    background-color: #f44336;
	    color: white;
	}

	.alert.success {background-color: #4CAF50;}

	.closebtn {
	    margin-left: 15px;
	    color: white;
	    font-weight: bold;
	    float: right;
	    font-size: 22px;
	    line-height: 20px;
	    cursor: pointer;
	    transition: 0.3s;
	}

	.closebtn:hover {
	    color: black;
	}
    .fillin{
      border-radius: 10px;
      text-align: center;
    }
    .inpf::-webkit-file-upload-button {
	  visibility: hidden;
	}
    .inpf {
      text-align: center;
      background-color: #eaeaea;
      width: 350px;
      font-size: 15px;
      border-radius: 20px;
      padding:0px;
      margin-right: 200px;
      border: 2px solid #a5a5a5;
  	  cursor: pointer;
  	  font-family: 'Poppins', sans-serif;
  	  font-weight: 600;
  	  line-height: 3rem;
    }
    .button0 {
    	border-radius: 5px;
	    background-color: #4CAF50; /* Green */
	    border: none;
	    color: white;
	    padding: 8px 16px;
	    text-align: center;
	    text-decoration: none;
	    display: inline-block;
	    font-size: 16px;
	    margin: 4px 2px;
	    -webkit-transition-duration: 0.4s; /* Safari */
	    transition-duration: 0.4s;
	    cursor: pointer;
	    margin-left: 130px;
	}
	.button2 {
	    background-color: white; 
	    color: black; 
	    border: 2px solid #008CBA;
	}
	.button2:hover {
	    background-color: #008CBA;
	    color: white;
	}
    th{
      text-align: center;
      font-size: 19px;
      font-style: bold;
    }
    td{
      font-size: 19px;
    }
    tr:nth-child(even) {background-color: #f2f2f2;}
</style>

<script src="../js/jquery.min.js"></script>
<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/js-button.js"></script>
<script src="../js/js-banner.js"></script>
<script src="../js/js-show.js"></script>
<script src="../js/jquery.star-rating.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="../css/index_home.css">
<!--[if lt IE 8]><link rel="stylesheet" href="css/fa-stars-ie7.css"><![endif]-->
<script> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>
<body> 
  <div id="container">
    <header id="header">
      <!--Banner-->
      <div id="banner">
      <a href="https://www.w3schools.com/" title="w3schools"><i class="fa fa-optin-monster img-logo"></i></a>
        <div class="w3-content w3-section" style="max-width:100%; max-height:350px;">
          <img class="mySlides w3-animate-right" src="../images/img_01.jpg" alt="">
          <img class="mySlides w3-animate-right" src="../images/img_02.jpg" alt="">
          <img class="mySlides w3-animate-right" src="../images/img_03.jpg" alt="">
          <img class="mySlides w3-animate-right" src="../images/img_04.jpg" alt="">
          <img class="mySlides w3-animate-right" src="../images/img_05.jpg" alt="">
          <img class="mySlides w3-animate-right" src="../images/img_06.jpg" alt="">
          <img class="mySlides w3-animate-right" src="../images/img_07.jpg" alt="">
          <img class="mySlides w3-animate-right" src="../images/img_08.jpg" alt="">
          <img class="mySlides w3-animate-right" src="../images/img_09.jpg" alt="">
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
      <div class="navbar" >
        <a href="../php/indexmain.php"><i class="fa fa-home icon-bar"></i>Home</a>
        <div class="dropdown">
          <button class="dropbtn">
            <i class="fa fa-clone icon-bar"></i>Templates
            <i class="fa fa-caret-down"></i>
          </button>
          <div  class="dropdown-content">
            <a href="../php/powerpoint.php"><i class="fa fa-file-powerpoint-o icon-bar"></i>Power Point</a>
            <a href="../php/word.php"><i class="fa fa-file-word-o icon-bar"></i>Word</a>
            <a href="../php/web.php"><i class="fa fa-firefox icon-bar"></i>Web</a>
            <a href="../php/more.php"><i class="fa fa-ellipsis-h icon-bar"></i>More</a>
          </div>
        </div>
        <a href="../php/about.php"><i class="fa fa-info-circle icon-bar"></i>About</a> 
        <div class="dropdown" style="float: right;">
          <button class="dropbtn">
            <i class="fa fa-user-circle-o icon-bar"></i>Account
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
             <?php
              if(isset($_SESSION['type'])){
                echo "<a href='../php/session.php'><i class='fa fa-user icon-bar'></i>My Account</a>";
                echo "<a href='../php/signout.php'><i class='fa fa-sign-out icon-bar'></i>Sign Out</a>";
              } else {
                echo "<a href='../php/signin.php'><i class='fa fa-sign-in icon-bar'></i>Sign In</a>";
                echo "<a href='../php/signup.php'><i class='fa fa-pencil-square-o icon-bar'></i>Sign Up</a>";
              }
            ?>
          </div>
        </div>
        <!--Search Bar-->
        <div class="search-container" style="padding-left: 17px;">
          <form action="../php/search.php?">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
        <div style="clear:both"></div>
      </div>
      <div style="clear:both"></div>
    </header>
    <!--Body Page-->
    <div id="bodypage">
      <h3>ADMIN - Manage Pages & Functions</h3>
      <hr>
      <a href="../php/privateadmin.php">Account Information</a>&nbsp;|&nbsp;<a href="list.php">Manage Accounts</a>&nbsp;|&nbsp;<a href="../php/view.php">Manage Upload Files</a>&nbsp;|&nbsp;<a href="../php/indexup.php" style="text-decoration: blink;"><b>Upload File</b></a>&nbsp;|&nbsp;&nbsp;<a href="../php/signout.php" style="font-family: fantasy; color: red; font-size: 16px;">Sign Out</a>
      <hr>
      <div id="main">
		<label><h4><b>File Uploading From Computer</b></h4></label>
		<br><br>
		<div id="bodya">
			<form action="upload.php" method="post" enctype="multipart/form-data">
			<input type="file" name="file" class="inpf" />
			<br>
			<button type="submit" name="btn-upload" class="button0 button2">Upload</button>
			</form>
		    <br/><b><i>(**)NOTE: Size of file should be smaller than 1MB (<1MB).</i></b><hr>
		    <?php
			if(isset($_GET['success']))
			{
				?>
				<div class="alert success">
				  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
		          <label>File Uploaded Successfully...  <a href="view.php">click here to view file.</a></label>
				</div>
		        <?php
			}
			else if(isset($_GET['fail']))
			{
				?>
				<div class="alert">
				  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
				  <label>Problem While File Uploading !</label>
				</div>
		        <?php
			}
			else
			{
				?>
		        <label>Try to upload any files(PDF, DOC, EXE, VIDEO, MP3, ZIP,etc...)</label>
		        <hr>
		        <?php
			}
			?>
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
          <i class="fa fa-youtube-square fa-2x icon-bar-footer"></i></a>
        <a href="https://mail.google.com/mail/" style="top:6px;" title="Gmail">
          <i class="material-icons icon-bar-footer" style="font-size:28px">mail</i></a>
      </div>
      <div style="clear:both"></div>
    </footer>
  </div>
  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-chevron-up fa-2x"></i></button> 
  <div class="listdropmenu">
    <button class="dropmenu" style="top: 3%;" onclick="location.href='../php/search.php'"><i class="fa fa-search"></i></button> 
    <button class="dropmenu" style="top: 30%;" onclick="location.href='../php/indexmain.php'"><i class="fa fa-home"></i></button> 
    <button class="dropmenu" style="top: 37%;" onclick="location.href='../php/powerpoint.php'"><i class="fa fa-file-powerpoint-o"></i></button> 
    <button class="dropmenu" style="top: 44%;" onclick="location.href='../php/word.php'"><i class="fa fa-file-word-o"></i></button> 
    <button class="dropmenu" style="top: 51%;" onclick="location.href='../php/web.php'"><i class="fa fa-firefox"></i></button> 
    <button class="dropmenu" style="top: 58%;" onclick="location.href='../php/more.php'"><i class="fa fa-ellipsis-h"></i></button> 
    <button class="dropmenu" style="top: 65%;" onclick="location.href='../php/about.php'"><i class="fa fa-info-circle"></i></button>
    <button class="dropmenu" style="top: 72%;" onclick="location.href='../php/signin.php'"><i class="fa fa-user-circle-o"></i></button> 
  </div>
  <script src="../js/js-show.js"></script>
</body>
</html>