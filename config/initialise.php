<?php // intialise.php

// this file is responsible for including the files for connection to
// the database, path definitions, site settings and defining the root
// of the project


include("db.php");
include("settings.php");
include("paths.php");


// set up the default include_path...this is where the system looks for
// files to include

ini_set("include_path", ROOT.":".ini_get("include_path") );



?>