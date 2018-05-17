<?php
/*
Plugin Name: Ism Mobile Header
Plugin URI: #
Description: Ism Mobile Header
Version: 1.0.0
Author: #
Author URI: #
License: MIT
*/

define("ISMMH_ROOT_DIR", __DIR__);
define("ISMMH_ROOT_FILE", __FILE__);
define("ISMMH_ROOT_URL", plugin_dir_url(ISMMH_ROOT_FILE));
define("ISMMH_TEMPLATE_DIR", ISMMH_ROOT_DIR . DIRECTORY_SEPARATOR . "templates");
define("ISMMH_ASSETS_URL", ISMMH_ROOT_URL . "/" . "assets");

require_once ISMMH_ROOT_DIR . "/src/autoload.php";
require_once ISMMH_ROOT_DIR . "/includes/template-functions.php";
require_once ISMMH_ROOT_DIR . "/includes/menu-functions.php";
require_once ISMMH_ROOT_DIR . "/includes/mobile-bar-functions.php";
require_once ISMMH_ROOT_DIR . "/includes/assets-functions.php";