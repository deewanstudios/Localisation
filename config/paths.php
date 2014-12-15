<?php // paths.php
 
// this file is responsible for including any common paths
// which will be used...they will be stored as constants

// define the root of the project

define("ROOT", dirname(dirname(__FILE__)));
// dirname(__FILE__) finds the path to the folder which the current file is in (ie the config folder)
// dirname(dirname(__FILE__)) finds the folder which the config folder is in (ie the root folder)


// set up the paths...

define("APPLICATION", ROOT.DS."application".DS);
define("CONTROLLERS", APPLICATION."controllers".DS);
define("DATA", APPLICATION."data".DS);
define("PAGES", APPLICATION."pages".DS);
define("CONFIG", ROOT.DS."config".DS);
define("SITE", ROOT.DS."site".DS);
define("CSS", SITE."css".DS);
define("IMAGES", SITE."images".DS);
define("JS", SITE."js".DS);
define("FONTS", SITE."fonts".DS);

?>