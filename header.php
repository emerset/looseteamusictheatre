
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Loose Tea Music Theatre</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
  </head>

  <body>
  	<div class="container logo-container">
  		<div class="row">
  			<div class="col-md-3">
  				<img src="img/logo.png" class="logo">
  			</div>
  			<div class="col-md-9">
  				<h1 class="upper-title">Loose TEA</h1>
  				<br />
  				<h1 class="lower-title">Music | Theatre</h1>
  			</div>
  		</div>
  		
  	</div>
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
          <?php $page=substr($_SERVER['REQUEST_URI'], 22, -4); ?>
            <li<?php if ($page=="index"){echo ' class="active"';}?>><a href="index.php">Home</a></li>
            <li<?php if ($page=="about"){echo ' class="active"';}?>><a href="about.php">About</a></li>
            <li<?php if ($page=="calendar"){echo ' class="active"';}?>><a href="calendar.php">What's up?</a></li>
            <li<?php if ($page=="events"){echo ' class="active"';}?>><a href="events.php">Events</a></li>
            <li<?php if ($page=="media"){echo ' class="active"';}?>><a href="media.php">Media</a></li>
            <li<?php if ($page=="support"){echo ' class="active"';}?>><a href="support.php">Support Us</a></li>
            <li<?php if ($page=="contact"){echo ' class="active"';}?>><a href="contact.php">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <section class="container body">
