<?php

// create FILE DIRECTORIES SYSTEM LATER

    // fOR dIR iNCLUDES
define("INCLUDES_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(INCLUDES_PATH));    // direction of  hodhodMarket
define("SECTION_PATH", INCLUDES_PATH . "/sections");
define("ADMIN_PATH", dirname(PROJECT_PATH)."/admin");
define("USER_PATH", dirname(PROJECT_PATH)."/user");


$file_correct = strpos($_SERVER["SCRIPT_NAME"],'/') + 13;

$doc_root = substr( $_SERVER["SCRIPT_NAME"] , 0 ,  $file_correct);
define( "WWW_ROOT" , $doc_root );
define( "ADMIN_ROOT" , WWW_ROOT.'/admin' );
define( "IMAGE_ROOT" , WWW_ROOT.'/image' );
define( "ICON_ROOT"  , WWW_ROOT.'/icon' );

require("functions.php");
require("database.php");
require("dbfunctions.php");
