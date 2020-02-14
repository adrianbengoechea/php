<?php require_once('header.php'); ?>
<!-- <BODY> -->

<?php

  $eid = intval($_GET['eid']);

  if(isset($_GET)){
      if(!trim($eid) == '' and is_numeric($eid) and !intval($eid) == 0){

          #If is all ok...

          $title = db('SELECT * FROM `notas` WHERE `ID` = :eid', array(':eid'=>$eid));


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
        <a href="index.php"> <i class="material-icons">keyboard_arrow_left</i> Go to home </a>
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
              <form class="add-notes-form" action="app/edit-note-processor.php" method="POST">
                  <div class="row">
                    <div class="col-12">
                        <input type="text" name="edit-note-title" placeholder="Note Title:" value="<?php echo $title['0']['TITLE']; ?>">
                    </div>
                    <div class="col-12">
                      <textarea name="edit-note-content" rows="8" placeholder="Note Message:"><?php echo $title['0']['CONTENT']; ?></textarea>
                    </div>
                    <div class="col-12">
                      <input type="hidden" name="note-id" value="<?php echo $eid; ?>">
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
<?php require_once('footer.php'); ?>
