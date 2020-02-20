<?php require_once('header.php'); ?>
<!-- <BODY> -->

<div class="main-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <h1 class="title main-title text-center mt-5">Log In</h1>
      </div>
      <div class="col-12">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <form class="login-form" action="app/login-processor.php" method="POST">
                <input type="email" name="login_email" placeholder="Email:" required>
                <input type="password" name="login_password" placeholder="Password:" required>
                <label>
                  Remember Me
                  <input type="checkbox" name="remember_me" value="remember">
                </label>
                <input type="submit" name="login-submit">
              </form>
            </div>
					</div>
					<div class="row">
						<div class="col-12 text-center mt-4">
							<p>
								¿ Do not you have an account yet ? <br>
								<a href="register.php">Register</a>
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
