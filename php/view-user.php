<?php
session_start();
include_once 'config.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="vi" xml:lang="vi"> 
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Manage Upload Files</title>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="../css/fa-stars.css">

<style>
    .fillin{
      border-radius: 10px;
      text-align: center;
    }
    .but {
      font-size: 20px;
      border-radius: 20px;
      padding-left: 40px;
      padding-right: 40px;  
      margin-left: 50px;
      margin-bottom: 20px;
    }
    .but:hover{
      transform: scale(1.2);
      cursor: pointer;
    }
    th{
      text-align: center;
      font-size: 15px;
      font-style: bold;
    }
    td{
      font-size: 15px;
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
                @header("location:../php/session.php");
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
      <h3>USER Pages</h3>
      <hr>
      <a href="../php/privatepage.php">Account Information</a>&nbsp;|&nbsp;<a href="../php/view-user.php" style="text-decoration: blink;"><b>View Files</b></a>&nbsp;|&nbsp;<a href="../php/indexup-user.php">Upload File</a>&nbsp;|&nbsp;&nbsp;<a href="../php/signout.php" style="font-family: fantasy; color: red; font-size: 16px;">Sign Out</a>
      <hr>
      <div id="main">
        
        <div id="bodya">
            <table width="80%" border="1" align="center">
            <tr>
            <th colspan="6"><label>Preview Uploading Files</label>&nbsp;&nbsp;<a href="../php/indexup-user.php" style="font-style:italic; color: #0AA;">[Upload Here]</a></th>
            </tr>
            <tr>
            <th>File Name</th>
            <th>File Type</th>
            <th>File Size(KB)</th>
            <th>View</th>
            <th>Download</th>
            <th>Delete</th>
            </tr>
            <?php
            $getid = @$_SESSION['id'];
            $sql="SELECT * FROM tbl_uploads WHERE byuser='$getid'";
            $result_set=mysqli_query($db,$sql);
            if ($result_set == NULL) echo "<tr><td colspan='6' style='text-align:center;'>Nothing To Load... <a href='../php/indexup-user.php' style=' color: #0AA;''>Upload Something</a></td></tr>";
            else while($row=mysqli_fetch_array($result_set))
            {
                ?>
                <tr>
                <td>&nbsp;<?php echo $row['file'] ?></td>
                <td>&nbsp;<?php echo $row['type'] ?></td>
                <td>&nbsp;<?php echo $row['size'] ?></td>
                <td style="text-align: center;"><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
                <td style="text-align: center;"><a href="uploads/<?php echo $row['file'] ?>" download = "<?php echo $row['file'] ?>">download file</a></td>
                <td style="text-align: center;"><a href="delete.php?file=<?php echo $row['file'] ?>&amp;delete=true" onclick="return confirm('Are you sure you want to delete <?php echo $row['file'] ?>?')">delete file</a><br/></td>
                </tr>
                <?php
            }
            ?>
            </table>
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
</body>
</html>
