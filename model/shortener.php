<?php
    require_once('model/db_conn.php');
    $db = dbConn::getConnection();
    
    $stmt = $db->prepare('SELECT * FROM urls WHERE id = :id');
    $stmt->execute(['id' => 2]);
    $link = $stmt->fetch();
    
    class Shortener {
       
        public static function shortenLongUrlAndReturnId($longUrl) {
            // add url to database/urls , get the autoincremented id of the inserted row
            // return that id




        }

        public static function shortenFromLinkObj($link) {
            // take a link object and insert it to database/urls
            // set the id of the link object to equal the id in the database/urls
            // return that id
        }

        public static function getLongUrlForShortUrl($shortUrl) {
            // get the long url from a short url, read from the urls table
        }

        public static function extractIdFromShortUrl($shortUrl) {
            // extract and return the short url id from the short url
            // return -1 in case of an error
        }

        public static function redirectFromShortUrlToLongUrl($shortUrl) {
            // redirect requests to the long url saved in the urls table
            // in case no such url exists then redirect to error page
        }

    }





?>