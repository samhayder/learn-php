<?php
session_start();

if ($_SERVER['HTTP_HOST'] == "localhost") {
  define("BASE_URL", "http://localhost/learn-php/projects/library-management-app/backend/");
  define("DIR_URL", $_SERVER['DOCUMENT_ROOT'] . "/learn-php/projects/library-management-app/backend/");

  /* Database Constant value */
  define("SERVER_NAME", "localhost");
  define("DB_USERNAME", "root");
  define("DB_PASSWORD", "");
  define("DATABASE_NAME", "library_management_app");
} else {
  define("BASE_URL", "http://domain.com");
  define("DIR_URL", $_SERVER['DOCUMENT_ROOT']);

  /* Database Constant value */
  define("SERVER_NAME", "");
  define("DB_USERNAME", "");
  define("DB_PASSWORD", "");
  define("DATABASE_NAME", "library_management_app");
}
