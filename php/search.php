<?php
  include ('config.php');
  session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="vi" xml:lang="vi">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Assignment - Search Page</title>
<link rel="stylesheet" type="text/css" href="../css/index.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="../js/jquery.min.js"></script>
<script src="../js/js-button.js"></script>
<script src="../js/js-banner.js"></script>
<script src="../js/js-show.js"></script>
<style>
  .navbar, #footer {
    background-color: #880000;
  }
  #myInput {
      background-image: url('/css/searchicon.png'); /* Add a search icon to input */
      background-position: 10px 12px; /* Position the search icon */
      background-repeat: no-repeat; /* Do not repeat the icon image */
      width: 100%; /* Full-width */
      font-size: 16px; /* Increase font-size */
      padding: 12px 20px 12px 40px; /* Add some padding */
      border: 1px solid #ddd; /* Add a grey border */
      margin-bottom: 12px; /* Add some space below the input */
  }

  #myTable {
      border-collapse: collapse; /* Collapse borders */
      width: 100%; /* Full-width */
      border: 1px solid #ddd; /* Add a grey border */
      font-size: 18px; /* Increase font-size */
  }

  #myTable th, #myTable td {
      text-align: left; /* Left-align text */
      padding: 12px; /* Add padding */
      
  }
  #myTable th {
  	text-align: center;
  }

  #myTable td a{
  	text-decoration-line: none;
  }

  #myTable tr {
      /* Add a bottom border to all table rows */
      border-bottom: 1px solid #ddd; 
  }

  #myTable tr.header, #myTable tr:hover {
      /* Add a grey background color to the table header and on hover */
      background-color: #f1f1f1;
  }
</style>
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
        <!--No Search Bar in search page-->
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
      	<?php
		    $search = $_GET['search'];
		?>
        <br><h1>SEARCH PAGE</h1>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." value="<?php echo $search ?>">
        <br><br>
        <table id="myTable" width="80%" border="1" align="center">
          <tr class="header">
            <th style="width:75%;">Name</th>
            <th style="width:13%;">Type</th>
            <th style="width:12%;">Page Find</th>
          </tr>
          <?php
            $pp1="SELECT * FROM data WHERE type ='powerpoint' LIMIT 0,9";
            $result_pp1=mysqli_query($db,$pp1);
            while($rowpp1=mysqli_fetch_array($result_pp1))
            {
              echo "<tr>
              <td><a href='./detail.php?value=".$rowpp1['id']."&table=data'>".$rowpp1['name']."</a></td>
              <td style='text-align:center;'>PowerPoint</td>
              <td style='text-align:center;'><a href='../php/powerpoint.php'>&nbsp;[Go file]</a></td>
              </tr>";
            }

            $pp2="SELECT * FROM data WHERE type ='powerpoint' LIMIT 9,9";
            $result_pp2=mysqli_query($db,$pp2);
            while($rowpp2=mysqli_fetch_array($result_pp2))
            {
              echo "<tr>
              <td><a href='./detail.php?value=".$rowpp2['id']."&table=data'>".$rowpp2['name']."</a></td>
              <td style='text-align:center;'>PowerPoint</td>
              <td style='text-align:center;'><a href='../php/powerpoint_2.php'>&nbsp;[Go file]</a></td>
              </tr>";
            }

            $pp3="SELECT * FROM data WHERE type ='powerpoint' LIMIT 18,9";
            $result_pp3=mysqli_query($db,$pp3);
            while($rowpp3=mysqli_fetch_array($result_pp3))
            {
              echo "<tr>
              <td><a href='./detail.php?value=".$rowpp3['id']."&table=data'>".$rowpp3['name']."</a></td>
              <td style='text-align:center;'>PowerPoint</td>
              <td style='text-align:center;'><a href='../php/powerpoint_3.php'>&nbsp;[Go file]</a></td>
              </tr>";
            }

            $wo1="SELECT * FROM data WHERE type ='word' LIMIT 0,9";
            $result_wo1=mysqli_query($db,$wo1);
            while($rowwo1=mysqli_fetch_array($result_wo1))
            {
              echo "<tr>
              <td><a href='./detail.php?value=".$rowwo1['id']."&table=data'>".$rowwo1['name']."</a></td>
              <td style='text-align:center;'>Word</td>
              <td style='text-align:center;'><a href='../php/word.php'>&nbsp;[Go file]</a></td>
              </tr>";
            }

            $wo2="SELECT * FROM data WHERE type ='word' LIMIT 9,9";
            $result_wo2=mysqli_query($db,$wo2);
            while($rowwo2=mysqli_fetch_array($result_wo2))
            {
              echo "<tr>
              <td><a href='./detail.php?value=".$rowwo2['id']."&table=data'>".$rowwo2['name']."</a></td>
              <td style='text-align:center;'>Word</td>
              <td style='text-align:center;'><a href='../php/word_2.php'>&nbsp;[Go file]</a></td>
              </tr>";
            }

            $wo3="SELECT * FROM data WHERE type ='word' LIMIT 18,9";
            $result_wo3=mysqli_query($db,$wo3);
            while($rowwo3=mysqli_fetch_array($result_wo3))
            {
              echo "<tr>
              <td><a href='./detail.php?value=".$rowwo3['id']."&table=data'>".$rowwo3['name']."</a></td>
              <td style='text-align:center;'>Word</td>
              <td style='text-align:center;'><a href='../php/word_3.php'>&nbsp;[Go file]</a></td>
              </tr>";
            }

            $we1="SELECT * FROM data WHERE type ='web' LIMIT 0,9";
            $result_we1=mysqli_query($db,$we1);
            while($rowwe1=mysqli_fetch_array($result_we1))
            {
              echo "<tr>
              <td><a href='./detail.php?value=".$rowwe1['id']."&table=data'>".$rowwe1['name']."</a></td>
              <td style='text-align:center;'>Web</td>
              <td style='text-align:center;'><a href='../php/web.php'>&nbsp;[Go file]</a></td>
              </tr>";
            }

            $we2="SELECT * FROM data WHERE type ='web' LIMIT 9,9";
            $result_we2=mysqli_query($db,$we2);
            while($rowwe2=mysqli_fetch_array($result_we2))
            {
              echo "<tr>
              <td><a href='./detail.php?value=".$rowwe2['id']."&table=data'>".$rowwe2['name']."</a></td>
              <td style='text-align:center;'>Web</td>
              <td style='text-align:center;'><a href='../php/web_2.php'>&nbsp;[Go file]</a></td>
              </tr>";
            }

            $mo="SELECT * FROM data WHERE type ='more' LIMIT 0,5";
            $result_mo=mysqli_query($db,$mo);
            while($rowmo=mysqli_fetch_array($result_mo))
            {
              echo "<tr>
              <td><a href='./detail.php?value=".$rowmo['id']."&table=data'>".$rowmo['name']."</a></td>
              <td style='text-align:center;'>More</td>
              <td style='text-align:center;'><a href='../php/more.php'>&nbsp;[Go file]</a></td>
              </tr>";
            }

            $sql="SELECT * FROM tbl_uploads";
            $result_set=mysqli_query($db,$sql);
            while($row=mysqli_fetch_array($result_set))
            {
            	echo "<tr>
            	<td><a href='./detail.php?value=".$row['id']."&table=tbl_uploads'>".$row['file']."</a></td>
              <td style='text-align:center;'>User Upload</td>
            	<td style='text-align:center;'><a href='../php/more.php'>&nbsp;[Go file]</a></td>
          		</tr>";
            }
          ?>
        </table>
        <hr>
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
  <script>
  function myFunction() {
    // Declare variables 
    var input, filter, table, tr, td, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      } 
    }
  }
  window.onload = myFunction;
  </script>
</body>
</html>
