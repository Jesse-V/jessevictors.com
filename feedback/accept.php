<?php
	require_once('../common.php');
	generateHeaders('Feedback', 'http://www.businesspundit.com/wp-content/uploads/2009/10/zzzzhome.png');
?>

			<div id="content">
				<?php

					require_once('../databaseConnect.php');
					$query = "INSERT INTO `feedback`(`IP`, `feedback`,`date`) VALUES ('derp', 'derp2', 'derp3')";
					$result = $db->query($query);
					if ($result)
						echo '<p>
							Thanks for the feedback!
						</p>';
					else
						die("Failed to insert feedback into database! ".$db->error);
				?>
				
				<input type="button" value="Go back to the page" onClick="history.go(-2); return false;">
			</div>

<?php
	generateFooter();
?>
