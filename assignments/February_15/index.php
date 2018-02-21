<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    $content = 'home';
    if (isset($_GET['p']) && file_exists('pages/'. $_GET['p'] . '.php')) {
       $content = $_GET['p'];
    } elseif (isset($_GET['p']) && !file_exists('pages/'. $_GET['p'] . '.php')) {
        $content = '404';
    }
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/style.css">
</head>
  <body>
      <div>Home</div>
      <div>Content</div>
      <div>About Us</div>
      <div>Contact</div>
  </body>
</html>
