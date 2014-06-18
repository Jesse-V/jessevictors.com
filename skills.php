<?php //opening HTML
   $_TITLE_ = "Skills & Interests";
   $_STYLESHEETS_ = array("css/skills.css");
   require_once('common/header.php');
?>

   <p>
      What do I know? That's always a tricky self-evaluation question, because we're not always good at enumerating our full capabilities. Nevertheless, I think it would be fair if I listed some of my skills, strengths, the tools I'm familiar with, and what I enjoy working with.
   </p>
   <ul>
      <li>
         <div class="know">
            I know how to write clean computer code.
         </div>
         <div class="description">
            <p>
               What does that mean? It means that I can organize software, it means I'm not afraid of horizontal whitespace, it means I write self-documenting code and then add documentation, but more than anything else it means I avoid using gotos to avoid risking a sudden attack from a velociraptor.
            </p>
            <div class="illustration" id="gotoComic">
               <img src="images/xkcd-goto.png" alt="XCKD goto velociraptor attack"/>
               <div class="caption">Don't think for a moment that this won't happen. Assembly jump statements are the one and only exception.</div>
            </div>
            <p>
               What proof do I have of this? Check out my <a href="https://github.com/Jesse-V/Folding-Atomata">Folding Atomata</a> project on Github.
            </p>
         </div>
      </li>
      <li>
         <div class="illustration" id="linuxLogos">
            <img src="images/kali-linux.png" alt="Kali Linux"/>
            <div class="caption">Kali Linux is an OS designed for penetration testing - the art of testing a computer's defenses through ethical hacking.</div>

            <div id="tuxLogo">
               <img src="images/linux-tux.png" alt="Linux tux penguin"/>
            </div>
            <img src="images/linux-mint.png" alt="Linux Mint logo and watermark"/>
            <div class="caption">Linux Mint, my operating system of choice.</div>
         </div>
         <div class="know">
            I know network security, how to secure a computer, and ethical hacking.
         </div>
         <div class="description">
            <p>
               My Master's is in computer and network security, and my specialty is in anonymity networks. I follow security and
            </p>
         </div>
      </li>
      <li>
         <div class="know">
            I know Linux and Windows.
         </div>
         <div class="description">
            <p>
               Everyone knows Microsoft Windows, and so do I. I'm quite familiar with Windows Office (Word, Excel, ...) as well as the intricacies of the operating system. I can certainly work efficiently in that system. Given the choice however, I far prefer Linux over Windows, and I generally consider Windows to be bloated, internally disorganized, irritatingly proprietary, expensive, and virus-ridden. For two years now Linux Mint has been my primary OS, and I find it efficient, organized and logical, free and open-source, and quite safe. I find that I'm orders of magnitude more productive in Linux than I am in Windows, though I can use both systems.
            </p>
            <p>
               Ask me to set up a server and I can do that too. I'd choose Debian Stable and set it up through the command-line remotely. One of the most amazing things about Linux is the power and flexibility that an admin has through the terminal. I set up my servers almost entirely through SSH, and I watch them through standard health and stability monitoring tools.
         </div>
      </li>
      <li>
         <div class="know">
            I know how to get the tools I need.
         </div>
         <div class="description">
            <p>
               A computer scientist doesn't work for very long before realizing that he really would like a second or third monitor, that his code really should be on Github, and that he should stop writing code when there's already a library that does it for him.
            </p>
         </div>
      </li>
      <li>
         <div class="know">
            I know how to stay focused.
         </div>
         <div class="description">

         </div>
      </li>
      <li>
         <div class="know">
            I know how to have fun when the work is done.
         </div>
         <div class="description">

         </div>
      </li>
   </ul>
   <p>
      <b>This page is under development.</b>
   </p>
   <div id="regexComic">
      <img src="images/xkcd-regular_expressions.png" alt="Stand back, I know regular expressions!"/>
   </div>

<?php
   $_JS_ = array();
   require_once('common/footer.php'); //closing HTML
?>



