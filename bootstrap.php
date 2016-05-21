<?php

// Include PHP libraries
require 'vendor/autoload.php';

// Include config file
include('partials/config.php');

// Define curernt page
define('CURRENT_PAGE', pathinfo($_SERVER['REQUEST_URI'], PATHINFO_FILENAME));

// Define host url
$url  = empty($_SERVER["HTTPS"]) ? "http://" : "https://";
$url .= $_SERVER["HTTP_HOST"];
define('BASE_URL', $url);

date_default_timezone_set ( 'Canada/Pacific' );

unset($url);