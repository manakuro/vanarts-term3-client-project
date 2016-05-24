<?php

// include PHP libraries
require 'vendor/autoload.php';

// include config file
include('partials/config.php');

// define curernt page
define('CURRENT_PAGE', pathinfo($_SERVER['REQUEST_URI'], PATHINFO_FILENAME));

// define host url
$url  = empty($_SERVER["HTTPS"]) ? "http://" : "https://";
$url .= $_SERVER["HTTP_HOST"];
define('BASE_URL', $url);

date_default_timezone_set ( 'Canada/Pacific' );

unset($url);