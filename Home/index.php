<?php
	require_once('../common.php');
	require_once('../xkcd.php');
	generateHeaders('Home', 'http://www.businesspundit.com/wp-content/uploads/2009/10/zzzzhome.png');
?>

			<div id="content">
				<div class="title">
					Welcome to JesseVictors.com!  	
				</div>
				<p>
					Welcome to my website! Here you can find all sorts of information about me, my interests, my background, and my skills. I've also provided some photos that I find interesting. I believe that having a unique online presence is becoming more and more important, especially for someone in the computer science industry.
				</p>
				<p>
					I'm an avid fan and user of free and open-source software, and as I've coded this website by hand, I put all of its code <a href="https://github.com/Jesse-V/jessevictors.com">on github.com</a>, an absolutely brilliant service for managing software repositories.
				</p>
				<p>
					Feel free to explore and enjoy my website, and once again, welcome!
				</p>

				<div class="xkcd">
					<div class="caption">
						For your enjoyment, here is an <a href="http://xkcd.com/">xkcd comic</a> for you:
					</div>
					<?php echo getXkcd(rand(1, 1166)) ?>
					<div class="mouseOver">
						(mouse-over the image for more)
					</div>
				</div>
			</div>
		
<?php
	generateFooter();
?>
