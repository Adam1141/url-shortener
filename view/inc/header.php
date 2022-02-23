<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/url-shortener/view/css/normalize.css">
    <link rel="stylesheet" href="/url-shortener/view/css/main.css">
    <!-- <script src="/url-shortener/view/js/index.js"></script> -->
    <title><?= isset($title) ? $title : 'Shortinooo'?></title>

</head>
<body>
<?php include "view/inc/navbar.php"?>
<main>
    <?php
        // did it this way, was having problems importing with <script src=...> 
        $script = file_get_contents('view/js/index.js');
        echo "<script>".$script."</script>";
    ?>



    
