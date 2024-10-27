<?php
// Program to display URL of current page.
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $url = "https://";
} else {
    $url = "http://";
}

$url .= $_SERVER['HTTP_HOST'];

define("BASEURL", "{$url}/");
define("BASEURL_CDN", "{$url}/cdn/");

$secrets = parse_ini_file($_SERVER["DOCUMENT_ROOT"] . "/config.ini", true);

?>