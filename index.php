<?php //opening HTML
    $_TITLE_ = "Home";
    $_STYLESHEETS_ = array("css/index.css");
    require_once('common/header.php');
?>

   <div id="title">
      JesseVictors.com
   </div>

   <div class="rightSide">
      <div class="news section">
         <div class="subtitle">Latest News</div>
         <div class="item">News piece 1</div>
         <div class="item">News piece 2</div>
         <div class="item">News piece 3</div>
      </div>
      <div class="latestCommits section">
         <div class="subtitle">Github Activity</div>
         <div class="commit">pushed "main content for homepage" to Github</div>
         <div class="commit">pushed "placeholder pages" to Github</div>
         <div class="commit">pushed "organized header and ..." to Github</div>
         <div class="commit">pushed "header color adjustments" to Github</div>
         <div class="commit">pushed "finished building header" to Github</div>
         <div class="commit">pushed "layout fixes" to Github</div>
      </div>
      <div class="torStatus section">
         <div class="subtitle">Tor Relay Status</div>
         <table>
            <tr>
               <th>Relay</th>
               <th>Uptime</th>
               <th>Bandwidth</th>
            </tr>
            <tr>
               <td>
                  <a href="https://globe.torproject.org/#/relay/BFA0E9F3E6F446BB538877D89CD57DB1362E799C">UtahState0</a>
               </td>
               <td>8d 10hr</td>
               <td>3.19 MB/sec</td>
            </tr>
            <tr>
               <td>
                  <div class="status"><a href="https://globe.torproject.org/#/relay/40DF7E2EDE33DFCB126D241BD1907EED70925498">UtahState1</a>
               </td>
               <td>8d 10hr</td>
               <td>4.88 MB/sec</td>
            </tr>
            <tr>
               <td>
                  <div class="status"><a href="https://globe.torproject.org/#/relay/4B8C39A51FD0BE3F91E0A1C3F5AA67A17EC56EB7">UtahState2</a>
               </td>
               <td>8d 10hr</td>
               <td>4.10 MB/sec</td>
            </tr>
            <tr>
               <td>
                  <div class="status"><a href="https://globe.torproject.org/#/relay/C6DC982A0FE54BC91AF32629F33711D5C12C5546">UtahState3</a>
               </td>
               <td>8d 10hr</td>
               <td>3.67 MB/sec</td>
            </tr>
            <tr>
               <td>
                  <div class="status"><a href="https://globe.torproject.org/#/relay/2FC06226AE152FBAB7620BB107CDEF0E70876A7B">UtahStateExit</a>
               </td>
               <td>8d 10hr</td>
               <td>5.36 MB/sec</td>
            </tr>
            <tr>
               <td>
                  <div class="status"><a href="https://globe.torproject.org/#/relay/1946F5E4748B069D3B989B5AF50C7DDD3AC61859">UtahStateExit2</a>
               </td>
               <td>8d 10hr</td>
               <td>6.98 MB/sec</td>
            </tr>
            <tr>
               <td>
                  <div class="status"><a href="https://globe.torproject.org/#/bridge/442EBC25DABEC80363B12580315B8DDDD083BB1A">AlaskaBridge</a>
               </td>
               <td>10d 12hr</td>
               <td>54.04 kB/sec</td>
            </tr>
         </table>
      </div>
      <div class="miscStatus section">
         <div class="subtitle">Folding@home Productivity</div>
         <div class="status">24,523 points/day</div>

         <div class="subtitle">Cryptocurrency</div>
         <div class="coin">
            <div class="title">Bitcoin (...77g)</div>
            <table>
               <tr class="price">
                  <td>USD/BTC</td>
                  <td>623.43</td>
               </tr>
               <tr class="balance">
                  <td>Balance</td>
                  <td>0.23 BTC</td>
               </tr>
               <tr class="volume">
                  <td>Total Volume</td>
                  <td>0.32 BTC</td>
               </tr>
            </table>
         </div>
         <div class="coin">
            <div class="title">Curecoin: (...6jy)</div>
            <table>
               <tr class="price">
                  <td>USD/CUR</td>
                  <td>0.005</td>
               </tr>
               <tr class="price">
                  <td>USD/BTC</td>
                  <td>0.0007</td>
               </tr>
               <tr class="balance">
                  <td>Balance</td>
                  <td>90 CUR</td>
               </tr>
               <tr class="volume">
                  <td>Total Volume</td>
                  <td>120 CUR</td>
               </tr>
            </table>
         </div>
      </div>
      <div id="xkcdAbstraction">
         <img src="images/xkcd-abstraction.png" alt="XKCD, I am a god."/>
      </div>
   </div>

   <div class="leftSize">
      <p>
         Welcome to JesseVictors.com! Here you can view a bit about my background, check out what I know, and follow my blog for the latest news. If you're an employer and looking to hire me, you can find my latest resume <a href="files/resume.pdf">here</a>.
      </p>
      <p>
         While I have owned this website for close to a decade, over the last several years I have worked on expanding my presence online. A bit of Google-fu or clever searches on DuckDuckGo can find most of this, but for convience I'll list my main web presence here:
      </p>
      <p>
         <div class="title">Work</div>
         <ul>
            <li>Email
               <div class="description">
                  jvictors AT jessevictors DOT com. Send me a note!
               </div>
            </li>
            <li>Github
               <div class="description">
                  <a href="https://github.com/Jesse-V">https://github.com/Jesse-V</a> Github is a popular website for organizing and managing open-source coding projects. I currently have 1000+ commits, 32 repositories, and 11 followers to my name. I use this site for most of my programming projects, which is a frequent activity. Some of my repositories are private, as I have a premium account.
               </div>
            </li>
            <li>Tor
               <div class="description">
                  <a href="https://www.torproject.org/">Tor</a> is popular tool that protects Internet users from traffic analysis, surveillance, and government spying. I run all six of <a href="https://globe.torproject.org/#/search/query=utah">these relays</a>, two of which are exits, on my own servers. These machines also run <a href="http://usu.speedtest.net/">a Speedtest.net server</a>, a mirror of Linux Mint ISOs, and <a href="http://tuxnet-opti980.main.usu.edu/mirrors/torproject.org/">a mirror</a> of torproject.org.
               </div>
            </li>
            <li>Launchpad
               <div class="description">
                  I package a few Linux packages, including Folding Atomata, my protein viewer for Folding@home, and <a href="https://github.com/Jesse-V/CurecoinSource#curecoin-client">CurecoinQT</a>, a graphical client for the Curecoin cryptocurrency. You can find my Launchpad profile <a href="https://launchpad.net/~jvictors">here</a>.
               </div>
            </li>
            <li>Folding@home
               <div class="description">
                  <a href="http://folding.stanford.edu/home/">Folding@home</a> is a popular distributed computing project that simulates protein folding and other molecular dynamics for disease research. I wrote the majority of <a href="https://en.wikipedia.org/wiki/Folding@home">its Wikipedia article</a>, which now a Featured Article. I founded and led <a href="http://fah-web.stanford.edu/cgi-bin/main.py?qtype=teampage&teamnum=195965">this team</a> before I switched over to my <a href="http://fah-web.stanford.edu/cgi-bin/main.py?qtype=userpage&username=Jesse_V">most recent identity</a>.
               </div>
            </li>
            <li>Folding Forum
               <div class="description">
                  <a href="https://foldingforum.org">The Folding Forum<a/> is the official support forum for the Folding@home project. I'm heavily involved in the forum and you can find my account <a href="https://foldingforum.org/memberlist.php?mode=viewprofile&u=18404">here.</a>
            </li>
            <li>IRC
               <div class="description">
                  I lurk and chat on several <a href="https://freenode.net/">Freenode IRC</a> channels, including #fah, #folding@home, and #curecoin. My username is @Jesse_V, and I'm opped on #fah and #curecoin. Log on and join me!
               </div>
            </li>
         </ul>
      <p>
      <p>
         <div class="title">Recreational</div>
         <ul>
            <li>Reddit
               <div class="description">
                  <a href="https://pay.reddit.com/">Reddit</a> is hilarious, fun, and educational all at the same time, I love it. I haven't once regretted leaving Facebook for this site. I'm <a href="https://pay.reddit.com/user/Jesse_V">/u/Jesse_V</a>, though I've been recently more active under some more anonymous accounts.
               </div>
            </li>
            <li>Wikipedia
               <div class="description">
                  I'm <a href="https://en.wikipedia.org/wiki/User:Jesse_V.">User:Jesse_V.</a> I've been on the site since 2010, I'm an Online Ambassador, and I've made over 43,000 contributions to Wikipedia, making me one of the 1000 most active Wikipedians. I rewrote the entire <a href="https://en.wikipedia.org/wiki/Folding@home">Folding@home article</a> from scratch and brought it up to Featured Article status, and I approved <a href="https://en.wikipedia.org/wiki/Minecraft">Minecraft</a> as a Good Article.
               </div>
            </li>
            <li>YouTube
               <div class="description">
                  I mostly subscribe to channels and watch gaming videos, but I have put out some timelapses. If you're interested, check out my channel at <a href="https://www.youtube.com/user/JesseVictors">/JesseVictors</a>.
               </div>
            </li>
            <li>Twitter
               <div class="description">
                  I'm not very active here, but you can still follow me at <a href="https://twitter.com/Jesse_Victors">@Jesse_Victors</a> if you like.
               </div>
            </li>
         </ul>
      </p>
      <p>
         <div class="title">Cryptocurrencies</div>
         <ul>
            <li>TipChange
               <div class="description">
                  Impress me on Github, Reddit, or Twitter and I might end up using <a href="https://www.changetip.com">changetip.com</a> to tip you some coins! I'm <a href="https://www.changetip.com/tipsters/Jesse-V">tipster Jesse-V</a>.
               </div>
            </li>
            <li>Curecoin Address (volume: ) and username</li>
            <li>Bitcoin Address (volume: )</li>
            <li>Dogecoin Address (volume )</li>
         </ul>
      </p>
   </div>

   <p>
      Interested in improving your online security? I recommend installing Adblock and HTTPS Everywhere into your browser. If you want to go further, try NoScript, DuckDuckGo for Chrome, and the LastPass password manager.
   </p>

   <div id="xkcdRealProgrammers">
      <img src="images/xkcd-real_programmers.png" alt="XKCD, real programmers."/>
   </div>

<?php
    $_JS_ = array();
    require_once('common/footer.php'); //closing HTML
?>
