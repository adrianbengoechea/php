<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>First Form</title>
  </head>
  <body>
    <?php # FORM VALIDATION! ?>
    <form class="main-form" action="receive.php" method="POST">

      <input type="text" name="first_name" placeholder="First Name">
      <input type="text" name="last_name" placeholder="Last Name">

      <hr>

      <h3>Gender</h3>

      <label for="man">Man</label>
      <input type="radio" name="gender" value="man" id="man">

      <label for="woman">Woman</label>
      <input type="radio" name="gender" value="woman" id="woman">

      <br>

      <hr>

      <h3>Date of Birth</h3>
      <select class="age" name="age">
          <?php
            for($i = 1900; $i <= 2020; $i++){
                echo '<option value="' . $i . '">' . $i . '</option>';
            }
          ?>
      </select>

      <br>

      <h3>Do you have a disability?</h3>
      <input type="checkbox" class="disability" value="yes, i have a disability" name="disability">

      <br><br>

      <input type="submit" value="Send">

    </form>
  </body>
</html>
