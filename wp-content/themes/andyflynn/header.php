<!DOCTYPE html>
<html>
	<head> 
	    <base href="<?php bloginfo('template_url'); ?>/">
	    <title> <?php bloginfo('name'); ?> </title>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="normalize.css">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	    <link href='https://fonts.googleapis.com/css?family=Quicksand:300,400' rel='stylesheet' type='text/css'>
	    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	    <script src="masonry.pkgd.min.js"></script>
	    <link href="https://fonts.googleapis.com/css?family=Chango|Quicksand" rel="stylesheet">
	    <script src="https://use.typekit.net/pnw4pqk.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
	    <link rel="stylesheet" href="hamburger.css">
	    <link rel="stylesheet" href="style.css">
	    <?php wp_head(); ?>
	</head>
	<body>

		<header> 

			<div class="row">

				<div class="menu-container"> 
					<nav role="navigation">
					  <div id="menuToggle">
					    <!--
					    A fake / hidden checkbox is used as click reciever,
					    so you can use the :checked selector on it.
					    -->
					    <input type="checkbox" />
					    
					    <!--
					    Some spans to act as a hamburger.
					    
					    They are acting like a real hamburger,
					    not that McDonalds stuff.
					    -->
					    <span></span>
					    <span></span>
					    <span></span>
					    
					    <!--
					    Too bad the menu has to be inside of the button
					    but hey, it's pure CSS magic.
					    -->
	            
	        			<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_id' => 'menu', 'link_after' => '', 'container' => 'false', ) ); ?>
					  </div>
					</nav>
				</div>

				<span class="space col-sm-4"></span>

	    		<a href="<?php echo site_url(); ?>" class="title col-sm-4"> <?php bloginfo('name'); ?></a>

				<?php dynamic_sidebar( 'social' ); ?>
			</div>
		</header>