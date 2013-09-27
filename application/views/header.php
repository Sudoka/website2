<!doctype html>
<html>
<head>
  <title>XXX Company</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>
  <div class="container">
    <div class="masthead">
      <h1>XXX Company</h1>
      <div class="navbar">
        <div class="navbar-inner">
          <ul class="nav">
	    <li <?php if ($page=='home') echo "class='active'" ?>><a href="<?php echo base_url(); ?>index.php/home">Home</a></li>
            <li <?php if ($page=='partners') echo "class='active'" ?>><a href="<?php echo base_url(); ?>index.php/partners">Partners</a></li>
	    <li <?php if ($page=='about') echo "class='active'" ?>><a href="<?php echo base_url(); ?>index.php/about">About</a></li>
	  </ul>
        </div>
      </div>
    </div>
