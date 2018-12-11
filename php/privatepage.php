<?php
   include("config.php");
   session_start();
   $user_id = @$_SESSION['id'];
   $user_type = @$_SESSION['type'];

   $result = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM admin WHERE id='$user_id'"));
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="vi" xml:lang="vi">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Assignment - Private Page</title>
<link rel="stylesheet" type="text/css" href="../css/index.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  .navbar, #footer {
    background-color: #880000;
  }
  .fgpass{
    font-size: 15px;
    color: #5a5c60;
  }
  .fgpass:hover{
    text-decoration: underline;
  }
  .pripage{
    width: 50%; 
    margin-top: 10px; 
    margin-bottom: 10px; 
    border-radius: 20px; 
    padding: 10px; 
    color: white;
    background-color: #1558c1;
    border-width: 5px;
  }
  .pripage:hover{
    border-color: white;
  }
</style>
<script src="../js/jquery.min.js"></script>
<script src="../js/js-button.js"></script>
<script src="../js/js-banner.js"></script>
<script src="../js/js-show.js"></script>
<script> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/style.css" rel='stylesheet' type='text/css' media="all" />
</head>
<body>
  <div>
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
    </div>
    <!--Body Page-->
    <div id="bodysignin">
      <div id="main">
          <h1 class="w3ls">Thông tin cá nhân</h1>
          <div class="content-w3ls" style="background-color: #e3e7ed; opacity: 0.8; border-radius: 60px;">
            <div class="content-agile1  height-info" style="background: #c4d4ed; border-radius: 60px; min-height:550px;">
              <div align="center" style="margin-top: 30px;"><img src="../images/avatarM.jpg" width="50%;"></img>
              <div align="center" style="font-size: 16px;">
                <b>
                <p><hr>Username: <?php echo $result['username']; ?></p>
                <p><hr><?php if($result['type'] == "admin") echo "Administror"; else echo "Account User"; ?></p>
                <hr>
              </b>
            </div>
              </div>
              <div align="center" style="padding-bottom: 10px;">
                <button class="pripage" onclick="window.location.href='./changepassword.php'"><b>Đổi mật khẩu</b></button>
                <button class="pripage" onclick="window.location.href='./changeinfo.php'"><b>Sửa thông tin cá nhân</b></button>
                <button class="pripage" onclick="window.location.href='./indexup-user.php'"><b>Upload File</b></button>
              </div>
                
            </div>
            <div class="content-agile2">
              <p class="wthree" style="color: #000;"><br>Email Address</p>
              <p class="wthree" style="color: blue;  text-transform: lowercase;"><?php echo $result['email']; ?></p>
              <p class="wthree" style="color: #000;"><br>Phone Number</p>
              <p class="wthree" style="color: blue;"><?php echo $result['phone']; ?></p>
              <p class="wthree" style="color: #000;"><br>Facebook</p>
              <p class="wthree" style="color: blue;"><a href="<?php echo $result['page']; ?>" title="Facebook">
          <i class="fa fa-facebook-square fa-2x "></i></a></p>
              <p class="wthree" style="color: #000;"><br>About Me</p>
              <p class="wthree" style="color: blue;  text-transform: lowercase;"><?php echo $result['about']; ?></p>
          </div>
          <div class="clear"></div>
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
  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-chevron-up fa-2x"></i></button> 
  <div class="listdropmenu">
    <button class="dropmenu" style="top: 3%;" onclick="location.href='../php/search.php'"><i class="fa fa-search"></i></button> 
    <button class="dropmenu" style="top: 30%;" onclick="location.href='../php/indexmain.php'"><i class="fa fa-home"></i></button> 
    <button class="dropmenu" style="top: 37%;" onclick="location.href='../php/powerpoint.php'"><i class="fa fa-file-powerpoint-o"></i></button> 
    <button class="dropmenu" style="top: 44%;" onclick="location.href='../php/word.php'"><i class="fa fa-file-word-o"></i></button> 
    <button class="dropmenu" style="top: 51%;" onclick="location.href='../php/web.php'"><i class="fa fa-firefox"></i></button> 
    <button class="dropmenu" style="top: 58%;" onclick="location.href='../php/more.php'"><i class="fa fa-ellipsis-h"></i></button> 
    <button class="dropmenu" style="top: 65%;" onclick="location.href='../php/about.php'"><i class="fa fa-info-circle"></i></button>
    <?php 
    if(isset($_SESSION['type'])) echo "<button class='dropmenu' style='top: 72%;' onclick=\"location.href='../php/signout.php'\"><i class='fa fa-sign-out'></i></button>";
    else echo "<button class='dropmenu' style='top: 72%;' onclick=\"location.href='../php/signin.php'\"><i class='fa fa-id-badge'></i></button>";
    ?>
  </div>
  <script src="../js/js-show.js"></script>
</body>
</html>
