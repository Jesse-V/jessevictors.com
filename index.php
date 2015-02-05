<?php
   $BASE_URL = "https://www.jessevictors.com/";
?>

<!DOCTYPE html>
<html id="top">
   <head>
      <title>Jesse Victors' Personal Website</title>
      <meta charset="UTF-8">
      <link type="text/css" rel="stylesheet" href="resources/galleria/themes/classic/galleria.classic.css">
      <link rel="stylesheet" type="text/css" href="css/common.css"/>
      <link rel="stylesheet" type="text/css" href="css/fancyHR.css"/>
      <link rel="stylesheet" type="text/css" href="css/home.css" id="customCSS"/>
      <script src="resources/js/jquery-1.11.1.min.js"></script>
      <script src="resources/js/jquery-ui-1.10.4.custom.min.js"></script>
   </head>
   <body>
      <div id="header">
         <div id="barBackground"></div>
         <div class="left section">
            <div class="logo logoLeft">
               <img src="images/profile_pic2.4.png" alt="My profile picture"/>
            </div>
            <table>
               <tr>
                  <td class="title">
                     <div class="wrapper">Jesse Victors</div>
                  </td>
               </tr>
            </table>
         </div>
         <div class="right section">
            <table>
               <tr>
                  <td class="item item1">
                     <div class="label"><span class="wrapper selected">Home</span></div>
                     <a href=<?php echo '"'.$BASE_URL.'#/home"'; ?>><span class="link"></span></a>
                  </td>
                  <td class="item item2">
                     <div class="label"><span class="wrapper">Education</span></div>
                     <a href=<?php echo '"'.$BASE_URL.'#/education"'; ?>><span class="link"></span></a>
                  </td>
                  <td class="item item3">
                     <div class="label"><span class="wrapper">Skills & Interests</span></div>
                     <a href=<?php echo '"'.$BASE_URL.'#/skills"'; ?>><span class="link"></span></a>
                  </td>
                  <td class="item item4">
                     <div class="label"><span class="wrapper">Recreation</span></div>
                     <a href=<?php echo '"'.$BASE_URL.'#/recreation"'; ?>><span class="link"></span></a>
                  </td>
                  <td class="item item5">
                     <div class="label"><span class="wrapper">Blog</span></div>
                     <a href=<?php echo '"'.$BASE_URL.'#/blog"'; ?>><span class="link"></span></a>
                  </td>
               </tr>
            </table>
            <div class="logo logoRight">
               <img src="images/profile_pic_final.png" alt="Smaller profile picture"/>
            </div>
         </div>
      </div>
      <div id="contentWrap">
         <div id="content">
            <?php
               require_once("home.php");
            ?>
         </div>
      </div>
      <script src="js/index.js"></script>
	<script>
  		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  		ga('create', 'UA-53917626-1', 'auto');
  		ga('send', 'pageview');
	</script>
   </body>
</html>
