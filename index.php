<?php
  include_once 'connection.php';

$sql_read = 'SELECT * FROM colors';
$sql_add = 'INSERT INTO colors (color, description) VALUES (?, ?)';


// Read
  $gsent = $pdo->prepare($sql_read);
  $gsent->execute();
  $result = $gsent->fetchAll();

//Add
  if($_POST){
    $actual_color = $_POST['color'];
    $actual_description = $_POST['description'];

    $sql_insert = $pdo->prepare($sql_add);
    $sql_insert->execute(array($actual_color, $actual_description));

    header('location:index.php');
  }


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>


    <div class="wrapper">
        <div class="container">
          <div class="row">
            <div class="col-6 pt-2">
              <?php foreach($result as $dato): ?>
                <div class="alert alert-<?php echo $dato['color']; ?>">
                  <?php echo $dato['color']; ?> - <?php echo $dato['description']?>
                </div>
              <?php endforeach ?>
            </div>
            <div class="col-6">
              <form method="POST">
                  <input type="text" name="color" class="form-control my-2" placeholder="Color..." minlength="1" title="No blank field" required>
                  <input type="text" name="description" class="form-control my-2" placeholder="Description..." minlength="1" title="No blank field required">
                  <button class="btn btn-primary mt-4">Add</button>
              </form>
            </div>
          </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
