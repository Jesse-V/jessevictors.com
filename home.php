<?php
   try
   {
      $db = new PDO("sqlite:_private/sqlite.db");
   }
   catch (PDOException $e)
   {
      echo $e->getMessage();
   }

   date_default_timezone_set("America/Anchorage");

   //http://www.php.net/manual/en/function.time.php#108581
   function timeElapsed($secs)
   {
      $bit = array(
        ' year'        => $secs / 31556926 % 12,
        ' week'        => $secs / 604800 % 52,
        ' day'        => $secs / 86400 % 7,
        ' hour'        => $secs / 3600 % 24,
        ' minute'    => $secs / 60 % 60,
        ' second'    => $secs % 60
        );

      foreach($bit as $k => $v)
      {
         if($v > 1)
            $ret[] = $v . $k . 's';
         if($v == 1)
            $ret[] = $v . $k;
      }

      //array_splice($ret, count($ret)-1, 0, 'and');
      //$ret[] = 'ago';

      return $ret[0];//join(' ', $ret);
   }
?>

<div class="sideBar">
   <div class="news section">
      <div class="subtitle">Latest News</div>
      <?php
         $newsList = $db->query("SELECT * FROM News");
         foreach ($newsList as $new)
         {
            $title = $new['title'];
            if (strlen($title) > 28)
               $title = substr($title, 0, 25)."...";
            echo '<div class="item">'.$new['date'].': '.$title.'</div>';
         }
      ?>
   </div>
   <div class="github section">
      <div class="subtitle">Github Activity</div>
      <?php
         $activityList = $db->query("SELECT * FROM Github ORDER BY date DESC");
         $index = 1;
         foreach ($activityList as $event)
         {
            if ($index > 6)
               break;

            $date = $event['date'];
            $activity = json_decode($event['activity'], true);

            if (isset($activity['head_commit']))
            { //handle commit
               echo '<div class="event">';

               $timeAgo    = date('U') - $date;
               $user      = trim($activity['head_commit']['committer']['username'], '"');
               $userURL   = "https://github.com/".$user;
               $repo      = trim($activity['repository']['name'], '"');
               $repoURL   = trim($activity['repository']['url'], '"');
               $commit    = trim($activity['head_commit']['message'], '"');
               $commitURL = trim($activity['head_commit']['url'], '"');

               if (strlen($commit) > 33)
                  $commit = substr($commit, 0, 30)."...";

               echo '<a href="'.$commitURL.'">'.$commit.'</a><div class="description">by <a href="'.$userURL.'">'.$user.'</a> to <a href="'.$repoURL.'">'.$repo.'</a>, '.timeElapsed($timeAgo).' ago</div>';

               $index++;
               echo '</div>';
            }
         }
      ?>
   </div>
   <div class="torStatus section">
      <div class="subtitle">
         Tor Status<br><span class="subsubtitle">as of <?php echo date('i'); ?> minutes ago</span>
      </div>
      <table class="bandwidthInfo">
         <tr>
            <th>Relay</th>
            <th>Observed Traffic</th>
         </tr>
         <?php
            $relayList = $db->query("SELECT * FROM TorRelays");
            foreach ($relayList as $relay)
            {
               $bandwidthArr = json_decode($relay['bandwidth'], true);
               $bandwidth = $bandwidthArr['relays']['0']['observed_bandwidth'];

               echo '
               <tr>
                  <td>
                     <a href="https://globe.torproject.org/#/relay/'.$relay['fingerprint'].'">'.$relay['name'].'</a>
                  </td>
                  <td>'.number_format((float)$bandwidth / 1000000.0, 2, '.', '').' MB/sec</td>
               </tr>';
            }
         ?>
      </table>
      <div class="torStatImages">
         <img src="https://metrics.torproject.org/userstats-relay-country.png" alt="Tor users graph">
         <img src="https://metrics.torproject.org/networksize.png" alt="Tor network graph">
      </div>
      <div class="news">
         <?php
            $page = file_get_contents('https://blog.torproject.org/blog/feed');
            preg_match_all('/\<title\>.+\<\/title\>/', $page, $titleList);
            preg_match_all('/\<link\>.+\<\/link\>/', $page, $linkList);

            for ($key = 1; $key <= 4; $key++)
            {
               $link  = substr($linkList[0][$key],  6);
               $link  = substr($link, 0, strpos($link, "</link>"));
               $title = substr($titleList[0][$key], 7);
               if (strlen($title) > 38)
                  $title = substr($title, 0, 35)."...";
               echo '<div class="item"><a href="'.$link.'">'.$title.'</a></div>';
            }
         ?>
      </div>
   </div>
   <div class="fah section">
      <div class="subtitle">Folding@home Status</div>
      <div class="status">
         <table>
            <tr>
               <td>My productivity</td>
               <td>49,467 points/day</td>
            </tr>
            <tr>
               <td>F@h overall</td>
               <td>
               <?php
                  $page = file_get_contents('http://fah-web.stanford.edu/cgi-bin/main.py?qtype=osstats2');
                  preg_match('/\<TD\>Total\<.*/', $page, $total); //match line
                  preg_match_all('/\<TD\>\d*\<\/TD\>/', $total[0], $total); //get all values
                  preg_match('/\d+/', $total[0][1], $total);
                  echo $total[0] / 1000;
               ?>
               petaFLOPS</td>
            </tr>
         </table>
         <p>
            F@h news and science updates: <a href="http://folding.stanford.edu/home/blog">here</a>
         </p>
      </div>
   </div>
   <div id="xkcdAbstraction">
      <img src="images/xkcd-abstraction.png" alt="XKCD, I am a god."/>
   </div>
</div>

<div class="mainBody">
   <div id="title">JesseVictors.com</div>
   <p class="stig">
      Some say that he invented the curtain, and that his voice can only be heard by cats.<br>All we know is, he's not the Stig, he's the Stig's Alaskan cousin!
   </p>
   <p class="intro">
      Welcome to my website! Here you can view a bit about my background, check out what I know, and follow my blog for the latest news. I'm a graduate student working in computer and network security at Utah State University, I have a Bachelor's in computer science, and I'm a Linux user. If you're an employer and looking to hire me, you can find my latest resume <a href="resources/resume.pdf">here</a>.
   </p>
   <p class="intro">
      While I have owned this website for close to a decade, over the last several years I have worked on expanding my presence online. A bit of Google-fu or clever searches on DuckDuckGo can find most of this, but for convenience I'll list my main web presence here:
   </p>
   <p>
      <div class="title">Work</div>
      <table>
         <tr>
            <td>Email<br>jvictors at jessevictors dot com</td>
            <td>My main account. Send me a note! I digitally sign all my outgoing emails with my 2048-bit RSA key, <a href="http://keyserver.ubuntu.com/pks/lookup?op=get&search=0xAD97364FC20BEC80">0xc20bec80</a>.</td>
         </tr>
         <tr>
            <td>Github - <a href="https://github.com/Jesse-V">Jesse-V</a></td>
            <td>I currently have more than 1000 commits, 32 repositories, and 11 followers to my name. Some of my repositories are private, as I have a premium account.</td>
         </tr>
         <tr>
            <td>Tor - <a href="https://globe.torproject.org/#/search/query=utah">relays/exits</a></td>
            <td>I administer six high-speed Tor relays -- two of which are exits -- on my own servers. <a href="https://www.torproject.org/">Tor</a> helps protect millions of people from traffic analysis, surveillance, and government spying everyday, and I'm proud to do my part.</td>
         </tr>
         <tr>
            <td>Launchpad - <a href="https://launchpad.net/~jvictors">~jvictors</a></td>
            <td>I package a few Linux programs, mainly from my Github projects. I support Debian through .deb files, and *buntu/Mint through a PPA.</td>
         </tr>
         <tr>
            <td>Websites - this site and <a href="https://www.alaskawildflowerhoney.com/">AlaskaWildflowerHoney.com</a></td>
            <td>I have authored several websites besides this one. The most notable of which is <a href="https://www.alaskawildflowerhoney.com/">AlaskaWildflowerHoney.com</a>. My father runs a large beekeeping operation in Alaska, and through this website users can purchase honeybees and beekeeping supplies and purchase them with a credit card. The website code is <a href="https://github.com/Jesse-V/AlaskaWildflowerHoney.com">on Github</a>.</td>
         </tr>
         <tr>
            <td>Folding@home</td>
            <td>I wrote the majority of <a href="https://en.wikipedia.org/wiki/Folding@home">its Wikipedia article</a>, which now a Featured Article. I also founded and led <a href="http://fah-web.stanford.edu/cgi-bin/main.py?qtype=teampage&teamnum=195965">this team</a> before I switched over to my <a href="http://fah-web.stanford.edu/cgi-bin/main.py?qtype=userpage&username=Jesse_V">most recent identity</a>.</td>
         </tr>
         <tr>
            <td>Folding Forum  - <a href="https://foldingforum.org/memberlist.php?mode=viewprofile&u=18404">Jesse_V</a></td>
            <td>I'm heavily involved on the official Folding@home support forum and I help the Stanford researchers with many aspects of the F@h project.</td>
         </tr>
         <tr>
            <td>Speedtest.net and Mirrors</td>
            <td>My servers also host <a href="http://usu.speedtest.net/">a Speedtest.net server</a>, a <a href="http://tor-relay.cs.usu.edu/mirrors/linuxmint.com/">mirror of Linux Mint ISOs</a>, and a <a href="http://tuxnet-opti980.main.usu.edu/mirrors/torproject.org/">mirror of torproject.org</a>.</td>
         </tr>
         <tr>
            <td>IRC</td>
            <td>I lurk and chat on several <a href="https://freenode.net/">Freenode IRC</a> channels, including #fah, #folding@home, and #curecoin. My username is @Jesse_V, and I'm opped on #fah and #curecoin. Log on and join me!</td>
         </tr>
      </table>
   </p>
   <p>
      <div class="title">Recreational</div>
      <table>
         <tr>
            <td>Reddit - <a href="https://pay.reddit.com/user/Jesse_V">/u/Jesse_V</a></td>
            <td>I love this site and I visit it frequently, athough lately I've been more active under my more anonymous account.</td>
         </tr>
         <tr>
            <td>Wikipedia - <a href="https://en.wikipedia.org/wiki/User:Jesse_V.">User:Jesse_V</a></td>
            <td>I've been on the site since 2010, I'm an Online Ambassador, and I've made over 43,000 contributions to Wikipedia. I rewrote the entire <a href="https://en.wikipedia.org/wiki/Folding@home">Folding@home article</a> from scratch and brought it up to Featured Article status, and I approved <a href="https://en.wikipedia.org/wiki/Minecraft">Minecraft</a> as a Good Article.</td>
         </tr>
         <tr>
            <td>YouTube - <a href="https://www.youtube.com/user/JesseVictors">JesseVictors</a></td>
            <td>I mostly subscribe to channels and watch gaming videos, but I have put out some timelapses. If you're interested, check out my channel!</td>
         </tr>
         <tr>
            <td>Twitter - <a href="https://twitter.com/Jesse_Victors">@Jesse_Victors</a></td>
            <td>I'm not very active here, but you can still follow me if you like.</td>
         </tr>
      </table>
   </p>
   <p>
      <div class="title">Cryptocurrencies</div>
      <table>
         <tr>
            <td>TipChange - <a href="https://www.changetip.com/tipsters/Jesse-V">Tipster Jesse-V</a></td>
            <td>Impress me on Github, Reddit, or Twitter and I might end up tipping you some coins!</td>
         </tr>
         <tr>
            <td>Bitcoin</td>
            <td><img src="images/BTC_addr.png" alt="Bitcoin address QR"></td>
         </tr>
         <tr>
            <td>Curecoin</td>
            <td>Combines the Folding@home project with Bitcoin technology. BJEWt96yDpAo8HFwnmijfvb1JkT8axSoe1 is my public wallet.</td>
         </tr>
         <tr>
            <td>Dogecoin</td>
            <td>To the moon! Tip DNSsCF34UBgcuvY23CdgnWoC2GoZGggVLo you adventurous shibes!</td>
         </tr>
      </table>
   </p>
</div>

<p>
   Interested in improving your online security? I recommend installing Adblock and HTTPS Everywhere into your browser. If you want to go further, try NoScript, DuckDuckGo for Chrome, and the LastPass password manager.
</p>

<div id="xkcdRealProgrammers">
   <img src="images/xkcd-real_programmers.png" alt="XKCD, real programmers."/>
</div>
