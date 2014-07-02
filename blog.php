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

   //I finally host this website myself on my own secure server. I'm happy to say that it's finally hosted on I host this website on my own server, and I'm happy to say that this site is hosted on my own server. , o
?>

<table id="layoutTable">
   <tr>
      <td id="mainBody">
         <?php
            $newsList = $db->query("SELECT * FROM News");
            foreach ($newsList as $new)
            {
               echo '
                  <div class="item">
                     <div class="title">'.$new['title'].'</div>
                     <div class="date">Posted: '.$new['date'].'</div>
                     <div class="post">'.$new['post'].'</div>
                  </div>';
            }
         ?>
      </td>
      <td id="sideBar">
         <div class="title">Recent Posts</div>
         <table>
            <?php
               $newsList = $db->query("SELECT * FROM News");
               foreach ($newsList as $new)
               {
                  echo '
                     <tr>
                        <td>'.$new['date'].'</td>
                        <td>'.$new['title'].'</td>
                     </tr>';
               }
            ?>
         </table>
      </td>
   </tr>
</table>
