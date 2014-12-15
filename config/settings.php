<?php // settings.php 



// any website setting can be declared here...such as
// * timezone and date settings
// * defining any site constants
// * error handling


// site constants

define("BR", "<br/>");

// define the directory separator...normally this is "/" but sometimes it is "\"
// the built in constant DIRECTORY_SEPARATOR will know what it is for the system it is using

define("DS", DIRECTORY_SEPARATOR);


// error settings (from php.ini)
ini_set("display_errors", "on");
ini_set("error_reporting", E_ALL);
// these will need to be turned off when you publish your site

?>