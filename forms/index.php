<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact Us</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <?php
      $validation_error = false;
      if(isset($_GET['error'])){
        $validation_error = true;
        $message_error = $_GET['error'];
      }
    ?>
    <div class="master-container container">
        <div class="row">
          <div class="col-12">
            <h1 class="text-center w-100">Contact</h1>
          </div>
          <?php if($validation_error == true): ?>
            <div class="col-12">
              <h6 class="text-danger mt-4"><?php echo $message_error; ?></h6>
            </div>
          <?php endif; ?>
          <div class="col-12">
            <form id="contact-form" action="controller.php" method="post">
              <div class="row">

                <div class="col-12 col-md-6">
                  <label>
                    <input type="text" name="first_name" placeholder="First Name*" required>
                  </label>
                </div>
                <div class="col-12 col-md-6">
                  <label for>
                    <input type="text" name="last_name" placeholder="Last Name*" required>
                  </label>
                </div>
                <div class="col-12">
                  <label>
                    <input type="email" name="email" placeholder="Email*" required>
                  </label>
                </div>
                <div class="col-12">
                  <label>
                    <input type="tel" name="phone" placeholder="Phone">
                  </label>
                </div>
                <div class="col-12">
                  <label>
                    <select name="state">
                      <option value="">--Select State--</option>
                      <option value="AL">Alabama</option>
                      <option value="AK">Alaska</option>
                      <option value="AZ">Arizona</option>
                      <option value="AR">Arkansas</option>
                      <option value="CA">California</option>
                      <option value="CO">Colorado</option>
                      <option value="CT">Connecticut</option>
                      <option value="DE">Delaware</option>
                      <option value="DC">District Of Columbia</option>
                      <option value="FL">Florida</option>
                      <option value="GA">Georgia</option>
                      <option value="HI">Hawaii</option>
                      <option value="ID">Idaho</option>
                      <option value="IL">Illinois</option>
                      <option value="IN">Indiana</option>
                      <option value="IA">Iowa</option>
                      <option value="KS">Kansas</option>
                      <option value="KY">Kentucky</option>
                      <option value="LA">Louisiana</option>
                      <option value="ME">Maine</option>
                      <option value="MD">Maryland</option>
                      <option value="MA">Massachusetts</option>
                      <option value="MI">Michigan</option>
                      <option value="MN">Minnesota</option>
                      <option value="MS">Mississippi</option>
                      <option value="MO">Missouri</option>
                      <option value="MT">Montana</option>
                      <option value="NE">Nebraska</option>
                      <option value="NV">Nevada</option>
                      <option value="NH">New Hampshire</option>
                      <option value="NJ">New Jersey</option>
                      <option value="NM">New Mexico</option>
                      <option value="NY">New York</option>
                      <option value="NC">North Carolina</option>
                      <option value="ND">North Dakota</option>
                      <option value="OH">Ohio</option>
                      <option value="OK">Oklahoma</option>
                      <option value="OR">Oregon</option>
                      <option value="PA">Pennsylvania</option>
                      <option value="RI">Rhode Island</option>
                      <option value="SC">South Carolina</option>
                      <option value="SD">South Dakota</option>
                      <option value="TN">Tennessee</option>
                      <option value="TX">Texas</option>
                      <option value="UT">Utah</option>
                      <option value="VT">Vermont</option>
                      <option value="VA">Virginia</option>
                      <option value="WA">Washington</option>
                      <option value="WV">West Virginia</option>
                      <option value="WI">Wisconsin</option>
                      <option value="WY">Wyoming</option>
                      <option value="AA">Armed Forces Americas</option>
                      <option value="AP">Armed Forces Europe</option>
                      <option value="AE">Armed Forces Pacific</option>
                  </select>
                  </label>
                </div>
                <div class="col-12">
                  <label>
                    <textarea name="message" rows="8" placeholder="Message"></textarea>
                  </label>
                </div>
                <div class="col-12">
                  <label>
                    <input type="submit" name="submit" value="Send Message">
                  </label>
                </div>

              </div>
            </form>
          </div>
        </div>
      </div>

    <script src="http://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript">

    </script>
  </body>
</html>
