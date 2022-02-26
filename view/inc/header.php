<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/url-shortener/view/img/favicon/favicon.ico">
    <link rel="stylesheet" href="/url-shortener/view/css/normalize.css">
    <link rel="stylesheet" href="/url-shortener/view/css/main.css">
    <script src="/url-shortener/view/js/index.js"></script>
    <title><?= isset($title) ? $title : 'Shortiii' ?></title>

</head>

<body>
    <?php include "view/inc/navbar.php"; ?>
    <!-- <?php echo "cwd: " . getcwd() . "<br> document root: " . $_SERVER['DOCUMENT_ROOT']; ?> -->
    <main>