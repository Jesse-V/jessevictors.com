<?php
	require_once('../common.php');
	generateHeaders('Feedback', 'http://www.businesspundit.com/wp-content/uploads/2009/10/zzzzhome.png');
?>

			<div id="content">
				<?php

					require_once('../databaseConnect.php');
					/*
						Dear Jesse,
						
							I stumbled upon this code while looking through your repositories (since I just joined Github)
							and I believe that the query below is vulnerable to SQL injection. According to 
							http://25yearsofprogramming.com/blog/2011/20110205.htm, using single quotes does nothing to
							prevent another single quote from being added by an attacker. Consider the following for
							$_POST['feedback']:
								'
							Now there is an extra single quote hanging in the string to be queried that can cause a corrupt query and whatever
							else that would stem from that. If multiple statements are allowed in a single query, an attacker
							could inject (with the classic example):
								'); DROP TABLE `feedback`;
							or something of the sort. (I've never had the chance to test it myself, I can only use
							others' warnings and examples.)
							
							Another important thing to keep in mind is that some $_SERVER variables (such as ['REMOTE_ADDR']) 
							come from the client and can be manipulated! As farfetched as it may seem to have malicious code
							in the place of what would have been an IP address, I suppose it is still possible. I've learned
							that you should never trust anything coming from the client.
							
							What I use to prevent SQL injection in my form submissions are "prepared statements".
							
						- Patrick Rebsch (compdewd)
					*/
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
