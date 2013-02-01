<?php
	
	require_once('databaseConnect.php');
	
	session_start();
	submitNavigation();
	updateTraffic();
	updateUsers();
	updateVisitLength();


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
					"Beekeeping" => "beekeeping",
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
		<script src="http://code.jquery.com/jquery-latest.js"></script>
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
				<form action="../feedback/index.php" method="get">
					<input type="hidden" name="page" value="'.$_SERVER['PHP_SELF'].'"/>
					<input type="submit" value="Feedback?"/>
				</form>
			</div>
		</div>

		<div class="footer">
		</div>
	</body>
</html>';

	}



	function submitNavigation()
	{
		if (isset($_SESSION['last page']))
			$_SESSION['last page'] = $_SESSION['current page'];
		else
			$_SESSION['last page'] = "";
		$_SESSION['current page'] = $_SERVER['PHP_SELF'];

		$where = "WHERE fromPage='".$_SESSION['last page']."' AND toPage='".$_SESSION['current page']."'";

		global $db;
		$query = "SELECT * FROM navigationTracking ".$where;
		
		$result = $db->query($query);
		if (!$result)
			die("Failed to connect to database. ".$db->error);
		$record = $result->fetch_assoc();

		if (empty($record)) //test if data already exists
			$query = "INSERT INTO `navigationTracking`(`fromPage`, `toPage`) VALUES ('".$_SESSION['last page']."','".$_SESSION['current page']."')";
		else
			$query = "UPDATE `navigationTracking` SET count=".($record['count'] + 1)." ".$where;



		if (!$db->query($query))
			die("Error: couldn't apply navigation tracking operations. ".$db->error);
	}



	function updateTraffic()
	{
		$now = getdate();
		$date = $now['mon'].'/'.$now['mday'].'/'.$now['year'];
		$where = "WHERE date='".$date."'";
		
		global $db;
		$query = "SELECT * FROM traffic ".$where;
		$result = $db->query($query);
		if (!$result)
			die("Failed to connect to database. ".$db->error);
		$record = $result->fetch_assoc();

		if (empty($record)) //test if data already exists
			$query = "INSERT INTO `traffic`(`date`) VALUES ('".$date."')";
		else
			$query = "UPDATE `traffic` SET views=".($record['views'] + 1)." ".$where;

		if (!$db->query($query))
			die("Error: couldn't apply traffic data operation. ".$db->error);
	}



	function updateUsers()
	{
		$where = "WHERE ip='".$_SERVER['REMOTE_ADDR']."'";
		$query = "SELECT * FROM users ".$where;
		
		global $db;
		$result = $db->query($query);
		if (!$result)
			die("Failed to connect to database. ".$db->error);
		$record = $result->fetch_assoc();

		$now = getdate();
		$time = $now['mon'].'/'.$now['mday'].'/'.$now['year'].' '.($now['hours'] - 2).':'.$now['minutes'].':'.$now['seconds'];

		if (empty($record))
			$query = "UPDATE `users` SET count=".($record['count'] + 1).", lastView='".$now."' ".$where;
		else
			$query = "INSERT INTO `users`(`IP`, `firstView`, `lastView`) VALUES ('".$_SERVER['REMOTE_ADDR']."','".$time."','".$time."')";

		if (!$db->query($query))
			die("Error: couldn't increase view count. ".$db->error);
	}



	function updateVisitLength()
	{
		if (!isset($_SESSION['visited pages']))
			$_SESSION['visited pages'] = array($_SERVER['PHP_SELF']); //create the array
		else if (!in_array($_SERVER['PHP_SELF'], $_SESSION['visited pages'])) //else if current page isn't already in the array
			array_push($_SESSION['visited pages'], $_SERVER['PHP_SELF']); //add it into the array

		$visitLength = count($_SESSION['visited pages']);
		$where = "WHERE numOfPages=".$visitLength;
		
		global $db;
		$query = "SELECT * FROM visitLength ".$where;
		$result = $db->query($query);
		if (!$result)
			die("Failed to connect to database. ".$db->error);
		$record = $result->fetch_assoc();
		
		if (empty($record))
			$query = "INSERT INTO `visitLength`(`numOfPages`) VALUES (".$visitLength.");";
		else
			$query = "UPDATE `visitLength` SET count=".($record['count'] + 1)." ".$where.";";

		if ($visitLength > 1) //user kept going, so remove count from last ending point
			$query .= "UPDATE `visitLength` SET count=".($record['count'] - 1)." WHERE numOfPages=".($visitLength - 1);

		if (!$db->multi_query($query))
			die("Error: couldn't apply visit length operation. ".$db->error);
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