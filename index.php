<?php

	ini_set('display_errors', 1);


	require('lib/parse_url.php');

	if ( empty($_GET['subsite']) ):
		require ('includes/header.php');
		require('views/home.php');

	elseif ( is_dir( 'views/'.$_GET['subsite'] ) && !empty($_GET['page'])  && file_exists('views/'.$_GET['subsite'].'/'.$_GET['page'].'.php') ):
		require ('includes/header.php');
		require ('views/'.$_GET['subsite'].'/'.$_GET['page'].'.php');

	elseif ( ! file_exists('views/'.$_GET['subsite'].'.php') ):
		header("HTTP/1.0 404 Not Found");
		include('404.php');
		return false;

	else:
		require ('includes/header.php');
		require ('views/'.$_GET['subsite'].'.php');

	endif;

	require ('includes/footer.php');

