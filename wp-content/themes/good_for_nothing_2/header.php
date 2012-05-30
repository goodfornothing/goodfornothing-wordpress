<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	
	<!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="initial-scale=1.6; maximum-scale=1.0; width=device-width; "/>
	
	<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
  
	<!-- Included CSS Files -->
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
	
	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<!-- Begin Container -->
	<div class="container">
		
		<!-- Header Row -->
		<div class="row">
			
				<!-- Header Column -->
				<div class="twelve columns" id="access" role="navigation">
					
					<?php /* <span id="skipnav" class="show-on-phones"><a href="#content">Skip to Content?</a></span> */ ?>
					<!-- Site Description & Title -->
					<div id="header" class="row">
						
						<hgroup id="header-left" class="six columns">
								<a href="<?php bloginfo('url'); ?>" id="header-link"><img src="<?php bloginfo( 'template_directory' ); ?>/images/gfn-logo.png" id="gfn-logo">&nbsp;</a> 
						</hgroup>
					
						<div id="header-right" class="six columns" >
							<div id="social-box">
								<p>Collaborating for good</p>
							
								<ul class="social-icons">
									<li><a href="http://soundcloud.com/goodfornothing-1" id="social-1" target="_blank"></a></li>
									<li><a href="http://www.facebook.com/g00dfornothing" id="social-2" target="_blank"></a></li>
									<li><a href="http://www.flickr.com/photos/goodfornothingflickrs/" id="social-3" target="_blank"></a></li>
									<li><a href="https://twitter.com/g00dfornothing" id="social-4" target="_blank"></a></li>
									<li><a href="<?php bloginfo('rss2_url'); ?>" id="social-5" target="_blank"></a></li>
								</ul>
							</div>
						</div>
					
					</div>
					
					<!-- Navigation --> 					
					<div class="row">
						<div class="eight columns">
							<?php wp_nav_menu(array( 'container_class' => 'menu-header', 'link_after' => '&nbsp;/&nbsp;') ); ?>
						</div>
						
						<div class="four columns menusearch">
							<div class="searchbox"><?php get_search_form(); ?></div>
						</div>
					</div>
					
				</div>
				<!-- Header Column -->
		<hr>
				
		</div>
		<!-- Header Row -->

		<!-- Main Row -->
		<div class="row">
		
		
				