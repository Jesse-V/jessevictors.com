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
   $newsList = $db->query("SELECT * FROM News ORDER BY ID DESC");
?>

<table id="layoutTable">
   <tr>
      <td id="mainBody">
         <?php
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
