<?php

	function parse_subsite()
	{
		preg_match("/(?<=subsite\=).*?($|(?=&))/", $_SERVER['QUERY_STRING'], $matches);
		if (!empty($matches[0])) return $matches[0];
	}

	function parse_pagename()
	{
		preg_match("/(?<=&page=).*$/", $_SERVER['QUERY_STRING'], $matches);
		if (!empty($matches[0])) return $matches[0];
	}

?>

