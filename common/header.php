<!DOCTYPE html>
<html id="top">
   <head>
   <?php
      echo '
      <title>'.$_TITLE_.' -JesseVictors.com</title>
      <meta charset="UTF-8">
      <link rel="stylesheet" type="text/css" href="css/common.css">';

      foreach ($_STYLESHEETS_ as $sheet)
         echo '<link rel="stylesheet" type="text/css" href="'.$sheet.'" />';
   ?>
   </head>
   <body>
      <div id="header">
         <div id="barBackground"></div>
         <div class="left section">
            <table>
               <tr>
                  <td class="logo">
                     <img src="images/profile_pic2.4.png" alt="My profile picture"/>
                  </td>
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
                     <div class="wrapper">Home</div>
                     <a href="home.html"><span class="link"></span></a>
                  </td>
                  <td class="item item2">
                     <div class="wrapper">Education</div>
                     <a href="education.html"><span class="link"></span></a>
                  </td>
                  <td class="item item3">
                     <div class="wrapper">Skills & Interests</div>
                     <a href="skills.html"><span class="link"></span></a>
                  </td>
                  <td class="item item4">
                     <div class="wrapper">Recreation</div>
                     <a href="recreation.html"><span class="link"></span></a>
                  </td>
                  <td class="item item5">
                     <div class="wrapper">Blog</div>
                     <a href="blog.html"><span class="link"></span></a>
                  </td>
                  <td class="logo">
                     <img src="images/profile_pic_final.png" alt="Smaller profile picture"/>
                  </td>
               </tr>
            </table>
         </div>
      </div>
      <div id="content">

