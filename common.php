<?php
	
	function generateHeaders($pageName, $faviconURL)
	{
		$menu = array(
			"Education" => array(
				"folder" => "Education",
				"dropDown" => array(
					"Elementary" => "elementary",
					"Wasilla High School" => "wasilla_high",
					"Utah State University" => "USU"
				)
			),

			"About Me" => array(
				"folder" => "AboutMe",
				"dropDown" => array(
					"House && Family" => "house-family",
					"Archery" => "archery",
					"Scuba diving" => "scuba_diving",
					"Folding@home" => "FAH",
					"Wikipedia" => "Wikipedia"
				)
			),

			"Computer Science" => array(
				"folder" => "ComputerScience",
				"dropDown" => array(
					"Preamble" => "preamble",
					"Linux" => "Linux",
					"How I code" => "how_I_code",
					"Notable Projects" => "notable_projects"
				)
			),

			"Fun Stuff" => array(
				"folder" => "FunStuff",
				"dropDown" => array(
					"Music" => "music",
					"Videos" => "videos",
					"Photos" => "photos"
				)
			)
		);


		//there's odd tabbing here, but the user's HTML will have correct tabbing
		echo 
'<!DOCTYPE html>
<html id="top">
	<head>	
		<title>'.$pageName.' - JesseVictors.com</title>

		<meta charset="UTF-8">
		<meta property="og:title" content="'.$pageName.' - JesseVictors.com" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://jessevictors.com/new_website/" />
		<meta property="og:image" content="'.$pageName.'" />
		<meta property="og:site_name" content="JesseVictors.com" />
		<meta property="fb:admins" content="1817148529" />

		<link href="http://fonts.googleapis.com/css?family=Syncopate:700|Carme" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="../css/common.css">
		<link rel="stylesheet" type="text/css" href="../css/'.$pageName.'.css">

		<script src="https://apis.google.com/js/plusone.js"></script>
	</head>

	<body>
		<div id="fb-root"></div>
		<script>(function(d, s, id)
			{
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id))
				return;
			  js = d.createElement(s);
			  js.id = id;
			  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
			  fjs.parentNode.insertBefore(js, fjs);
			}
			(document, "script", "facebook-jssdk"));
		</script>

		<div id="page">
			<div id="header">
				<p id="access">
					<a accesskey="s" href="#content">Skip Navigation</a>
				</p>

				<div id="headerOffset">
					<ul id="nav">
						<li class="'.submenuStatus('Home').' item">
							<a href="../Home/index.php">Home</a>
						</li>
						';

		foreach ($menu as $topLabel => $item)
		{
			echo		'<li class="'.submenuStatus($item['folder']).' item">
							<label>'.$topLabel.'</label>
							<ul>
							';

			$width = floor(1 / count($item['dropDown']) * 100);
			foreach ($item['dropDown'] as $subLabel => $file)
			{
				echo 		'	<li '.isCurrent($file).'style="width:'.$width.'%">
									<a href="../'.$item['folder'].'/'.$file.'.php">'.$subLabel.'</a>
									<div class="border"></div>
								</li>
							';
			}
			
			echo			'</ul>
						</li>
						';
		}

		echo '		</ul>
				</div>
			</div>';
	}

	function generateFooter()
	{
		echo '
		</div>
		<div class="fixed-footer">
			<div class="sharing">
				<div class="social fb-like" data-href="http://jessevictors.com" data-send="false" data-layout="button_count" data-width="450">
				</div>

				<div class="social" id="plusone">
					<g:plusone size="medium"></g:plusone>
				</div>
			</div>

			<div class="feedback">
				<button>Feedback?</button>
			</div>
		</div>

		<div class="footer">
		</div>
	</body>
</html>';

	}

	function submenuStatus($folder)
	{
		if (strpos($_SERVER['PHP_SELF'], $folder))
			return 'shown';
		else
			return 'hidden';
	}

	function isCurrent($file)
	{
		if (strpos($_SERVER['PHP_SELF'], $file))
			return 'class="current" ';
		else
			return '';
	}
?>