<!DOCTYPE html>
<html>
  <head>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,100' rel='stylesheet' type='text/css'>
    <title><?php bloginfo()?></title>
    <?php wp_head("name"); ?>
  </head>
  <body>
    <div class="header" style="background-image: url(<?php echo get_template_directory_uri()?>/images/bg.jpg);">
      <div class="container">
        <h1>
          <?php bloginfo("name");?>
        </h1>
        <p>
          Connect your ideas globally
        </p>
        <a class="btn" href="">Learn More</a>
      </div>
    </div>