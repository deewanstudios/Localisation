<?php // main index.php 
session_start();
// connect to the initialise file first 
include("config" . DIRECTORY_SEPARATOR . "initialise.php");


if ( isset($_GET["page"]) ) $page = $_GET["page"];
else $page = "home";
if(isset($_GET['logout'])){
	session_destroy();
	session_unset();
	echo '<script>window.location.href = "index.php";</script>';
	
}


include CONTROLLERS.$page."_controller.php";






?>