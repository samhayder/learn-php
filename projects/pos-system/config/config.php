<?php

session_start();

if ($_SERVER['HTTP_HOST']) {
  define("BASE_URL", "http://localhost/learn-php/projects/pos-system/");
  define("DIR_URL", $_SERVER['DOCUMENT_ROOT'] . "/learn-php/projects/pos-system/");

  /* Database Constant Values */
  define("SERVER_NAME", "localhost");
  define("DB_USERNAME", "root");
  define("DB_PASSWORD", "");
  define("DATABASE_NAME", "pos_system_app");
} else {
  define("BASE_URL", "http://domain.com/");
  define("DIR_URL", $_SERVER['DOCUMENT_ROOT']);

  /* Database Constant Values */
  define("SERVER_NAME", "");
  define("DB_USERNAME", "");
  define("DB_PASSWORD", "");
  define("DATABASE_NAME", "pos_system_app");
}
