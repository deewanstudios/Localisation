<?php
include DATA . "nav.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php foreach($pageName AS  $page_title): ?>
  	<title><?php echo $page_title["page_Title"]; ?></title>
  	<?php endforeach; ?>
  	<meta charset="utf-8">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Deewanstudios">
    <link rel="stylesheet" href="site/css/structure.css" type="text/css" />
    <link rel="stylesheet" href="site/css/style.css" type="text/css" />
    <!-- <link rel="stylesheet" href="site/css/style2.css" type="text/css" /> -->
    <!-- <link rel="stylesheet" href="site/css/style3.css" type="text/css" /> -->
    <script src="site/js/jquery-1.7.min.js" type="text/javascript"></script>
    <script src="site/js/script.js" type="text/javascript"></script>


<!--[if lt IE 8]>
   <div style=' clear: both; text-align:center; position: relative;'>
     <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
       <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
    </a>
  </div>
<![endif]-->
<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
	<link rel="stylesheet" href="css/ie.css">
<![endif]-->
</head>
<body>
<div class="bg-main">

<div class="header">
    <div class="logo"><a href="home"></a></div>
    <div class="clear"></div>
    <div class="menu">
      <div class="nav-wrap">
        <ul class="group" id="example-one">
          <?php foreach($menuName AS  $link): ?>
					<li><a href="?page=<?php echo $link["menu_name"]; ?>"><?php echo $link["menu_name"]; ?></a>
						<img src="site/images/sep.jpg" />
						<?php endforeach; ?>
					</li>  
        <!-- <li id="magic-line" class="lastItem" style="width: 129px; left: 244px;"></li></ul> -->
      </div>
    </div>
    <div class="clear"></div>
    <div class="social-media">
<!-- <iframe frameborder="0" width="280" src="social-media.html" scrolling="no" height="250" class="frame" allowtransparency="1"></iframe> -->
    </div>
    <div class="clear"></div>
    <div class="blue-part">
      <div class="contact">
        <p class="contact-icon">147 Oxford Gardens, London, W10 6NE.</p>
        <p class="contact-mail"><a href="mailto:hello@thesbdc.co.uk">hello@thesbdc.co.uk</a></p>
        <p class="contact-fone">Call us today on <span>020 8969 3435</span></p>
      </div>
      <div class="small-business">
        <div class="small-img"><img src="site/images/small-business.png" alt="" title=""></div>
        <div class="small-text"> ..and reliable and friendly and bespoke.
          Whether you are a small business, a charity or an every day Joe, we at the Small Business Delivery Company have an affordable delivery solution for you. </div>
      </div>
      <form action="contactController.php" method="post" onsubmit="return chkform_top();">
      <input type="hidden" name="mode" value="get_updates" autocomplete="off">
      <div class="sign-up">
        <h2>Sign up for updates</h2>
        <div class="sign-up-in-bg">
          <input name="email" type="text" id="emailt" value="Enter email address" onclick="this.value=''" autocomplete="off">
        </div>
        <div class="left">
          <input type="submit" value="" class="sub-a" autocomplete="off">
        </div>
      </div>
      </form>
    </div>
  </div>

	<section class="padsection">