<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package byu-responsive
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="stylesheet" href="//cloud.typography.com/75214/740862/css/fonts.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/base.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" media="all and (min-width:16em)" />
<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js"></script>
    <script>
      var pageSettings = {
       jQueryURL:     "http://byuweb.github.io/Global-Assets/js/jquery-1.10.2.min.js", // Use this default, or load jQuery from somewhere else
       jQueryVersion: "1.10.2", // The jQuery version for fallback in case there's a problem loading jQuery
       loadslider:    true, // Whether the image slider is present on the page
       additionalScripts:   [], // Array of strings specifying URLs for additional scripts to load
      }
    </script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/init.js"></script>


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	
	<header id="main-header" role="banner">
      <div id="header-top" class="wrapper">
        <div id="logo">
          <h2><a href="http://www.byu.edu/" class="byu">Brigham Young University</a></h2>
        </div>
        <!-- This should link to your organization's home page-->
        <h1><a id="site-name" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        <a href="http://home.byu.edu/home/cas" class="sign-in button">Sign in</a>
      </div>
    </header>
	
    <div id="search-menu">
      <div id="search-container" role="search">
		<?php get_search_form(); ?>
       <!-- <form id="basic-search" action="http://home.byu.edu/home/search" role="form">
          <label for="search" class="visuallyhidden">Search</label>
          <input id="search" type="search" name="search">
          <input id="search-submit" type="submit" value="Search">
        </form>
		-->
      </div>
	  <a href="#primary-nav" class="menu-button">Menu</a>
    </div>
	
	<div class="nav-container">
		<!-- Primary Nav-->
		<nav id="primary-nav" role="navigation">
            <ul>
                <?php wp_nav_menu( array(
                    'container'         => 'false',
                    'items_wrap'        => '%3$s',
                    'walker'            => new T5_Nav_Menu_Walker_Simple()
                
                ) ); ?>
            </ul>

		</nav>
		
		<!-- Secondary Nav-->
		<nav id="secondary-nav" role="navigation">

		</nav>
		
</header>


		
		
		
		
	</div>
	


	<div id="content" role="main" class="wrapper clearfix one-sidebar">
