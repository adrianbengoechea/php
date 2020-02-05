<?php require_once('assets/template-parts/header.php'); ?>
<!-- <BODY> -->

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
                <h4 class="mb-3">Add your new note:</h4>
            </div>
            <div class="col-12">
              <?php

              ?>
              <form class="add-notes-form" action="assets/new-note-processor.php" method="POST">
                  <div class="row">
                    <div class="col-12">
                        <input type="text" name="new-note-title" placeholder="Note Title:">
                    </div>
                    <div class="col-12">
                      <textarea name="new-note-content" rows="8" placeholder="Note Message:"></textarea>
                    </div>
                    <div class="col-12">
                      <input type="submit" name="submit" value="Add your new note!">
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
