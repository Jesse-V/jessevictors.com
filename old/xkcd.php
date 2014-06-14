<?php

	function getXkcd($comicNumber)
	{
		$page = file_get_contents('http://xkcd.com/'.$comicNumber.'/');
		$comic = array_pop(explode('<div id="comic">', $page));
		$comic = explode('</div>', $comic);
		$img = array_shift($comic);
		return $img;
	}
?>