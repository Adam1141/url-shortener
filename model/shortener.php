<?php
    require_once('model/db_conn.php');
    require_once('model/link.php');
    $db = dbConn::getConnection();

    class Shortener {
       
        public static function shortenLongUrlAndReturnId($longUrl) {
            // add url to database/urls , get the autoincremented id of the inserted row
            // return that id
            $linkObj = new Link($longUrl);
            $linkObj->dateCreated = date('Y-m-d');

            // test
            // echo $linkObj->getLongUrl();
            // print_r($linkObj);

            // get db connection and insert new url
            $db = dbConn::getConnection();
            $stmt = $db->prepare("INSERT INTO urls (longUrl, dateCreated)
            VALUES (?,?)");
            $stmt->execute([$linkObj->longUrl, $linkObj->dateCreated]);

            // test
            // echo ("last id -> " . $db->lastInsertId());

            // return autoincrement id of last inserted row
            return $db->lastInsertId();
        }

        public static function getLongUrlForShortUrl($shortUrl) {
            // get the long url from a short url, read from the urls table

            $linkId = self::extractIdFromShortUrl($shortUrl);

            // test
            // $linkId = 5;

            // get db connection and read link with id from the given short url
            $db = dbConn::getConnection();
            $stmt = $db->prepare('SELECT * FROM urls WHERE id = :id');
            $stmt->execute(['id' => $linkId]);
            $link = $stmt->fetch();
            
            // test
            // print_r($link);
            // echo "<br>" . $link['longUrl'];

            // return the corresponding long url
            return $link['longUrl'];
        }

        public static function extractIdFromShortUrl($shortUrl) {
            // extract and return the short url id from the short url
            // return -1 in case of an error

            $shortUrlExploded = explode("/", $shortUrl);
            $linkId = $shortUrlExploded[count($shortUrlExploded) - 1];
            
            // test
            // echo "link id -> $linkId";
            
            return $linkId;
        }

        public static function redirectFromShortUrlToLongUrl($shortUrl) {
            // redirect requests to the long url saved in the urls table
            // in case no such url exists then redirect to error page

            $longUrl = self::getLongUrlForShortUrl($shortUrl);
            header("Location: http://$longUrl");

        }

    }





?>