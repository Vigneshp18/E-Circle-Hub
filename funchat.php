<?php
 ob_start();
 session_start();

 if(!isset($_SESSION['name']) || !isset($_SESSION['email'])){
  header("Location: Login.php");
  exit();
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="description" content="">
	<title>FunChat</title>
	<link rel="stylesheet" type="text/css" href="style7.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="//code.tidio.co/xdjls6za0brcjx1gkhmryn9inx30zsb2.js" async></script>
    <style>

      body
      {
        background-color: black;
        color: white;
      }
	    .sec1
	    {
	    	font-family: sans-serif;
	    	background-color: #018786;
	    	color: white;
	    	margin-top: -2em;
	    	margin-left: -0.6em;
	    	margin-right: -0.5em;
	    }
	    .sec1 p
	    {
	    	text-align: center;
	    	font-size: 2em;
	    	padding-top: 2%;
	    }

      h1
      {
        text-align: center;
        font-family: cursive;
        color: #018786;
      }

		  ul 
		   {
          list-style-type: none;
          padding: 0;
          overflow: hidden;
          border: 1px solid #e7e7e7;
          background-color: #f1f1f1;
        }
        
        li
        {
            width: 14.28%;
        }

        li a 
        {
          display: block;
          color: #666666;
          text-align: center;
          font-size: 20px;
          padding: 14px 22px;
          text-decoration: none;
          font-family: Arial, Helvetica, sans-serif;
        }

        li a:hover:not(.active)
        {
            background-color: #018786;
            color: white;
            font-weight: bold;
        }

        li a.active 
        {
            color: white;
            background-color: #4CAF50;
        }

        li button 
        {
            display: block;
            color: #666666;
            text-align: center;
            font-size: 20px;
            padding: 14px 22px;
            text-decoration: none;
            font-family: sans-serif;
            border: 0px;
        }

        li button:hover:not(.active)
        {
            background-color: #a35709;
            color: white;
            font-weight: bold;
        }

        li button.active 
        {
            color: white;
            background-color: #4CAF50;
        }

        button
        {
          background-color: #018786;
          color: white;
          padding: 1em;
          font-size: 1em;
          border-radius: 15px;
        }

        .topnav .icon {
          display: none;
        }

        .container
        {
          width: 40em;
          background-color: white;
          color: black;
          border-radius: 15px;
          box-shadow: 0px 0px 8px solid grey;
          padding: 30px;
          text-align: center;
          font-family: sans-serif;
          position: relative;
          margin-top: 3em;
          margin-bottom: 2em;
        }
        .container button
        {
          float: right;
          background-color: white;
          border: 0;
          color: black;
          cursor: pointer;
          font-size: 2em;
          font-weight: bold;
          margin-top: -0.4em;
          padding: 0px;
        }

        .container form input
        {
          display: none;
        }

        .container-center
        {
          left: 50%;
          transform: translate(-50%, 0%);
        }

        .container h2
        {
          color: #018786;
          margin-top: 1.5em;
        }

        @media screen and (max-width: 950px) {
          .topnav li:not(:nth-child(4)) {display: none;}
          .topnav li.icon {
            float: right;
            display: block;
            position: relative;
          }
        }

        @media screen and (max-width: 950px) {
          .topnav.responsive {position: relative;}
          .topnav.responsive .icon {
            position: absolute;
            right: 0;
            top: 0;
          }
          li
          {
              width: 38%;
          }
          .topnav.responsive li{
            float: left;
            display: block;
            width: 100%;
            text-align: left;
          }
          .topnav.responsive li:first-child
          {
              margin-top: 12%;
          }
          .icon i
          {
            float: right;
            cursor: pointer;
            font-size: 24px;
            margin-right: 0.5em;
            margin-top: 0.5em;
            color: black;
          }
        }

      .sec2
      {
        font-family: sans-serif;
        background-color: #018786;
        color: white;
        margin-left: -0.6em;
        margin-right: -0.5em;
        margin-bottom: -2em;
        text-align: center;
      }
      .sec2 p
      {
        text-align: center;
        font-size: 2em;
        padding-top: 2%;
      }
        .sec2 .fa 
        {
            padding: 15px;
            font-size: 30px;
            width: 30px;
            text-align: center;
            text-decoration: none;
            border-radius: 50%;
            text-align: center;
        }

        .sec2 .fa:hover 
        {
            opacity: 0.8;
        }

        .sec2 .fa-facebook 
        {
            background: #3B5998;
            color: white;
            margin-right: 1%;
        }

        .sec2 .fa-google 
        {
           background: #dd4b39;
           color: white;
           margin-right: 1%;
        }

        .sec2 .fa-linkedin 
        {
           background: #007bb5;
           color: white;
           margin-right: 1%;
        }
        
        .sec2 .fa-youtube 
        {
           background: #bb0000;
           color: white;
           margin-right: 1%;
        }

        .sec2 .fa-instagram 
        {
           background: #125688;
           color: white;
           margin-right: 1%;
        }
        .sec2 h2
        {
            cursor: default;
        }

        .sec2 h2 a
        {
            text-decoration: none;
            color: white;
        }

        .sec2 h2 a:hover
        {
            text-decoration: underline;
        }

        .topnav .icon {
          display: none;
        }
        
        @media only screen and (max-width: 710px)
        {
        .container
        {
          width: 25em;
          background-color: white;
          border-radius: 15px;
          box-shadow: 0px 0px 8px solid grey;
          padding: 30px;
          text-align: center;
          font-family: sans-serif;
          position: relative;
          margin-top: 3em;
          margin-bottom: 2em;
        }
        }
        @media only screen and (max-width: 550px)
        {
        .container
        {
          width: 20em;
          background-color: white;
          border-radius: 15px;
          box-shadow: 0px 0px 8px solid grey;
          padding: 30px;
          text-align: center;
          font-family: sans-serif;
          position: relative;
          margin-top: 3em;
          margin-bottom: 2em;
        }
        }

        .prof
        {
            float: right;
            width: 47px;
            height: 50px;
            border-radius: 25px;
            margin-right: 4%;
            margin-top: -6em;
        }
        
      @media only screen and (orientation: landscape) and (max-width: 950px) {
        .topnav.responsive li:first-child
        {
            margin-top: 6%;
        }
    
}
    img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]
    {
        display: none;
    }

        .main 
        {
            width: 90px;
            margin-top: 3em;
            margin-left: 27%;
        }

        .col2
        {
            margin-top: -9.5em;
        }
@media only screen and (min-width: 950px)
{
    .col1
    {
        margin-top: -2.2em;
    }
    .col2
    {
        margin-bottom : 3em;
        padding-top: 1.7em;
    }
}
@media only screen and (max-width: 950px)
{
    .col2
    {
        margin-top: 2em;
        padding-top: 2em;
    }
}
        @media only screen and (max-width: 1200px)
        {
            .col1
            {
                top: 0;
            }
            .main 
            {
                margin-left: auto;
                margin-right: auto;
                display: block;
                margin-top: 2em;
                padding-top: 1em;
            }

            .col2
            {
                margin-top: -3em;
            }
        }
    #myBtn {
  display: none;
  position: fixed;
  bottom: 10px;
  left: 48%;
  z-index: 99;
  font-size: 24px;
  border: none;
  outline: none;
  background-color: #FF7F50;
  color: white;
  font-weight: bold;
  cursor: pointer;
  padding-left: 16px;
  padding-right: 16px;
  padding-top: 10px;
  padding-bottom: 1px;
  border-radius: 25px;
}
#myBtn:hover {
  background-color: white;
  color: black;
}

.badges a:nth-child(1) img
{
    padding-bottom: 15px;
}

    </style>
</head>
<body style="position: static;">
    <button onclick="topFunction()" id="myBtn" title="Go to top">^</button>
<section class="sec1">
    <div class="col1">
        <img class="main" src="images/logo.png">
    </div>
    <div class="col2">
	<p><b>E-Circle Hub</b></p>
  </div>
  <?php 
  $dbserver="localhost";
  $dbuser="id17115978_sinehan";
  $dbpass="@Sinehandatabase001";
  $dbname="id17115978_mydb";
  $conn=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);
  $result=mysqli_query($conn,"SELECT * from users");
  while($row = mysqli_fetch_assoc($result))
  {
    if($_SESSION['name']==$row['name'])
    {
     echo '<a href="profile.php"><img class="prof" src="'.$row['img'].'"></a>';
    }
 }
  ?>
	<div class="table">
	    <ul class="topnav" id="myTopnav">
            <li style="float: left;" class="active"><a href="home.php">Home</a></li>
            <li style="float: left;"><a href="friends.php">Friends</a></li>
            <li style="float: left;"><a href="post.php">Students Post</a></li>
            <li style="float: left;"><a href="funchat.php">Fun Chat</a></li>
            <li style="float: left;"><a href="announcement.php">Announcement</a></li>
            <li style="float: left;"><a href="contact.php">Contact Us</a></li>
            <li style="float: left;"><a href="about.php">About</a></li>
            <li href="javascript:void(0);" class="icon" onclick="myFunction()">
                  <i class="fa fa-bars"></i>
            </li>
        </ul>
    </div>
</section>
<div style="text-align: center;">
    <button onclick="location.href='newpost.php'" style="cursor: pointer;"> Create a New Post </button></div>
</div>
<p style="text-align: center; font-family: sans-serif; font-size: 20px;">To Report click on triple dots <a href="reportinfo.html" style="color: white;">more info</a></p>

<?php
  $dbserver="localhost";
  $dbuser="id17115978_sinehan";
  $dbpass="@Sinehandatabase001";
  $dbname="id17115978_mydb";
/*$dbserver="localhost";
  $dbuser="root";
  $dbpass="";
  $dbname="mydb";*/
  $conn=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);  
  $result=mysqli_query($conn,"SELECT * from chats ORDER by id DESC");
       while($row = mysqli_fetch_assoc($result))
       {
        echo'<div class="container container-center">';
        echo'<form action="report.php" method="POST">';
        echo'<input type="text" name="rep" value="'.$_SESSION['name'].'">';
        echo'<input type="text" name="person" value="'.$row['names'].'">';
        echo'<input type="text" name="title" value="'.$row['title'].'">';
        echo'<input type="text" name="content" value="'.$row['content'].'"';
        echo'<abbr title="report?"><button onclick="def();" name="submit" class="bt2"><input type="submit" name="submit">&#x22EE;</button></abbr>';
        echo'</form>';
        echo'    <h2> '.$row['names'].'</h2>';
        echo'    <h3> '.$row['title'].'</h3>';
        echo'    <p> '.$row['content'].' </p>';
        echo'    <a> '.$row['curdate'].' </a>';
        echo'    <a style=" padding-left:3%;"> '.$row['curtime'].' </a>';
        echo'</div>';

       }
?>
<br>
<section class="sec2">
  <p>Follow Us!</p>
    <a href="https://www.facebook.com/sinehan.s.9" target="_blank" class="fa fa-facebook"></a>
    <a href="https://sbmhss.000webhostapp.com" target="_blank" class="fa fa-google"></a>
    <a href="https://www.linkedin.com/in/sinehan-s-9576961b2/" target="_blank" class="fa fa-linkedin"></a>
    <a href="https://www.youtube.com/channel/UCDtWAZckJG5-HONoPi1oENQ" target="_blank" class="fa fa-youtube"></a>
    <a href="https://www.instagram.com/vecchennai/" target="_blank" class="fa fa-instagram"></a>
    <h2>Registered &#174; 2021. Powered By <a href="https://sbmhss.000webhostapp.com" target="_blank">Sinehan.</a></h2>
    <h3><a href="t&c.html" style="color: white; text-decoration: none;">Terms & Conditions</a></h3>
    <div class="badges">
        <a href="https://galaxy.store/ech001" target="_blank"><img src="https://img.samsungapps.com/seller/images/badges/galaxyStore/png_big/GalaxyStore_English.png?ver=1628533390000" alt="Available on Samsung Galaxy Store" style="max-width: 100%; height: 4em;"></a>
        <a href='https://play.google.com/store/apps/details?id=com.my.ecirclehub&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1' target="_blank"><img alt='Get it on Google Play' src='https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png' style="max-width: 100%; height: 5.8em;"/></a>
        <br><br><br><br>
        </div>
</section>

</body>
<script>
    function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
function def()
{
  alert("Reported Successfully");
  showAndroidToast("Reported Successfully");
  var agent=navigator.userAgent.toLowerCase();
  if(is_iphone)
  {
  OAS_AD('MISC1'); } 
  else {
  OAS_AD('TOP');
}
}
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
    function showAndroidToast(toast) {
        Android.showToast(toast);
    }
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

</html>