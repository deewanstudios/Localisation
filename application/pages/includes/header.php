<?php
	include DATA."nav.php";
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
    <link rel="stylesheet" href="site/css/style.css" type="text/css" />
    <link rel="stylesheet" href="site/css/style2.css" type="text/css" />
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
<!-- PRO Framework Panel Begin --><!-- PRO Framework Panel End -->
<div class="bg-main">
	<header>
		<div class="container_24">
			<div class="wrapper">
				<div class="grid_17">
					<h1><a href="index.php">Virk Constructio Limited</a></h1>
			  </div>
		  </div>
		</div>
	  <nav class="main-menu">
			<ul class="sf-menu">
				<?php foreach($menuName AS  $link): ?>
					<li><a href="?page=<?php echo $link["menu_name"]; ?>"><?php echo $link["menu_name"]; ?></a>
						<?php endforeach;?>
					</li>
			</ul>
			<div class="clear"></div>
		</nav>
		</header>


	<section class="padsection">