<?php
session_start();
include_once 'config.php';
$getid = @$_GET['value'];
$table = @$_GET['table'];
// echo "Your id is ".$getid." at table ".$table;
$row = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM $table WHERE id='$getid'"));
if (isset($row['file'])) {
  $d = $row['file'];
  $im = "./uploads/".$row['file'];
  $sr = "./uploads/".$row['file'];
  $ra = $row['rate'];
  $ds = "This is template's description...";
  $cm = $row['comment'];
}
else {
  $d = $row['name'];
  $im = "../data/".$row['image'];
  $sr = "../data/".$row['source'];
  $ra = $row['rate'];
  $ds = $row['descriptopn'];
  $cm = $row['comment'];
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="vi" xml:lang="vi">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Assignment - PowerPoint Templates</title>
<link rel="stylesheet" type="text/css" href="../css/index.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="../css/fa-stars.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--Thuong-->
<style>
	.navbar, #footer {
		background-color: #880000;
	}
	.carda {
	  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
	  max-width: 400px;
	  margin: auto;
	  text-align: center;
	  font-family: arial;
	}

	.carda button {
	  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
	  border: none;
	  outline: 0;
	  color: #888888;
	  background-color: #F8F8F8;
	  text-align: center;
	  cursor: pointer;
	  width: 100%;
	  font-size: 18px;
	  box-sizing: border-box;
	  float: right;
	  height: 40px;
	}

	.carda button a {
		text-decoration: none;
	}

	.carda button:hover{
		opacity: 0.7;
		background-color: grey;
		color: black;
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
    <div id="bodypage">
      <div id="main">
      	<div class="row"> 
      		<div class="col-12">
      			<div class="centerP" style="width: 330px;">
      				<a id="title" class="fa fa-indent icon-bar"> Detail's Template</a>
      			</div>
      			<div class="centerSub" style="font-size:25px; "><b><?php echo $d ?></b></div>
      			<hr>
      		</div>
      	</div>


     	<div class="col-6">
			<div class="carda">
	  			<a href="<?php echo $sr?>" style="text-decoration: none;">
	  				<img src="<?php echo $im?>" alt="<?php echo $d?>" style="width:100%">
	  			</a>
  				<div><a href="<?php echo $sr?>" download="<?php echo $d?>"><button>Download</button></a></div>
			</div>
		</div>
		<div class="col-4">
			<br>
	  		<div><b>Description</b></div>
        <div>
          <?php
          	echo "<span class='click-event'>$ra/5</span>";
            // echo "<br>&nbsp;&nbsp;<b><i>Rates:</i></b> &nbsp;&nbsp;";
            // for ($i=1; $i <=$ra ; $i++) {echo "<span class='fa fa-star checked' style='font-size:20px;'></span>";}
            // for ($i=1; $i <=5 - $ra ; $i++) {echo "<span class='fa fa-star' style='font-size:20px;'></span>";}
          ?>  
        </div>
        <br>
        <div><i><b>&nbsp;&nbsp;Upload by:</b> <?php
          if ($row['byuser'] == 0) echo "Default";
          else {
          $sqla=mysqli_query($db,"SELECT * FROM admin WHERE id='". $row['byuser']."'");
          if ($sqla==NULL) echo "Default";
          else {$rowa=mysqli_fetch_assoc($sqla);
            echo $rowa['username'];}}
         ?></i></div>
	  		<hr>
	  		<div><?php echo $ds?></div>
        <br>
        <div><b>Comments:</b></div>
        <div>
          <form method="post">
            <textarea name="cmt" id="cmt" style="width: 90%; border-radius: 5px;" placeholder="<?php if(isset($_SESSION['id'])) echo 'Comment here!!'; else echo 'Please signin to comment.';?>" <?php if(!isset($_SESSION['id'])) echo 'disabled';?>></textarea>
            <br>
            <input type="submit" id="submit" onclick="return Submission()" style=" font-size: 13px;margin-left: 35%; width: 25%; padding: 3px; border-radius: 8px; background-color: #4CAF50; color: #FFFFFF;"<?php if(!isset($_SESSION['id'])) echo 'disabled';?>>
          </form>
        </div>
        <hr>
        <div id="msg"></div>
		</div>


      </div>
      <div style="clear:both"></div>
    <hr>
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
  <script>

    var input = document.getElementById("cmt");
    input.addEventListener("keyup", function(event) {
        event.preventDefault();
        if (event.keyCode === 13) {
            document.getElementById("submit").click();
        }
    });

    function Submission(){
      var comtt = document.getElementById('cmt').value;
      var dataString = 'id=<?php echo $getid?>&table=<?php echo $table?>&cmt='+ comtt ;
      $.ajax({
        type:"post",
        url:"comment.php",
        data:dataString,
        cache:false,
        success: function(html){
          $('#msg').html(html);
        }
      });
      document.getElementById('cmt').value ='';
      return false;
    }
    $(document).ready(Submission());  
  </script>
  <script>
  	jQuery(function($) {
			$('.rating').star_rating();
		});
		jQuery(function($) {
		$('.click-event').star_rating({
		// Add some functionality for when a star is clicked
		click: function(clicked_rating, event) {
			event.preventDefault();

			var dataq = 'id=<?php echo $getid?>&table=<?php echo $table?>&rate=' + clicked_rating;
			$.ajax({url: 'rate.php',
			type: 'POST',
			data: dataq});

			<?php 
				if (isset($_SESSION['id'])) echo "alert('You clicked on a star rating of ' + clicked_rating +
				(this.max() ? ' out of ' + this.max() : '') + ' out of 5.\\n \\n We\'ll update the instance now with that rating.');this.rating(clicked_rating);";
				else echo "alert('Please sign in to rate this.');";
			?>

			

			}
		});
	});
</script>
<script src="../js/jquery.star-rating.js"></script>
</body>
</html>
