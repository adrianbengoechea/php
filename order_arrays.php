<?php
  $days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
  $numbers = array(30, 54,  1, 5, 49, 7, 2 , 67, 3, 23, 11);
  sort($days);
?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Order Arrays</title>
   </head>
   <body>
     <?php
      echo 'Numbers: ';
       foreach ($numbers as $number) {
         echo $number . ', ';
       }

     ?>
      <div style="margin-bottom: 40px">
        <h1>Days of the week - SORT:</h1>
        <ul>
          <?php

            foreach ($days as $day) {
              echo '<li>' . $day . '</li>';
            }

          ?>
        </ul>
      </div>
      <div class="">
        <h1>Days of the week - RSORT:</h1>
        <ul>
          <?php
            rsort($days);
            foreach ($days as $day) {
              echo '<li>' . $day . '</li>';
            }

          ?>
        </ul>
      </div>
      <div class="">
        <h1>NUMBERS - RSORT:</h1>
        <ul>
          <?php
            rsort($numbers);
            foreach ($numbers as $number) {
              echo '<li>' . $number . '</li>';
            }

          ?>
        </ul>
      </div>
   </body>
 </html>
