<?php

    /**
     * Configuration for database connection
     *
     */

    $host       = "localhost";
    $username   = "root";
    $password   = "";
    $dbname     = "url_shortener_php";
    $dsn        = "mysql:host=$host;dbname=$dbname";
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