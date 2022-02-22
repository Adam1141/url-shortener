<?php 
session_start();
$title = 'Shortiii';
$_SESSION["current_link"] ??= "Home";

include "view/inc/header.php";

// include "view/pages/link_info.php";





include "view/inc/footer.php";