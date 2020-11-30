<?php

include_once './inc/connection.php';

$alert_active = false;
$alert_message = 'Your event has created correctly.';
$alert_class = 'alert-success';

// CREATE EVENT
if($_POST && !empty(trim($_POST['name'])) && !empty(trim($_POST['date'])) ){

  /* DISPLAY NOTIFICATION */
  $alert_active = true;

  

  /* SANITIZE EVENT VARIABLES */
  $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
  $date = filter_var($_POST['date'], FILTER_SANITIZE_STRING);
  $time = filter_var($_POST['time'], FILTER_SANITIZE_STRING);

  $email = '';
  $sms = '';

  if( isset($_POST['email_notification']) ){
    $email = filter_var($_POST['email_notification'], FILTER_SANITIZE_NUMBER_INT);
  }
  if( isset($_POST['sms_notification']) ){
    $sms = filter_var($_POST['sms_notification'], FILTER_SANITIZE_NUMBER_INT);
  }
  

  $email_notification = (!empty( $email )) ? $email : 0;
  $sms_notification = (!empty( $sms )) ? $sms : 0;


  /* INSERT INTO TABLE */
  $query = "INSERT INTO `events` (`name`, `date`, `time`, `email`, `sms`) VALUES (:name, :date, :time, :email, :sms )";
  $execute_query = $pdo->prepare($query);
  $execute_query->execute(array(':name' => $name, ':date' => $date, ':time' => $time, ':email' => $email_notification, ':sms' => $sms_notification));

}else{

  $alert_active = true;
  $alert_message = 'You need to complete all the form.';
  $alert_class = 'alert-warning';

}

?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Create your own event</title>

  </head>

  <body>
    <div class="wrapper">
        <div class="container">
          <div class="row justify-content-center py-5">

            <?php if( $alert_active ): ?>
              <div class="col-12 mb-4">
                <div class="alert <?php echo $alert_class; ?>">
                  <?php echo $alert_message; ?>
                </div>
              </div>
            <?php endif; ?>

            <div class="col-10">
              <h1 class="text-center"><strong>Create Event!</strong></h1>
            </div>
            <div class="col-10 mt-5">

              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="event">
                <div class="container-fluid">
                  <div class="row">

                    <div class="col-12">
                      <div class="form-group">
                        <input type="text" name="name" placeholder="Event Name" class="form-control" required>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="form-group">
                        <input type="date" name="date" class="form-control" required>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="form-group">
                        <input type="time" name="time" class="form-control">
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="form-group">

                        <h4>Notifications: </h4>

                        <div class="form-check-inline">
                          <input type="checkbox" name="email-notification" id="emailNotification" class="form-check-input">
                          <label class="form-check-label" for="emailNotification">Email</label>
                        </div>

                        <div class="form-check-inline">
                          <input type="checkbox" name="sms-notification" id="SMSNotification" class="form-check-input">
                          <label class="form-check-label" for="SMSNotification">SMS</label>
                        </div>

                      </div>
                    </div>

                    <div class="col-12">
                      <input type="submit" name="submit" value="Create New Event" class="btn btn-primary">
                    </div>

                  </div>
                </div>
              </form>

            </div>

            <div class="col-12 mt-4 text-center">
              <a href="<?php echo PATH; ?>/">← Go back to events</a>
            </div>

          </div>
        </div>
    </div>
  </body>
</html>
