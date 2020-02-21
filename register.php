<?php require_once('header-login.php'); ?>
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
              <form class="register-form" action="app/register-processor.php" method="POST">
                <input type="email" name="register_email" placeholder="Email:" required>
                <input type="password" name="register_password" placeholder="Password:" required>
                <input type="password" name="register_confirm_password" placeholder="Confirm Password:" required>
                <input type="submit" name="submit">
              </form>
            </div>
					</div>
					<div class="row">
						<div class="col-12 text-center mt-4">
							<p>
								¿ Do you already have an account? ? <br>
								<a href="login.php">Log In</a>
							</p>
							
						</div>
					</div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- </BODY> -->
<?php require_once('footer.php'); ?>
