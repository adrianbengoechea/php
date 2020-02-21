<?php require_once('header.php'); ?>
<!-- <BODY> -->

<div class="main-wrapper">
  <div class="container-fluid">
    <div class="row">
      <!-- <div class="col-12 go-back">
        <a href="index.php"> <i class="material-icons">keyboard_arrow_left</i> Go to home </a>
      </div> -->
      <div class="col-12 mt-5">
        <div class="container">
          <div class="row">
            <div class="col-12">
                <h4 class="mb-3">Results of: <span class="search-results-title"></span> <b>(<span class="search-results-number"></span>)</b></h4>
            </div>

            <?php include_once('template-parts/notes-loader.php'); ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require_once('footer.php'); ?>
