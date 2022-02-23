<?php 
    require_once('model/shortener.php');
// test database from singleton - WORKSS!!!!
// require_once('model/db_conn.php');
// $db = dbConn::getConnection();
// $stmt = $db->prepare('SELECT * FROM urls WHERE id = :id');
// $stmt->execute(['id' => 2]);
// $link = $stmt->fetch();
// print_r($link);

// test
// Shortener::shortenLongUrlAndReturnId("www.facebook.com");

// echo "long url for id:3 -> " . Shortener::getLongUrlForShortUrl("localhost/3");

// Shortener::extractIdFromShortUrl('localhost/8');

// Shortener::redirectFromShortUrlToLongUrl("localhost/8");

session_start();

$title = 'Shortiii';
$_SESSION["current_link"] ??= "Home";

include "view/inc/header.php";

// include "view/pages/link_info.php";





include "view/inc/footer.php";