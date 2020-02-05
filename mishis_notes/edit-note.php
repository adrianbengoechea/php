<?php require_once('assets/template-parts/header.php'); ?>
<!-- <BODY> -->

<?php
  require_once( SITE_ROOT . 'connection.php');

  if(isset($_GET)){
    if(!trim($_GET['eid']) == ''){
      #If is all ok...

      $query = 'SELECT * FROM `notas` WHERE `ID` = ' . $_GET['eid'];
      $query_load = $connection->prepare($query);
      $query_load->execute();

      $title = $query_load->fetchAll();

    }else{
      alert_message('Some error in the fields sent.', 'alert-danger');
      redirect_to_home();
    }
  }else{
    alert_message('Nope!', 'alert-danger');
    redirect_to_home();
  }
?>

<div class="main-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 go-back">
        <a href="index.php"> <i class="material-icons">keyboard_arrow_left</i> Go back </a>
      </div>
      <div class="col-12">
        <h1 class="title main-title text-center mt-5">Hello there!</h1>
      </div>
      <div class="col-12">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h4 class="mb-3">Edit your note: <?php echo $title['0']['TITLE']; ?></h4>
            </div>
            <div class="col-12">
              <?php

              ?>
              <form class="add-notes-form" action="assets/edit-note-processor.php" method="POST">
                  <div class="row">
                    <div class="col-12">
                        <input type="text" name="new-note-title" placeholder="Note Title:" value="<?php echo $title['0']['TITLE']; ?>">
                    </div>
                    <div class="col-12">
                      <textarea name="new-note-content" rows="8" placeholder="Note Message:"><?php echo $title['0']['CONTENT']; ?></textarea>
                    </div>
                    <div class="col-12">
                      <input type="submit" name="submit" value="Edit your note!">
                    </div>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


















<!-- </BODY> -->
<?php require_once('assets/template-parts/footer.php'); ?>
