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
if(preg_match(REDIRECT_REGEX, $current_url)){
    Shortener::redirectFromShortUrlToLongUrl($current_url);
}


session_start();

$title = 'Shortiii';
$_SESSION["current_link"] ??= "Home";

include "view/inc/header.php";

// include "view/pages/link_info.php";




include "view/inc/footer.php";