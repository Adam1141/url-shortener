<?php

/**
 * Configuration for database connection
 *
 */

/**/
$host       = "localhost";
$username   = "root";
$password   = "";
$dbname     = 'url_shortener_php';


/*
$host       = '129.159.147.245';
$username   = 'testdb';
$password   = 'test';
*/

/* */
$host       = 'sql6.freemysqlhosting.net';
$username   = 'sql6475572';
$password   = 'q2JtFYfcd6';
$dbname     = 'sql6475572';

$dsn        = "mysql:dbname=$dbname;host=$host;";
$options    = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
);


/**
 * other configuration variables
 * 
 */
const ROOT_URL = "localhost";
const REDIRECT_REGEX = "/" . ROOT_URL . "\/\d+$/i";  // to check if current url is for redirect ( short to long url )
const HTTP_REGEX = "/^(http|https):\/\//";

// NOT IMPLEMENTED YET! ( no time )
// change the shortened URL allowed characters
const ALLOWED_CHARS = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
