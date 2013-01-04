<?php
	require_once('../common.php');
	generateHeaders('Feedback', 'http://www.businesspundit.com/wp-content/uploads/2009/10/zzzzhome.png');
?>

			<div id="content">
				<p>
					Very few websites give you the ability to provide feedback. I'm always interested in making my site as interesting and cool as possible, and I appreciate any comments you have. Thank you for your interest in doing so. Please fill out the forms below and I'll do my best to address them. Thanks.
				</p>

				<form class="feedbackForm" action="accept.php" method="post">
					<textarea name="feedback" placeholder="Comments? Technical problem? Suggestions for improvement? Please describe them here."></textarea>
					<input type="hidden" name="page" value="<?php echo $_GET['page'] ?>">
					<!--<label>Should this be public?</label>
					<select name="public">
						<option value="yes">Yes</option>
						<option value="no" selected>No</option>
					</select>-->
					<input type="submit" value="Submit">
				</form>
			</div>

<?php
	generateFooter();
?>
