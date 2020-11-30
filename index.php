<?php

include_once('./inc/connection.php');

$query = 'SELECT * FROM `events`';
$execute_query = $pdo->prepare($query);
$execute_query->execute();
$result = $execute_query->fetchAll();

// print_r($result);

?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Welcome to my first DB connection on PHP!</title>

  </head>
  <body>

    <div class="wrapper">
      <div class="container">

      
        <div class="row justify-content-center py-5">
          <?php if( !empty($result) ): ?>
            <div class="col-10">
              <h1 class="w-100 d-block text-center"><strong>Here are your reminders!</strong></h1>
            </div>
            <div class="col-10">
              <table class="table table-striped table-bordered mt-5">

                <colgroup>
                  <col span="1" style="width: 35%">
                  <col span="1" style="width: 25%">
                  <col span="1" style="width: 15%">
                  <col span="1" style="width: 25%">
                </colgroup>

                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Notifications</th>
                  </tr>
                </thead>

                <tbody>
                  <?php foreach( $result as $item ): ?>
                    <tr>
                      <td><?php echo $item['name']; ?></td>
                      <td><?php echo $item['date']; ?></td>
                      <td><?php echo $item['time']; ?></td>
                      <td>
                        <span class="d-block">Email: <?php echo ( $item['email'] == 1 ) ? 'Yes' : 'No'; ?></span>
                        <span class="d-block">SMS: <?php echo ( $item['sms'] == 1 ) ? 'Yes' : 'No'; ?></span>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>

              </table>
            </div>
          <?php else: ?>
            <div class="col-8">
              <h1 class="w-100 d-block text-center"><strong>You have not events.</strong></h1>
            </div>
          <?php endif; ?>

          <div class="col-12 mt-4 text-center">
            You can create a new event by clicking <a href="<?php echo PATH; ?>/create.php">here.</a>
          </div>

        </div>
     


      </div>
    </div>
    
  </body>
</html>
