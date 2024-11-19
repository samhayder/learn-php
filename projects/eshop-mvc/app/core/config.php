<?php

define("WEBSITE_TITLE", "eShop e-commence");

define("THEME", "eshop/");


// Database
define("HOTS_NAME", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "eshop");

define("DEBUG", true);
if (DEBUG) {
  ini_set('display_errors', 1);
} else {
  ini_set('display_errors', 0);
}
