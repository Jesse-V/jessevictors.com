<?php
	
	function generateHeaders($pageName, $folder, $faviconURL)
	{
		//there's odd tabbing here, but the user's HTML will have correct tabbing
		echo 
'<!DOCTYPE html>
<html id="top">
	<head>	
		<title>'.$pageName.' - JesseVictors.com</title>

		<meta charset="UTF-8">
		<meta property="og:title" content="'.$pageName.' - JesseVictors.com" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://jessevictors.com" />
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
						<li class="'.displayStatus('Home', $folder).' item">
							<a href="../Home/index.php">Home</a>
							<div class="border"></div>
						</li>
						<li class="'.displayStatus('Education', $folder).' item">
							<label>Education</label>
							<ul>
								<li style="width:33%">
									<a href="../Education/elementary.php">Elementary</a>
								</li>
								<li style="width:33%">
									<a href="../Education/wasilla_high.php">Wasilla High School</a>
								</li>
								<li style="width:33%">
									<a href="../Education/USU.php">Utah State University</a>
								</li>
							</ul>
							<div class="border"></div>
						</li>
						<li class="'.displayStatus('AboutMe', $folder).' item">
							<label>About Me</label>
							<ul>
								<li style="width:20%">
									<a href="../AboutMe/house-family.php">House && Family</a>
								</li>
								<li style="width:20%">
									<a href="../AboutMe/archery.php">Archery</a>
								</li>
								<li style="width:20%">
									<a href="../AboutMe/scuba_diving.php">Scuba Diving</a>
								</li>
								<li style="width:20%">
									<a href="../AboutMe/FAH.php">Folding@home</a>
								</li>
								<li style="width:20%">
									<a href="../AboutMe/Wikipedia.php">Wikipedia</a>
								</li>
							</ul>
							<div class="border"></div>
						</li>
						<li class="'.displayStatus('ComputerScience', $folder).' item">
							<label>Computer Science</label>
							<ul>
								<li style="width:25%;">
									<a href="../ComputerScience/preamble.php">Preamble</a>
								</li>
								<li style="width:25%;">
									<a href="../ComputerScience/Linux.php">Linux</a>
								</li>
								<li style="width:25%;">
									<a href="../ComputerScience/how_I_code.php">How I code</a>
								</li>
								<li style="width:25%;">
									<a href="../ComputerScience/notable_projects.php">Notable Projects</a>
								</li>
							</ul>
							<div class="border"></div>
						</li>
						<li class="'.displayStatus('FunStuff', $folder).' item">
							<label>Fun Stuff</label>
							<ul>
								<li style="width:33%">
									<a href="../FunStuff/photos.php">Photos</a>
								</li>
								<li style="width:33%">
									<a href="../FunStuff/videos.php">Videos</a>
								</li>
								<li style="width:33%">
									<a href="../FunStuff/music.php">Music</a>
								</li>
							</ul>
						</li>
					</ul>
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

	function displayStatus($navFolder, $folder)
	{
		if ($navFolder === $folder)
			return 'shown';
		else
			return 'hidden';
	}
?>