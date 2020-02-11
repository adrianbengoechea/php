<?php require_once('assets/template-parts/header.php'); ?>
<!-- <BODY> -->

<div class="main-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <h1 class="title main-title text-center mt-5">Register</h1>
      </div>
      <div class="col-12">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <form class="login-form" action="assets/register-processor.php" method="POST">
                <input type="email" name="login_email" placeholder="Email:" required>
                <input type="password" name="login_password" placeholder="Password:" required>
                <input type="password" name="login_confirm_password" placeholder="Confirm Password:" required>
                <input type="submit">
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
