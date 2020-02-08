<!DOCTYPE html>

<html lang="en" dir="ltr">

  <head>

    <meta charset="utf-8">

    <title>Welcome to Mishis Notes</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/custom.css">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

  </head>

  <body>

    <?php require_once('assets/_init.php'); ?>

    <?php if(!trim($_SESSION['alert_message']) == ''): ?>
      <div class="alert-message">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="alert  <?php echo $_SESSION['alert_message_class']; ?> alert-dismissible custom-alert fade show" role="alert">
                <?php echo $_SESSION['alert_message']; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php
      $_SESSION['alert_message'] = '';
      $_SESSION['alert_message_class'] = '';
      endif;
    ?>
