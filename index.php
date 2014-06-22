<!DOCTYPE html>
<html id="top">
   <head>
      <title>JesseVictors.com</title>
      <meta charset="UTF-8">
      <link rel="stylesheet" type="text/css" href="resources/flippant/flippant.css"/>
      <link rel="stylesheet" type="text/css" href="css/common.css"/>
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
                     <a href="#/home"><span class="link"></span></a>
                  </td>
                  <td class="item item2">
                     <div class="label"><span class="wrapper">Education</span></div>
                     <a href="#/education"><span class="link"></span></a>
                  </td>
                  <td class="item item3">
                     <div class="label"><span class="wrapper">Skills & Interests</span></div>
                     <a href="#/skills"><span class="link"></span></a>
                  </td>
                  <td class="item item4">
                     <div class="label"><span class="wrapper">Recreation</span></div>
                     <a href="#/recreation"><span class="link"></span></a>
                  </td>
                  <td class="item item5">
                     <div class="label"><span class="wrapper">Blog</span></div>
                     <a href="#/blog"><span class="link"></span></a>
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
   </body>
</html>
