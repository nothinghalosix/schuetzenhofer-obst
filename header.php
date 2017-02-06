<?php
  header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="Obst, Waldfrüchte, Gemüse, Waldbeeren, Obst &amp; Gemüse Schützenhofer, Schützenhofer GmbH, Wien,
    Naschmarkt Wien, Großgrünmarkt Wien, 1230 Wien, Obst 7423 Grafenschchen, Obst &amp; Waldfrüchte Großhandel">
    <meta name="author" content="">
    <!-- <link rel="icon" href="../../favicon.ico"> -->

    <title><?php echo $title; ?> | Schützenhofer Obst</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abel|Cabin|Josefin+Sans" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="css/style.css">

      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-45508836-6', 'auto');
        ga('send', 'pageview');

      </script>
  </head>
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php?page=home">Schützenhofer Obst</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php?page=home" <?php if($page == "home") echo 'class="active"'; ?>>Home</a></li>
            <li><a href="index.php?page=produkte" <?php if($page == "produkte") echo 'class="active"'; ?>>Produkte</a></li>
            <li><a href="index.php?page=ueber uns" <?php if($page == "ueber uns") echo 'class="active"'; ?>>Über Uns</a></li>
            <li><a href="index.php?page=kontakt" <?php if($page == "kontakt") echo 'class="active"'; ?>>Kontakt</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>