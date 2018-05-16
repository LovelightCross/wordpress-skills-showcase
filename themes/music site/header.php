<!DOCTYPE html>
<html >
<head>
  <title><?php wp_title(''); ?></title>
  <?php if(WP_DEBUG) { ?>
    <meta name="robots" content="noindex, follow">
  <?php } ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
	<!-- <link rel="stylesheet" type="text/css" href="/assets/scss/config/slick/_slick.scss"/>
	// Add the new slick-theme.css if you want the default styling
	<link rel="stylesheet" type="text/css" href="/assets/scss/config/slick/_slick-theme.scss"/> -->
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  
		<?php wp_head(); ?>
   
</head>

<body <?php body_class(); ?>>

 
							<header class="header">
                <div class="header-container">

                    <ul id="nav-bar">
                        <li id="home-link" class="nav-links">HOME</li>
                        <li id="band-link" class="nav-links">BAND</li>
                        <li id="tour-link" class="nav-links">TOUR</li>
                        <li id="news-link" class="nav-links" style="margin-right: 5%;">NEWS</li>
                        <li id="main-link" style="list-style-type: none;"><span id="header-top">EVENT HORIZON</span></li>
                        <li id="music-link" class="nav-links" style="margin-left: 5%;">MUSIC</li>
                        <a id="media-link" href="http://music-site.test/media/"><li id="media-link" class="nav-links">MEDIA</li></a>
                        <a id="merch-link" href="http://music-site.test/merch/"><li id="merch-link" class="nav-links">MERCH</li></a>
                        <li id="contact-link" class="nav-links">CONTACT</li>
                    </ul>

                </div>
							</header>