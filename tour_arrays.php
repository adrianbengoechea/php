<?php
  $days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');


 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Tour Arrays</title>
   </head>
   <body>
      <h1>Days of the week:</h1>
      <ul>
        <?php

          foreach ($days as $day) {
            echo '<li>' . $day . '</li>';
          }

        ?>
      </ul>
   </body>
 </html>
