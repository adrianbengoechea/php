<?php require_once('header.php'); ?>

<div class="main-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <h1 class="title main-title text-center mt-5">Welcome</h1>
      </div>
      <div class="col-12">
        <div class="container">
          <div class="row">
            <div class="col-12">
                <h4 class="mb-3">Here are your notes:</h4>
            </div>

            <?php include_once('template-parts/notes-loader.php'); ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require_once('footer.php'); ?>
