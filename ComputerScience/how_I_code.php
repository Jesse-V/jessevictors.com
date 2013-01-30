<?php
	require_once('../common.php');
	generateHeaders('How I code', 'http://www.businesspundit.com/wp-content/uploads/2009/10/zzzzhome.png');
?>

			<div id="content">
				<p>
					When I write a computer program or a piece of software, I'm conscious of the possibility that my code will be visible to others. Perhaps those others will maintain my code, or they simply want to know how it works. In the past, I've been on the receiving end, and I know from experience that it is extremely annoying to dig through disorganized and messy code. It also shows a lack of professionalism to the code's author, who clearly don't realize that it's a better idea to write clean code in the first place. A little bit of effort there actually saves time in the long run.
				</p>

				<p>
					For non-trivial projects, I really take the time to ensure that my code is clean, maintainable, and organized. I accomplish this through first planning ahead before I start coding, keep an attention to detail through the project, and providing documentation as I go along. I try my best to avoid duplicating code, and I try to keep my methods and functions short and concise. I'm also familiar with Object-Oriented (OO) design, which can be very helpful to the organization of a large project.
				</p>

				<div class="codeSamples">
					<div class="badCode">
						<br>
						public void count(){<br>
							<span class="indent1">int j;</span><br>
							<span class="indent1">for(j=0;j<10;j++) System.out.println(j);</span><br>
						}
					</div>

					<div class="goodCode">
						public final static int MAX = 10;<br>
						<br>
						//Counts from 1 to 10.<br>
						public void count()<br>
						{<br>
							<span class="indent1">for (int counter = 0; counter < MAX; counter++)</span><br>
								<span class="indent2">System.out.println(counter);</span><br>
						}
					</div>
				</div>

				<p class="caption">
					Which is more clear? The choice is clear.<br>
					In C++, standard iterators and <a href="http://en.wikipedia.org/wiki/Anonymous_function">lamda functions</a> make loops even cleaner.
				</p>

				<img class="xkcd" src="http://imgs.xkcd.com/comics/goto.png" alt="I could restructure the program's flow, or use one little goto. Eh, screw bad practice; how bad can it be? *compile* *velociraptor destruction*"/>

				<p>
					Now for my coding environment. I began coding in my sophomore year of high school using the now-defunct CodeWarrior software. Later I switched to Netbeans, which I used for a variety of programming and web languages through the first two years of college. In the fall of 2012 I was introduced to the Sublime text editor and the Linux Mint operating system, both of which I currently prefer. Linux Mint is now my primary operating system and I do almost all of my coding using Sublime.
				</p>

				<p>
					Sublime is a brilliant text editor. It's free, and provides a number of unique features that set it far apart from anything in its class. I can open a whole folder in Sublime, which allows me to easily switch from file to file, or open individual ones as tabs. It offers automatic spell-check, syntax highlighting, auto-tabbing, intelligent auto-completion, and a wide variety of handy extensions. Yet it's most impressive feature is its support for multiple cursors. This allows me to type the same thing in multiple places at once. This is exceptionally handy as it makes repetitious changes really easy. I'm very surprised that expensive editors don't offer this. Sublime, a rather small program, runs circles around the editing capabilities of Netbeans, Eclipse, or Visual Studio.
				</p>

				<div class="sublime">
					<img src="../images/Sublime.jpg" alt="Coding in Sublime">
					<img src="../images/Sierpinski_Mountain.jpg" alt="Artificial 3D Mountain">
					<div class="caption">
						Here I use Sublime (left) to write a program in C++ and GLSL which uses OpenGL to create an artificial 3D mountain. Compiling in the command-line really is the way to go. :)
					</div>
				</div>
			</div>

<?php
	generateFooter();
?>

