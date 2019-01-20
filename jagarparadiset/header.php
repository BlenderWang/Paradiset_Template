<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paradiset</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<nav class="navbar navbar-expand-lg fixed-top">
  <a class="navbar-brand" href="<?=esc_url(home_url('/'));?>"><img src="<?php echo get_template_directory_uri(); ?>/images/Paradiset Logo Transparent SMALL.png" alt="Green Apple Logo" class="logo"></a>
  <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="<?=esc_url(home_url('/'));?>">Hem <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Om Johannes</a>
      <a class="nav-item nav-link" href="#">Föreläsningar</a>
      <a class="nav-item nav-link" href="#">Nyhetsbrev</a>
    </div>
  </div>
</nav>
