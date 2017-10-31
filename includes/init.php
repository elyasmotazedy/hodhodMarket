<?php

// create FILE DIRECTORIES SYSTEM LATER

    // fOR dIR iNCLUDES
define("INCLUDES_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(INCLUDES_PATH));    // direction of  hodhodMarket
define("SECTION_PATH", INCLUDES_PATH . "/sections");

    // for dir admin / user
define("ADMIN_PATH", dirname(PROJECT_PATH)."/admin");
define("USER_PATH", dirname(PROJECT_PATH)."/user");

    // for dir css / style
define("CSS_PATH", dirname(PROJECT_PATH)."/css");
define("JS_PATH", dirname(PROJECT_PATH)."/js");

    // for dir icons / images
define("ICON_PATH", dirname(PROJECT_PATH)."/icon");
define("IMAGE_PATH", dirname(PROJECT_PATH)."/image");





require("functions.php");
require("database.php");
require("dbfunctions.php");
