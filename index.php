<?php
require_once('model/shortener.php');
// test database from singleton - WORKSS!!!!
// require_once('model/db_conn.php');
// $db = dbConn::getConnection();
// $stmt = $db->prepare('SELECT * FROM urls WHERE id = :id');
// $stmt->execute(['id' => 2]);
// $link = $stmt->fetch();
// print_r($link);

// TESTS BELOW

// Shortener::shortenLongUrlAndReturnId("www.facebook.com");

// echo "long url for id:3 -> " . Shortener::getLongUrlForShortUrl("localhost/3");

// Shortener::extractIdFromShortUrl('localhost/8');

// Shortener::redirectFromShortUrlToLongUrl("localhost/4");

// $str = "Apples and bananas.";
// $url = "localHost/43";
// $pattern = REDIRECT_REGEX;
// echo preg_match($pattern, $url); // Outputs 1

// echo Shortener::getLongUrlForShortUrl("localhost/3");
// echo Shortener::getLongUrlForShortUrl("localhost/3432");


// if the current url in the browser matches a redirect regular expression
// then perform a redirect to the corresponding website/link 
$current_url = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
if (preg_match(REDIRECT_REGEX, $current_url)) {
    Shortener::redirectFromShortUrlToLongUrl($current_url);
}



// above this line is for redirects, shortened url gets redirected to matching long url
// *****************************************************************************
// below this line is navigating website and actions logic
session_start();

// used to change url in browser
function set_url($url)
{
    echo ("<script>history.replaceState({},'','$url');</script>");
}

// read from post request to /shorten/create
$long_url = isset($_POST['long_url']) ? $_POST['long_url'] : "";


// read from post request to /link-info-get-details
$short_url = isset($_POST['short_url']) ? $_POST['short_url'] : "";

include "view/inc/header.php";

// current page from browser uri
$request_uri =  $_SERVER["REQUEST_URI"];

// handles navigation between different pages
switch ($request_uri) {
    case "/":
        include("view/pages/home.php");
        break;
    case "/shorten":
        $short_id = "123123";
        include("view/pages/shorten.php");
        break;
    case "/link-info":
        include("view/pages/link_info.php");
        break;
    case "/about":
        include("view/pages/about.php");
        break;
    case "/shorten/create":
        $short_id = Shortener::shortenLongUrlAndReturnId($long_url);
        $short_url = ROOT_URL . '/' . $short_id;
        set_url("/shorten");
        include("view/pages/shorten.php");
        break;
    case "/link-info/get-details":
        $link_info = Shortener::getLinkInfoByShortUrl($short_url);
        include("view/pages/link_info.php");
        set_url("/link-info");
        break;
}








include "view/inc/footer.php";
