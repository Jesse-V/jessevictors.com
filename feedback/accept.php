<?php
	require_once('../common.php');
	generateHeaders('Feedback', 'http://www.businesspundit.com/wp-content/uploads/2009/10/zzzzhome.png');
?>

			<div id="content">
				<?php

					require_once('../databaseConnect.php');
					$query = "INSERT INTO `feedback`(`IP`,`date`,`page`,`feedback`) VALUES ('".$_SERVER['REMOTE_ADDR']."', '".todaysDate()."', '".$_POST['page']."','".$_POST['feedback']."')";
					$result = $db->query($query);
					if ($result)
						echo '<p>
							Thanks for the feedback!
						</p>';
					else
						die("Failed to insert feedback into database! ".$db->error);

					function todaysDate()
					{
						$date = getdate();
						return $date['mon'].'/'.$date['mday'].'/'.$date['year'].' '.($date['hours'] - 2).':'.$date['minutes'].':'.$date['seconds'];
					}
				?>
				
				<input type="button" value="Go back to the page" onClick="history.go(-2); return false;">
			</div>

<?php
	generateFooter();
?>
