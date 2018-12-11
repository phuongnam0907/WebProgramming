<?php
session_start();
include_once 'config.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="vi" xml:lang="vi">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Assignment - Word Templates</title>
<link rel="stylesheet" type="text/css" href="../css/index.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--Thuong-->
<style>
	.navbar, #footer {
		background-color: #880000;
	}
</style>

<script src="../js/jquery.min.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/js-button.js"></script>
<script src="../js/js-banner.js"></script>
<script src="../js/js-show.js"></script>
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
      <div class="navbar">
        <a href="../php/indexmain.php"><i class="fa fa-home icon-bar"></i>Home</a>
        <div class="dropdown">
          <button class="dropbtn">
            <i class="fa fa-clone icon-bar"></i>Templates
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
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
    <div id="col-12">
      <div id="main">
      	<div class="row"> 
      		<div class="col-12">
      			<div class="centerW">
      				<a id="title" class="fa fa-file-word-o icon-bar"> Word</a>
      			</div>
      			<div class="centerSub">
      				<a>Create eye-catching brochures, newsletters, flyers, business cards, postcards, and so much more with ready-made graphic designs.</a>
      			</div>
      		</div>
			<div class="col-12">
				<button class="btn warning">Rating</button>
				<button class="btn danger">View</button>
				<button class="btn default">Update</button>
				<a id="sortby"> Sort by : </a>
      		</div>
      	</div>

        <?php
	      $counting = 0;

	      $sql = "SELECT * FROM data WHERE type='word' LIMIT 9,9";
	      $result = mysqli_query($db, $sql);
	      
	      if (mysqli_num_rows($result) > 0) {
	        while($row = mysqli_fetch_assoc($result)) {
	          if ($counting == 3) $counting = 1;
	          else $counting++;
	          $getid = @$row['id'];
	          $filename = @$row['name'];
	          $imgsrc = @$row['image'];
	          $srcdow = @$row['source'];
	          $sao = @$row['rate'];
	          if ($counting == 1) {
	            echo "<div class='row'>";
	            echo "<div class='col-4'><div class='card'>
	            <a href='./detail.php?value=$getid&table=data' style='text-decoration:none;'><img src='../data/$imgsrc' alt='$filename' style='width:100%;'></a>
	            <div><b>$filename</b></div>
	            <div class =' box'>";
	            for ($i=1; $i <=$sao ; $i++) {echo "<span class='fa fa-star fas-start checked'></span>";}
	            for ($i=1; $i <=5 - $sao ; $i++) {echo "<span class='fa fa-star fas-start'></span>";}
	            echo "</div><button><a href='../data/$srcdow' download = '$filename' style = 'text-decoration-line: none;'>Download</a></button></div></div>";
	          }  else if ($counting == 2){
	            echo "<div class='col-4'><div class='card'>
	            <a href='./detail.php?value=$getid&table=data' style='text-decoration:none;'><img src='../data/$imgsrc' alt='$filename' style='width:100%;'></a>
	            <div><b>$filename</b></div>
	            <div class =' box'>";
	            for ($i=1; $i <=$sao ; $i++) {echo "<span class='fa fa-star fas-start checked'></span>";}
	            for ($i=1; $i <=5 - $sao ; $i++) {echo "<span class='fa fa-star fas-start'></span>";}
	            echo "</div><button><a href='../data/$srcdow' download = '$filename' style = 'text-decoration-line: none;'>Download</a></button></div></div>";
	          } else if ($counting == 3){
	            echo "<div class='col-4'><div class='card'>
	            <a href='./detail.php?value=$getid&table=data' style='text-decoration:none;'><img src='../data/$imgsrc' alt='$filename' style='width:100%;'></a>
	            <div><b>$filename</b></div>
	            <div class =' box'>";
	            for ($i=1; $i <=$sao ; $i++) {echo "<span class='fa fa-star fas-start checked'></span>";}
	            for ($i=1; $i <=5 - $sao ; $i++) {echo "<span class='fa fa-star fas-start'></span>";}
	            echo "</div><button><a href='../data/$srcdow' download = '$filename' style = 'text-decoration-line: none;'>Download</a></button></div></div></div>";
	          }
	          }
	      }
	      ?>

			<div class="col-12">
				<div class="center">
					<a href="../php/word.php" class="number">&laquo;</a>
					<a href="../php/word.php" class="number">1</a>
					<a href="../php/word_2.php" class="number here">2</a>
					<a href="../php/word_3.php" class="number">3</a>
					<a href="../php/word_3.php" class="number">&raquo;</a>
				</div>
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
	  <button class="dropmenu" style="top: 30%;" onclick="location.href='../phpphp/indexmain.phpphp'"><i class="fa fa-home"></i></button> 
	  <button class="dropmenu" style="top: 37%;" onclick="location.href='../phpphp/powerpoint.phpphp'"><i class="fa fa-file-powerpoint-o"></i></button> 
	  <button class="dropmenu" style="top: 44%;" onclick="location.href='../phpphp/word.phpphp'"><i class="fa fa-file-word-o"></i></button> 
	  <button class="dropmenu" style="top: 51%;" onclick="location.href='../phpphp/web.phpphp'"><i class="fa fa-firefox"></i></button> 
	  <button class="dropmenu" style="top: 58%;" onclick="location.href='../phpphp/more.phpphp'"><i class="fa fa-ellipsis-h"></i></button> 
	  <button class="dropmenu" style="top: 65%;" onclick="location.href='../phpphp/about.phpphp'"><i class="fa fa-info-circle"></i></button>
	  <button class="dropmenu" style="top: 72%;" onclick="location.href='../phpphp/signin.phpphp'"><i class="fa fa-user-circle-o"></i></button> 
  </div>
  <script src="../js/js-show.js"></script>
</body>
</html>
