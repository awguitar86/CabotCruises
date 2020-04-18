<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Cruise</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles/styles.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light container-fluid">
    <a class="navbar-brand" href="/">
      <img
        src="./images/shipLogoX1.png"
        srcset="<?php echo get_template_directory_uri(); ?>/images/shipLogoX2.png 768w,
        <?php echo get_template_directory_uri(); ?>/images/shipLogoX3.png 1080w"
        alt="ship logo"
        style="width:75px; height:75px;"
      >
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <?php wp_nav_menu()?>
    </div>
  </nav>

  <main>